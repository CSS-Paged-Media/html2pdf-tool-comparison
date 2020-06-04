<?php
    require_once __DIR__ . '/vendor/autoload.php';

    function renderPdfs($sTestPath){
        $sReadMe = '
# A comparison between mPDF and typeset.sh

HTML File | mPDF Result | typeset.sh Result
------------ | ------------- | -------------' . PHP_EOL;

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
                $sOutputBaseName  = $sFileName . '.pdf';

                // Render mPDF PDF
                $oMPdf = new \Mpdf\Mpdf();
                $oMPdf->WriteHTML($sHtmlFileContent);
                $oMPdf->Output(
                    'result/mpdf_' . $sOutputBaseName, 
                    false
                );

                // Render typeset.sh PDF
                $oTypesetPdf = typesetsh\createPdf($sHtmlFileContent);
                $oTypesetPdf->toFile('result/typeset_' . $sOutputBaseName);

                
                $sReadMe .= '[' . $sFileName . '](html/' . $sFileName . ')'
                    . ' | [mpdf_' . $sOutputBaseName . '](result/mpdf_' . $sOutputBaseName . ')'  
                    . ' | [typeset_' . $sOutputBaseName . '](result/typeset_' . $sOutputBaseName . ')' 
                    . PHP_EOL;
            }

            file_put_contents(__DIR__ . '/README.md', $sReadMe);

            if(is_dir($sFilePath)){
                renderPdfs($sFilePath);
            } 
        }
    }
    
    renderPdfs(__DIR__ . '/html/');