---
layout: page
title: Home
permalink: /
description: A comparison between mPDF, typeset.sh, PDFreactor, wkhtmltopdf, WeasyPrint, Prince, and Puppeteer.
---

## 👋 Hey! Nice that you are here!

On this website, I show you the rendering results of different html2pdf tools.

## 🔬 Test Sections
<div class="boxes"><a href="/CSS-Properties/">CSS Properties</a>
<a href="/CSS-Selectors/">CSS Selectors</a>
<a href="/Paged-Media/">Paged Media</a>
<a href="/Personal/">Personal</a>
<a href="/Vendor-Samples/">Vendor Samples</a>
</div>

## 🔬 Test Conditions

For all tests, each tool uses the exact same HTML and CSS input. I do not set any special options the tools might offer, instead I use the most basic call to render a PDF (with external resources).

For the rendering with Prince and PDFreactor, I use free personal licenses. That's why PDFs generated with these tools have a small logo on the top right corner of each page.

The vendor samples might contain tool-specific syntax. This syntax is not understood by the other tools. That's why some of these tests look best for the vendor providing them.

### Code to Render

I use the following code snippets to create the PDF files. If you want to see the code for this website have a look at the [GitHub Repository](https://github.com/azettl/compare.html2pdf.tools).

#### mPDF

<pre><code class="hljs php">$oMPdf = <span class="hljs-keyword">new</span> \Mpdf\Mpdf();
$oMPdf-&gt;WriteHTML($sHtmlFileContent);
$oMPdf-&gt;Output(
    <span class="hljs-string">"result/mpdf.pdf"</span>, 
    <span class="hljs-keyword">false</span>
);</code></pre>

#### typeset.sh

<pre><code class="hljs php">$resourceCache = <span class="hljs-keyword">new</span> \typesetsh\Resource\Cache(<span class="hljs-string">"./cache-dir/"</span>);
$resourceCache-&gt;downloadLimit = <span class="hljs-number">5242880</span>;

$resolveUrl = <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">($url)</span> <span class="hljs-title">use</span> <span class="hljs-params">($resourceCache)</span> </span>{
    <span class="hljs-keyword">if</span> (strpos($url, <span class="hljs-string">"http://"</span>) === <span class="hljs-number">0</span> || strpos($url, <span class="hljs-string">"https://"</span>) === <span class="hljs-number">0</span>) {
        $file = $resourceCache-&gt;fetch($url);

        <span class="hljs-keyword">return</span> $file;
    }

    <span class="hljs-keyword">throw</span> <span class="hljs-keyword">new</span> <span class="hljs-keyword">Exception</span>(<span class="hljs-string">"Access denied for local resource `$url`"</span>);
};

$oTypesetPdf = typesetsh\createPdf($sHtmlFileContent, $resolveUrl);
$oTypesetPdf-&gt;toFile(<span class="hljs-string">"result/typeset.pdf"</span>);</code></pre>

#### PDFreactor

<pre><code class="hljs php">$oPdfReactor = <span class="hljs-keyword">new</span> PDFreactor();
$aPdfReactorConfig = <span class="hljs-keyword">array</span>(
    <span class="hljs-string">"document"</span> =&gt; $sHtmlFileContent
);
file_put_contents(
    <span class="hljs-string">"result/pdfreactor.pdf"</span>, 
    $oPdfReactor-&gt;convertAsBinary($aPdfReactorConfig)
);</code></pre>

#### wkhtmltopdf

<pre><code class="hljs php">$snappy = <span class="hljs-keyword">new</span> Knp\Snappy\Pdf(<span class="hljs-string">"/usr/local/bin/wkhtmltopdf"</span>);
$snappy-&gt;generateFromHtml(
    $sHtmlFileContent, 
    <span class="hljs-string">"result/wkhtmltopdf.pdf"</span>
);</code></pre>

#### WeasyPrint

<pre><code class="hljs php">exec(<span class="hljs-string">"python -m weasyprint '$sInputHTMLFilePath' '"</span> . <span class="hljs-keyword">__DIR__</span> . <span class="hljs-string">"/result/weasyprint.pdf'"</span>, $output);</code></pre>

#### Prince

<pre><code class="hljs php">exec(<span class="hljs-string">"prince '$sInputHTMLFilePath' -o '"</span> . <span class="hljs-keyword">__DIR__</span> . <span class="hljs-string">"/result/princexml.pdf'"</span>, $output);</code></pre>