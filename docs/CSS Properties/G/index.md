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
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/g/grid-row-column/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 1fr);
  grid-gap: 10px;
  background: #eee;
  border: 1px solid #ccc;
  padding: 10px;
}

.grid &gt; div {
  min-height: 100px;
  background: white;
  display: grid;
  place-items: center;
}

.grid &gt; div::after {
  content: attr(style);
  white-space: pre-wrap;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;grid&quot;&gt;
            &lt;div style=&quot;
              grid-column: 1 / 3;
              grid-row: 2 / 3;
            &quot;&gt;
            &lt;/div&gt;
            &lt;div style=&quot;
              grid-column: 3 / -1;
              grid-row: 1 / 2;
            &quot;&gt;
            &lt;/div&gt;
            &lt;div style=&quot;
              grid-column: 3 / 4;
              grid-row: 2 / 4;
            &quot;&gt;
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_G_grid-row-column.html.png) | ![typeset Preview](typeset__html_CSS_Properties_G_grid-row-column.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_G_grid-row-column.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_G_grid-row-column.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_G_grid-row-column.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_G_grid-row-column.html.pdf) |

## 🔬 GRID-TEMPLATE-COLUMNS-ROWS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/G/grid-template-columns-rows.html)

<details>
    <summary>
        View GRID-TEMPLATE-COLUMNS-ROWS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_grid-template-rows https://www.w3schools.com/cssref/tryit.asp?filename=trycss_grid-template-columns --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 100px 300px;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container &gt; div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

        .grid-container-col {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container-col &gt; div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The grid-template-rows Property&lt;/h1&gt;

        &lt;p&gt;Use the &lt;em&gt;grid-template-rows&lt;/em&gt; property to define the size of the rows in a grid layout.&lt;/p&gt;
        &lt;p&gt;The first row in this grid is 100px high, and the second row is 300px high:&lt;/p&gt;
        
        &lt;div class=&quot;grid-container&quot;&gt;
          &lt;div class=&quot;item1&quot;&gt;1&lt;/div&gt;
          &lt;div class=&quot;item2&quot;&gt;2&lt;/div&gt;
          &lt;div class=&quot;item3&quot;&gt;3&lt;/div&gt;  
          &lt;div class=&quot;item4&quot;&gt;4&lt;/div&gt;
          &lt;div class=&quot;item5&quot;&gt;5&lt;/div&gt;
          &lt;div class=&quot;item6&quot;&gt;6&lt;/div&gt;
          &lt;div class=&quot;item7&quot;&gt;7&lt;/div&gt;
          &lt;div class=&quot;item8&quot;&gt;8&lt;/div&gt;
        &lt;/div&gt;

        &lt;h1&gt;The grid-template-columns Property&lt;/h1&gt;

        &lt;p&gt;Use the &lt;em&gt;grid-template-columns&lt;/em&gt; property to define the number of columns in the grid layout.&lt;/p&gt;
        &lt;p&gt;This grid layout has four columns:&lt;/p&gt;
        
        &lt;div class=&quot;grid-container-col&quot;&gt;
          &lt;div class=&quot;item1&quot;&gt;1&lt;/div&gt;
          &lt;div class=&quot;item2&quot;&gt;2&lt;/div&gt;
          &lt;div class=&quot;item3&quot;&gt;3&lt;/div&gt;  
          &lt;div class=&quot;item4&quot;&gt;4&lt;/div&gt;
          &lt;div class=&quot;item5&quot;&gt;5&lt;/div&gt;
          &lt;div class=&quot;item6&quot;&gt;6&lt;/div&gt;
          &lt;div class=&quot;item7&quot;&gt;7&lt;/div&gt;
          &lt;div class=&quot;item8&quot;&gt;8&lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_G_grid-template-columns-rows.html.png) | ![typeset Preview](typeset__html_CSS_Properties_G_grid-template-columns-rows.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_G_grid-template-columns-rows.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_G_grid-template-columns-rows.html.pdf) |


