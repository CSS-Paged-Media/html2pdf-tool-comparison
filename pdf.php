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
                $sMPdfStatus = '';
                if(!is_file(__DIR__ . '/result/mpdf_' . $sOutputBaseName)){
                    $sMPdfStatus = 'Ok';
                    try{
                        $oMPdf = new \Mpdf\Mpdf();
                        $oMPdf->WriteHTML($sHtmlFileContent);
                        $oMPdf->Output(
                            'result/mpdf_' . $sOutputBaseName, 
                            false
                        );
                    }catch(Exception $e){
                        $sMPdfStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/mpdf_' . $sOutputBaseName);
                    }
                }

                // Render typeset.sh PDF
                $sTypesetStatus = '';
                if(!is_file(__DIR__ . '/result/typeset_' . $sOutputBaseName)){
                    $sTypesetStatus = 'Ok';
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
                        $sTypesetStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/typeset_' . $sOutputBaseName);
                    }
                }

                // Render PDFreactor
                $sPdfreactorStatus = '';
                if(!is_file(__DIR__ . '/result/pdfreactor_' . $sOutputBaseName)){
                    $sPdfreactorStatus = 'Ok';
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
                        $sPdfreactorStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/pdfreactor_' . $sOutputBaseName);
                    }
                }
        
                // Load Nano and set README Table line template
                $oNano = new com\azettl\nano\template();
                $oNano->setTemplate(
                    '[{filename}]({filepath}) | ![](result/mpdf_{thumb}) [mpdf_{outputname}](result/mpdf_{outputname}) | {status.mpdf} | ![](result/typeset_{thumb}) [typeset_{outputname}](result/typeset_{outputname}) | {status.typeset} | ![](result/pdfreactor_{thumb}) [pdfreactor_{outputname}](result/pdfreactor_{outputname}) | {status.pdfreactor}{newline}'
                );
                $oNano->setShowEmpty(false);
                
                $oNano->setData(
                    [
                        'filename' => $sFileName,
                        'outputname' => $sOutputBaseName,
                        'thumb' => str_replace('.pdf', '.png', $sOutputBaseName),
                        'filepath' => str_replace([__DIR__, '.pdf', ' '], ['', '', '%20'], $sFilePath),
                        'status' => [
                            'mpdf' => str_replace(PHP_EOL, '<br/>', $sMPdfStatus),
                            'typeset' => str_replace(PHP_EOL, '<br/>', $sTypesetStatus),
                            'pdfreactor' => str_replace(PHP_EOL, '<br/>', $sPdfreactorStatus)
                        ],
                        'newline' => PHP_EOL
                    ]
                );
                $sReadMeLine = $oNano->render();
                file_put_contents(__DIR__ . '/README.md', $sReadMeLine . PHP_EOL, FILE_APPEND);
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

HTML File | mPDF Result | mPDF Render Status | typeset.sh Result | typeset.sh Render Status | PDFreactor Result | PDFreactor Render Status
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

💖 The HTML examples are taken from the amazing [CSS Almanac by css-tricks.com](https://css-tricks.com/almanac/), [developer.mozilla.org](https://developer.mozilla.org/en-US/docs/Web/CSS/), and [w3schools.com](https://www.w3schools.com/).

' . PHP_EOL;

    // Clear Readme
    file_put_contents(__DIR__ . '/README.md', $sReadMe);

    // Render PDF
    renderPdfs(__DIR__ . '/html');