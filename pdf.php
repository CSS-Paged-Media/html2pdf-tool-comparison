<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once __DIR__ . '/vendor/autoload.php';
                    
    use com\realobjects\pdfreactor\webservice\client\PDFreactor as PDFreactor;
    use com\realobjects\pdfreactor\webservice\client\LogLevel as LogLevel;
    use com\realobjects\pdfreactor\webservice\client\ViewerPreferences as ViewerPreferences;

    use Nesk\Puphpeteer\Puppeteer;


    function highlightCode($sRawCode, $sLang = 'html'){
        try {
            $hl = new \Highlight\Highlighter();
            // Highlight some code.
            $highlighted = $hl->highlight($sLang, $sRawCode);
        
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

        return $sCode;
    }

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

                // Render Browser Screenshot
                $sPuppeteerStatus = '';
                if(!is_file(__DIR__ . '/result/browser_screenshot_' . $sOutputBaseName . '.png')){
                    $sPuppeteerStatus = 'Ok';
                    try{
                        $puppeteer = new Puppeteer;
                        $browser = $puppeteer->launch();
                        
                        $page = $browser->newPage();
                        $page->setContent($sHtmlFileContent);
                        $page->screenshot([
                            'path' => __DIR__ . '/result/browser_screenshot_' . $sOutputBaseName . '.png',
                            'fullPage' => true
                            ]);
                        /*$page->emulateMediaType('screen');
                        $page->pdf([
                            'path' => __DIR__ . '/result/puppeteer_' . $sOutputBaseName,
                            'preferCSSPageSize' => true,
                            'printBackground' => true,
                            ]);
                        */
                        $browser->close();
                    }catch(Exception $e){
                        $sPuppeteerStatus = str_replace(__DIR__, '', $e->getMessage());
                        echo $sPuppeteerStatus . '<br />';
                    }
                }

                // Render puppeteer pdf
                $sPuppeteerStatus = '';
                if(!is_file(__DIR__ . '/result/puppeteer_' . $sOutputBaseName)){
                    $sPuppeteerStatus = 'Ok';
                    try{
                        $puppeteer = new Puppeteer;
                        $browser = $puppeteer->launch();
                        
                        $page = $browser->newPage();
                        $page->setContent($sHtmlFileContent);
                        //$page->emulateMedia('screen');
                        $page->pdf([
                            'path' => __DIR__ . '/result/puppeteer_' . $sOutputBaseName,
                            'preferCSSPageSize' => true,
                            'printBackground' => true,
                            ]);
                        
                        $browser->close();
                    }catch(Exception $e){
                        $sPuppeteerStatus = str_replace(__DIR__, '', $e->getMessage());
                        echo $sPuppeteerStatus . '<br />';
                        echo __DIR__ . '/result/puppeteer_' . $sOutputBaseName . '<br />';
                    }
                }

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
                        echo $sTypesetStatus . '<br />';
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

                // Render AHFormatter
                /*$sAHFormatterStatus = '';
                if(!is_file(__DIR__ . '/result/ahformatter_' . $sOutputBaseName)){
                    $sAHFormatterStatus = 'Ok';
                    try{
                        echo '/usr/AHFormatterV70_64/run.sh -x 4 -d "' . $sFilePath . '" -o "' . __DIR__ . '/result/ahformatter_' . $sOutputBaseName . '"';
                        exec('/usr/AHFormatterV70_64/run.sh -x 4 -d "' . $sFilePath . '" -o "' . __DIR__ . '/result/ahformatter_' . $sOutputBaseName . '"', $output);
print_r($output);          
                    }catch(Exception $e){
                        $sAHFormatterStatus = str_replace(__DIR__, '', $e->getMessage());
                        copy(__DIR__ . '/error.pdf', 'result/ahformatter_' . $sOutputBaseName);
                    }
                }
                */
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
                $aCases    = ['browser_screenshot_', 'mpdf_', 'typeset_', 'pdfreactor_', 'wkhtmltopdf_', 'weasyprint_', 'princexml_', 'puppeteer_'];
                $sFromPath = __DIR__ . DIRECTORY_SEPARATOR . 'result' . DIRECTORY_SEPARATOR;
                foreach($aCases as $sCase){
                    $sSearchFor = $sOutputBaseName;
                    if($sCase == 'browser_screenshot_'){
                        $sSearchFor = $sOutputBaseName . '.png';
                    }

                    $sBaseFile    = $sFromPath . $sCase;
                    $sNewBaseFile = $sNewPath . DIRECTORY_SEPARATOR . $sCase;

                    if(!is_file($sNewBaseFile . $sSearchFor)){
                        if( 
                            copy(
                                $sBaseFile . $sSearchFor, 
                                $sNewBaseFile . $sSearchFor
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
                        $sSingleHtmlPath = 'https://raw.githubusercontent.com/CSS-Paged-Media/html2pdf-tool-comparison/master/' . str_replace([__DIR__, '.pdf', ' '], ['', '', '%20'], $sDirPath);
                        $sDownloadPath =  str_replace(['.pdf'], [''], $sDirPath);
                        $sSingleHeader = strtoupper($sSingleName);
                        $sSingleThumb = str_replace('.pdf', '.png', $sSingleOutputBaseName);
                        $sBaseFileLink = basename($sDirFileName);
                        
                        $sContentForPrintCSSLive = base64_encode(file_get_contents($sSingleHtmlPath));

                        $sSingleTemplate = <<<EOT
                        ## 🔬 $sSingleHeader
            
                        ### Input HTML & CSS

                        <div class="browser-mockup with-url">
                            <div>
                                <img src="/{{ page.path }}/../browser_screenshot_$sSingleOutputBaseName.png" alt="Browser Preview of $sSingleHeader" />
                            </div>
                        </div>
                        <p>
                            <a href="$sSingleHtmlPath" target="_blank" rel="noopener">📄 Download on GitHub</a>
                            <form method="POST" action="https://printcss.live/open" target="_blank">
                              <input type="hidden" name="css" value="" />
                              <input type="hidden" name="html" value="$sContentForPrintCSSLive" />
                              
                              <input type="submit" name="submit" value="Open on printcss.live" title="Open on printcss.live" style="background:url(https://printcss.live/img/logo.png);background-repeat:no-repeat;background-size:90%;background-position: center;color: transparent;cursor: pointer;padding: 8px;" />
                            </form>
                        </p>

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
                            <div>
                                <h4>Puppeteer</h4>
                                <img src="/{{ page.path }}/../puppeteer_$sSingleThumb" alt="Puppeteer Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../puppeteer_$sSingleOutputBaseName" target="_blank">📕 Puppeteer Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>openhtmltopdf</h4>
                                <img src="/{{ page.path }}/../openhtmltopdf_$sSingleThumb" alt="openhtmltopdf Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../openhtmltopdf_$sSingleOutputBaseName" target="_blank">📕 openhtmltopdf Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>pdfHTML (iText 7 add-on)</h4>
                                <img src="/{{ page.path }}/../itextpdfhtml_$sSingleThumb" alt="pdfHTML (iText 7 add-on) Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../itextpdfhtml_$sSingleOutputBaseName" target="_blank">📕 pdfHTML (iText 7 add-on) Output</a>
                                </p>
                            </div>
                            <div>
                                <h4>Flying Saucer</h4>
                                <img src="/{{ page.path }}/../flyingsaucer_$sSingleThumb" alt="Flying Saucer Preview" />
                                <p>
                                    <a href="/{{ page.path }}/../flyingsaucer_$sSingleOutputBaseName" target="_blank">📕 Flying Saucer Output</a>
                                </p>
                            </div>
                        </div>

                        <a href="#top" class="rocket-outer">
                            <span class="rocket">🚀</span>
                        </a>

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
        $smPDFCode = highlightCode(
            '$oMPdf = new \Mpdf\Mpdf();
$oMPdf->WriteHTML($sHtmlFileContent);
$oMPdf->Output(
    "result/mpdf.pdf", 
    false
);', 'php');

        $stypesetCode = highlightCode(
            '$resourceCache = new \typesetsh\Resource\Cache("./cache-dir/");
$resourceCache->downloadLimit = 5242880;

$resolveUrl = function($url) use ($resourceCache) {
    if (strpos($url, "http://") === 0 || strpos($url, "https://") === 0) {
        $file = $resourceCache->fetch($url);

        return $file;
    }

    throw new Exception("Access denied for local resource `$url`");
};

$oTypesetPdf = typesetsh\createPdf($sHtmlFileContent, $resolveUrl);
$oTypesetPdf->toFile("result/typeset.pdf");', 'php');

        $sPDFreactorCode = highlightCode(
            '$oPdfReactor = new PDFreactor();
$aPdfReactorConfig = array(
    "document" => $sHtmlFileContent
);
file_put_contents(
    "result/pdfreactor.pdf", 
    $oPdfReactor->convertAsBinary($aPdfReactorConfig)
);', 'php');

        $swkhtmltopdfCode = highlightCode(
            '$snappy = new Knp\Snappy\Pdf("/usr/local/bin/wkhtmltopdf");
$snappy->generateFromHtml(
    $sHtmlFileContent, 
    "result/wkhtmltopdf.pdf"
);', 'php');

        $sweasyprintCode = highlightCode(
            'exec("python -m weasyprint \'$sInputHTMLFilePath\' \'" . __DIR__ . "/result/weasyprint.pdf\'", $output);', 'php');

        $sprinceCode = highlightCode(
            'exec("prince \'$sInputHTMLFilePath\' -o \'" . __DIR__ . "/result/princexml.pdf\'", $output);', 'php');

        $sPuppeteerCode = highlightCode(
            '$puppeteer = new Puppeteer;
$browser = $puppeteer->launch();

$page = $browser->newPage();
$page->setContent($sHtmlFileContent);
//$page->emulateMedia(\'screen\');
$page->pdf([
    \'path\' => __DIR__ . \'/result/puppeteer.pdf\',
    \'preferCSSPageSize\' => true,
    \'printBackground\' => true,
    ]);

$browser->close();', 'php'
        );
        $sReadMD = <<<EOT
        ---
        layout: page
        title:  A comparison of different html2pdf tools.
        permalink: /
        description: A comparison between mPDF, typeset.sh, PDFreactor, wkhtmltopdf, WeasyPrint, Prince, and Puppeteer.
        ---

        ## 👋 Hey! Nice that you are here!

        On this website, I show you the rendering results of different html2pdf tools. I compare mPDF, typeset.sh, PDFreactor, wkhtmltopdf, WeasyPrint, Prince, and Puppeteer.

        ## 🔬 Test Sections
        $sSubPages

        ## 🔬 Test Conditions

        For all tests, each tool uses the exact same HTML and CSS input. I do not set any special options the tools might offer, instead I use the most basic call to render a PDF (with external resources).

        For the rendering with Prince and PDFreactor, I use free personal licenses. That's why PDFs generated with these tools have a small logo on the top right corner of each page.

        The vendor samples might contain tool-specific syntax. This syntax is not understood by the other tools. That's why some of these tests look best for the vendor providing them.

        ### Code to Render

        I use the following code snippets to create the PDF files. If you want to see the code for this website have a look at the [GitHub Repository](https://github.com/CSS-Paged-Media/html2pdf-tool-comparison).

        #### mPDF

        $smPDFCode
        
        #### typeset.sh
        
        $stypesetCode
        
        #### PDFreactor
        
        $sPDFreactorCode
        
        #### wkhtmltopdf
        
        $swkhtmltopdfCode
        
        #### WeasyPrint
        
        $sweasyprintCode
        
        #### Prince
        
        $sprinceCode
        
        #### Puppeteer
        
        $sPuppeteerCode
        EOT;
        echo $sReadFile;
        file_put_contents($sReadFile, $sReadMD);

        generateResultSubPages($sHtmlPath, $sRootPath);
    }

    $sHtmlPath = __DIR__ . '/html';

    // Render PDF
    renderPdfs($sHtmlPath);

  generateResultPages($sHtmlPath);