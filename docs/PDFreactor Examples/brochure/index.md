---
layout: details
title: brochure
permalink: /PDFreactor-Examples/brochure/
description: 
---

## Index
<div class="boxes">
                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/brochure/fnt/">
                                fnt
                            </a>

                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/brochure/img/">
                                img
                            </a>
</div>

## 🔬 BROCHURE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/brochure/brochure.html)

<details>
    <summary>
        View BROCHURE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"text/html; charset=UTF-8"</span> <span class="hljs-attr">http-equiv</span>=<span class="hljs-string">"Content-Type"</span>/&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Tourist Brochure<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/****************************************************
 * Fonts
 ****************************************************/</span>

<span class="hljs-keyword">@font-face</span> {
    <span class="hljs-attribute">font-family</span>: Handwriting;
    <span class="hljs-attribute">src</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"fnt/JOURNAL.TTF"</span>) <span class="hljs-built_in">format</span>(<span class="hljs-string">"truetype"</span>);
}


<span class="hljs-comment">/****************************************************
 * Page Style
 ****************************************************/</span>

<span class="hljs-keyword">@page</span> {
    
    <span class="hljs-comment">/* Page Sizes */</span>
    
    <span class="hljs-attribute">size</span>: A4 landscape;
    <span class="hljs-attribute">-ro-media-size</span>: SRA4 landscape;
    <span class="hljs-attribute">-ro-bleed-width</span>: <span class="hljs-number">3mm</span>;
    <span class="hljs-attribute">-ro-crop-size</span>: trim;
    
    <span class="hljs-comment">/* Page Layout */</span>
    <span class="hljs-attribute">margin</span>: -<span class="hljs-number">3mm</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
    
    <span class="hljs-comment">/* Printer Marks */</span>
    <span class="hljs-attribute">-ro-marks</span>: bleed trim registration;
    
    <span class="hljs-attribute">-ro-colorbar-left-top</span>: gradient-tint;
    <span class="hljs-attribute">-ro-colorbar-right-top</span>: progressive-color;
    
    <span class="hljs-attribute">-ro-colorbar-left-bottom</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">100%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">75%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">50%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">25%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>)
                              <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">100%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">75%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">50%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">25%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>);
                              
    <span class="hljs-attribute">-ro-colorbar-right-bottom</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">25%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">50%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">75%</span>, <span class="hljs-number">0%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">100%</span>, <span class="hljs-number">0%</span>)
                               <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">25%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">50%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">75%</span>) <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">100%</span>);
}

<span class="hljs-selector-id">#page1</span>, <span class="hljs-selector-id">#page2</span> {
    <span class="hljs-attribute">width</span>:  <span class="hljs-number">297mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">210mm</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">3mm</span>;
}

<span class="hljs-comment">/****************************************************
 * General Style
 ****************************************************/</span>

<span class="hljs-selector-tag">html</span>, <span class="hljs-selector-tag">body</span> {
    <span class="hljs-attribute">font-family</span>: arial, sans-serif;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">hyphens</span>: auto;
    <span class="hljs-attribute">hyphenate-before</span>: <span class="hljs-number">3</span>;
    <span class="hljs-attribute">hyphenate-after</span>: <span class="hljs-number">3</span>;
}

<span class="hljs-selector-tag">a</span> {
    <span class="hljs-attribute">color</span>: inherit;
    <span class="hljs-attribute">text-decoration</span>: none;
    <span class="hljs-attribute">font-style</span>: italic;
}

<span class="hljs-selector-tag">p</span>, <span class="hljs-selector-tag">li</span>, <span class="hljs-selector-tag">td</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">3.5mm</span>;
    <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.5</span>;
    <span class="hljs-attribute">text-align</span>: justify;
    <span class="hljs-attribute">color</span>: inherit;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-pseudo">:-ro-matches(p</span>, <span class="hljs-selector-tag">h1</span>, <span class="hljs-selector-tag">h2</span>, <span class="hljs-selector-tag">h3</span>) + <span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">2mm</span>;
}



<span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">font-family</span>: Handwriting;
    <span class="hljs-attribute">font-weight</span>: normal;
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">10mm</span>;
    <span class="hljs-attribute">letter-spacing</span>: <span class="hljs-number">0.5mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">2mm</span>;
    <span class="hljs-attribute">color</span>: inherit;
}

<span class="hljs-comment">/****************************************************
 * Page Layout
 ****************************************************/</span>

<span class="hljs-comment">/* First Page */</span>

<span class="hljs-selector-id">#page1</span> {
    <span class="hljs-attribute">break-after</span>: page;
}

<span class="hljs-comment">/* First Fold */</span>

