---
layout: details
title: B
permalink: /CSS-Properties/B/
description: 
---



## 🔬 BACKFACE-VISIBILITY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/backface-visibility.html)

<details>
    <summary>
        View BACKFACE-VISIBILITY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_backface-visibility --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
   <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">position</span>: relative;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">60px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">60px</span>;
  <span class="hljs-attribute">background-color</span>: red;
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(<span class="hljs-number">180deg</span>);
}

<span class="hljs-selector-id">#div1</span> {
  <span class="hljs-attribute">-webkit-backface-visibility</span>: hidden; <span class="hljs-comment">/* Safari */</span>
  <span class="hljs-attribute">backface-visibility</span>: hidden;
}

<span class="hljs-selector-id">#div2</span> {
  <span class="hljs-attribute">-webkit-backface-visibility</span>: hidden; <span class="hljs-comment">/* Safari */</span>
  <span class="hljs-attribute">backface-visibility</span>: visible;
}     
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The backface-visibility Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This example shows the back face of two div elements.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This div element has "backface-visibility: hidden", and the back face of the div element is invisible:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div1"</span>&gt;</span>DIV 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This div element has "backface-visibility: visible", and the back face of the div element shows a mirror image of the front face:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div2"</span>&gt;</span>DIV 2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Note:<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> The backface-visibility property is not supported in Internet Explorer 9 and earlier versions. Safari supports it with a webkit prefix.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_backface-visibility.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_backface-visibility.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_backface-visibility.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_backface-visibility.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_backface-visibility.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_backface-visibility.html.pdf) |

## 🔬 BACKGROUND-ATTACHMENT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-attachment.html)

<details>
    <summary>
        View BACKGROUND-ATTACHMENT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-attachment/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h2</span> {
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">48px</span>;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">600px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">32px</span> auto;
  <span class="hljs-attribute">overflow-x</span>: hidden;
  <span class="hljs-attribute">overflow-y</span>: scroll;
}

<span class="hljs-selector-class">.scroll</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"http://lorempixel.com/600/200/animals"</span>);
  <span class="hljs-attribute">background-attachment</span>: scroll;
}

<span class="hljs-selector-class">.fixed</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"http://lorempixel.com/600/200/animals"</span>);
  <span class="hljs-attribute">background-attachment</span>: fixed;
}

<span class="hljs-selector-class">.local</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"http://lorempixel.com/600/200/animals"</span>);
  <span class="hljs-attribute">background-attachment</span>: local;
}

<span class="hljs-selector-class">.expand</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-class">.extra-space</span> {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">50px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>scroll (default)<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"scroll"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"expand"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>fixed<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fixed"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"expand"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>local<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"local"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"expand"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">br</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"extra-space"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-attachment.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-attachment.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-attachment.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-attachment.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-attachment.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-attachment.html.pdf) |

## 🔬 BACKGROUND-BLEND-MODE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-blend-mode.html)

<details>
    <summary>
        View BACKGROUND-BLEND-MODE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-blend-mode/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span>, <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-class">.container</span> {
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">'https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.jpg'</span>);
  <span class="hljs-attribute">height</span>: <span class="hljs-number">500px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">background-color</span>: red;
  <span class="hljs-attribute">background-size</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">background-repeat</span>: no-repeat;
}

<span class="hljs-selector-class">.container--blend</span> {
  <span class="hljs-attribute">background-blend-mode</span>: screen;
}

<span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container container--blend"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-blend-mode.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-blend-mode.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-blend-mode.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-blend-mode.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-blend-mode.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-blend-mode.html.pdf) |

## 🔬 BACKGROUND-CLIP

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-clip.html)

<details>
    <summary>
        View BACKGROUND-CLIP Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-clip/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> { 
  <span class="hljs-attribute">background-color</span>: yellow;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">225px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">156</span>, <span class="hljs-number">224</span>, <span class="hljs-number">251</span>, .<span class="hljs-number">5</span>);
}

<span class="hljs-selector-class">.nomargin</span> { <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>; }

