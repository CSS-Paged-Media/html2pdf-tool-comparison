---
layout: details
title: compoundFormats
permalink: /PDFreactor-Examples/compoundFormats/
description: 
---

## Index
<div class="boxes">
                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/compoundFormats/mathjax/">
                                mathjax
                            </a>

                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/compoundFormats/resources/">
                                resources
                            </a>
</div>

## 🔬 COMPOUNDFORMATS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/compoundFormats/compoundFormats.html)

<details>
    <summary>
        View COMPOUNDFORMATS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span> <span class="hljs-attr">xmlns:barcode</span>=<span class="hljs-string">"http://barcode4j.krysalis.org/ns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Compound Formats Sample<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">http-equiv</span>=<span class="hljs-string">"Content-Type"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"text/html; charset=UTF-8"</span>/&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
            /***************************************************
             * Page
             ***************************************************/
            
            @page {
                margin: 1.5cm;
                
                @bottom-right {
                    content: counter(page);
                    vertical-align: top;
                    font-size: 12pt;
                    color: black;
                }
            }
            
            /* Styles that should specifically not affect browsers */
            @media print {
                .pageBreak + * {
                    break-before: page;
                    margin-top: 0;
                }
            
                .pageBreakBefore {
                    break-before: page;
                    margin-top: 0;
                }
                
                h1 {
                    break-before: page;
                    margin-top: 0 !important;
                }
            }
            
            /* Some basic style for browsers */
            @media screen {
                
                html {
                    background-color: lightgray;
                }
                
                body {
                    max-width: 1200px;
                    margin: 8px auto;
                    
                    padding: 32px;
                    padding-top: 0;
                    border: 1px solid darkgray;
                    background-color: white;
                }
                
                img {
                    max-width: 18cm;
                }
                
                h1 {
                    margin-top: 1cm !important;
                }
            }
            
            /***************************************************
             * General
             ***************************************************/
            
            html {
                font-family: arial, sans-serif;
                font-size: 10pt;
                color: #222222;
            }
            
            div, div p, blockquote {
                color: #222222;
            }
            
            h1, h2, h3, h4, h5, h6 {
                font-weight: normal;
                margin-top: 0.6cm;
                break-after: avoid;
            }
            
            h1 {
                font-size: 24pt;
                margin-bottom: 0.5cm;
            }
            
            h2 {
                font-size: 18pt;
                margin: 0.4cm 0;
            }
            
            h3 {
                font-size: 14pt;
                margin: 0.4cm 0;
            }
            
            h4 {
                font-size: 12pt;
                text-decoration: underline;
                margin-bottom: 0.25cm;
            }
            
            p, td, th, li {
                font-size: 10pt;
                line-height: 1.25;
                color: #666666;
            }
            
            p {
                text-align: justify;
            }
            
            a {
                color: #e41d03;
                text-decoration: underline;
            }
            
            barcode, math {
                color: black;
            }
            
            blockquote {
                font-family: 'times new roman', serif;
                font-style: italic;
                margin: 2mm;
                padding: 0;
            }
            
            table {
                margin-left: auto;
                margin-right: auto;
                border-collapse: collapse;
                background-color: transparent;
            }
            
            table, td, th {
                border: thin solid #e1e1e1;
            }
            
            td, th {
                padding: 0.2cm;
            }
            
            th {
                text-align: center;
                background-color: #f5f5f5;
            }
            
            
            
            
            table.code, td.code, div.code, img.sample {
                background-color: #f5f5f5;
                break-before: avoid;
            }
            
            ul, ol {
                break-inside: avoid;
            }
            
            
            
            
            /***************************************************
             * Box Classes
             ***************************************************/
            
            div.code, div.result, div.experimentalNote, img.sample {
                margin-bottom: 0.25cm;
                border: 1pt solid #e1e1e1;
                padding: 2.5mm;
                break-before: avoid;
                break-inside: avoid;
            }
            
            div.code p {
                text-align: inherit;
            }
            
            :-ro-matches(div.code, div.result) p:first-of-type {
                margin-top: 0;
            }
            
            :-ro-matches(div.code, div.result) p:last-of-type {
                margin-bottom: 0;
            }
            
            code, .code {
                font-family: 'courier new', monospace;
                font-size: 8pt;
                line-height: 1.2;
            }
            
            code {
                white-space: pre;
            }
            
            code .comment {
                color: #3f7f5f;
            }
            
            div.result {
                font-family: 'times new roman', serif;
                border: 1pt solid #222222;
                background-color: white;
            }
            
            div.result p {
                color: #222222;
            }
            
            div.result p:first-child {
                margin-top: 0;
            }
            
            div.result p:last-child {
                margin-bottom: 0;
            }
            
            div.experimentalNote {
                border-color: yellow;
                background-color: lightyellow;
                margin: 1cm 0;
                text-align: justify;
            }
            
            /***************************************************
             * Break Classes
             ***************************************************/
            
            .columnBreak {
                break-after: column;
            }
            
            /******************************************
             * Preferences
             *******************************************/
            
            @-ro-preferences {
                page-layout: 1 column;
                initial-zoom: fit-page;
            }
            <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-keyword">@page</span><span class="hljs-selector-pseudo">:first</span> {
    <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">45mm</span>;
}

