---
layout: details
title: G
permalink: /CSS-Properties/G/
description: 
---



## 🔬 GRID-ROW-COLUMN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/G/grid-row-column.html)

<details>
    <summary>
        View GRID-ROW-COLUMN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/g/grid-row-column/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.grid</span> {
  <span class="hljs-attribute">display</span>: grid;
  <span class="hljs-attribute">grid-template-columns</span>: <span class="hljs-built_in">repeat</span>(<span class="hljs-number">3</span>, <span class="hljs-number">1</span>fr);
  <span class="hljs-attribute">grid-template-rows</span>: <span class="hljs-built_in">repeat</span>(<span class="hljs-number">3</span>, <span class="hljs-number">1</span>fr);
  <span class="hljs-attribute">grid-gap</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eee</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
}

<span class="hljs-selector-class">.grid</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">background</span>: white;
  <span class="hljs-attribute">display</span>: grid;
  <span class="hljs-attribute">place-items</span>: center;
}

<span class="hljs-selector-class">.grid</span> &gt; <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">::after</span> {
  <span class="hljs-attribute">content</span>: <span class="hljs-built_in">attr</span>(style);
  <span class="hljs-attribute">white-space</span>: pre-wrap;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"grid"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"
              grid-column: 1 / 3;
              grid-row: 2 / 3;
            "</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"
              grid-column: 3 / -1;
              grid-row: 1 / 2;
            "</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"
              grid-column: 3 / 4;
              grid-row: 2 / 4;
            "</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_G_grid-row-column.html.png) | ![typeset Preview](typeset__html_CSS_Properties_G_grid-row-column.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_G_grid-row-column.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_G_grid-row-column.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_G_grid-row-column.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_G_grid-row-column.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_G_grid-row-column.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_G_grid-row-column.html.pdf) |

## 🔬 GRID-TEMPLATE-COLUMNS-ROWS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/G/grid-template-columns-rows.html)

<details>
    <summary>
        View GRID-TEMPLATE-COLUMNS-ROWS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_grid-template-rows https://www.w3schools.com/cssref/tryit.asp?filename=trycss_grid-template-columns --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.grid-container</span> {
  <span class="hljs-attribute">display</span>: grid;
  <span class="hljs-attribute">grid-template-columns</span>: auto auto auto auto;
  <span class="hljs-attribute">grid-template-rows</span>: <span class="hljs-number">100px</span> <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">grid-gap</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#2196F3</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
}

<span class="hljs-selector-class">.grid-container</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">rgba</span>(<span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">0.8</span>);
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">30px</span>;
}

        <span class="hljs-selector-class">.grid-container-col</span> {
  <span class="hljs-attribute">display</span>: grid;
  <span class="hljs-attribute">grid-template-columns</span>: auto auto auto auto;
  <span class="hljs-attribute">grid-gap</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#2196F3</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
}

<span class="hljs-selector-class">.grid-container-col</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-built_in">rgba</span>(<span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">0.8</span>);
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">30px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The grid-template-rows Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Use the <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>grid-template-rows<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> property to define the size of the rows in a grid layout.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The first row in this grid is 100px high, and the second row is 300px high:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"grid-container"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item1"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item2"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item3"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>  
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item4"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item5"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item6"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item7"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item8"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The grid-template-columns Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Use the <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>grid-template-columns<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> property to define the number of columns in the grid layout.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This grid layout has four columns:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"grid-container-col"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item1"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item2"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item3"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>  
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item4"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item5"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item6"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item7"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item8"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_G_grid-template-columns-rows.html.png) | ![typeset Preview](typeset__html_CSS_Properties_G_grid-template-columns-rows.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_G_grid-template-columns-rows.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_G_grid-template-columns-rows.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) |