<span class="hljs-selector-id">#border-box</span> { <span class="hljs-attribute">background-clip</span>: border-box; }

<span class="hljs-selector-id">#padding-box</span> { <span class="hljs-attribute">background-clip</span>: padding-box; }

<span class="hljs-selector-id">#content-box</span> { <span class="hljs-attribute">background-clip</span>: content-box; }

<span class="hljs-comment">/* styling for the Pen, unrelated to background-clip */</span>

<span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-family</span>: sans-serif; }

<span class="hljs-selector-tag">div</span> { <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">2em</span>; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-clip: border-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"border-box"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the content.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-clip: padding-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"padding-box"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the content.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-clip: content-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>browser default paragraph margins<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"content-box"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the content.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-clip: content-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>paragraph is set to margin: 0;<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"content-box"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nomargin"</span>&gt;</span>This paragraph is the content.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-clip.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-clip.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-clip.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-clip.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-clip.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-clip.html.pdf) |

## 🔬 BACKGROUND-COLOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-color.html)

<details>
    <summary>
        View BACKGROUND-COLOR Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-color/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#82a43a</span>;
}

<span class="hljs-selector-id">#purple</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#893AA4</span>;
}



<span class="hljs-comment">/* styling for Pen, unrelated to background color */</span>
<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">300px</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-family</span>: sans-serif;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>background-color<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> for the body is #82a43a.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"purple"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>background-color<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> for this div is #893AA4.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-color.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-color.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-color.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-color.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-color.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-color.html.pdf) |

## 🔬 BACKGROUND-IMAGE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-image.html)

<details>
    <summary>
        View BACKGROUND-IMAGE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-image/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/* image background */</span>
<span class="hljs-selector-id">#imageonly</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/confectionary.png);
}

<span class="hljs-comment">/* linear gradient background */</span>
<span class="hljs-selector-id">#linear-gradient</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">linear-gradient</span>(black, white);
}

<span class="hljs-comment">/* radial gradient background */</span>
<span class="hljs-selector-id">#radial-gradient</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">radial-gradient</span>(circle, black, white);
}

<span class="hljs-comment">/*multiple background images */</span>

<span class="hljs-selector-id">#multiimage</span> {
  <span class="hljs-attribute">background</span>: 
   <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/codepen.png) bottom center no-repeat,
   <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/confectionary.png) repeat; 
}




<span class="hljs-comment">/* styling for the Pen, unrelated to background */</span>
<span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-family</span>: sans-serif; }

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1.5em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Image Background<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"imageonly"</span>&gt;</span>
          <span class="hljs-comment">&lt;!-- image is from Subtle Patterns --&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Gradient Background: Linear<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"linear-gradient"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Gradient Background: Radial<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"radial-gradient"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Multiple Backgound Images<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Two images: CodePen logo <span class="hljs-symbol">&amp;amp;</span> off-white pattern.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"multiimage"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-image.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-image.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-image.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-image.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-image.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-image.html.pdf) |

## 🔬 BACKGROUND-ORIGIN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-origin.html)

<details>
    <summary>
        View BACKGROUND-ORIGIN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-origin/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.background-origin</span> {
  <span class="hljs-attribute">box-sizing</span>: border-box;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"http://lorempixel.com/300/300/cats"</span>) no-repeat;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">16px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">23</span>, <span class="hljs-number">23</span>, <span class="hljs-number">23</span>, <span class="hljs-number">0.5</span>);
  <span class="hljs-attribute">background-origin</span>: padding-box;
  <span class="hljs-attribute">background-size</span>: cover;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">16px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"background-origin"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-origin.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-origin.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-origin.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-origin.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-origin.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-origin.html.pdf) |

## 🔬 BACKGROUND-POSITION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-position.html)

<details>
    <summary>
        View BACKGROUND-POSITION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-position/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">margin-bottom</span>: .<span class="hljs-number">5em</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/codepen.png); 
  <span class="hljs-attribute">background-repeat</span>: no-repeat;
}