<span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">break-after</span>: avoid;
}

<span class="hljs-selector-tag">body</span> &gt; <span class="hljs-selector-tag">h2</span> {
    <span class="hljs-attribute">break-before</span>: page;
    <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">15mm</span>;
    <span class="hljs-attribute">text-align</span>: center;
    <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">110mm</span>;
}

<span class="hljs-selector-class">.qrcode</span> {
    <span class="hljs-attribute">-ro-replacedelement</span>: qrcode;
    <span class="hljs-attribute">-ro-qrcode-quality</span>: high;
}

<span class="hljs-selector-class">.intro</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">4em</span>;
    <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">2em</span>;
    <span class="hljs-attribute">margin-left</span>: auto;
    <span class="hljs-attribute">margin-right</span>: auto;
    <span class="hljs-attribute">border-spacing</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">border</span>: none;
    <span class="hljs-attribute">text-align</span>: center;
    <span class="hljs-attribute">table-layout</span>: fixed;
}

<span class="hljs-selector-class">.introIcon</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">135px</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">135px</span>;
}

<span class="hljs-selector-class">.intro</span> <span class="hljs-selector-tag">td</span> {
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0px</span>;
    <span class="hljs-attribute">border</span>: none;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">8px</span> <span class="hljs-number">0px</span> <span class="hljs-number">16px</span> <span class="hljs-number">0px</span>;
    <span class="hljs-attribute">color</span>: black;
}

<span class="hljs-selector-class">.introNames</span> <span class="hljs-selector-tag">td</span> {
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">1ex</span>;
    <span class="hljs-attribute">vertical-align</span>: top;
}

<span class="hljs-selector-class">.introNames</span> <span class="hljs-selector-tag">span</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">18px</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">rgb</span>(<span class="hljs-number">49</span>,<span class="hljs-number">49</span>,<span class="hljs-number">49</span>);
}

<span class="hljs-selector-class">.introNames</span> <span class="hljs-selector-tag">span</span><span class="hljs-selector-pseudo">:nth-child(n+2)</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">7px</span>;
}

<span class="hljs-selector-class">.introNames</span> <span class="hljs-selector-tag">span</span><span class="hljs-selector-pseudo">:nth-child(n+2)</span><span class="hljs-selector-pseudo">::before</span> {
    <span class="hljs-attribute">content</span>: <span class="hljs-string">"\A"</span>;
    <span class="hljs-attribute">white-space</span>: pre;
}

<span class="hljs-selector-class">.intro</span> <span class="hljs-selector-tag">a</span> {
    <span class="hljs-attribute">color</span>: black;
}

<span class="hljs-selector-class">.barcodeTable</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">90%</span>;
    <span class="hljs-attribute">border</span>: none;
    <span class="hljs-attribute">table-layout</span>: fixed;
}

