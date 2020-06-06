---
layout: details
title: accessibility
permalink: /PDFreactor-Examples/accessibility/
description: 
---



## 🔬 ACCESSIBILITY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/accessibility/accessibility.html)

<details>
    <summary>
        View ACCESSIBILITY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"text/html; charset=UTF-8"</span> <span class="hljs-attr">http-equiv</span>=<span class="hljs-string">"Content-Type"</span>/&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Tagged PDF and PDF/A compliance<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
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
            <span class="hljs-selector-tag">table</span> {
                <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
            }
            <span class="hljs-selector-id">#exampleTable</span> {
                <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">1.3cm</span>;
                <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">0.1cm</span>;
                <span class="hljs-attribute">text-align</span>: center;
            }
            <span class="hljs-selector-id">#exampleTable</span> &gt; <span class="hljs-selector-tag">caption</span> {
                <span class="hljs-attribute">color</span>: <span class="hljs-number">#666666</span>;
                <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.8em</span>;
                <span class="hljs-attribute">font-weight</span>: bold;
                <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">1pt</span>;
            }
            <span class="hljs-selector-id">#rightBlock</span> {
                <span class="hljs-attribute">float</span>: right;
                <span class="hljs-attribute">width</span>: <span class="hljs-number">45%</span>;
                <span class="hljs-attribute">overflow</span>: hidden;
            }
            <span class="hljs-selector-id">#rightblock</span> <span class="hljs-selector-tag">img</span> {
                <span class="hljs-attribute">height</span>: <span class="hljs-number">20.44cm</span>;
            }
            <span class="hljs-selector-id">#leftBlock</span> {
                <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
            }
            <span class="hljs-selector-id">#leftBlock</span> <span class="hljs-selector-tag">h2</span> {
                <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">0cm</span>;
            }
            <span class="hljs-selector-id">#leftBlock</span> + * {
                <span class="hljs-attribute">clear</span>: right;
            }

            <span class="hljs-selector-id">#newChapter</span> {
                <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">1cm</span>;
            }
            
            <span class="hljs-selector-tag">div</span> <span class="hljs-selector-tag">p</span> {
                <span class="hljs-attribute">color</span>: <span class="hljs-number">#666666</span>;
            }
            
            <span class="hljs-selector-class">.note</span><span class="hljs-selector-pseudo">::before</span> {
                <span class="hljs-attribute">display</span>: block;
                <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#f5f5f5</span>;
                <span class="hljs-attribute">text-align</span>: center;
                <span class="hljs-attribute">font-weight</span>: bold;
                <span class="hljs-attribute">content</span>: <span class="hljs-string">"Note:"</span>;
            }
            <span class="hljs-selector-class">.note</span> &gt; <span class="hljs-selector-tag">div</span>, <span class="hljs-selector-class">.note</span><span class="hljs-selector-pseudo">::before</span> {
                <span class="hljs-attribute">border</span>: thin solid <span class="hljs-number">#e1e1e1</span>;
                <span class="hljs-attribute">font-size</span>: <span class="hljs-number">10pt</span>;
                <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.25</span>;
                <span class="hljs-attribute">color</span>: <span class="hljs-number">#666666</span>;
                <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.2cm</span>;
            }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Tagged PDF and PDF/A compliance<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"rightBlock"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://via.placeholder.com/640x360"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Adobe Acrobat DC screenshot"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">img</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"leftBlock"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Tagged PDF<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Tagged PDF files contain information about the structure of the document. The information about the structure
            is transported via so-called "PDF tags". Tagging a PDF makes it more accessible to screen readers, handhelds and similar devices.
            Enabled tagging also improves the copy and paste behavior. For example, copying a whole paragraph in a tagged PDF created with PDFreactor
            will ignore the line breaks which are displayed in the PDF document. Furthermore tagging applies reflow.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Using the <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>setAddTags<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> API method, you can add PDF tags to the PDF documents generated with PDFreactor. If you are generating
            a PDF from HTML documents, the HTML elements are automatically mapped to the corresponding PDF tags, so all you have to
            do is setting this property to enable tagging.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The following example maps the HTML element image to the PDF tag "Figure", and the content of its alt attribute to an alternative description
            for this tag.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>img {
    -ro-pdf-tag-type: "Figure";
}
img[alt] {
    -ro-alt-text: -ro-attr(alt);
}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The screenshot (taken from Adobe Acrobat DC) on the right shows that PDFreactor is capable to tag even complex structures such as tables properly.
            The table below was placed on the bottom of the page to demonstrate that PDFreactor wont repeat the <span class="hljs-symbol">&amp;lt;</span>Table<span class="hljs-symbol">&amp;gt;</span> or <span class="hljs-symbol">&amp;lt;</span>THead<span class="hljs-symbol">&amp;gt;</span> tag even though
            the table splits onto another page.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A tagged PDF will often be bigger then an equivalent PDF file that does not include PDF tags. You can enable the full compression mode to
            reduce the document size. To do so, the method setFullCompression can be used in the PDFreactor integration:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>config.setFullCompression(true);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleTable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">caption</span>&gt;</span>Example table<span class="hljs-tag">&lt;/<span class="hljs-name">caption</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Employee<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Mail<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Phone<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>John Doe<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>johne.doe@example.com<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>202-555-0152<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Austin King<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>austin.king@example.com<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>202-555-0191<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Edward Alsop<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>edward.alsop@example.com<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>202-555-0113<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Brian Mitchell<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>brian.mitchell@example.com<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>202-555-0131<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"newChapter"</span>&gt;</span>PDF/A Conformance<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>PDF/A differs from PDF by prohibiting features ill-suited to long-term archiving, such as
        font linking (as opposed to font embedding).<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The PDF/A standard does not define an archiving strategy or the goals of an archiving system.
        It identifies a "profile" for electronic documents that ensures the documents can be reproduced exactly the
        same way using various software in years to come. A key element to this reproducibility is the requirement for
        PDF/A documents to be 100% self-contained. All of the information necessary for displaying the document in the same
        manner is embedded in the file. This includes, but is not limited to, all content (text, raster images and vector
        graphics), fonts and color information. A PDF/A document is not permitted to be reliant on information from external
        sources (e.g. font programs and data streams), but may include annotations (e.g. hypertext links) that link to 
        external documents.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>PDFreactor supports the creation of all PDF/A conformant files.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Many companies and government organizations worldwide require PDF/A conformant documents.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>PDF/A-1a is the most strict PDF/A standard while the newer PDF/A standards are more lenient, e.g. allowing
        transparency and attachments.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Common PDF/A conformance requirements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>PDF/A restriction<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>PDFreactor actions<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>All used fonts are embedded.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>PDFreactor ignores the option to disable font embedding.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>All images are embedded.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Images are always automatically embedded by PDFreactor.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Multi-media content is prohibited.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Embedding objects is automatically prevented by PDFreactor, when PDF/A conformance is set.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>JavaScript is prohibited.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>No JavaScript is embedded, when PDF/A conformance is set. (This does not prohibit JavaScript in the
                    source HTML document to processed during conversions)<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Encryption is disallowed.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is automatically prevented, when the PDF/A conformance is set.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>The PDF must be tagged.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is automatically done by PDFreactor, when PDF/A conformance is set.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Metadata included in the PDF is required to be standard-based XMP.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is automatically done by PDFreactor, when PDF/A conformance is set.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Colors are specified in a device-independent manner.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>In PDFreactor colors are defined either as RGB or CMYK. When PDF/A conformance is set,
                    one of these color spaces has to be set in conjunction with a color space profile.
                    CMYK requires an ICC profile to be set, RGB colors use a default sRGB profile, if no other is set.
                    Using RGB colors in CMYK PDF/A documents or vice versa is prohibited.
                    Color keywords and shades specified via the "gray" function are converted to the appropriate color 
                    space losslessly. <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>PDF/A-1a specific conformance requirements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>PDF/A-1a restriction<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>PDFreactor actions<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Transparency is disallowed.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>PDFreactor will ignore certain kinds of transparency of images. Other occurrences of transparency will cause an exception
                    to be thrown.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Attachments are disallowed.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is automatically prevented, when PDF/A-1a conformance is set.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>To create a PDF/A conformant document, the method setConformance can be used in the PDFreactor integration:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>config.setConformance(Conformance.PDFA3A);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If CMYK colors are used in a document to be converted into a PDF/A-conformant file, an Output Intent has to
        be set. It is possible to use the following API methods:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"code"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>Configuration config = new Configuration();

OutputIntent outputIntent = new OutputIntent();
outputIntent.setIdentifier("ICC profile identifier");

// Use this if you are loading the ICC profile via URL
outputIntent.setUrl("URL/to/ICC/profile");

// Use this if you want to specify the ICC profile's binary data
outputIntent.setData("ICC profile binary data");

config.setOutputIntent(outputIntent);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The first parameter is a string identifying the intended output device or production condition in human-
        or machine-readable form. The second parameter points to ICC profile file or contains data of such a profile.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"note"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>When PDF/A conformance is set, encryption, restrictions, comments, full compression and other non PDF/A-conformant features are automatically
            overwritten, regardless of their own settings.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>Setting PDF/A-1a conformance generates PDFs with Adobe PDF version 1.4 in which some PDF tags are forbidden e.g. <span class="hljs-symbol">&amp;lt;</span>TBody<span class="hljs-symbol">&amp;gt;</span>.
            PDFreactor will skip all forbidden tags automatically, but handle table headers correctly.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_accessibility_accessibility.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_accessibility_accessibility.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_accessibility_accessibility.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_accessibility_accessibility.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_accessibility_accessibility.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_accessibility_accessibility.html.pdf) |


