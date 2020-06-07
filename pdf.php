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

                // Render weasyprint
                $sWeasyprintStatus = '';
                if(!is_file(__DIR__ . '/result/weasyprint_' . $sOutputBaseName)){
                    $sWeasyprintStatus = 'Ok';
                    try{
                        echo 'python -m weasyprint "' . $sFilePath . '" "' . __DIR__ . '/result/weasyprint_' . $sOutputBaseName . '"<br />';
                        exec('python -m weasyprint "' . $sFilePath . '" "' . __DIR__ . '/result/weasyprint_' . $sOutputBaseName . '"', $output);
                    }catch(Exception $e){
                        $sWeasyprintStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/weasyprint_' . $sOutputBaseName);
                    }
                }

                // Render princexml
                $sPrincexmlStatus = '';
                if(!is_file(__DIR__ . '/result/princexml_' . $sOutputBaseName)){
                    $sPrincexmlStatus = 'Ok';
                    try{
                        echo 'prince "' . $sFilePath . '" -o "' . __DIR__ . '/result/princexml_' . $sOutputBaseName . '"';
                        exec('prince "' . $sFilePath . '" -o "' . __DIR__ . '/result/princexml_' . $sOutputBaseName . '"', $output);
                    }catch(Exception $e){
                        $sPrincexmlStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/princexml_' . $sOutputBaseName);
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
                $aCases    = ['mpdf_', 'typeset_', 'pdfreactor_', 'wkhtmltopdf_', 'weasyprint_', 'princexml_'];
                $sFromPath = __DIR__ . DIRECTORY_SEPARATOR . 'result' . DIRECTORY_SEPARATOR;
                foreach($aCases as $sCase){
                    $sBaseFile    = $sFromPath . $sCase;
                    $sNewBaseFile = $sNewPath . DIRECTORY_SEPARATOR . $sCase;

                    if(!is_file($sNewBaseFile . $sOutputBaseName)){
                        if( 
                            copy(
                                $sBaseFile . $sOutputBaseName, 
                                $sNewBaseFile . $sOutputBaseName
                            )
                        ){
                            #unlink($sBaseFile . $sOutputBaseName);
                        }
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
                            <a href="' . str_replace([__DIR__ . DIRECTORY_SEPARATOR . 'html', ' '], ['', '-'], $sPath) . '/' . str_replace([' '], ['-'], basename($sFilePath)) . '/' . str_replace([' '], ['-'], $sDirFileName) . '/">
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

                        <details>
                            <summary>
                                View $sSingleHeader Code
                            </summary>
                            $sCode
                            <p>
                                <a href="$sSingleHtmlPath" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
                            </p>
                        </details>

                        ### Output PDF
                
                        <div class="details-boxes">
                            <div>
                                <h4>mPDF</h4>
                                <img src="/{{ page.path }}/../mpdf_$sSingleThumb" alt="mPDF Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../mpdf_$sSingleOutputBaseName" target="_blank">📕 mPDF Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>typeset.sh</h4>
                                <img src="/{{ page.path }}/../typeset_$sSingleThumb" alt="typeset Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../typeset_$sSingleOutputBaseName" target="_blank">📕 typeset Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>PDFreactor</h4>
                                <img src="/{{ page.path }}/../pdfreactor_$sSingleThumb" alt="PDFreactor Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../pdfreactor_$sSingleOutputBaseName" target="_blank">📕 PDFreactor Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>wkhtmltopdf</h4>
                                <img src="/{{ page.path }}/../wkhtmltopdf_$sSingleThumb" alt="wkhtmltopdf Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../wkhtmltopdf_$sSingleOutputBaseName" target="_blank">📕 wkhtmltopdf Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>WeasyPrint</h4>
                                <img src="/{{ page.path }}/../weasyprint_$sSingleThumb" alt="WeasyPrint Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../weasyprint_$sSingleOutputBaseName" target="_blank">📕 WeasyPrint Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>Prince</h4>
                                <img src="/{{ page.path }}/../princexml_$sSingleThumb" alt="Prince Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../princexml_$sSingleOutputBaseName" target="_blank">📕 Prince Output</a>
                                </p>
                            </div>
                        </div>

                        EOT;

                        $sFiles .= $sSingleTemplate . PHP_EOL;
                    }
                }

                if($sSubPages){
                    $sSubPages = '## 📑 Index' . PHP_EOL . '<div class="boxes">' . $sSubPages . '</div>';
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
description: Test Section \'{header}\' to compare different html2pdf tools.
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
        title: Home
        permalink: /
        description: A comparison between mPDF, typeset.sh, PDFreactor, wkhtmltopdf, WeasyPrint, and Prince.
        ---

        ## 👋 Hey! Nice that you are here!

        On this website, I show you the rendering results of different html2pdf tools.

        ## 🔬 Test Sections
        $sSubPages
        EOT;
        file_put_contents($sReadFile, $sReadMD);

        generateResultSubPages($sHtmlPath, $sRootPath);
    }

    $sHtmlPath = __DIR__ . '/html';

    // Render PDF
    renderPdfs($sHtmlPath);

    generateResultPages($sHtmlPath);