<span class="hljs-selector-class">.barcodeTable</span> * {
    <span class="hljs-attribute">border</span>: none;
    <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-class">.flexcontainer</span> {
    <span class="hljs-attribute">display</span>: flex;
    <span class="hljs-attribute">flex-flow</span>: row wrap;
    <span class="hljs-attribute">justify-content</span>: space-around;
    <span class="hljs-attribute">align-items</span>: baseline;
}

<span class="hljs-selector-class">.mathmlcontainer</span> &gt; * {
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">12mm</span> <span class="hljs-number">5mm</span>;
}

<span class="hljs-selector-class">.svgIcons</span> {
    <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-class">.svgIcons</span> &gt; <span class="hljs-selector-tag">img</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">75mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">5mm</span>;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text/x-mathjax-config"</span>&gt;</span><span class="actionscript">
            MathJax.Hub.Config({
                       jax: [<span class="hljs-string">"input/MathML"</span>, <span class="hljs-string">"output/SVG"</span>],
                extensions: [<span class="hljs-string">"mml2jax.js"</span>],
                    MathML: { extensions: [<span class="hljs-string">"content-mathml.js"</span>] },
                       SVG: { blacker: <span class="hljs-number">0</span> }
            });
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text/javascript"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"mathjax/MathJax.js"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Compound Formats Sample<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"intro pageBreak"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"qrcode introIcon"</span>&gt;</span>https://www.pdfreactor.com<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>'<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">munder</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span>lim<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-symbol">&amp;rarr;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">munder</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"introIcon"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"chart.svg"</span> /&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"introNames"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>MathML<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>using the JavaScript library<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>MathJax<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>SVG<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        
        
        <span class="hljs-comment">&lt;!-- Barcode --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This chapter shows the barcode capabilities of PDFreactor by displaying
           various types of barcodes.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>2D-Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"barcodeTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>QR Code<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.pdfreactor.com"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"qrcode"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>PDF417<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"RealObjects PDFreactor is a powerful formatting processor for converting HTML and XML documents into PDF."</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:pdf417</span> /&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>DataMatrix<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"RealObjects PDFreactor is a powerful formatting processor for converting HTML and XML documents into PDF."</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:datamatrix</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Worldwide Retail Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"barcodeTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>EAN-13<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"123456789012"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:ean-13</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>EAN-8<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567"</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:ean-8</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>GS1-128 (EAN-128)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"123456789012"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:ean-128</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">colspan</span>=<span class="hljs-string">"3"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>ITF-14:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567890123"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:itf-14</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>North America Retail Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"barcodeTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>UPC-A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"12345678901"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">barcode:upc-a</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>UPC-E:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:upc-e</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Various Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"barcodeTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Code 128<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"Hello World"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">barcode:code128</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Code 39<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"Hello World"</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:code39</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Codabar<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567890"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:codabar</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Interleaved 2 of 5<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567890"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:interleaved2of5</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Postal Barcodes<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"barcodeTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>POSTNET<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567890"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:postnet</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Royal Mail CBC<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"1234567890"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:royal-mail-cbc</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">colspan</span>=<span class="hljs-string">"2"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>USPS Intelligent Mail (4-State Customer Barcode)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode:barcode</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"12345678901234567890"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">barcode:usps4cb</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode:barcode</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- MathML --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>MathML<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This chapter displays various types of mathematical formulas, using the JavaScript library MathJax to convert MathML to SVG.
            (A reduced version of MathJax 2.7.5 is included with this sample, under the Apache License 2.0)
            MathJax can be used without changing source documents via a user-script included in the PDFreactor package.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mathmlcontainer flexcontainer"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">largeop</span>=<span class="hljs-string">'true'</span>&gt;</span><span class="hljs-symbol">&amp;int;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>dx<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>  
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;pi;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">largeop</span>=<span class="hljs-string">'true'</span>&gt;</span><span class="hljs-symbol">&amp;int;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>E<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;alpha;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;beta;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>g<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>d<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;mu;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;alpha;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">largeop</span>=<span class="hljs-string">'true'</span>&gt;</span><span class="hljs-symbol">&amp;int;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>E <span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f <span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>d<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;mu;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;beta;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">largeop</span>=<span class="hljs-string">'true'</span>&gt;</span><span class="hljs-symbol">&amp;int;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>E <span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>g<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>d<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;mu;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>A<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> ( <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>9<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>9<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> ) <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span> or <span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>A<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> [ <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>9<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>9<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> ] <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> [ <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>11<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;lambda;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22ef;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1n<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22ee;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22f1;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22ee;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>n1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22ef;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtd</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>nn<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;lambda;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtd</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> ] <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> [ <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#x22ee;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> ] <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>i<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>y<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>r<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span><span class="hljs-symbol">&amp;sum;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>t<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span><span class="hljs-symbol">&amp;sum;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>t<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span><span class="hljs-symbol">&amp;sum;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>t<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>n<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">stretchy</span>=<span class="hljs-string">"false"</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">stretchy</span>=<span class="hljs-string">"false"</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>  
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> { <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>+x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>, if <span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;#62;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>, if <span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>, if <span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;#60;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>H<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">stretchy</span>=<span class="hljs-string">"false"</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>j<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">stretchy</span>=<span class="hljs-string">"false"</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>  
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span> { <span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mtable</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span> 
                            <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>j<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;sigma;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;#60;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;sigma;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>&gt;<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">msub</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;omega;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span><span class="hljs-symbol">&amp;sigma;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msub</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mtr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">mtable</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>x<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>-<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>b<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>±<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msqrt</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>b<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                        <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>-<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>⁢<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>⁢<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>c<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msqrt</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>⁢<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                 <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>'<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">munder</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span>lim<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-symbol">&amp;rarr;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">munder</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>f<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>a<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>h<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">math</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">mstyle</span> <span class="hljs-attr">displaystyle</span>=<span class="hljs-string">"true"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span><span class="hljs-symbol">&amp;sum;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>k<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span><span class="hljs-symbol">&amp;infin;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>k<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>k<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span><span class="hljs-symbol">&amp;#8230;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>k<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">munderover</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mo</span> <span class="hljs-attr">moveablelimits</span>=<span class="hljs-string">'false'</span>&gt;</span><span class="hljs-symbol">&amp;prod;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>j<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>=<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span><span class="hljs-symbol">&amp;infin;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">munderover</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mfrac</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>j<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>(<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;minus;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">msup</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">mrow</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>j<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>+<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">msup</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span>)<span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">mrow</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">mfrac</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>, for <span class="hljs-symbol">&amp;nbsp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mi</span>&gt;</span>q<span class="hljs-tag">&lt;/<span class="hljs-name">mi</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mtext</span>&gt;</span>|<span class="hljs-tag">&lt;/<span class="hljs-name">mtext</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mo</span>&gt;</span><span class="hljs-symbol">&amp;#60;</span><span class="hljs-tag">&lt;/<span class="hljs-name">mo</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">mn</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">mn</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">mstyle</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">math</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- SVG --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Scalable Vector Graphics<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This chapter shows the SVG capabilities of PDFreactor by displaying
           various types of scalable vector graphics.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"svgIcons"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"chart.svg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"svgIcon"</span> /&gt;</span>
           <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"triangle.svg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"svgIcon"</span> /&gt;</span>
           <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"mainframe.svg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"svgIcon"</span> /&gt;</span>
           <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"sticker.svg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"svgIcon"</span> /&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
           
        <span class="hljs-comment">&lt;!--  PDF Images --&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>PDF Images<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This chapter shows that PDFreactor can automatically embed other PDFs as images. Any page from the PDF can be displayed as an image,
        in this case we are displaying the second page.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"resources/magazine.pdf"</span>
                <span class="hljs-attr">style</span>=<span class="hljs-string">"width: 50%; -ro-source-page: 2"</span> /&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_PDFreactor_Examples_compoundFormats_compoundFormats.html.pdf) |


