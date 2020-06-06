---
layout: details
title: F
permalink: /CSS-Properties/F/
description: 
---



## 🔬 FILTER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/filter.html)

<details>
    <summary>
        View FILTER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/filter/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">img</span> { <span class="hljs-attribute">display</span>: block; <span class="hljs-attribute">width</span>: <span class="hljs-number">90%</span>; }

<span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">-webkit-filter</span>: <span class="hljs-built_in">sepia</span>(<span class="hljs-number">1</span>);
  <span class="hljs-attribute">filter</span>: <span class="hljs-built_in">sepia</span>(<span class="hljs-number">1</span>);
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/redwood-ukulele-top.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"ukulele"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_filter.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_filter.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_filter.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_filter.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_filter.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_filter.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_filter.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_filter.html.pdf) |

## 🔬 FLEX-BASIS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-basis.html)

<details>
    <summary>
        View FLEX-BASIS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-basis/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid red;
  
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-class">.flex1</span> { <span class="hljs-attribute">flex</span>: <span class="hljs-number">1</span> <span class="hljs-number">1</span> <span class="hljs-number">20em</span>; }
<span class="hljs-selector-class">.flex2</span> { <span class="hljs-attribute">flex</span>: <span class="hljs-number">2</span> <span class="hljs-number">2</span> <span class="hljs-number">20em</span>; } 
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex1"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex2"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-basis.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-basis.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-basis.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-basis.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-basis.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-basis.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-basis.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-basis.html.pdf) |

## 🔬 FLEX-DIRECTION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-direction.html)

<details>
    <summary>
        View FLEX-DIRECTION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-direction/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-class">.row</span>            { 
  <span class="hljs-attribute">-webkit-flex-direction</span>: row; 
  <span class="hljs-attribute">flex-direction</span>: row;
}

<span class="hljs-selector-class">.row-reverse</span>    { 
  <span class="hljs-attribute">-webkit-flex-direction</span>: row-reverse; 
  <span class="hljs-attribute">flex-direction</span>: row-reverse;
}  
<span class="hljs-selector-class">.row-reverse</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: gold;
}

<span class="hljs-selector-class">.column</span> { 
  <span class="hljs-attribute">-webkit-flex-direction</span>: column; 
  <span class="hljs-attribute">flex-direction</span>: column; 
  <span class="hljs-attribute">float</span>: left;
}
<span class="hljs-selector-class">.column</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
}

<span class="hljs-selector-class">.column-reverse</span> { 
  <span class="hljs-attribute">-webkit-flex-direction</span>: column-reverse; 
  <span class="hljs-attribute">flex-direction</span>: column-reverse; 
  <span class="hljs-attribute">float</span>: right;
}
<span class="hljs-selector-class">.column-reverse</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: lightgreen;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">5px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container row"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container row-reverse"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container column"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container column-reverse"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-direction.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-direction.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-direction.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-direction.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-direction.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-direction.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-direction.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-direction.html.pdf) |

## 🔬 FLEX-FLOW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-flow.html)

<details>
    <summary>
        View FLEX-FLOW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-flow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">padding-left</span>: .<span class="hljs-number">5em</span>; 
}

<span class="hljs-selector-class">.shorthand</span> { 
  <span class="hljs-attribute">-webkit-flex-wrap</span>: wrap;
  <span class="hljs-attribute">flex-wrap</span>: wrap;
  <span class="hljs-attribute">-webkit-flex-direction</span>: row;
  <span class="hljs-attribute">flex-direction</span>: row;
}

<span class="hljs-selector-class">.longhand</span> { 
  <span class="hljs-attribute">-webkit-flex-flow</span>: wrap row;
  <span class="hljs-attribute">flex-flow</span>: wrap row;
  
}

<span class="hljs-selector-class">.longhand</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>flex-wrap: wrap; flex-direction: row;<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container longhand"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>flex-flow: row wrap;<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container shorthand"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-flow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-flow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-flow.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-flow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-flow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-flow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-flow.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-flow.html.pdf) |

## 🔬 FLEX-GROW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-grow.html)

