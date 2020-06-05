<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once __DIR__ . '/vendor/autoload.php';

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

                // Render mPDF PDF
                if(!is_file(__DIR__ . '/result/mpdf_' . $sOutputBaseName)){
                    try{
                        $oMPdf = new \Mpdf\Mpdf();
                        $oMPdf->WriteHTML($sHtmlFileContent);
                        $oMPdf->Output(
                            'result/mpdf_' . $sOutputBaseName, 
                            false
                        );
                    }catch(Exception $e){
                        copy(__DIR__ . '/error.pdf', 'result/mpdf_' . $sOutputBaseName);
                    }
                }

                // Render typeset.sh PDF
                if(!is_file(__DIR__ . '/result/typeset_' . $sOutputBaseName)){
                    try{
                        $oTypesetPdf = typesetsh\createPdf($sHtmlFileContent);
                        $oTypesetPdf->toFile('result/typeset_' . $sOutputBaseName);
                    }catch(Exception $e){
                        copy(__DIR__ . '/error.pdf', 'result/typeset_' . $sOutputBaseName);
                    }
                }
                
                $sReadMeLine = '[' . $sFileName . '](' . str_replace([__DIR__, '.pdf'], '', $sFilePath) . ')'
                    . ' | ![](result/mpdf_' . str_replace('.pdf', '.png', $sOutputBaseName) 
                    . ') [mpdf_' . $sOutputBaseName . '](result/mpdf_' . $sOutputBaseName . ')'  
                    . ' | ![](result/typeset_' . str_replace('.pdf', '.png', $sOutputBaseName) 
                    . ') [typeset_' . $sOutputBaseName . '](result/typeset_' . $sOutputBaseName . ')' 
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

HTML File | mPDF Result | typeset.sh Result
------------ | ------------- | -------------' . PHP_EOL;
                    file_put_contents(__DIR__ . '/README.md', $sReadMeLine, FILE_APPEND);
                }

                renderPdfs($sFilePath);
            } 
        }
        
    }
    
    $sReadMe = '
# A comparison between mPDF and typeset.sh

The preview image is not always a 100% correct so please also look at the result PDFs for details.

The HTML examples are taken from the amazing [CSS Almanac by css-tricks.com](https://css-tricks.com/almanac/) and [w3schools.com](https://www.w3schools.com/).

' . PHP_EOL;

    // Clear Readme
    file_put_contents(__DIR__ . '/README.md', $sReadMe);

    // Render PDF
    renderPdfs(__DIR__ . '/html');