<span class="hljs-selector-id">#pixels</span> { <span class="hljs-attribute">background-position</span>: <span class="hljs-number">350px</span> <span class="hljs-number">0</span>; }

<span class="hljs-selector-id">#percentages</span> { <span class="hljs-attribute">background-position</span>: <span class="hljs-number">100%</span> <span class="hljs-number">0</span>; }

<span class="hljs-selector-id">#keywords</span> { <span class="hljs-attribute">background-position</span>: top right; }


<span class="hljs-comment">/* styling for Pen, unrelated to background-position */</span>
<span class="hljs-selector-tag">p</span> { 
  <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">1em</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pixels"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>background-position: 350px 0;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"percentages"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>background-position: 100% 0;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"keywords"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>background-position: top right;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-position.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-position.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-position.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-position.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-position.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-position.html.pdf) |

## 🔬 BACKGROUND-REPEAT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-repeat.html)

<details>
    <summary>
        View BACKGROUND-REPEAT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-repeat/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-id">#repeat</span> { <span class="hljs-attribute">background-repeat</span>: repeat; }

<span class="hljs-selector-id">#repeat-x</span> { <span class="hljs-attribute">background-repeat</span>: repeat-x; }

<span class="hljs-selector-id">#repeat-y</span> { <span class="hljs-attribute">background-repeat</span>: repeat-y; }

<span class="hljs-selector-id">#no-repeat</span> { <span class="hljs-attribute">background-repeat</span>: no-repeat; }



<span class="hljs-comment">/* styling for the Pen */</span>

<span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-family</span>: sans-serif; }

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">125px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/codepen.png); 
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-repeat: repeat; <span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"repeat"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-repeat: repeat-x;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"repeat-x"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-repeat: repeat-y;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"repeat-y"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-repeat: no-repeat;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"no-repeat"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-repeat.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-repeat.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-repeat.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-repeat.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-repeat.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-repeat.html.pdf) |

## 🔬 BACKGROUND-SIZE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background-size.html)

<details>
    <summary>
        View BACKGROUND-SIZE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/background-size/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">900px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/ferns-unsplash.jpg);
  <span class="hljs-attribute">background-repeat</span>: no-repeat;
}

<span class="hljs-selector-id">#cover</span> { <span class="hljs-attribute">background-size</span>: cover; }

<span class="hljs-selector-id">#contain</span> { <span class="hljs-attribute">background-size</span>: contain; }

<span class="hljs-selector-id">#multi</span> {
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/rectangle-overlay.png), <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">652</span>/ferns-unsplash.jpg);
  <span class="hljs-attribute">background-size</span>: <span class="hljs-number">300px</span> <span class="hljs-number">100px</span>, cover;
}

<span class="hljs-comment">/* styling for pen, unrelated to background-size */</span>
<span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-family</span>: sans-serif; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- image from unsplash.com --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-size: cover;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"cover"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>background-size: contain;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"contain"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Multiple Images<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Semi-transparent white overlay at top left and fern image. Overlay sized in pixels, fern image set to cover. <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"multi"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background-size.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background-size.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background-size.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background-size.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background-size.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background-size.html.pdf) |

## 🔬 BACKGROUND

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/background.html)

<details>
    <summary>
        View BACKGROUND Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_background-color_elements --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">background-color</span>: green;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">background-color</span>: lightblue;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">background-color</span>: yellow;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>CSS background-color example!<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        This is a text inside a div element.
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph has its own background color.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        We are still in the div element.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_background.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_background.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_background.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_background.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_background.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_background.html.pdf) |

## 🔬 BLEED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/bleed.html)

<details>
    <summary>
        View BLEED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-keyword">@page</span><span class="hljs-selector-pseudo">:left</span> {
            <span class="hljs-attribute">bleed</span>: <span class="hljs-number">10pt</span>;	
        }

        <span class="hljs-keyword">@page</span><span class="hljs-selector-pseudo">:top</span> {
            <span class="hljs-attribute">bleed</span>: <span class="hljs-number">5cm</span>;	
        }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Test Bleed<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_bleed.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_bleed.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_bleed.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_bleed.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_bleed.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_bleed.html.pdf) |