<details>
    <summary>
        View FLEX-GROW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-grow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
    
  <span class="hljs-attribute">-webkit-justify-content</span>: space-around;
  <span class="hljs-attribute">justify-content</span>: space-around;
  <span class="hljs-attribute">-webkit-flex-flow</span>: row wrap;
  <span class="hljs-attribute">flex-flow</span>: row wrap;
  <span class="hljs-attribute">-webkit-align-items</span>: stretch;
  <span class="hljs-attribute">align-items</span>: stretch;
}

<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(1)</span> { <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(2)</span> { <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(3)</span> { <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">2</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(4)</span> { <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(5)</span> { <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>; }

<span class="hljs-selector-class">.flex-item</span> {
  
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">3px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">2</span>);
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-grow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-grow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-grow.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-grow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-grow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-grow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-grow.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-grow.html.pdf) |

## 🔬 FLEX-SHRINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-shrink.html)

<details>
    <summary>
        View FLEX-SHRINK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-shrink/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid red;
  
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-class">.flex1</span> { <span class="hljs-attribute">flex</span>: <span class="hljs-number">1</span> <span class="hljs-number">1</span> <span class="hljs-number">20em</span>; }
<span class="hljs-selector-class">.flex2</span> { <span class="hljs-attribute">flex</span>: <span class="hljs-number">2</span> <span class="hljs-number">2</span> <span class="hljs-number">20em</span>; } 
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex1"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex2"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-shrink.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-shrink.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-shrink.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-shrink.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-shrink.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-shrink.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-shrink.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-shrink.html.pdf) |

## 🔬 FLEX-WRAP

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-wrap.html)

<details>
    <summary>
        View FLEX-WRAP Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-wrap/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid silver;
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-class">.nowrap</span>  { 
  <span class="hljs-attribute">-webkit-flex-wrap</span>: nowrap;
  <span class="hljs-attribute">flex-wrap</span>: nowrap;
}

<span class="hljs-selector-class">.wrap</span>    { 
  <span class="hljs-attribute">-webkit-flex-wrap</span>: wrap;
  <span class="hljs-attribute">flex-wrap</span>: wrap;
}  
<span class="hljs-selector-class">.wrap</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: gold;
}

<span class="hljs-selector-class">.wrap-reverse</span>         { 
  <span class="hljs-attribute">-webkit-flex-wrap</span>: wrap-reverse;
  <span class="hljs-attribute">flex-wrap</span>: wrap-reverse;
}  
<span class="hljs-selector-class">.wrap-reverse</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container nowrap"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container wrap"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container wrap-reverse"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-wrap.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-wrap.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-wrap.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex-wrap.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-wrap.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-wrap.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-wrap.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex-wrap.html.pdf) |

## 🔬 FLEX

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex.html)

<details>
    <summary>
        View FLEX Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">flex-wrap</span>: wrap;
}
<span class="hljs-selector-tag">body</span> &gt; * {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eee</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2rem</span>;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid white;
}

<span class="hljs-selector-class">.header</span>,
<span class="hljs-selector-class">.footer</span> {
  <span class="hljs-attribute">flex</span>: <span class="hljs-number">1</span> <span class="hljs-number">100%</span>;
}
<span class="hljs-selector-class">.sidebar</span> {
  <span class="hljs-attribute">flex</span>: <span class="hljs-number">1</span>;
}
<span class="hljs-selector-class">.main</span> {
  <span class="hljs-attribute">flex</span>: <span class="hljs-number">2</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">header</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"header"</span>&gt;</span>Header<span class="hljs-tag">&lt;/<span class="hljs-name">header</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">main</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"main"</span>&gt;</span>Main<span class="hljs-tag">&lt;/<span class="hljs-name">main</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">aside</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"sidebar"</span>&gt;</span>Sidebar<span class="hljs-tag">&lt;/<span class="hljs-name">aside</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">footer</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footer"</span>&gt;</span>Footer<span class="hljs-tag">&lt;/<span class="hljs-name">footer</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_flex.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_flex.html.pdf) |

## 🔬 FLOAT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/float.html)

<details>
    <summary>
        View FLOAT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/css_float_clear.asp --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.div1</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">3px</span> solid <span class="hljs-number">#73AD21</span>;
}

