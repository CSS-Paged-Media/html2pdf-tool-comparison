---
layout: details
title: i18n
permalink: /PDFreactor-Examples/i18n/
description: 
---



## 🔬 I18N-SAMPLE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/i18n/i18n-sample.html)

<details>
    <summary>
        View I18N-SAMPLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"text/html; charset=UTF-8"</span> <span class="hljs-attr">http-equiv</span>=<span class="hljs-string">"Content-Type"</span>/&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>International Sample<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
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
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
            <span class="hljs-selector-tag">html</span> {
                <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'arial unicode ms'</span>, arial, sans-serif;
            }
            
            <span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.result</span> {
                <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'times new roman'</span>, serif, <span class="hljs-string">'arial unicode ms'</span>;
            }
            
            <span class="hljs-selector-class">.rtl</span> {
                <span class="hljs-attribute">direction</span>: rtl;
            }
            
            <span class="hljs-selector-class">.ltr</span> {
                <span class="hljs-attribute">direction</span>: ltr;
            }
            
            <span class="hljs-selector-class">.forcertl</span> {
                <span class="hljs-attribute">unicode-bidi</span>: bidi-override;
                <span class="hljs-attribute">direction</span>: rtl;
            }
            
            <span class="hljs-selector-class">.samplediv</span> {
                <span class="hljs-attribute">break-inside</span>: avoid;
            }
            
            <span class="hljs-selector-tag">ol</span> {
                <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">1cm</span>;
            }
            
            <span class="hljs-selector-class">.listItemColumns</span> {
                <span class="hljs-attribute">-webkit-column-count</span>: <span class="hljs-number">2</span>;
                <span class="hljs-attribute">-moz-column-count</span>: <span class="hljs-number">2</span>;
                <span class="hljs-attribute">column-count</span>: <span class="hljs-number">2</span>;
            }
            
            <span class="hljs-selector-class">.listItemColumns</span> &gt; <span class="hljs-selector-tag">ol</span> {
                <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">0</span>;
            }
            
            <span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.result</span> <span class="hljs-selector-tag">p</span> {
                <span class="hljs-attribute">font-size</span>: <span class="hljs-number">9pt</span>;
            }
            
            <span class="hljs-selector-class">.logicalsample</span> {
                <span class="hljs-attribute">position</span>: relative;
                <span class="hljs-attribute">unicode-bidi</span>: bidi-override;
                <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">2em</span>;
                
                <span class="hljs-attribute">border</span>: <span class="hljs-number">1pt</span> none darkgrey;
                <span class="hljs-attribute">border-top-style</span>: solid;
                <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">0.5em</span>;
                <span class="hljs-attribute">border-inline-start-style</span>: solid;
                <span class="hljs-attribute">padding-inline-start</span>: <span class="hljs-number">1em</span>;
            }
            
            <span class="hljs-selector-class">.logicalsample</span><span class="hljs-selector-pseudo">::before</span> {
                <span class="hljs-attribute">content</span>: <span class="hljs-string">""</span>;
                <span class="hljs-attribute">display</span>: block;
                <span class="hljs-attribute">width</span>: <span class="hljs-number">7em</span>;
                <span class="hljs-attribute">height</span>: <span class="hljs-number">8em</span>;
                <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">radial-gradient</span>(ellipse, darkgrey <span class="hljs-number">0%</span>, white <span class="hljs-number">70%</span>);
                
                <span class="hljs-attribute">float</span>: inline-end;
                <span class="hljs-attribute">margin</span>: <span class="hljs-number">1.5em</span> <span class="hljs-number">0</span>;
                <span class="hljs-attribute">margin-inline-start</span>: <span class="hljs-number">1em</span>;
            }
            
            <span class="hljs-selector-class">.logicalsample</span><span class="hljs-selector-pseudo">::after</span> {
                <span class="hljs-attribute">content</span>: <span class="hljs-string">"Title"</span>;
                <span class="hljs-attribute">background-color</span>: darkgrey;
                <span class="hljs-attribute">color</span>: white;
                <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.1em</span> <span class="hljs-number">0.5em</span>;
                
                <span class="hljs-attribute">position</span>: absolute;
                <span class="hljs-attribute">top</span>: -<span class="hljs-number">1em</span>;
                <span class="hljs-attribute">inset-inline-start</span>: <span class="hljs-number">2em</span>;
            }
            
            <span class="hljs-keyword">@-ro-preferences</span> {
                <span class="hljs-selector-tag">initial-zoom</span>: 125%;
            }
    </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>International Sample<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Unicode<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The following sections contain text from various languages using many different kinds of writing systems.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This sample contains unicode characters that may not be available in the font used to display the document.
            PDFreactor tries to find a replacement for these characters in defined fall-back fonts. If these fonts do
            not contain the character or the fall-back fonts are not available the characters cannot be displayed.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Arabic<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result rtl"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>نص حكيم له سر قاطع وذو شأن عظيم مكتوب على ثوب أخضر ومغلف بجلد أزرق.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A wise text which has an absolute secret and great importance, written on a green cloth and covered with blue
            leather.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Chinese<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>視野無限廣，窗外有藍天<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The view is infinitely wide. There is blue sky outside the window.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Danish<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Quizdeltagerne spiste jordbær med fløde, mens cirkusklovnen Walther spillede på xylofon.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The quiz contestants ate strawberry with cream while Walter the circus clown played the xylophone.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>German<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Victor chases twelve boxers across the great dam of Sylt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Greek<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Θέλει αρετή και τόλμη η ελευθερία. (Ανδρέας Κάλβος)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Liberty requires virtue and mettle. (Andreas Kalvos)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Hebrew<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result rtl"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>דג סקרן שט לו בים זך אך לפתע פגש חבורה נחמדה שצצה כך.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A curious fish sailed a clear sea, and suddenly found nice company that just popped up.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Japanese<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせす<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Even the blossoming flowers / Will eventually scatter / Who in this world / is unchanging? / The deep
            mountains of vanity-- / We cross them today / And we shall not see superficial dreams / Nor be deluded.
            (from Iroha-uta)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Polish<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Pchnąć w tę łódź jeża lub ośm skrzyń fig.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Push into this boat a hedgehog or eight boxes of figs.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Russian<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Съешь ещё этих мягких французских булок да выпей же чаю.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Eat some more of these soft French buns and drink some tea.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pageBreak"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Demonstration of Bi-Directional text (BiDi) using Left-to-right and Right-to-left languages<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Different languages can use different writing systems. In European cultures or cultures influenced by
            European ones, the direction in writing systems is usually from left to right. This is the case in Latin,
            German or English, for example. Other languages, especially semitic ones like Arabic, Persian or Hebrew, are
            written from right to left. Bidirectional script support offers the possibility to display text written in
            different directions.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Using the CSS property "direction", the base direction of a certain element can be set to "ltr" or "rtl",
                e.g.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span> .ltr { direction: ltr; } <span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In addition, using "unicode-bidi: bidi-override;" will override the base direction for a certain
                element:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span> .forcertl { direction: rtl; unicode-bidi: bidi-override; } <span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Example: Demonstration of alternating text direction by setting the direction for the second line to
            right-to-left.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This text is demonstrating the BiDi capabilities of PDFreactor,<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"forcertl"</span>&gt;</span>by overriding the base direction and using right-to-left for this line.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The logical order (order in which the characters are stored in the document) of the second line of this
            example is:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span>&gt;</span>"by overriding the base direction and using right-to-left for this line"<span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>However, visually, the order is as follows:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span>&gt;</span>"enil siht rof tfel-ot-thgir gnisu dna noitcerid esab eht gnidirrevo yb"<span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>When text from different writing systems is used in one paragraph, the separate characters will keep their
            base direction if not otherwise defined. Characters originated from left-to-right or right-to-left languages
            respectively have the corresponding predefined order that can only be overriden by using the style
            "unicode-bidi: bidi-override;".<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Right-to-left text inside left-to-right sections will be displayed as follows:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>english CIBARA text<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Upper-case letters represent Arabic text while lower-case letters represent English text. The logical
                order of this text would be:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>"english ARABIC text"<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The following samples demonstrate the difference between left-to-right and right-to-left languages. The base
            direction for the separate sections are defined corresponding to their language. English words and
            abbreviations in right-to-left sections are displayed correctly although the base direction is not
            overridden for them which proves the predefined direction for characters.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The text excerpts are taken from the original English and the translated Arabic and Hebrew versions of the
            W3C document "XML in 10 Points".<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- Original text "XML in 10 Points" and its translations under W3C document license, Copyright � World Wide Web Consortium. 
        All Rights Reserved. http://www.w3.org/Consortium/Legal/2002/copyright- documents- 20021231 --&gt;</span><span class="hljs-comment">&lt;!-- excerpt from English original text, available at: http://www.w3.org/XML/1999/XML- in- 10- points.html.en --&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Left-to-right sample - English text excerpt:<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ltr"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>5. XML is a family of technologies<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ltr"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>XML 1.0 is the specification that defines what "tags" and "attributes" are.
                    Beyond XML 1.0, "the XML family" is a growing set of modules that offer useful services to
                    accomplish important and frequently demanded tasks. XLink describes a standard way to add hyperlinks
                    to an XML file. XPointer is a syntax in development for pointing to parts of an XML document. An
                    XPointer is a bit like a URL, but instead of pointing to documents on the Web, it points to pieces
                    of data inside an XML file. CSS, the style sheet language, is applicable to XML as it is to HTML.
                    XSL is the advanced language for expressing style sheets. It is based on XSLT, a transformation
                    language used for rearranging, adding and deleting tags and attributes. The DOM is a standard set of
                    function calls for manipulating XML (and HTML) files from a programming language. XML Schemas 1 and
                    2 help developers to precisely define the structures of their own XML-based formats. There are
                    several more modules and tools available or under development. Keep an eye on W3C's technical
                    reports page.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- excerpt from Arabic translated version, available at: http://www.w3c.org.ma/XML/XML- in- 10- points.ar.html --&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Right-to-left sample - Arabic text excerpt:<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"rtl"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"ar-SA"</span>&gt;</span>5. إكس إم إل مجموعة تكنولوجيّات<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"rtl"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"ar-SA"</span>&gt;</span>XML 1.0 هي المواصفات التي تعرِّف ماذا تكون "العلامات" و "الصّفات" . حول تلك
                    المواصفات هناك مجموعة متنامية من الوحدات التي تَعرِض خدمات مفيدة لإنجاز مهام كثيرة الطلب وهامّة .
                    Xlink يصف طريقة رسمية لإضافة وُصلة رابطة لملفّ إكس إم إل. XPointer و XFragments قواعد تركيب نحوية
                    للإشارة إلى أجزاء من وثيقة إكس إم إل. إشارة XPointer تتشابه مع إشارة URL ، لكنّ بدلاً من الإشارة إلى
                    الوثائق على الويب ، تشير الى قطعٍ صغيرةٍ من البيانات داخل ملفّ إكس إم إل . CSS، لغة النمط والأسلوب،
                    تنطبق على إكس إم إل كما تنطبق على إتش تي إم إل . XSL هي اللّغة المتقدّمة للتّعبير عن النّمط والأسلوب
                    . أساسها XSLT، لغة تَحوُّل استُخْدِمت لإعادة ترتيب أو لإضافة أو لحذف علامات او صفات. DOM هي مجموعة
                    رسمية لاستدعاءات الوظائف من أجل استغلال ملفّات إكس إم إل (او إتش تي إم إل) و ذلك من داخل لغة برمجة.
                    مخطّطات إكس إم إل 1 و 2 (XML Schemas 1 and 2) تساعد المطورين بأن يُعرِّفوا بدقّة هياكل أشكالهم
                    الشّخصية المؤسّسة على لغة إكس إم . هناك عدة وحدات و أدوات متاحة أو تحت التطوير. أنظر إلى صفحة تقارير
                    W3C التّقنية.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- excerpt from Hebrew translated version, available at: http://www.w3c.org.il/article/xml10pts --&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Right-to-left sample - Hebrew text excerpt:<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"rtl"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"he-IL"</span>&gt;</span>5. XML הוא משפחה של טכנולוגיות<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"rtl"</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"he-IL"</span>&gt;</span>XML1.0 הנו מפרט שמגדיר מהם "תגיות" ו"תכוניות". מעבר לכך "משפחת XML" הינה
                    מערך מודולים ההולך ומתרחב המציעים שירותים שמושיים כדי לבצע משימות חשובות ותכופות. Xlink מתאר כיצד
                    להוסיף קישורים לקובץ XML. XPointer ו- Xfragments הינם מודולים בפיתוח כדי לאפשר מצביעים בתוך מסמך
                    XML. ה- XPointer הנו מעין URL, אך במקום להצביע על מסמכים ברשת, הוא מצביע על פיסת מידע בתוך הקובץ
                    XML. CSS, שפה לעיצוב גליונות, זמינה ב- XML בדומה ל- HTML. XSL הינה שפה מתקדמת לעיצוב גליונות. השפה
                    מבוססת על XSLT, שפה המשמשת לאירגון, הוספה ומחיקה של תגיות ותכוניות. ה- DOM מערך פונקציות המשמשות
                    למניפולציות בקבצי XML (ו- HTML) ע"י תיכנות. פורמט הגדרות מבנה XML Schema1 ו- 2. ישנם עוד מודולים
                    וכלים מוכנים או בפיתוח. שים לב לדף הדיווחים הטכניים של W3C.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pageBreak"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Logical Properties and Values<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Several horizontal positions and sizes can be specified depending on the text direction.
           The following sample uses the exact same HTML and CSS twice, except for different BiDi directions.
           The direction dependent styles and their effects are as follows:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The position of the title:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>position: absolute;