<span class="hljs-selector-id">#fold1top</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-left</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">56mm</span>;
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 4735 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">16%</span>, <span class="hljs-number">28%</span>, <span class="hljs-number">28%</span>));
}

<span class="hljs-selector-id">#fold1top</span> <span class="hljs-selector-tag">img</span> {
    <span class="hljs-attribute">max-width</span>: <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">max-height</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-id">#fold1bottom</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">71mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-left</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">130mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">10%</span>, <span class="hljs-number">0%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 404 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">5%</span>, <span class="hljs-number">15%</span>, <span class="hljs-number">59%</span>));
}

<span class="hljs-selector-id">#fold1bottom</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">4mm</span>;
}

<span class="hljs-comment">/* Second Fold */</span>

<span class="hljs-selector-id">#fold2</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">101mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">101mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">216mm</span>;
    <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"img/hermitsrest.tif"</span>);
    <span class="hljs-attribute">background-size</span>: auto <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">background-position</span>: right center;
    <span class="hljs-attribute">text-align</span>: center;
    <span class="hljs-attribute">color</span>: white;
}

<span class="hljs-selector-id">#fold2</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">font-family</span>: Handwriting;
    <span class="hljs-attribute">font-weight</span>: normal;
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">25mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">165mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">15%</span>, <span class="hljs-number">60%</span>, <span class="hljs-number">20%</span>);
}

<span class="hljs-selector-id">#fold2</span> <span class="hljs-selector-tag">h2</span> {
    <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'times new roman'</span>, serif;
    <span class="hljs-attribute">font-weight</span>: normal;
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">8mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">4mm</span>;
    <span class="hljs-attribute">letter-spacing</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">text-transform</span>: uppercase;
    <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">5%</span>, <span class="hljs-number">5%</span>, <span class="hljs-number">5%</span>, <span class="hljs-number">5%</span>);
}

<span class="hljs-comment">/* Third Fold */</span>

<span class="hljs-selector-id">#fold3top</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">202mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">130mm</span>;
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 7507 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">13%</span>, <span class="hljs-number">37%</span>, <span class="hljs-number">4%</span>));
}

<span class="hljs-selector-id">#fold3top</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">4mm</span>;
}

<span class="hljs-selector-id">#fold3bottom</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">145mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">202mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">56mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">60%</span>, <span class="hljs-number">80%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 7521 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">19%</span>, <span class="hljs-number">42%</span>, <span class="hljs-number">22%</span>));
}

<span class="hljs-selector-id">#fold3bottom</span> <span class="hljs-selector-tag">img</span> {
    <span class="hljs-attribute">max-width</span>: <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">max-height</span>: <span class="hljs-number">100%</span>;
}


<span class="hljs-comment">/* Second Page */</span>

<span class="hljs-selector-id">#page2</span> {
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">10%</span>, <span class="hljs-number">0%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 404 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">5%</span>, <span class="hljs-number">15%</span>, <span class="hljs-number">59%</span>));
}

<span class="hljs-comment">/* Second Page */</span>

<span class="hljs-comment">/* Spread over all Folds */</span>

<span class="hljs-selector-id">#spread</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">303mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">65mm</span>;
    <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"img/cedarridge.tif"</span>);
    <span class="hljs-attribute">background-size</span>: auto <span class="hljs-number">198%</span>;
    <span class="hljs-attribute">background-position</span>: left center;
    <span class="hljs-attribute">background-repeat</span>: no-repeat;
}

<span class="hljs-comment">/* First Fold */</span>

<span class="hljs-selector-id">#fold4top</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">65mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-left</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">187mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">54mm</span>;
}

<span class="hljs-selector-id">#fold4top</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">4mm</span>;
}


<span class="hljs-selector-id">#fold4bottom</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">131mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-left</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">70mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">60%</span>, <span class="hljs-number">80%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 7507 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">13%</span>, <span class="hljs-number">37%</span>, <span class="hljs-number">4%</span>));
}

<span class="hljs-selector-id">#fold4bottom</span> <span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">89%</span>;
}


<span class="hljs-comment">/* Info Box between First and Second Fold */</span>

<span class="hljs-selector-id">#infoBox</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">88mm</span>;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">123mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">51mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">51mm</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">3mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">10%</span>, <span class="hljs-number">0%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 4635 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">49%</span>, <span class="hljs-number">77%</span>, <span class="hljs-number">41%</span>));
    <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">10deg</span>);
    <span class="hljs-attribute">border</span>: <span class="hljs-number">1.5mm</span> solid <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 7507 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">13%</span>, <span class="hljs-number">37%</span>, <span class="hljs-number">4%</span>));
    <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">30mm</span>;
}