<span class="hljs-selector-class">.div2</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Float<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"div1"</span>&gt;</span>div1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"div2"</span>&gt;</span>div2 - Notice that div2 is after div1 in the HTML code. However, since div1 floats to the left, the text in div2 flows around div1.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_float.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_float.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_float.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_float.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_float.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_float.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_float.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_float.html.pdf) |

## 🔬 FONT-FAMILY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-family.html)

<details>
    <summary>
        View FONT-FAMILY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_font-family --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.serif</span> {
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Times New Roman"</span>, Times, serif;
}

<span class="hljs-selector-class">.sansserif</span> {
  <span class="hljs-attribute">font-family</span>: Arial, Helvetica, sans-serif;
}

<span class="hljs-selector-class">.monospace</span> {
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Lucida Console"</span>, Courier, monospace;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>CSS font-family<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"serif"</span>&gt;</span>This is a paragraph, shown in the Times New Roman font.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"sansserif"</span>&gt;</span>This is a paragraph, shown in the Arial font.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"monospace"</span>&gt;</span>This is a paragraph, shown in the Lucida Console font.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-family.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-family.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-family.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-family.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-family.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-family.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-family.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-family.html.pdf) |

## 🔬 FONT-FEATURE-SETTINGS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-feature-settings.html)

<details>
    <summary>
        View FONT-FEATURE-SETTINGS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_font-feature-settings --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/* enable small-caps */</span>
<span class="hljs-selector-class">.ex1</span> { <span class="hljs-attribute">font-feature-settings</span>: <span class="hljs-string">"smcp"</span> on; }

<span class="hljs-comment">/* convert both upper and lowercase to small caps */</span>
<span class="hljs-selector-class">.ex2</span> { <span class="hljs-attribute">font-feature-settings</span>: <span class="hljs-string">"c2sc"</span>, <span class="hljs-string">"smcp"</span>; }

<span class="hljs-comment">/* no common ligatures */</span>
<span class="hljs-selector-class">.ex3</span> { <span class="hljs-attribute">font-feature-settings</span>: <span class="hljs-string">"liga"</span> <span class="hljs-number">0</span>; }

<span class="hljs-comment">/* enable automatic fractions */</span>
<span class="hljs-selector-class">.ex4</span> { <span class="hljs-attribute">font-feature-settings</span>: <span class="hljs-string">"frac"</span>; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The font-feature-settings Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex1"</span>&gt;</span>This is some text 0123.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex2"</span>&gt;</span>This is some text 0123.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex3"</span>&gt;</span>This is some text 0123.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex4"</span>&gt;</span>This is some text 0123.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>Note:<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span> Internet Explorer 9 and earlier versions do not support the font-feature-settings property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-feature-settings.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-feature-settings.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-feature-settings.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-feature-settings.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-feature-settings.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-feature-settings.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-feature-settings.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-feature-settings.html.pdf) |

## 🔬 FONT-SIZE-ADJUST

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-size-adjust.html)

<details>
    <summary>
        View FONT-SIZE-ADJUST Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_font-size-adjust --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.a</span> {<span class="hljs-attribute">font-family</span>: verdana;}
<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.b</span> {<span class="hljs-attribute">font-family</span>: <span class="hljs-string">'times new roman'</span>;}
<span class="hljs-selector-id">#div1</span>, <span class="hljs-selector-id">#div2</span> {<span class="hljs-attribute">font-size-adjust</span>: <span class="hljs-number">0.58</span>;}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The font-size-adjust Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>Note:<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span> Only Firefox supports the font-size-adjust property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Two divs with the same font-size-adjust property:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div1"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a"</span>&gt;</span>
You control the font size better with the font-size-adjust property.
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div2"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"b"</span>&gt;</span>
You control the font size better with the font-size-adjust property.
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Two divs without the font-size-adjust property:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a"</span>&gt;</span>
You control the font size better with the font-size-adjust property.
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"b"</span>&gt;</span>
You control the font size better with the font-size-adjust property.
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-size-adjust.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-size-adjust.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-size-adjust.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-size-adjust.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-size-adjust.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-size-adjust.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-size-adjust.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-size-adjust.html.pdf) |