## 🔬 BORDER-COLLAPSE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/border-collapse.html)

<details>
    <summary>
        View BORDER-COLLAPSE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/border-collapse/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
   <span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">border-spacing</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1rem</span> auto;
  <span class="hljs-attribute">border-collapse</span>: collapse;
}
<span class="hljs-selector-tag">td</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1rem</span> <span class="hljs-number">1.2rem</span>;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">6px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid red;
}
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">text-align</span>: center;
}     
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>   
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_border-collapse.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_border-collapse.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_border-collapse.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_border-collapse.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_border-collapse.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_border-collapse.html.pdf) |

## 🔬 BORDER-IMAGE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/border-image.html)

<details>
    <summary>
        View BORDER-IMAGE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/border-image/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.repeating-linear</span> {
  <span class="hljs-attribute">color</span>: pink;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">10px</span> solid pink;
  <span class="hljs-attribute">border-image</span>: <span class="hljs-built_in">repeating-linear-gradient</span>( <span class="hljs-number">45deg</span>, pink, pink <span class="hljs-number">1%</span>, purple <span class="hljs-number">1%</span>, purple <span class="hljs-number">8%</span>) <span class="hljs-number">10</span>;
}

<span class="hljs-selector-class">.repeating-linear</span><span class="hljs-selector-pseudo">:hover</span> {
  <span class="hljs-attribute">border-image</span>: <span class="hljs-built_in">repeating-linear-gradient</span>( <span class="hljs-number">45deg</span>, purple, purple <span class="hljs-number">1%</span>, pink <span class="hljs-number">1%</span>, pink <span class="hljs-number">8%</span>) <span class="hljs-number">10</span>;
  <span class="hljs-attribute">color</span>: purple;
}
<span class="hljs-comment">/* styling for Pen, unrelated to border-image */</span>

* {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#1D1F1F</span>;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">4em</span> auto;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">40vw</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">40vh</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"repeating-linear"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_border-image.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_border-image.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_border-image.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_border-image.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_border-image.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_border-image.html.pdf) |

## 🔬 BORDER-RADIUS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/border-radius.html)

<details>
    <summary>
        View BORDER-RADIUS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_border_round --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.normal</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid red;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.round1</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid red;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">5px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.round2</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid red;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">8px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.round3</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid red;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">12px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>The border-radius Property<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This property is used to add rounded borders to an element:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"normal"</span>&gt;</span>Normal border<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"round1"</span>&gt;</span>Round border<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"round2"</span>&gt;</span>Rounder border<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"round3"</span>&gt;</span>Roundest border<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_border-radius.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_border-radius.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_border-radius.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_border-radius.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_border-radius.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_border-radius.html.pdf) |

## 🔬 BORDER-SPACING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/border-spacing.html)

<details>
    <summary>
        View BORDER-SPACING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/border-spacing/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">border-spacing</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1rem</span> auto;
  <span class="hljs-attribute">border-collapse</span>: collapse;
}
<span class="hljs-selector-tag">td</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1rem</span> <span class="hljs-number">1.2rem</span>;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">6px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid red;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_border-spacing.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_border-spacing.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_border-spacing.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_border-spacing.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_border-spacing.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_border-spacing.html.pdf) |

## 🔬 BORDER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/border.html)

<details>
    <summary>
        View BORDER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/border/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">align-items</span>: flex-start;
  <span class="hljs-attribute">flex-wrap</span>: wrap;
  <span class="hljs-attribute">justify-content</span>: space-between;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2em</span>;
}

<span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eaeaea</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">flex-basis</span>: <span class="hljs-number">17%</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-class">.box-1</span> {
  <span class="hljs-attribute">border</span>: none;
}

<span class="hljs-selector-class">.box-2</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> hidden red;
}