<span class="hljs-selector-id">#infoBox</span> <span class="hljs-selector-tag">h2</span> {
    <span class="hljs-attribute">font-family</span>: Handwriting;
    <span class="hljs-attribute">font-weight</span>: normal;
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">10mm</span>;
    <span class="hljs-attribute">letter-spacing</span>: <span class="hljs-number">0.5mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">3.5mm</span>;
    <span class="hljs-attribute">color</span>: inherit;
}

<span class="hljs-selector-id">#infoBox</span> <span class="hljs-selector-pseudo">:-ro-matches(h2</span>, <span class="hljs-selector-tag">p</span>) {
    <span class="hljs-attribute">text-align</span>: center <span class="hljs-meta">!important</span>;
}

<span class="hljs-selector-id">#infoBox</span> <span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">3.5mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">1mm</span> auto ;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">83%</span>;
}

<span class="hljs-selector-id">#infoBox</span> <span class="hljs-selector-tag">a</span> {
    <span class="hljs-attribute">color</span>: inherit;
    <span class="hljs-attribute">font-style</span>: italic;
}

<span class="hljs-comment">/* Second Fold */</span>

<span class="hljs-selector-id">#fold5bottom</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">131mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">101mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">89mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">70mm</span>;
    <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"img/cedarridge.tif"</span>);
    <span class="hljs-attribute">background-size</span>: auto <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">background-position</span>: top <span class="hljs-number">85%</span>;
}

<span class="hljs-comment">/* Third Fold */</span>

<span class="hljs-selector-id">#fold6top</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">65mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">202mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">84mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">10%</span>, <span class="hljs-number">10%</span>, <span class="hljs-number">85%</span>, <span class="hljs-number">80%</span>);
    <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">-ro-spot</span>(<span class="hljs-string">"Pantone 4735 C"</span>, <span class="hljs-number">1</span>, cmyk(<span class="hljs-number">0%</span>, <span class="hljs-number">16%</span>, <span class="hljs-number">28%</span>, <span class="hljs-number">28%</span>));
}

<span class="hljs-selector-id">#fold6top</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">4mm</span>;
}


<span class="hljs-selector-id">#fold6bottom</span> {
    <span class="hljs-attribute">position</span>: absolute;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">160mm</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">202mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">9mm</span>;
    <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">6mm</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">86mm</span>;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">39mm</span>;
    <span class="hljs-attribute">color</span>: <span class="hljs-built_in">cmyk</span>(<span class="hljs-number">0%</span>, <span class="hljs-number">0%</span>, <span class="hljs-number">10%</span>, <span class="hljs-number">0%</span>);
}

<span class="hljs-selector-id">#fold6bottom</span> <span class="hljs-selector-tag">h1</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">8mm</span>;
    <span class="hljs-attribute">margin-top</span>: -<span class="hljs-number">4mm</span>;
    <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1mm</span>;
}

<span class="hljs-selector-id">#fold6bottom</span> <span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">font-size</span>: <span class="hljs-number">3mm</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">1mm</span> <span class="hljs-number">0</span>;
    <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.25</span>;
}

<span class="hljs-selector-id">#fold6bottom</span> <span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:last-child</span> {
    <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-comment">/****************************************************
 * Preferences
 ****************************************************/</span>