top: -1em;
inset-inline-start: 2em;          <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"comment"</span>&gt;</span>/*  LTR: "left: 2em"  /  RTL: "right: 2em"  */<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The float value and margin of the image:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>float: inline-end;                 <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"comment"</span>&gt;</span>/*  LTR: "float: right"  /  RTL: "float: left"  */<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
margin: 1em 0.1em;
margin-inline-start: 2em;          <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"comment"</span>&gt;</span>/*  LTR: "margin-left: 2em"  /  RTL: "margin-right: 2em"  */<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"samplediv"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The border and padding of the box:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>border: 1pt none darkgrey;
border-top-style: solid;
padding-top: 0.5em;
border-inline-start-style: solid;  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"comment"</span>&gt;</span>/*  LTR: "border-left-style<span class="hljs-symbol">&amp;hellip;</span>"  /  RTL: "border-right-style<span class="hljs-symbol">&amp;hellip;</span>"  */<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
padding-inline-start: 1em;         <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"comment"</span>&gt;</span>/*  LTR: "padding-left: 1em"  /  RTL: "padding-right: 1em"  */<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Resulting in:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>LTR<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"logicalsample"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ex eget nisl iaculis, vitae pellentesque sapien sollicitudin. Mauris iaculis, sem at laoreet tincidunt, ipsum justo placerat turpis, vitae finibus ipsum sapien ac sapien. Nullam dignissim finibus erat. Donec tincidunt scelerisque enim, et pharetra dolor blandit id. Fusce blandit sapien sollicitudin leo auctor, a mattis ex ullamcorper. Aenean hendrerit in sem et sodales. Nunc maximus sem non eros venenatis, cursus egestas mi imperdiet. Morbi in eros faucibus, ullamcorper sem eget, facilisis nunc. Vestibulum ut dignissim ligula, vel sagittis velit. Ut eget maximus leo. Aenean rhoncus euismod elementum. Nam velit orci, porttitor vel viverra scelerisque, accumsan sit amet urna. Quisque ut interdum dui. Suspendisse eu leo orci. Ut nec eros vel diam euismod consequat.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>RTL<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"logicalsample forcertl"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ex eget nisl iaculis, vitae pellentesque sapien sollicitudin. Mauris iaculis, sem at laoreet tincidunt, ipsum justo placerat turpis, vitae finibus ipsum sapien ac sapien. Nullam dignissim finibus erat. Donec tincidunt scelerisque enim, et pharetra dolor blandit id. Fusce blandit sapien sollicitudin leo auctor, a mattis ex ullamcorper. Aenean hendrerit in sem et sodales. Nunc maximus sem non eros venenatis, cursus egestas mi imperdiet. Morbi in eros faucibus, ullamcorper sem eget, facilisis nunc. Vestibulum ut dignissim ligula, vel sagittis velit. Ut eget maximus leo. Aenean rhoncus euismod elementum. Nam velit orci, porttitor vel viverra scelerisque, accumsan sit amet urna. Quisque ut interdum dui. Suspendisse eu leo orci. Ut nec eros vel diam euismod consequat.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>For more information on supported logical properties and values, please see the PDFreactor manual.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pageBreak"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>International List Numbering<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>PDFreactor supports several international list-style-types, including the following:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"result listItemColumns"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ol</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: decimal"</span>&gt;</span>decimal<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: lower-roman"</span>&gt;</span>lower-roman<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: upper-roman"</span>&gt;</span>upper-roman<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: lower-alpha"</span>&gt;</span>lower-alpha<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: upper-alpha"</span>&gt;</span>upper-alpha<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: arabic-indic"</span>&gt;</span>arabic-indic<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: upper-armenian"</span>&gt;</span>upper-armenian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: lower-armenian"</span>&gt;</span>lower-armenian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: bengali"</span>&gt;</span>bengali<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: cambodian"</span>&gt;</span>cambodian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: devanagari"</span>&gt;</span>devanagari<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: georgian"</span>&gt;</span>georgian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: lower-greek"</span>&gt;</span>lower-greek<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: upper-greek"</span>&gt;</span>upper-greek<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: gujarati"</span>&gt;</span>gujarati<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: gurmukhi"</span>&gt;</span>gurmukhi<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: hiragana"</span>&gt;</span>hiragana<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: hiragana-iroha"</span>&gt;</span>hiragana-iroha<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: japanese-formal"</span>&gt;</span>japanese-formal<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: japanese-informal"</span>&gt;</span>japanese-informal<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: kannada"</span>&gt;</span>kannada<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: katakana"</span>&gt;</span>katakana<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: katakana-iroha"</span>&gt;</span>katakana-iroha<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: khmer"</span>&gt;</span>khmer<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: lao"</span>&gt;</span>lao<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: katakana"</span>&gt;</span>katakana<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: malayalam"</span>&gt;</span>malayalam<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: mongolian"</span>&gt;</span>mongolian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: myanmar"</span>&gt;</span>myanmar<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: oriya"</span>&gt;</span>oriya<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: persian"</span>&gt;</span>persian<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: simp-chinese-formal"</span>&gt;</span>simp-chinese-formal<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: simp-chinese-informal"</span>&gt;</span>simp-chinese-informal<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: telugu"</span>&gt;</span>telugu<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: thai"</span>&gt;</span>thai<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: tibetan"</span>&gt;</span>tibetan<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"list-style-type: urdu"</span>&gt;</span>Urdu<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ol</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>For more information on supported list-style-types, please see the PDFreactor manual.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_i18n_i18n-sample.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_i18n_i18n-sample.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_i18n_i18n-sample.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_i18n_i18n-sample.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_i18n_i18n-sample.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_i18n_i18n-sample.html.pdf) |