<span class="hljs-selector-class">.box-3</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid orange;
}

<span class="hljs-selector-class">.box-4</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> dashed orange;
}

<span class="hljs-selector-class">.box-5</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> dotted orange;
}

<span class="hljs-selector-class">.box-6</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> double orange;
}

<span class="hljs-selector-class">.box-7</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> groove orange;
}

<span class="hljs-selector-class">.box-8</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> ridge orange;
}

<span class="hljs-selector-class">.box-9</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> inset orange;
}

<span class="hljs-selector-class">.box-10</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> outset orange;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-1"</span>&gt;</span>
            none
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-2"</span>&gt;</span>
            hidden
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-3"</span>&gt;</span>
            solid
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-4"</span>&gt;</span>
            dashed
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-5"</span>&gt;</span>
            dotted
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-6"</span>&gt;</span>
            double
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-7"</span>&gt;</span>
            groove
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-8"</span>&gt;</span>
            ridge
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-9"</span>&gt;</span>
            inset
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box-10"</span>&gt;</span>
            outset
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_border.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_border.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_border.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_border.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_border.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_border.html.pdf) |

## 🔬 BOTTOM

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/bottom.html)

<details>
    <summary>
        View BOTTOM Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/top-right-bottom-left/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">10rem</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">10rem</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">background-color</span>: Silver;
  <span class="hljs-attribute">position</span>: relative;
}