<span class="hljs-keyword">@-ro-preferences</span> {
    <span class="hljs-selector-tag">page-layout</span>: 1 <span class="hljs-selector-tag">page</span>;
    <span class="hljs-selector-tag">initial-zoom</span>: <span class="hljs-selector-tag">fit-page</span>;
}

    </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
    <span class="hljs-comment">&lt;!-- First Page --&gt;</span>
    
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"page1"</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- First Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold1top"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"img/rafting.tif"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>/&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold1bottom"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Activities<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Aside from casual sightseeing from the South Rim (averaging 7,000 feet above sea level), rafting, hiking, running and helicopter tours are especially popular.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The Grand Canyon Ultra Marathon is a 78-mile race over 24 hours. The floor of the valley is accessible by foot, muleback, or by boat or raft from upriver.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Hiking down to the river and back up to the rim in one day is discouraged by park officials because of the distance, steep and rocky trails, change in elevation, and danger of heat exhaustion from the much higher temperatures at the bottom. Rescues are required annually of unsuccessful rim-to-river-to-rim travelers. Nevertheless, hundreds of fit and experienced hikers complete the trip every year.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Camping on the North and South Rims is generally restricted to established campgrounds and reservations are highly recommended, especially at the busier South Rim.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>There is at large camping available along many parts of the North Rim managed by Kaibab National Forest.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- Second Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Grand Canyon<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Arizona<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- Third Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold3top"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>History<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The Ancient Puebloans were the first people known to live in the Grand Canyon area. The cultural group has often been referred to in archaeology as the Anasazi, although the term is not preferred by the modern Puebloan peoples. The word "Anasazi" is Navajo for "Ancient Ones" or "Ancient Enemy".<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In addition to the Ancestral Puebloans, a number of distinct cultures have inhabited the Grand Canyon area. The Cohonina lived to the west of the Grand Canyon, between 500 and 1200 CE. The Cohonina were ancestors of the Yuman, Havasupai, and Walapai peoples who inhabit the area today.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The Sinagua were a cultural group occupying an area to the southeast of the Grand Canyon, between the Little Colorado River and the Salt River, between approximately 500 and 1425 CE. The Sinagua may have been ancestors of several Hopi clans.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>By the time of the arrival of Europeans in the 16th century, newer cultures had evolved. The Hualapai inhabit a 100-mile (160 km) stretch along the pine-clad southern side of the Grand Canyon.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold3bottom"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"img/nankoweap.tif"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>/&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    
    <span class="hljs-comment">&lt;!-- Second Page --&gt;</span>
    
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"page2"</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- Spread over all Folds --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"spread"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- First Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold4top"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>About the Grand Canyon<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The Grand Canyon is a steep-sided canyon carved by the Colorado River in the United States in the state of Arizona. It is contained within and managed by Grand Canyon National Park, the Hualapai Tribal Nation, and the Havasupai Tribe. President Theodore Roosevelt was a major proponent of preservation of the Grand Canyon area, and visited it on numerous occasions to hunt and enjoy the scenery.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>For thousands of years, the area has been continuously inhabited by Native Americans who built settlements within the canyon and its many caves. The Pueblo people considered the Grand Canyon ("Ongtupqa" in Hopi language) a holy site and made pilgrimages to it. The first European known to have viewed the Grand Canyon was García López de Cárdenas from Spain, who arrived in 1540.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold4bottom"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Geological History<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Nearly two billion years of Earth's geological history has been exposed as the Colorado River and its tributaries cut their channels through layer after layer of rock while the Colorado Plateau was uplifted.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>                
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>While the specific geologic processes and timing that formed the Grand Canyon are the subject of debate by geologists, recent evidence suggests that the Colorado River established its course through the canyon at least 17 million years ago.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- Second Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold5bottom"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        
        <span class="hljs-comment">&lt;!-- Info Box between First and Second Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"infoBox"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Canyon Facts<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The Grand Canyon is 277 miles (446 km) long, up to 18 miles (29 km) wide and attains a depth of over a mile (6,000 feet or 1,800 meters).<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-comment">&lt;!-- Third Fold --&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold6top"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Tourism<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Grand Canyon National Park is one of the world’s premier natural attractions, attracting about five million visitors per year.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Overall, 83% were from the United States: California (12.2%), Arizona (8.9%), Texas (4.8%), Florida (3.4%) and New York (3.2%) represented the top domestic visitors. Seventeen percent of visitors were from outside the United States; the most prominently represented nations were the United Kingdom (3.8%), Canada (3.5%), Japan (2.1%), Germany (1.9%) and The Netherlands (1.2%).<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The South Rim is open all year round weather permitting. The North Rim is generally open mid-May to mid-October.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fold6bottom"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Attribution<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Excerpts from Wikipedia:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>http://en.wikipedia.org/wiki/Grand_Canyon<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Pictures from:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Page 1 "Activities" by <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://www.flickr.com/people/47925188@N00"</span>&gt;</span>dancer4ever<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> on <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://en.wikipedia.org/wiki/File:Grand_Canyon_rafting_2006.jpg"</span>&gt;</span>Wikipedia<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://creativecommons.org/licenses/by-sa/3.0/deed.en"</span>&gt;</span>Some rights reserved.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            Page 1 Title by chensiyuan on <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://en.wikipedia.org/wiki/File:Grand_canyon_hermits_rest_2010.JPG"</span>&gt;</span>Wikipedia<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://creativecommons.org/licenses/by-sa/2.5/deed.en"</span>&gt;</span>Some rights reserved.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            Page 1 "History" by Drenaline on <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://en.wikipedia.org/wiki/File:Nankoweap.JPG"</span>&gt;</span>Wikipedia<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://creativecommons.org/licenses/by-sa/3.0/deed.en"</span>&gt;</span>Some rights reserved.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            Page 2 by Danny M Santiago on <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://en.wikipedia.org/wiki/File:Cedar_Ridge,_Grand_Canyon.jpg"</span>&gt;</span>Wikipedia<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://creativecommons.org/licenses/by-sa/3.0/deed.en"</span>&gt;</span>Some rights reserved.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    
<span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_brochure_brochure.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_brochure_brochure.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_brochure_brochure.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_PDFreactor_Examples_brochure_brochure.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_brochure_brochure.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_brochure_brochure.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_brochure_brochure.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_PDFreactor_Examples_brochure_brochure.html.pdf) |


