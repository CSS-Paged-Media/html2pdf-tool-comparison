---
layout: details
title: P
permalink: /CSS-Properties/P/
description: 
---



## 🔬 PADDING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/padding.html)

<details>
    <summary>
        View PADDING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/padding/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
  <span class="hljs-attribute">background-color</span>: aquamarine;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">400px</span>; 
  <span class="hljs-attribute">height</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span>&gt;</span>The width of this box is 440px, even though it is defined at 400px in the CSS.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_padding.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_padding.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_padding.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_padding.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_padding.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_padding.html.pdf) |

## 🔬 PERSPECTIVE-ORIGIN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/perspective-origin.html)

<details>
    <summary>
        View PERSPECTIVE-ORIGIN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/perspective-origin/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.wrapper</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">30%</span>;
  <span class="hljs-attribute">display</span>: inline-block;
  <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-class">.wrapper</span> <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
}

<span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">margin</span>: .<span class="hljs-number">5em</span> auto;
  <span class="hljs-attribute">transform-style</span>: preserve-<span class="hljs-number">3</span>d;
  <span class="hljs-attribute">perspective</span>: <span class="hljs-number">250px</span>;
}

<span class="hljs-selector-class">.w1</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: top left;
}

<span class="hljs-selector-class">.w2</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: top;
}

<span class="hljs-selector-class">.w3</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: top right;
}

<span class="hljs-selector-class">.w4</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: left;
}

<span class="hljs-selector-class">.w5</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: center;
}

<span class="hljs-selector-class">.w6</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: right;
}

<span class="hljs-selector-class">.w7</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: bottom left;
}

<span class="hljs-selector-class">.w8</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: bottom;
}

<span class="hljs-selector-class">.w9</span> <span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">perspective-origin</span>: bottom right;
}

<span class="hljs-selector-class">.side</span> {
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">rgba</span>(<span class="hljs-number">255</span>, <span class="hljs-number">99</span>, <span class="hljs-number">71</span>, <span class="hljs-number">0.6</span>);
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.5</span>);
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">2em</span>;
}

<span class="hljs-selector-class">.front</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.top</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateX</span>(<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.right</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.left</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(-<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.bottom</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateX</span>(-<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.back</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(-<span class="hljs-number">180deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w1"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>top left<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>top<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w3"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>top right<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w4"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>left<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w5"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>center<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w6"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>right<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w7"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>bottom left<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w8"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>bottom<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w9"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>bottom right<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_perspective-origin.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_perspective-origin.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_perspective-origin.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_perspective-origin.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_perspective-origin.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_perspective-origin.html.pdf) |

## 🔬 PERSPECTIVE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/perspective.html)

<details>
    <summary>
        View PERSPECTIVE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/perspective/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.wrapper</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">float</span>: left;
}

<span class="hljs-selector-class">.w1</span> {
  <span class="hljs-attribute">perspective</span>: <span class="hljs-number">1000px</span>;
}

<span class="hljs-selector-class">.w2</span> {
  <span class="hljs-attribute">perspective</span>: <span class="hljs-number">250px</span>;
}

<span class="hljs-selector-class">.wrapper</span> <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-class">.cube</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">4em</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1.5em</span> auto;
  <span class="hljs-attribute">transform-style</span>: preserve-<span class="hljs-number">3</span>d;
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateX</span>(-<span class="hljs-number">40deg</span>) <span class="hljs-built_in">rotateY</span>(<span class="hljs-number">32deg</span>);
}

<span class="hljs-selector-class">.side</span> {
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">rgba</span>(<span class="hljs-number">255</span>, <span class="hljs-number">99</span>, <span class="hljs-number">71</span>, <span class="hljs-number">0.6</span>);
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.5</span>);
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">2em</span>;
}

<span class="hljs-selector-class">.front</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.top</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateX</span>(<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.right</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.left</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(-<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.bottom</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateX</span>(-<span class="hljs-number">90deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

<span class="hljs-selector-class">.back</span> {
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(-<span class="hljs-number">180deg</span>) <span class="hljs-built_in">translateZ</span>(<span class="hljs-number">1em</span>);
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w1"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>perspective: 1000px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wrapper w2"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>perspective: 250px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"cube"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  front"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   back"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side  right"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side   left"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side    top"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"side bottom"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_perspective.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_perspective.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_perspective.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_perspective.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_perspective.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_perspective.html.pdf) |

## 🔬 POSITION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/position.html)

<details>
    <summary>
        View POSITION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_position_absolute --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.relative</span> {
  <span class="hljs-attribute">position</span>: relative;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">3px</span> solid <span class="hljs-number">#73AD21</span>;
} 

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.absolute</span> {
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">80px</span>;
  <span class="hljs-attribute">right</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">3px</span> solid <span class="hljs-number">#73AD21</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>position: absolute;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>An element with position: absolute; is positioned relative to the nearest positioned ancestor (instead of positioned relative to the viewport, like fixed):<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"relative"</span>&gt;</span>This div element has position: relative;
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"absolute"</span>&gt;</span>This div element has position: absolute;<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> 
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_position.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_position.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_position.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_position.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_position.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_position.html.pdf) |