<span class="hljs-selector-class">.box--positive</span> {
    <span class="hljs-attribute">bottom</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.box--negative</span> {
  <span class="hljs-attribute">bottom</span>: -<span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.outline</span> {
  <span class="hljs-attribute">display</span>: inline-block;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> dashed black;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">40px</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"outline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box--positive"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span>positive<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"outline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box--negative"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span>negative<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_bottom.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_bottom.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_bottom.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_bottom.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_bottom.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_bottom.html.pdf) |

## 🔬 BOX-DECORATION-BREAK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/box-decoration-break.html)

<details>
    <summary>
        View BOX-DECORATION-BREAK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_box-decoration-break --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
       <span class="hljs-selector-tag">span</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid red;
  <span class="hljs-attribute">padding</span>:  <span class="hljs-number">0em</span> <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">16px</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">24px</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">2</span>;
}

<span class="hljs-selector-tag">span</span><span class="hljs-selector-class">.ex1</span> { 
  <span class="hljs-attribute">-webkit-box-decoration-break</span>: clone;
  <span class="hljs-attribute">-o-box-decoration-break</span>: clone;
  <span class="hljs-attribute">box-decoration-break</span>: clone;
}

<span class="hljs-selector-tag">span</span><span class="hljs-selector-class">.ex2</span> { 
  <span class="hljs-attribute">-webkit-box-decoration-break</span>: slice;
  <span class="hljs-attribute">-o-box-decoration-break</span>: slice;
  <span class="hljs-attribute">box-decoration-break</span>: slice;
} 
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The box-decoration-break Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>box-decoration-break: clone:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex1"</span>&gt;</span>CSS<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>is<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>easy<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>to learn<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>box-decoration-break: slice (default):<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex2"</span>&gt;</span>CSS<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>is<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>easy<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>to learn<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
        
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_box-decoration-break.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_box-decoration-break.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_box-decoration-break.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_box-decoration-break.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_box-decoration-break.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_box-decoration-break.html.pdf) |

## 🔬 BOX-SHADOW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/box-shadow.html)

<details>
    <summary>
        View BOX-SHADOW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/box-shadow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {<span class="hljs-attribute">background</span>:<span class="hljs-number">#ccc</span>}

<span class="hljs-selector-class">.box</span> <span class="hljs-selector-tag">h3</span>{
  <span class="hljs-attribute">text-align</span>:center;
	<span class="hljs-attribute">position</span>:relative;
	<span class="hljs-attribute">top</span>:<span class="hljs-number">80px</span>;
}
<span class="hljs-selector-class">.box</span> {
	<span class="hljs-attribute">width</span>:<span class="hljs-number">70%</span>;
	<span class="hljs-attribute">height</span>:<span class="hljs-number">200px</span>;
	<span class="hljs-attribute">background</span>:<span class="hljs-number">#FFF</span>;
	<span class="hljs-attribute">margin</span>:<span class="hljs-number">40px</span> auto;
}
<span class="hljs-comment">/*==================================================
 * Effect 1
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect1</span>{
	<span class="hljs-attribute">-webkit-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">10px</span> <span class="hljs-number">6px</span> -<span class="hljs-number">6px</span> <span class="hljs-number">#777</span>;
	   <span class="hljs-attribute">-moz-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">10px</span> <span class="hljs-number">6px</span> -<span class="hljs-number">6px</span> <span class="hljs-number">#777</span>;
	        <span class="hljs-attribute">box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">10px</span> <span class="hljs-number">6px</span> -<span class="hljs-number">6px</span> <span class="hljs-number">#777</span>;
}

<span class="hljs-comment">/*==================================================
 * Effect 2
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect2</span>
{
  <span class="hljs-attribute">position</span>: relative;
}
<span class="hljs-selector-class">.effect2</span><span class="hljs-selector-pseudo">:before</span>, <span class="hljs-selector-class">.effect2</span><span class="hljs-selector-pseudo">:after</span>
{
  <span class="hljs-attribute">z-index</span>: -<span class="hljs-number">1</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">content</span>: <span class="hljs-string">""</span>;
  <span class="hljs-attribute">bottom</span>: <span class="hljs-number">15px</span>;
  <span class="hljs-attribute">left</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">max-width</span>:<span class="hljs-number">300px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-moz-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
}
<span class="hljs-selector-class">.effect2</span><span class="hljs-selector-pseudo">:after</span>
{
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">right</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">left</span>: auto;
}

<span class="hljs-comment">/*==================================================
 * Effect 3
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect3</span>
{
  <span class="hljs-attribute">position</span>: relative;
}
<span class="hljs-selector-class">.effect3</span><span class="hljs-selector-pseudo">:before</span>
{
  <span class="hljs-attribute">z-index</span>: -<span class="hljs-number">1</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">content</span>: <span class="hljs-string">""</span>;
  <span class="hljs-attribute">bottom</span>: <span class="hljs-number">15px</span>;
  <span class="hljs-attribute">left</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">max-width</span>:<span class="hljs-number">300px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-moz-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">3deg</span>);
}

<span class="hljs-comment">/*==================================================
 * Effect 4
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect4</span>
{
  <span class="hljs-attribute">position</span>: relative;
}
<span class="hljs-selector-class">.effect4</span><span class="hljs-selector-pseudo">:after</span>
{
  <span class="hljs-attribute">z-index</span>: -<span class="hljs-number">1</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">content</span>: <span class="hljs-string">""</span>;
  <span class="hljs-attribute">bottom</span>: <span class="hljs-number">15px</span>;
  <span class="hljs-attribute">right</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">left</span>: auto;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">max-width</span>:<span class="hljs-number">300px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-moz-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">15px</span> <span class="hljs-number">10px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
}

<span class="hljs-comment">/*==================================================
 * Effect 5
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect5</span>
{
  <span class="hljs-attribute">position</span>: relative;
}
<span class="hljs-selector-class">.effect5</span><span class="hljs-selector-pseudo">:before</span>, <span class="hljs-selector-class">.effect5</span><span class="hljs-selector-pseudo">:after</span>
{
  <span class="hljs-attribute">z-index</span>: -<span class="hljs-number">1</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">content</span>: <span class="hljs-string">""</span>;
  <span class="hljs-attribute">bottom</span>: <span class="hljs-number">25px</span>;
  <span class="hljs-attribute">left</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">max-width</span>:<span class="hljs-number">300px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">35px</span> <span class="hljs-number">20px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-moz-box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">35px</span> <span class="hljs-number">20px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">box-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">35px</span> <span class="hljs-number">20px</span> <span class="hljs-number">#777</span>;
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(-<span class="hljs-number">8deg</span>);
}
<span class="hljs-selector-class">.effect5</span><span class="hljs-selector-pseudo">:after</span>
{
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-moz-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-o-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">8deg</span>);
  <span class="hljs-attribute">right</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">left</span>: auto;
}

<span class="hljs-comment">/*==================================================
 * Effect 6
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect6</span>
{
  	<span class="hljs-attribute">position</span>:relative;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
       <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
            <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
}
<span class="hljs-selector-class">.effect6</span><span class="hljs-selector-pseudo">:before</span>, <span class="hljs-selector-class">.effect6</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">content</span>:<span class="hljs-string">""</span>;
    <span class="hljs-attribute">position</span>:absolute;
    <span class="hljs-attribute">z-index</span>:-<span class="hljs-number">1</span>;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">top</span>:<span class="hljs-number">50%</span>;
    <span class="hljs-attribute">bottom</span>:<span class="hljs-number">0</span>;
    <span class="hljs-attribute">left</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">right</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">-moz-border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
    <span class="hljs-attribute">border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
}
<span class="hljs-selector-class">.effect6</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">right</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">left</span>:auto;
    <span class="hljs-attribute">-webkit-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
       <span class="hljs-attribute">-moz-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
        <span class="hljs-attribute">-ms-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
         <span class="hljs-attribute">-o-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
            <span class="hljs-attribute">transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
}

<span class="hljs-comment">/*==================================================
 * Effect 7
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect7</span>
{
  	<span class="hljs-attribute">position</span>:relative;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
       <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
            <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
}
<span class="hljs-selector-class">.effect7</span><span class="hljs-selector-pseudo">:before</span>, <span class="hljs-selector-class">.effect7</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">content</span>:<span class="hljs-string">""</span>;
    <span class="hljs-attribute">position</span>:absolute;
    <span class="hljs-attribute">z-index</span>:-<span class="hljs-number">1</span>;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">top</span>:<span class="hljs-number">0</span>;
    <span class="hljs-attribute">bottom</span>:<span class="hljs-number">0</span>;
    <span class="hljs-attribute">left</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">right</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">-moz-border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
    <span class="hljs-attribute">border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
}
<span class="hljs-selector-class">.effect7</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">right</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">left</span>:auto;
    <span class="hljs-attribute">-webkit-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
       <span class="hljs-attribute">-moz-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
        <span class="hljs-attribute">-ms-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
         <span class="hljs-attribute">-o-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
            <span class="hljs-attribute">transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
}

<span class="hljs-comment">/*==================================================
 * Effect 8
 * ===============================================*/</span>
<span class="hljs-selector-class">.effect8</span>
{
  	<span class="hljs-attribute">position</span>:relative;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
       <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
            <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">4px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.3</span>), <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.1</span>) inset;
}
<span class="hljs-selector-class">.effect8</span><span class="hljs-selector-pseudo">:before</span>, <span class="hljs-selector-class">.effect8</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">content</span>:<span class="hljs-string">""</span>;
    <span class="hljs-attribute">position</span>:absolute;
    <span class="hljs-attribute">z-index</span>:-<span class="hljs-number">1</span>;
    <span class="hljs-attribute">-webkit-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">-moz-box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">box-shadow</span>:<span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.8</span>);
    <span class="hljs-attribute">top</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">bottom</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">left</span>:<span class="hljs-number">0</span>;
    <span class="hljs-attribute">right</span>:<span class="hljs-number">0</span>;
    <span class="hljs-attribute">-moz-border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
    <span class="hljs-attribute">border-radius</span>:<span class="hljs-number">100px</span> / <span class="hljs-number">10px</span>;
}
<span class="hljs-selector-class">.effect8</span><span class="hljs-selector-pseudo">:after</span>
{
	<span class="hljs-attribute">right</span>:<span class="hljs-number">10px</span>;
    <span class="hljs-attribute">left</span>:auto;
    <span class="hljs-attribute">-webkit-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
       <span class="hljs-attribute">-moz-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
        <span class="hljs-attribute">-ms-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
         <span class="hljs-attribute">-o-transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
            <span class="hljs-attribute">transform</span>:<span class="hljs-built_in">skew</span>(<span class="hljs-number">8deg</span>) <span class="hljs-built_in">rotate</span>(<span class="hljs-number">3deg</span>);
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect1"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 1<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 2<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect3"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 3<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect4"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 4<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect5"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 5<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect6"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 6<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect7"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 7<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box effect8"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Effect 8<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_box-shadow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_box-shadow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_box-shadow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_box-shadow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_box-shadow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_box-shadow.html.pdf) |

## 🔬 BOX-SIZING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/box-sizing.html)

<details>
    <summary>
        View BOX-SIZING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/box-sizing/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.content-box</span> { 
  <span class="hljs-attribute">box-sizing</span>: content-box; 
}
<span class="hljs-selector-class">.padding-box</span> {
  <span class="hljs-attribute">box-sizing</span>: padding-box; 
}
<span class="hljs-selector-class">.border-box</span> { 
  <span class="hljs-attribute">box-sizing</span>: border-box; 
}

<span class="hljs-comment">/* Pen Styling, unrelated to box-sizing */</span>
<span class="hljs-selector-tag">body</span> { 
  <span class="hljs-attribute">font-family</span>: sans-serif; 
}
<span class="hljs-selector-class">.demo</span> { 
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1rem</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1rem</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eee</span>;
}
<span class="hljs-selector-tag">h4</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">0.5rem</span> <span class="hljs-number">0</span>;
}
<span class="hljs-selector-tag">div</span><span class="hljs-selector-attr">[class*=<span class="hljs-string">"box"</span>]</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#444</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">10px</span> solid red;
  <span class="hljs-attribute">background-clip</span>: content-box;
  <span class="hljs-attribute">text-indent</span>: <span class="hljs-number">20px</span>;
}
<span class="hljs-selector-class">.image</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>box-sizing: content-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"content-box"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>content<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>box-sizing: padding-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"padding-box"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>content<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
            
          <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>  
          <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>box-sizing: border-box;<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"border-box"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>content<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
          
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_box-sizing.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_box-sizing.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_box-sizing.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_box-sizing.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_box-sizing.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_box-sizing.html.pdf) |

