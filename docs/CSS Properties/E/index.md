---
layout: details
title: E
permalink: /CSS-Properties/E/
description: 
---



## 🔬 EMPTY-CELLS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/E/empty-cells.html)

<details>
    <summary>
        View EMPTY-CELLS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/e/empty-cells/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/* DEMO STYLES */</span>
<span class="hljs-selector-class">.table-show</span> {
  <span class="hljs-attribute">empty-cells</span>: show;
}

<span class="hljs-selector-class">.table-hide</span> {
  <span class="hljs-attribute">empty-cells</span>: hide;
}

<span class="hljs-comment">/* PRESENTATONAL STYLES */</span>
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">25px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
  <span class="hljs-attribute">font-family</span>: Helvetica;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">3em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">25px</span> auto;
}

<span class="hljs-selector-tag">td</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#fff</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#999</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span> <span class="hljs-number">15px</span>;
  <span class="hljs-attribute">color</span>: green;
  <span class="hljs-attribute">cursor</span>: pointer;
}

<span class="hljs-selector-tag">td</span><span class="hljs-selector-pseudo">:hover</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eaeaea</span>;
}

<span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">font-size</span>: .<span class="hljs-number">5em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Show Empty Cells<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-show"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Hide The Cells<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-hide"</span>&gt;</span>
           <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-symbol">&amp;check;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_E_empty-cells.html.png) | ![typeset Preview](typeset__html_CSS_Properties_E_empty-cells.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_E_empty-cells.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_E_empty-cells.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_E_empty-cells.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_E_empty-cells.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_E_empty-cells.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_E_empty-cells.html.pdf) |


