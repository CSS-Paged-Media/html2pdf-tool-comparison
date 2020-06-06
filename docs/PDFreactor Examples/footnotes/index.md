---
layout: details
title: footnotes
permalink: /PDFreactor-Examples/footnotes/
description: 
---



## 🔬 FOOTNOTES

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/footnotes/footnotes.html)

<details>
    <summary>
        View FOOTNOTES Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"text/html; charset=UTF-8"</span> <span class="hljs-attr">http-equiv</span>=<span class="hljs-string">"Content-Type"</span>/&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Footnotes Sample<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
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
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"stylesheet"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text/css"</span>&gt;</span><span class="css">
            <span class="hljs-keyword">@page</span> {
                <span class="hljs-attribute">counter-reset</span>: footnote;
            }
            
            <span class="hljs-keyword">@media</span> print {
                <span class="hljs-selector-class">.footnote</span> {
                    <span class="hljs-attribute">float</span>: footnote;
                }
                
                <span class="hljs-selector-class">.asterisksfootnote</span> {
                    <span class="hljs-attribute">float</span>: footnote;
                }
                
                <span class="hljs-selector-class">.asterisksfootnote</span><span class="hljs-selector-pseudo">::footnote-call</span> {
                    <span class="hljs-attribute">content</span>: <span class="hljs-built_in">counter</span>(footnote, asterisks)
                }
                
                <span class="hljs-selector-class">.asterisksfootnote</span><span class="hljs-selector-pseudo">::footnote-marker</span> {
                    <span class="hljs-attribute">content</span>: <span class="hljs-built_in">counter</span>(footnote, asterisks) <span class="hljs-string">" "</span>;
                }
            }
            
            <span class="hljs-keyword">@media</span> screen {
                <span class="hljs-selector-class">.footnote</span> {
                    <span class="hljs-attribute">display</span>: none;
                }
                
                <span class="hljs-selector-class">.classicfootnote</span> {
                    <span class="hljs-attribute">display</span>: none;
                }
            }
            
            <span class="hljs-selector-tag">p</span> {
                <span class="hljs-attribute">break-inside</span>: avoid;
            }
            
            <span class="hljs-selector-tag">hr</span> {
                <span class="hljs-attribute">margin</span>: <span class="hljs-number">0pt</span> <span class="hljs-number">14%</span> <span class="hljs-number">25pt</span>;
            }
            
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Footnotes Sample<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
                
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Introduction<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Footnotes are used in print layouts to move a note or reference out of the main content with the objective of increasing 
        readability. Typically footnotes are placed at the bottom of a page and flagged with a superscript number followed by the text 
        of the footnote.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The following is an illustration showing how two footnotes on a page could look like:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            This text<span class="hljs-tag">&lt;<span class="hljs-name">sup</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">sup</span>&gt;</span> is marked with two footnotes<span class="hljs-tag">&lt;<span class="hljs-name">sup</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">sup</span>&gt;</span>.<span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            ...<span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            ----<span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">sup</span>&gt;</span>1 <span class="hljs-tag">&lt;/<span class="hljs-name">sup</span>&gt;</span>This is the first footnote.
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">sup</span>&gt;</span>2 <span class="hljs-tag">&lt;/<span class="hljs-name">sup</span>&gt;</span>And this is the second footnote.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>And this is the same document fragment realized using CSS:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            This text<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footnote"</span>&gt;</span>This is the first footnote.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> is marked with two footnotes<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footnote"</span>&gt;</span>And this is the second footnote.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Both footnotes are placed inside the footnote area at the bottom of this page.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>How to Create Footnotes Using CSS<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In XHTML, transforming an element into a footnote can be achieved using only one style:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.footnote {
    float: <span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>footnote<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span>;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This rule declares all elements with the class "footnote" to be floated boxes of the type "footnote". Such boxes will be 
        automatically moved to the footnote area which will be discussed in the following chapter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>The Footnote Area<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The footnote area is the area on each page where all footnotes will be placed. It is usually located at the bottom of the page. 
        Every page can have a footnote area, however if there are no footnotes on a page, the footnote area will be left out to increase 
        the available space for the main content of the document.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In CSS, a footnote area represents a page area. Such areas can be addressed by so-called at-rules ("@" followed by the name of 
        the area). Thus a footnote area can be addressed by the following at-rule:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>@page {
    <span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>@footnote<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span> {
        border: none;
    }
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This at-rule disables the border of all footnote areas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Footnote Calls and Markers<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>When a document is laid out and the layout engine reaches a position inside the main text at which a note should occur, a 
        so-called "footnote call" is placed at this position. The footnote text of the current note is inserted into the footnote area 
        of the current page and a so-called "footnote marker", which obtains the same value as the call, is placed before this text.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In CSS terminology footnote calls and markers are pseudo elements which can be addressed using pseudo element declarations. 
        The following example demonstrates, how to change the appearance of calls and markers:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.asterisksfootnote::footnote-call {
    content: counter(footnote, asterisks)
}

.asterisksfootnote::footnote-marker {
    content: counter(footnote, asterisks) " "
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The result looks like this:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            This text<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"asterisksfootnote"</span>&gt;</span>This is the first footnote.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> is marked with two footnotes<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"asterisksfootnote"</span>&gt;</span>And this is the second footnote.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Numbering of Footnotes<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The numbering of footnotes is realized by a predefined CSS counter named "footnote". By default, footnotes are numbered 
        continuously throughout the document. Restarting the numbering on every page can be accomplished using the following style:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>@page {
    counter-reset: footnote;
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This rule is also used inside this document to force footnote numbering on a per page basis.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_footnotes_footnotes.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_footnotes_footnotes.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_footnotes_footnotes.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_footnotes_footnotes.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_footnotes_footnotes.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_footnotes_footnotes.html.pdf) |


