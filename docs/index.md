---
layout: page
title: Home
permalink: /
description: A comparison between mPDF, typeset.sh, PDFreactor, wkhtmltopdf, WeasyPrint, and Prince.
---

## 👋 Hey! Nice that you are here!

On this website, I show you the rendering results of different html2pdf tools.

## 🔬 Test Sections
<div class="boxes"><a href="/CSS-Properties/">CSS Properties</a>
<a href="/CSS-Selectors/">CSS Selectors</a>
<a href="/Paged-Media/">Paged Media</a>
<a href="/Vendor-Samples/">Vendor Samples</a>
</div>

## 🔬 Test Conditions

For all tests, each tool uses the exact same HTML and CSS input. I do not set any special options the tools might offer, instead I use the most basic call to render a PDF (with external resources).

For the rendering with Prince and PDFreactor, I use free personal licenses. That's why PDFs generated with these tools have a small logo on the top right corner of each page.

The vendor samples might contain tool-specific syntax. This syntax is not understood by the other tools. That's why some of these tests look best for the vendor providing them.

### Code to Render

I use the following code snippets to create the PDF files. If you want to see the code for this website have a look at the [GitHub Repository](https://github.com/azettl/compare.html2pdf.tools).

#### mPDF

<pre><code class="hljs xml">$oMPdf = new \Mpdf\Mpdf();
$oMPdf-&gt;WriteHTML($sHtmlFileContent);
$oMPdf-&gt;Output(
    "result/mpdf.pdf", 
    false
);</code></pre>

#### typeset.sh

<pre><code class="hljs xml">$resourceCache = new \typesetsh\Resource\Cache("./cache-dir/");
$resourceCache-&gt;downloadLimit = 5242880;

$resolveUrl = function($url) use ($resourceCache) {
    if (strpos($url, "http://") === 0 || strpos($url, "https://") === 0) {
        $file = $resourceCache-&gt;fetch($url);

        return $file;
    }

    throw new Exception("Access denied for local resource `$url`");
};

$oTypesetPdf = typesetsh\createPdf($sHtmlFileContent, $resolveUrl);
$oTypesetPdf-&gt;toFile("result/typeset.pdf");</code></pre>

#### PDFreactor

<pre><code class="hljs xml">$oPdfReactor = new PDFreactor();
$aPdfReactorConfig = array(
    "document" =&gt; $sHtmlFileContent
);
file_put_contents(
    "result/pdfreactor.pdf", 
    $oPdfReactor-&gt;convertAsBinary($aPdfReactorConfig)
);</code></pre>

#### wkhtmltopdf

<pre><code class="hljs xml">$snappy = new Knp\Snappy\Pdf("/usr/local/bin/wkhtmltopdf");
$snappy-&gt;generateFromHtml(
    $sHtmlFileContent, 
    "result/wkhtmltopdf.pdf"
);</code></pre>

#### WeasyPrint

<pre><code class="hljs xml">exec("python -m weasyprint '$sInputHTMLFilePath' '" . __DIR__ . "/result/weasyprint.pdf'", $output);</code></pre>

#### Prince

<pre><code class="hljs xml">exec("prince '$sInputHTMLFilePath' -o '" . __DIR__ . "/result/princexml.pdf'", $output);</code></pre>