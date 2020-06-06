---
layout: details
title: L
permalink: /CSS-Properties/L/
description: 
---



## 🔬 LEFT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/L/left.html)

<details>
    <summary>
        View LEFT Code
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
  <span class="hljs-attribute">left</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.box--negative</span> {
  <span class="hljs-attribute">left</span>: -<span class="hljs-number">50px</span>;
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
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_L_left.html.png) | ![typeset Preview](typeset__html_CSS_Properties_L_left.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_L_left.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_L_left.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_L_left.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_L_left.html.pdf) |

## 🔬 LETTER-SPACING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/L/letter-spacing.html)

<details>
    <summary>
        View LETTER-SPACING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/l/letter-spacing/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.loose</span> {
  <span class="hljs-attribute">letter-spacing</span>: <span class="hljs-number">2px</span>;
}
<span class="hljs-selector-class">.tight</span> {
  <span class="hljs-attribute">letter-spacing</span>: -<span class="hljs-number">1px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This type has no additional letter-spacing applied.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"loose"</span>&gt;</span>This type is letter-spaced loosely at <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>2px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tight"</span>&gt;</span>This type is letter-spaced tightly at <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>-1px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_L_letter-spacing.html.png) | ![typeset Preview](typeset__html_CSS_Properties_L_letter-spacing.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_L_letter-spacing.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_L_letter-spacing.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_L_letter-spacing.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_L_letter-spacing.html.pdf) |

## 🔬 LINE-HEIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/L/line-height.html)

<details>
    <summary>
        View LINE-HEIGHT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/l/line-height/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">20px</span> auto;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">600px</span>;
}

<span class="hljs-selector-class">.p1</span> {
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">150%</span>;
}

<span class="hljs-selector-class">.p2</span> {
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">200%</span>;
}

<span class="hljs-selector-class">.p3</span> {
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">250%</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"p1"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Paragraph 1:<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"p2"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Paragraph 2:<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"p3"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Paragraph 3:<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_L_line-height.html.png) | ![typeset Preview](typeset__html_CSS_Properties_L_line-height.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_L_line-height.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_L_line-height.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_L_line-height.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_L_line-height.html.pdf) |

## 🔬 LIST-STYLE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/L/list-style.html)

<details>
    <summary>
        View LIST-STYLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/l/list-style/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(1)</span> {
  <span class="hljs-attribute">list-style-type</span>: disc;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(2)</span> {
  <span class="hljs-attribute">list-style-type</span>: circle;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(3)</span> {
  <span class="hljs-attribute">list-style-type</span>: square;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(4)</span> {
  <span class="hljs-attribute">list-style-type</span>: decimal;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(5)</span> {
  <span class="hljs-attribute">list-style-type</span>: decimal-leading-zero;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(6)</span> {
  <span class="hljs-attribute">list-style-type</span>: lower-roman;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(7)</span> {
  <span class="hljs-attribute">list-style-type</span>: upper-roman;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(8)</span> {
  <span class="hljs-attribute">list-style-type</span>: lower-greek;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(9)</span> {
  <span class="hljs-attribute">list-style-type</span>: lower-latin;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(10)</span> {
  <span class="hljs-attribute">list-style-type</span>: upper-latin;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(11)</span> {
  <span class="hljs-attribute">list-style-type</span>: armenian;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(12)</span> {
  <span class="hljs-attribute">list-style-type</span>: georgian;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(13)</span> {
  <span class="hljs-attribute">list-style-type</span>: lower-alpha;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(14)</span> {
  <span class="hljs-attribute">list-style-type</span>: upper-alpha;
}

<span class="hljs-selector-tag">ul</span><span class="hljs-selector-pseudo">:nth-of-type(15)</span> {
  <span class="hljs-attribute">list-style-type</span>: none;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>  
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_L_list-style.html.png) | ![typeset Preview](typeset__html_CSS_Properties_L_list-style.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_L_list-style.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_L_list-style.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_L_list-style.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_L_list-style.html.pdf) |