## 🔬 FONT-SIZE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-size.html)

<details>
    <summary>
        View FONT-SIZE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-size/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#cecece</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">24px</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">36px</span>;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#fff</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-class">.module-2</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">42px</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">36px</span>;
}

<span class="hljs-selector-class">.module-2</span> <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">110%</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"module-1"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>I am sized relative to the document.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"module-2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>I am sized relative to the parent element.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-size.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-size.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-size.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-size.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-size.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-size.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-size.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-size.html.pdf) |

## 🔬 FONT-STRETCH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-stretch.html)

<details>
    <summary>
        View FONT-STRETCH Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/css3_pr_font-stretch.asp --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif, <span class="hljs-string">"Helvetica Neue"</span>, <span class="hljs-string">"Lucida Grande"</span>, Arial;
  <span class="hljs-attribute">font-stretch</span>: expanded;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Font Stretch Example<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-stretch.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-stretch.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-stretch.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-stretch.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-stretch.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-stretch.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-stretch.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-stretch.html.pdf) |

## 🔬 FONT-STYLE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-style.html)

<details>
    <summary>
        View FONT-STYLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-style/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-class">.one</span> { <span class="hljs-attribute">font-style</span>: italic; }
<span class="hljs-selector-class">.two</span> { <span class="hljs-attribute">font-style</span>: oblique; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"one"</span>&gt;</span>This is italic text.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"two"</span>&gt;</span>This is oblique text.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-style.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-style.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-style.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-style.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-style.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-style.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-style.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-style.html.pdf) |

## 🔬 FONT-VARIANT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-variant.html)

<details>
    <summary>
        View FONT-VARIANT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-variant/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">font-variant</span>: small-caps;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This is small-caps.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>THIS IS REGULAR CAPS.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-variant.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-variant.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-variant.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-variant.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-variant.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-variant.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-variant.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-variant.html.pdf) |

## 🔬 FONT-WEIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-weight.html)

<details>
    <summary>
        View FONT-WEIGHT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-weight/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Open Sans'</span>;
}

<span class="hljs-selector-class">.w100</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">100</span>;
}

<span class="hljs-selector-class">.w200</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">200</span>;
}

<span class="hljs-selector-class">.w300</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">300</span>;
}

<span class="hljs-selector-class">.w400</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">400</span>;
}

<span class="hljs-selector-class">.w500</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">500</span>;
}

<span class="hljs-selector-class">.w600</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">600</span>;
}

<span class="hljs-selector-class">.w700</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">700</span>;
}

<span class="hljs-selector-class">.w800</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">800</span>;
}

<span class="hljs-selector-class">.w900</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">900</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300'</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">'stylesheet'</span> <span class="hljs-attr">type</span>=<span class="hljs-string">'text/css'</span>&gt;</span>
  
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w100"</span>&gt;</span>This is 100 weight<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w200"</span>&gt;</span>This is 200 weight<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w300"</span>&gt;</span>This is 300 weight (available)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w400"</span>&gt;</span>This is 400 weight (available)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w500"</span>&gt;</span>This is 500 weight<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w600"</span>&gt;</span>This is 600 weight (available)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w700"</span>&gt;</span>This is 700 weight (available)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w800"</span>&gt;</span>This is 800 weight (available)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"w900"</span>&gt;</span>This is 900 weight<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-weight.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-weight.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-weight.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font-weight.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-weight.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-weight.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-weight.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font-weight.html.pdf) |

## 🔬 FONT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font.html)

<details>
    <summary>
        View FONT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_font --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.a</span> {
  <span class="hljs-attribute">font</span>: <span class="hljs-number">20px</span> Arial, sans-serif;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.b</span> {
  <span class="hljs-attribute">font</span>: italic bold <span class="hljs-number">12px</span>/<span class="hljs-number">30px</span> Georgia, serif;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a"</span>&gt;</span>This is a paragraph. The font size is set to 20 pixels, and the font family is Arial.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"b"</span>&gt;</span>This is a paragraph. The font is set to italic and bold, the font size is set to 12 pixels, the line height is set to 30 pixels, and the font family is Georgia.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_F_font.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_F_font.html.pdf) |


