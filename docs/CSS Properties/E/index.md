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
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/e/empty-cells/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /* DEMO STYLES */
.table-show {
  empty-cells: show;
}

.table-hide {
  empty-cells: hide;
}

/* PRESENTATONAL STYLES */
body {
  background: #333;
  padding: 25px 0;
  color: #fff;
  font-family: Helvetica;
  font-size: 3em;
  text-align: center;
}

table {
  margin: 25px auto;
}

td {
  background: #fff;
  border: 1px solid #999;
  padding: 10px 15px;
  color: green;
  cursor: pointer;
}

td:hover {
  background: #eaeaea;
}

h1 {
  font-size: .5em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Show Empty Cells&lt;/h1&gt;

        &lt;table class=&quot;table-show&quot;&gt;
          &lt;tbody&gt;
            &lt;tr&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
              &lt;td&gt;&lt;/td&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
            &lt;/tr&gt;
          &lt;/tbody&gt;
        &lt;/table&gt;
        
        &lt;h1&gt;Hide The Cells&lt;/h1&gt;
        
        &lt;table class=&quot;table-hide&quot;&gt;
           &lt;tbody&gt;
            &lt;tr&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
              &lt;td&gt;&lt;/td&gt;
              &lt;td&gt;&amp;check;&lt;/td&gt;
            &lt;/tr&gt;
          &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_E_empty-cells.html.png) | ![typeset Preview](typeset__html_CSS_Properties_E_empty-cells.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_E_empty-cells.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_E_empty-cells.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_E_empty-cells.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_E_empty-cells.html.pdf) |


