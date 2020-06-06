---
layout: details
title: I
permalink: /CSS-Properties/I/
description: 
---



## 🔬 IMAGE-RENDERING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/image-rendering.html)

<details>
    <summary>
        View IMAGE-RENDERING Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/i/image-rendering/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .pixelated {
  -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -moz-crisp-edges;
      image-rendering: pixelated;
}

.resize {
  width: 45%;
  clear: none;
  float: left;
}
.resize:last-of-type {
  float: right;
}
.resize img {
  width: 100%;
}

img {
  margin-bottom: 20px;
  max-width: 100%;
}

body {
  background-color: #333;
  color: #fafafa;
  padding: 20px;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;original&quot;&gt;
            &lt;h1&gt;Original image size&lt;/h1&gt; 
            &lt;img src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png&quot; alt=&quot;&quot; /&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;resize&quot;&gt;
            &lt;h2&gt;&lt;code&gt;image-rendering: auto&lt;/code&gt;&lt;/h2&gt;
            &lt;img src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png&quot; alt=&quot;&quot; /&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;resize&quot;&gt;
            &lt;h2&gt;&lt;code&gt;image-rendering: pixelated&lt;/code&gt;&lt;/h2&gt;
            &lt;img class=&quot;pixelated&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png&quot; alt=&quot;&quot; /&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_I_image-rendering.html.png) | ![typeset Preview](typeset__html_CSS_Properties_I_image-rendering.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_I_image-rendering.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_I_image-rendering.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_I_image-rendering.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_I_image-rendering.html.pdf) |

## 🔬 INITIAL-LETTER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/initial-letter.html)

<details>
    <summary>
        View INITIAL-LETTER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/i/initial-letter/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5em;
  line-height: 1.5;
  padding: 50px 0;
}

article {
  width: 60%;
}

article::first-letter {
  -webkit-initial-letter: 4 5;
  initial-letter: 4 5;
  background: lightyellow;
  border: 10px solid #000;
  color: orange;
  font-weight: bold;
  margin-right: 1em;
  padding: 2em;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article&gt;It was the best of times, it was the worst of times, it was the age of wisdom, it was the age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despair, we had everything before us, we had nothing before us, we were all going direct to Heaven, we were all going direct the other way - in short, the period was so far like the present period, that some of its noisiest authorities insisted on its being received, for good or for evil, in the superlative degree of comparison only.&lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_I_initial-letter.html.png) | ![typeset Preview](typeset__html_CSS_Properties_I_initial-letter.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_I_initial-letter.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_I_initial-letter.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_I_initial-letter.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_I_initial-letter.html.pdf) |

## 🔬 ISOLATION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/isolation.html)

<details>
    <summary>
        View ISOLATION Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_isolation --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .a {
  background-color: lightgreen;
}
#b {
  width: 250px;
  height: 250px;
}
.c {
  width: 100px;
  height: 100px;
  border: 1px solid black;
  padding: 2px;
  mix-blend-mode: difference;
}
#d {
  isolation: auto;
}
#e {
  isolation: isolate;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h1&gt;The isolation Property&lt;/h1&gt;

&lt;div id=&quot;b&quot; class=&quot;a&quot;&gt;
  &lt;div id=&quot;d&quot;&gt;
  &lt;div class=&quot;a c&quot;&gt;div d: isolation: auto;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div id=&quot;e&quot;&gt;
  &lt;div class=&quot;a c&quot;&gt;div e: isolation: isolate;&lt;/div&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_I_isolation.html.png) | ![typeset Preview](typeset__html_CSS_Properties_I_isolation.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_I_isolation.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_I_isolation.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_I_isolation.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_I_isolation.html.pdf) |


