---
layout: details
title: R
permalink: /CSS-Properties/R/
description: 
---



## 🔬 RESIZE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/R/resize.html)

<details>
    <summary>
        View RESIZE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/r/resize/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#1D1F1F</span>;
}

<span class="hljs-selector-tag">section</span> { 
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">5em</span>;
  <span class="hljs-attribute">background-color</span>: white;
  <span class="hljs-attribute">padding</span>: .<span class="hljs-number">5em</span>;
  <span class="hljs-attribute">overflow</span>: scroll;
  <span class="hljs-attribute">resize</span>: vertical;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span>both<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span>horizontal<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span>vertical<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span>none<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"resize"</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel neque nec magna lacinia commodo in vel ante. Aliquam tincidunt, purus sit amet congue placerat, lacus mauris rhoncus nisl, nec ornare libero purus eget augue. In sed dui placerat nisl cursus aliquet. Integer nisl lorem, maximus et viverra non, aliquet vel arcu. Cras ullamcorper, arcu id molestie scelerisque, est turpis interdum mauris, sit amet pretium mi lectus at metus. Phasellus ornare odio in ipsum faucibus, et tempus est porttitor. Nullam sollicitudin eleifend mi at semper. Vivamus vel neque nec magna lacinia commodo in vel ante. Aliquam tincidunt, purus sit amet congue placerat, lacus mauris rhoncus nisl, nec ornare libero purus eget augue.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_R_resize.html.png) | ![typeset Preview](typeset__html_CSS_Properties_R_resize.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_R_resize.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_R_resize.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_R_resize.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_R_resize.html.pdf) |

## 🔬 RIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/R/right.html)

<details>
    <summary>
        View RIGHT Code
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
  <span class="hljs-attribute">right</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.box--negative</span> {
  <span class="hljs-attribute">right</span>: -<span class="hljs-number">50px</span>;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_R_right.html.png) | ![typeset Preview](typeset__html_CSS_Properties_R_right.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_R_right.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_R_right.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_R_right.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_R_right.html.pdf) |


