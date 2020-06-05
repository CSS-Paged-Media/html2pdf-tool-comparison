<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/vendor/pdfreactor/PDFreactor/wrappers/php/lib/PDFreactor.class.php';
                    
    use com\realobjects\pdfreactor\webservice\client\PDFreactor as PDFreactor;
    use com\realobjects\pdfreactor\webservice\client\LogLevel as LogLevel;
    use com\realobjects\pdfreactor\webservice\client\ViewerPreferences as ViewerPreferences;
    
    function renderPdfs($sTestPath){
        $aFiles = scandir($sTestPath);
    
        unset($aFiles[array_search('.', $aFiles, true)]);
        unset($aFiles[array_search('..', $aFiles, true)]);
    
        // prevent empty ordered elements
        if (count($aFiles) < 1){
            return;
        }
    
        foreach($aFiles as $sFileName){
            $sFilePath = $sTestPath . DIRECTORY_SEPARATOR . $sFileName;

            // Skip everything which is not a folder or .html file
            if(!is_dir($sFilePath) && strpos($sFileName, '.html') !== (strlen($sFileName)-5)){
                continue;
            }

            // If it is a file render the PDF
            if(is_file($sFilePath)){
                $sHtmlFileContent = file_get_contents($sFilePath);
                $sOutputBaseName  = str_replace(
                    [__DIR__, ' ', '/'], 
                    ['', '_', '_'], 
                    $sFilePath . '.pdf'
                );

                echo $sFilePath . '<br />';
                echo $sOutputBaseName . '<br />';

                // Render mPDF PDF
                $sMPdfError = '';
                if(!is_file(__DIR__ . '/result/mpdf_' . $sOutputBaseName)){
                    
                    try{
                        $oMPdf = new \Mpdf\Mpdf();
                        $oMPdf->WriteHTML($sHtmlFileContent);
                        $oMPdf->Output(
                            'result/mpdf_' . $sOutputBaseName, 
                            false
                        );
                    }catch(Exception $e){
                        $sMPdfError = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/mpdf_' . $sOutputBaseName);
                    }
                }

                // Render typeset.sh PDF
                $sTypesetError = '';
                if(!is_file(__DIR__ . '/result/typeset_' . $sOutputBaseName)){
                    
                    try{
                        $resourceCache = new \typesetsh\Resource\Cache('./cache-dir/');
                        $resourceCache->downloadLimit = 5242880;

                        $resolveUrl = function($url) use ($resourceCache) {
                            if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
                                $file = $resourceCache->fetch($url);
                        
                                return $file;
                            }
                        
                            throw new Exception("Access denied for local resource `$url`");
                        };

                        $oTypesetPdf = typesetsh\createPdf($sHtmlFileContent, $resolveUrl);
                        $oTypesetPdf->toFile('result/typeset_' . $sOutputBaseName);
                    }catch(Exception $e){
                        $sTypesetError = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/typeset_' . $sOutputBaseName);
                    }
                }

                // Render PDFreactor
                $sPdfreactorError = '';
                if(!is_file(__DIR__ . '/result/pdfreactor_' . $sOutputBaseName)){
                    try{
                        $oPdfReactor      = new PDFreactor();
                        $aPdfReactorConfig = array(
                            "document"=> $sHtmlFileContent
                        );
                        file_put_contents(
                            __DIR__ . '/result/pdfreactor_' . $sOutputBaseName, 
                            $oPdfReactor->convertAsBinary($aPdfReactorConfig)
                        );
                    }catch(Exception $e){
                        $sPdfreactorError = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/pdfreactor_' . $sOutputBaseName);
                    }
                }
                
                $sReadMeLine = '[' . $sFileName . '](' . str_replace([__DIR__, '.pdf', ' '], ['', '', '%20'], $sFilePath) . ')'
                    . ' | ![](result/mpdf_' . str_replace('.pdf', '.png', $sOutputBaseName) 
                    . ') [mpdf_' . $sOutputBaseName . '](result/mpdf_' . $sOutputBaseName . ') | ' . str_replace(PHP_EOL, '<br/>', $sMPdfError)  
                    . ' | ![](result/typeset_' . str_replace('.pdf', '.png', $sOutputBaseName) 
                    . ') [typeset_' . $sOutputBaseName . '](result/typeset_' . $sOutputBaseName . ') | ' . str_replace(PHP_EOL, '<br/>', $sTypesetError)
                    . ' | ![](result/pdfreactor_' . str_replace('.pdf', '.png', $sOutputBaseName) 
                    . ') [pdfreactor_' . $sOutputBaseName . '](result/pdfreactor_' . $sOutputBaseName . ') | ' . str_replace(PHP_EOL, '<br/>', $sPdfreactorError)
                    . PHP_EOL;
                file_put_contents(__DIR__ . '/README.md', $sReadMeLine, FILE_APPEND);
            }

            if(is_dir($sFilePath)){
                $aFilePathFiles = array_filter(scandir($sFilePath), function($item) use($sFilePath) {
                    return !is_dir($sFilePath . '/' . $item);
                });
                unset($aFilePathFiles[array_search('.', $aFilePathFiles, true)]);
                unset($aFilePathFiles[array_search('..', $aFilePathFiles, true)]);
            
                if (count($aFilePathFiles) >= 1){                
                    $sReadMeLine = '

## ' . str_replace(__DIR__, '', $sFilePath) . '

HTML File | mPDF Result | mPDF Exception | typeset.sh Result | typeset.sh Exception | PDFreactor Result | PDFreactor Exception
------------ | ------------- | ------------- | ------------- | ------------- | ------------- | -------------' . PHP_EOL;
                    file_put_contents(__DIR__ . '/README.md', $sReadMeLine, FILE_APPEND);
                }

                renderPdfs($sFilePath);
            } 
        }
        
    }
    
    $sReadMe = '
# A comparison between [mPDF](https://mpdf.github.io/), [typeset.sh](https://typeset.sh/en/), and [PDFreactor](https://www.pdfreactor.com/)

Tools | Versions
------------ | -------------
mPDF | v8.0.6
typeset.sh | 0.6.3
PDFreactor | 10.1.10722.15

📢 The preview image is not always a 100% correct so please also look at the result PDFs for details.

💖 The HTML examples are taken from the amazing [CSS Almanac by css-tricks.com](https://css-tricks.com/almanac/) and [w3schools.com](https://www.w3schools.com/).

' . PHP_EOL;

    // Clear Readme
    file_put_contents(__DIR__ . '/README.md', $sReadMe);

    // Render PDF
    renderPdfs(__DIR__ . '/html');