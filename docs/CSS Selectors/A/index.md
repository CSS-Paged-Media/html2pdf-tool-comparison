---
layout: details
title: A
permalink: /CSS-Selectors/A/
description: 
---



## 🔬 ACTIVE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/active.html)

<details>
    <summary>
        View ACTIVE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/active/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h2</span><span class="hljs-selector-pseudo">:active</span> {
  <span class="hljs-attribute">background</span>: yellow;   
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>click anywhere<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_active.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_active.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_active.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_active.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_active.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_active.html.pdf) |

## 🔬 ADJACENT-SIBLING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/adjacent-sibling.html)

<details>
    <summary>
        View ADJACENT-SIBLING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/adjacent-sibling/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Source Sans Pro'</span>, Arial, sans-serif;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.45</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">18px</span>;
}

<span class="hljs-selector-tag">img</span> + <span class="hljs-selector-tag">p</span> { 
  <span class="hljs-attribute">font-style</span>: italic;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">14px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This example demonstrates the use of CSS <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://css-tricks.com/almanac/selectors/a/adjacent-sibling/"</span>&gt;</span>Adjacent Sibling<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> selectors. Here, we want to add some additional styling to the caption text only. We'll use the adjacent sibling combinator to only select the paragraph tags that directly follow an image.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://images.nga.gov/?service=asset&amp;action=show_preview&amp;asset=135937"</span> /&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Vincent van Gogh Green Wheat Fields, Auvers 1890 Painting<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://images.nga.gov/?service=asset&amp;action=show_preview&amp;asset=120079"</span> /&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Claude Monet The Japanese Footbridge 1899 Painting<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_adjacent-sibling.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_adjacent-sibling.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_adjacent-sibling.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_adjacent-sibling.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_adjacent-sibling.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_adjacent-sibling.html.pdf) |

## 🔬 AFTER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/after.html)

<details>
    <summary>
        View AFTER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/after-and-before/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">::after</span> {
  <span class="hljs-attribute">content</span>: <span class="hljs-string">"after"</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Hello World<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>    
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Test for after.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_after.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_after.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_after.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_after.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_after.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_after.html.pdf) |

## 🔬 ANY-LINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/any-link.html)

<details>
    <summary>
        View ANY-LINK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/any-link/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#eaeaea</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100vh</span>;
}

<span class="hljs-selector-pseudo">:any-link</span> {
  <span class="hljs-attribute">color</span>: red;
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">900</span>;
  <span class="hljs-attribute">text-decoration</span>: none;
}

<span class="hljs-comment">/* [href] {
  color: blue;
} */</span>
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-symbol">&amp;lt;</span>a&gt; elements with...
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://google.com"</span>&gt;</span>valid href<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span>&gt;</span>no href<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>&gt;</span>href but no value<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">""</span>&gt;</span>empty string href<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_any-link.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_any-link.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_any-link.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_any-link.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_any-link.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_any-link.html.pdf) |

## 🔬 ATTRIBUTE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/attribute.html)

<details>
    <summary>
        View ATTRIBUTE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/attribute/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">a</span><span class="hljs-selector-attr">[href=<span class="hljs-string">"https://www.css-tricks.com"</span>]</span> { <span class="hljs-comment">/*select only the link with the exact href value https://www.css-tricks.com */</span>
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
}

<span class="hljs-selector-class">.gallery</span> <span class="hljs-selector-tag">img</span><span class="hljs-selector-attr">[alt*=<span class="hljs-string">"art"</span>]</span> { <span class="hljs-comment">/* alt attribute contains the word art, as whole or partial word */</span>
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">outline-offset</span>: <span class="hljs-number">2px</span>;
}

<span class="hljs-selector-class">.gallery2</span> <span class="hljs-selector-tag">img</span><span class="hljs-selector-attr">[alt~=<span class="hljs-string">"art"</span>]</span> { <span class="hljs-comment">/* alt attribute contains art as only value or in space-separated list */</span>
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">outline-offset</span>: <span class="hljs-number">2px</span>;
}

<span class="hljs-selector-class">.gallery3</span> <span class="hljs-selector-tag">img</span><span class="hljs-selector-attr">[alt^=<span class="hljs-string">"art"</span>]</span> { <span class="hljs-comment">/* alt attribute starts with the value "art" */</span>
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">outline-offset</span>: <span class="hljs-number">2px</span>;
}

