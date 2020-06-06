<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once __DIR__ . '/vendor/autoload.php';
                    
    use com\realobjects\pdfreactor\webservice\client\PDFreactor as PDFreactor;
    use com\realobjects\pdfreactor\webservice\client\LogLevel as LogLevel;
    use com\realobjects\pdfreactor\webservice\client\ViewerPreferences as ViewerPreferences;
    
    function renderPdfs($sTestPath){
        if(!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'result' . DIRECTORY_SEPARATOR)){
            mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'result' . DIRECTORY_SEPARATOR);
        }

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
                $sMPdfStatus = '';
                if(!is_file(__DIR__ . '/result/mpdf_' . $sOutputBaseName)){
                     
                    $sMPdfStatus = 'Ok';
                    try{
                        echo 'result/mpdf_' . $sOutputBaseName . '<br />';
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
                        echo 'result/typeset_' . $sOutputBaseName . '<br />';
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
                        echo 'result/pdfreactor_' . $sOutputBaseName . '<br />';
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

                // Render wkhtmltopdf
                $sWkhtmltopdfStatus = '';
                if(!is_file(__DIR__ . '/result/wkhtmltopdf_' . $sOutputBaseName)){
                    $sWkhtmltopdfStatus = 'Ok';
                    try{
                        echo 'result/wkhtmltopdf_' . $sOutputBaseName . '<br />';
                        $snappy = new Knp\Snappy\Pdf('/usr/local/bin/wkhtmltopdf');
                        $snappy->generateFromHtml(
                            $sHtmlFileContent, 
                            __DIR__ . '/result/wkhtmltopdf_' . $sOutputBaseName
                        );
                    }catch(Exception $e){
                        $sWkhtmltopdfStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/wkhtmltopdf_' . $sOutputBaseName);
                    }
                }
            }

            if(is_dir($sFilePath)){
                renderPdfs($sFilePath);
            } 
        }
    }

    function generateResultSubPages(string $sPath, string $sDocPath) : void {
        $aFiles = scandir($sPath);
    
        unset($aFiles[array_search('.', $aFiles, true)]);
        unset($aFiles[array_search('..', $aFiles, true)]);
    
        // prevent empty ordered elements
        if (count($aFiles) < 1){
            return;
        }
    
        foreach($aFiles as $sFileName){
            $sFilePath = $sPath . DIRECTORY_SEPARATOR . $sFileName;
            $sOutputBaseName  = str_replace(
                [__DIR__, ' ', '/'], 
                ['', '_', '_'], 
                $sFilePath . '.pdf'
            );
    
            // Skip everything which is not a folder or .html file
            if(!is_dir($sFilePath) && strpos($sFileName, '.html') !== (strlen($sFileName)-5)){
                continue;
            }

            // Load Nano and set README Table line template
            $oNano = new com\azettl\nano\template();
            $oNano->setShowEmpty(false);
            $sNewPath = str_replace(__DIR__  . DIRECTORY_SEPARATOR . 'html', $sDocPath, $sPath);
    
            if(is_file($sFilePath)){
                if(!is_dir($sNewPath)){
                    mkdir($sNewPath);
                }
                $aCases    = ['mpdf_', 'typeset_', 'pdfreactor_', 'wkhtmltopdf_'];
                $sFromPath = __DIR__ . DIRECTORY_SEPARATOR . 'result' . DIRECTORY_SEPARATOR;
                foreach($aCases as $sCase){
                    $sBaseFile    = $sFromPath . $sCase;
                    $sNewBaseFile = $sNewPath . DIRECTORY_SEPARATOR . $sCase;

                    if(!is_file($sNewBaseFile . $sOutputBaseName)){
                       /* if( 
                            copy(
                                $sBaseFile . $sOutputBaseName, 
                                $sNewBaseFile . $sOutputBaseName
                            )
                        ){
                            unlink($sBaseFile . $sOutputBaseName);
                        }*/
                    }
                }
                #rmdir($sFromPath);
            }
            
            if(is_dir($sFilePath)){
                if(!is_dir($sNewPath)){
                    mkdir($sNewPath);
                }

                $aDirFiles = scandir($sFilePath);
    
                unset($aDirFiles[array_search('.', $aDirFiles, true)]);
                unset($aDirFiles[array_search('..', $aDirFiles, true)]);
            
                // prevent empty ordered elements
                if (count($aDirFiles) < 1){
                    return;
                }

                $sSubPages = '';
                $sFiles = '';
                foreach($aDirFiles as $sDirFileName){
                    $sDirPath = $sFilePath . DIRECTORY_SEPARATOR . $sDirFileName;
                    // Skip everything which is not a folder or .html file
                    if(!is_dir($sDirPath) && strpos($sDirFileName, '.html') !== (strlen($sDirFileName)-5)){
                        continue;
                    }

                    if(is_dir($sDirPath)){
                        $sSubPages .= '
                            <a href="' . str_replace([__DIR__ . DIRECTORY_SEPARATOR . 'html', ' '], ['', '-'], $sPath) . '/' . str_replace([' '], ['-'], basename($sFilePath)) . '/' . $sDirFileName . '/">
                                ' . basename($sDirFileName) . '
                            </a>' . PHP_EOL;
                    }else{

                        $sSingleOutputBaseName  = str_replace(
                            [__DIR__, ' ', '/'], 
                            ['', '_', '_'], 
                            $sDirPath . '.pdf'
                        );
                        $sMDFileName = $sDirFileName;
                        $sSingleName = str_replace('.html', '', $sMDFileName);
                        $sSinglePath = str_replace([__DIR__ . DIRECTORY_SEPARATOR . 'html/', ' '], ['', '-'], $sPath)
                        . DIRECTORY_SEPARATOR . $sMDFileName;
                        $sSingleHtmlPath = 'https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master/' . str_replace([__DIR__, '.pdf', ' '], ['', '', '%20'], $sDirPath);
                        $sDownloadPath =  str_replace(['.pdf'], [''], $sDirPath);
                        $sSingleHeader = strtoupper($sSingleName);
                        $sSingleThumb = str_replace('.pdf', '.png', $sSingleOutputBaseName);
                        $sBaseFileLink = basename($sDirFileName);

                        $hl = new \Highlight\Highlighter();
                        $sRawCode = file_get_contents($sDownloadPath);
                        try {
                            // Highlight some code.
                            $highlighted = $hl->highlight('html', $sRawCode);
                        
                            $sCode = "<pre><code class=\"hljs {$highlighted->language}\">";
                            $sCode .= $highlighted->value;
                            $sCode .= "</code></pre>";
                        }
                        catch (DomainException $e) {
                            // This is thrown if the specified language does not exist
                        
                            $sCode = "<pre><code>";
                            $sCode .= htmlentities($sRawCode);
                            $sCode .= "</code></pre>";
                        }
                        $sSingleTemplate = <<<EOT
                        ## 🔬 $sSingleHeader
            
                        ### Input HTML & CSS

                        [📄 View Input HTML on GitHub]($sSingleHtmlPath){:target="_blank"}

                        <details>
                            <summary>
                                View $sSingleHeader Code
                            </summary>
                            $sCode
                        </details>

                        ### Output PDF
                
                        | mPDF | typeset.sh | PDFreactor | wkhtmltopdf
                        |---------|---------|---------|---------|
                        | ![mPDF Preview](mpdf_$sSingleThumb) | ![typeset Preview](typeset_$sSingleThumb) | ![PDFreactor Preview](pdfreactor_$sSingleThumb) | ![wkhtmltopdf Preview](wkhtmltopdf_$sSingleThumb) |
                        | [📕 mPDF Output](mpdf_$sSingleOutputBaseName){:target="_blank"} | [📕 typeset Output](typeset_$sSingleOutputBaseName){:target="_blank"} | [📕 PDFreactor Output](pdfreactor_$sSingleOutputBaseName){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf_$sSingleOutputBaseName){:target="_blank"} |

                        EOT;

                        $sFiles .= $sSingleTemplate . PHP_EOL;
                    }
                }

                if($sSubPages){
                    $sSubPages = '## Index' . PHP_EOL . '<div class="boxes">' . $sSubPages . '</div>';
                }

                $sLayout = 'list';
                if($sFiles){
                    $sLayout = 'details';
                }

                $oNano->setTemplate(
'---
layout: {layout}
title: {header}
permalink: {permalink}/
description: 
---

{subpages}

{files}'
                );
                
                $oNano->setData(
                    [
                        'layout' => $sLayout,
                        'header' => basename($sFilePath),
                        'subpages' => $sSubPages,
                        'permalink' => str_replace([__DIR__ . DIRECTORY_SEPARATOR . 'html', ' '], ['', '-'], $sPath)
                            . DIRECTORY_SEPARATOR . str_replace([' '], ['-'], basename($sFilePath)),
                        'files' => $sFiles
                    ]
                );
                file_put_contents(
                    $sNewPath . DIRECTORY_SEPARATOR . basename($sFilePath) . DIRECTORY_SEPARATOR . 'index.md', 
                    $oNano->render() . PHP_EOL
                );
                
                generateResultSubPages($sFilePath, $sDocPath);
            } 
        }
    }

    function generateResultPages(string $sHtmlPath) : void {
        $sBasePath = __DIR__ . DIRECTORY_SEPARATOR;
        $sRootPath = $sBasePath . 'docs' . DIRECTORY_SEPARATOR;
        $sReadFile = $sRootPath . 'index.md';
        
        $aDirFiles = scandir($sRootPath);
    
        unset($aDirFiles[array_search('.', $aDirFiles, true)]);
        unset($aDirFiles[array_search('..', $aDirFiles, true)]);
    
        // prevent empty ordered elements
        if (count($aDirFiles) < 1){
            return;
        }

        $sSubPages = '';
        foreach($aDirFiles as $sDirFileName){
            if(is_dir($sRootPath . $sDirFileName) && strpos($sDirFileName, '_') !== 0 && $sDirFileName != 'assets'){
                $sSubPages .= '<a href="' . str_replace([__DIR__ . DIRECTORY_SEPARATOR . 'html', ' '], ['', '-'], $sHtmlPath) . '/' . str_replace(' ', '-', $sDirFileName) . '/">' 
                    . basename($sDirFileName) 
                    . '</a>' . PHP_EOL;
            }
        }

        if($sSubPages){
            $sSubPages = '<div class="boxes">' . $sSubPages . '</div>';
        }

        $sReadMD = <<<EOT
        ---
        layout: page
        title: A comparison between mPDF, typeset.sh, PDFreactor, and wkhtmltopdf
        permalink: /
        description: 
        ---

        ## 🔬 Test Sections
        $sSubPages
        EOT;
        file_put_contents($sReadFile, $sReadMD);

        generateResultSubPages($sHtmlPath, $sRootPath);
    }

    $sHtmlPath = __DIR__ . '/html';

    // Render PDF
    #renderPdfs($sHtmlPath);

    generateResultPages($sHtmlPath);