## 🔬 BREAK-INSIDE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/B/break-inside.html)

<details>
    <summary>
        View BREAK-INSIDE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/b/break-inside/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.example</span> {
  <span class="hljs-attribute">-webkit-columns</span>: <span class="hljs-number">150px</span>;
  <span class="hljs-attribute">-moz-columns</span>: <span class="hljs-number">150px</span>;
  <span class="hljs-attribute">columns</span>: <span class="hljs-number">150px</span>;
  <span class="hljs-attribute">-webkit-column-gap</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">-moz-column-gap</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">column-gap</span>: <span class="hljs-number">2em</span>;  
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">12px</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Georgia'</span>, serif;
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">400</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.45</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#ecf0f1</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: white;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1.3em</span>;
  <span class="hljs-attribute">-webkit-column-break-inside</span>: avoid;
  <span class="hljs-attribute">page-break-inside</span>: avoid;
  <span class="hljs-attribute">break-inside</span>: avoid;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"example"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Mauris eu risus.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Vestibulum auctor dapibus neque.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Consectetuer adipiscing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Eu risus.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Vestibulum auctor dapibus neque.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span> 
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Aliquam tincidunt mauris eu risus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Vestibulum auctor dapibus neque.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>   
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_B_break-inside.html.png) | ![typeset Preview](typeset__html_CSS_Properties_B_break-inside.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_B_break-inside.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_B_break-inside.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_B_break-inside.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_B_break-inside.html.pdf) |


