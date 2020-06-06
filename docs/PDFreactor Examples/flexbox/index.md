---
layout: details
title: flexbox
permalink: /PDFreactor-Examples/flexbox/
description: 
---



## 🔬 FLEXBOX

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/flexbox/flexbox.html)

<details>
    <summary>
        View FLEXBOX Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">htmL</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-keyword">@media</span> screen {
            <span class="hljs-selector-class">.flex</span> {
                <span class="hljs-attribute">width</span>: <span class="hljs-number">15cm</span>;
            }
        }
        
        <span class="hljs-keyword">@media</span> page {
            <span class="hljs-selector-class">.flex</span> {
                <span class="hljs-attribute">width</span>: auto;
            }
        }
        
        <span class="hljs-selector-class">.flex</span> {
            <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid grey;
            <span class="hljs-attribute">background-color</span>: seashell;
            <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.5cm</span>;
            <span class="hljs-attribute">display</span>: flex;
            <span class="hljs-attribute">break-before</span>: avoid;
        }
        
        <span class="hljs-selector-class">.flex</span> <span class="hljs-selector-tag">div</span> {
            <span class="hljs-attribute">margin</span>: <span class="hljs-number">0.1cm</span>;
            <span class="hljs-attribute">height</span>: <span class="hljs-number">1cm</span>;
            <span class="hljs-attribute">background-color</span>: lightgreen;
            <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid grey;
            <span class="hljs-attribute">text-align</span>: center;
            <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.2cm</span>;
            <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.8em</span>;
            <span class="hljs-attribute">font-family</span>: Courier, monospace;
        }
        
        <span class="hljs-selector-class">.grow</span> <span class="hljs-selector-tag">div</span> {
            <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>;
        }
        
        <span class="hljs-selector-class">.grow2</span> <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:nth-of-type(3)</span> {
            <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">3</span>;
        }
        
        <span class="hljs-selector-class">.alignSingle</span> <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:nth-of-type(4)</span> {
            <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">8cm</span>;
            <span class="hljs-attribute">background-color</span>: red;
        }
        
        <span class="hljs-selector-class">.rowWrap</span> {
            <span class="hljs-attribute">-ro-flow-into</span>: rowWrapRegion;
            <span class="hljs-attribute">-webkit-flow-into</span>: rowWrapRegion;
            <span class="hljs-attribute">flow-into</span>: rowWrapRegion;
        }
        
        <span class="hljs-selector-class">.fakePage</span> {
            <span class="hljs-attribute">margin</span>: <span class="hljs-number">1cm</span>;
            <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
            <span class="hljs-attribute">width</span>: <span class="hljs-number">7cm</span>;
            <span class="hljs-attribute">height</span>: <span class="hljs-number">4.5cm</span>;
            <span class="hljs-attribute">break-before</span>: avoid;
        }
        
        <span class="hljs-selector-class">.rowWrapRegion1</span>, <span class="hljs-selector-class">.rowWrapRegion2</span> {
            <span class="hljs-attribute">-ro-flow-from</span>: rowWrapRegion;
            <span class="hljs-attribute">webkit-flow-from</span>: rowWrapRegion;
            <span class="hljs-attribute">flow-from</span>: rowWrapRegion;
            <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.2cm</span>;
        }
        
        <span class="hljs-selector-class">.columnWrap</span> {
            <span class="hljs-attribute">-ro-flow-into</span>: columnWrapRegion;
            <span class="hljs-attribute">-webkit-flow-into</span>: columnWrapRegion;
            <span class="hljs-attribute">flow-into</span>: columnWrapRegion;
        }
        
        <span class="hljs-selector-class">.columnWrapRegion1</span>, <span class="hljs-selector-class">.columnWrapRegion2</span> {
            <span class="hljs-attribute">-ro-flow-from</span>: columnWrapRegion;
            <span class="hljs-attribute">webkit-flow-from</span>: columnWrapRegion;
            <span class="hljs-attribute">flow-from</span>: columnWrapRegion;
            <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.2cm</span>;
        }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
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
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Flexbox Sample<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Flexbox Sample<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Create a flexbox layout<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Flexbox layout is an easy way to arrange multiple items inside a container.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>To create a flex container, simply apply <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>display: flex<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> to the desired container.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The children of a flex container are called flex items. They will flow horizontally by default, so they will be positioned in a row:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The flow direction can be modified using the <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-direction<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> property. Setting <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-direction: column<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> will cause the flex items
            to flow vertically in a column:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-direction: column;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-direction: column"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Setting <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-direction: row-reverse<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> will cause the flex items to flow in a row in
        reverse order:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-direction: row-reverse;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-direction: row-reverse"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>As we saw in the example above, <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-direction: row-reverse<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> reverses the item order and aligns the items to the right. Let's align them to the left instead:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-direction: row-reverse; justify-content: flex-end"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If the flex items are arranged in a column, they can be aligned to the bottom of the flex container using <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>justify-content: flex-end<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-direction: column; justify-content: flex-end; height: 10cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Flex items can be centered by using both <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>align-items<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> and <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>justify-content<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-direction: row; align-items: center; justify-content: center; height: 5cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Flex items can also be justified.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    justify-content: space-between;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"justify-content: space-between;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Growing flex items<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Flex items grow to fill the row when the <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-grow<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> property is set to a positive value:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
}
.flex div {
    flex-grow: 1;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex grow"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Different values of <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-grow<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> for items in the same row cause different amounts of growth:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
}
.flex div {
    flex-grow: 1;
}
.flex div:nth-of-type(3) {
    flex-grow: 3;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex grow grow2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Wrapping flex items in rows or columns<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>You can wrap flex items in multiple rows by specifying <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-wrap: wrap<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> or <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-flow: row wrap<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>, which is a shorthand for <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-direction: row; flex-wrap: wrap<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: row wrap;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-flow: row wrap; width: 7.5cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The flow of the flex items can also be reversed:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: row-reverse wrap;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-flow: row-reverse wrap; width: 7.5cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Flex items can also be wrapped into columns:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: column wrap;
    align-content: flex-start;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex column"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-flow: column wrap; align-content: flex-start; width: 7.5cm; height: 7.5cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>When no height is set on the flex container the columns wrap at the bottom edge of the page:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: column wrap;
    align-content: flex-start;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex column"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-flow: column wrap; align-content: flex-start; width: 7.5cm;"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Flex items and pagination<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>When PDFreactor paginates documents with flex layouts, the flex items are paginated according to the wrap layout mode specified for the flex container.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If the container specifies <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-flow: row wrap<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> and a page break occurs between two rows, the rows are continued on the next page:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: row wrap;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"rowWrap"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-wrap: wrap; flex-flow: row wrap"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fakePage rowWrapRegion1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fakePage rowWrapRegion2"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If the container specifies <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>flex-flow: column wrap<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> and a page break occurs between two columns, the columns are continued on the next page:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.flex {
    display: flex;
    flex-flow: column wrap;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"columnWrap"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"flex-wrap: wrap; flex-flow: column wrap"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item A<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item B<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item C<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item D<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item E<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item F<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item G<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item H<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item I<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item J<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Item K<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fakePage columnWrapRegion1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fakePage columnWrapRegion2"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_flexbox_flexbox.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_flexbox_flexbox.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_flexbox_flexbox.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_flexbox_flexbox.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_flexbox_flexbox.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_flexbox_flexbox.html.pdf) |