<span class="hljs-selector-tag">li</span><span class="hljs-selector-attr">[data-years|=<span class="hljs-string">"1900"</span>]</span> { <span class="hljs-comment">/* data-years attribute starts with 1900 as the only value or first in a dash-separated list */</span>
  <span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-attr">[href$=<span class="hljs-string">"pdf"</span>]</span><span class="hljs-selector-pseudo">:after</span> { <span class="hljs-comment">/* href attribute ends with pdf */</span>
  <span class="hljs-attribute">content</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/pdficon_small.png);
  <span class="hljs-attribute">padding-left</span>: .<span class="hljs-number">3em</span>;
}



<span class="hljs-comment">/* styling for Pen, unrelated to attribute selectors */</span>

<span class="hljs-selector-tag">body</span> { 
  <span class="hljs-attribute">font-family</span>: sans-serif;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">90%</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.5</span>;
}

<span class="hljs-selector-tag">img</span> { <span class="hljs-attribute">margin-right</span>: .<span class="hljs-number">5em</span>; }

<span class="hljs-selector-tag">hr</span> { 
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">clear</span>: both;
}

<span class="hljs-selector-class">.story</span> {
  <span class="hljs-attribute">text-indent</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-family</span>: serif;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.2em</span>;
}

<span class="hljs-selector-class">.story</span><span class="hljs-selector-pseudo">:first-letter</span> { <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Exact Match <span class="hljs-symbol">&amp;mdash;</span> [attribute="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Here we select the link with the exact href value "https://www.css-tricks.com", and change its color and font size. Notice that the link to the almanac is not styled.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.css-tricks.com"</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.css-tricks.com/almanac"</span>&gt;</span>CSS-Tricks Almanac<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Attribute Value Contains <span class="hljs-symbol">&amp;mdash;</span> [attribute*="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Here we select the images with the full word or word fragment "art" in the alt text and give them an outline. Notice that the images with the alt text "abstract <span class="hljs-tag">&lt;<span class="hljs-name">i</span>&gt;</span>art<span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>" and "athlete <span class="hljs-tag">&lt;<span class="hljs-name">i</span>&gt;</span>starting<span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> a new sport" both get outlined. <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"gallery"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150/abstract"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"abstract art"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150/food"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"something to eat"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150/sports"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"athlete starting a new sport"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Attribute Value is in Space-Separated List <span class="hljs-symbol">&amp;mdash;</span> [attribute~="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In the list below, we select images with the word "art" in their alt attribute, either as the only value or as a whole word in a space separated list. Notice that the image with the alt text "athlete starting a new sport" is not outlined like it was in the "Attribute Contains" example.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"gallery2"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"abstract art"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"something to eat"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/150"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"athlete starting a new sport"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Attribute Value Starts With <span class="hljs-symbol">&amp;mdash;</span> [attribute^="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Here we select the images with alt text that starts with "art". Notice that the image with the alt text "artistic pattern" is selected, but the image with the alt text "Arthur Miller" is not because attribute selectors are case-sensitive. <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"gallery3"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/184/abstract"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"artistic pattern"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/184/food"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"a healthy meal"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//placehold.it/150/184/sports"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Arthur Miller"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Attribute Value is First in Dash-Separated List <span class="hljs-symbol">&amp;mdash;</span> [attribute|="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Selecting the list item with a data-decade attribute that has "1900" as the only value or the first in a dash separated list. Notice that only the 2nd list item is selected. The first list item has "1900" in its data attribute value, but it's after the dash.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>  
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">data-years</span>=<span class="hljs-string">"1800-1900"</span>&gt;</span>The 19th Century<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">data-years</span>=<span class="hljs-string">"1900-2000"</span>&gt;</span>The 20th Century<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">data-years</span>=<span class="hljs-string">"2000-2100"</span>&gt;</span>The 21st Century<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Attribute Value Ends With <span class="hljs-symbol">&amp;mdash;</span> [attribute$="value"]<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In the paragraph below we select the link with the href that ends with "pdf" and apply an icon as :after content.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"story"</span>&gt;</span>A humble digital file becomes self-aware and starts conversations with web developers. <span class="hljs-tag">&lt;<span class="hljs-name">i</span>&gt;</span>Read the fascinating account in <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"//s3-us-west-2.amazonaws.com/s.cdpn.io/652/example.pdf"</span>&gt;</span>example.pdf<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_attribute.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_attribute.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_attribute.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_attribute.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_attribute.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_attribute.html.pdf) |


