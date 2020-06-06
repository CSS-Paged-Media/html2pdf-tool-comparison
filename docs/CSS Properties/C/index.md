---
layout: details
title: C
permalink: /CSS-Properties/C/
description: 
---



## 🔬 CAPTION-SIDE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/caption-side.html)

<details>
    <summary>
        View CAPTION-SIDE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_caption-side --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        #example1 {
  caption-side: bottom;
}

#example2 {
  caption-side: top;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h1&gt;The caption-side Property&lt;/h1&gt;
&lt;p&gt;The caption-side property specifies the placement of a table caption:&lt;/p&gt;

&lt;h2&gt;caption-side: bottom:&lt;/h2&gt;
&lt;table id=&quot;example1&quot; border=&quot;1&quot;&gt;
&lt;caption&gt;Table 1.1 Customers&lt;/caption&gt;
&lt;tr&gt;
  &lt;th&gt;Company&lt;/th&gt;
  &lt;th&gt;Contact&lt;/th&gt;
  &lt;th&gt;Country&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Alfreds Futterkiste&lt;/td&gt;
  &lt;td&gt;Maria Anders&lt;/td&gt;
  &lt;td&gt;Germany&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Berglunds snabbk&ouml;p&lt;/td&gt;
  &lt;td&gt;Christina Berglund&lt;/td&gt;
  &lt;td&gt;Sweden&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Centro comercial Moctezuma&lt;/td&gt;
  &lt;td&gt;Francisco Chang&lt;/td&gt;
  &lt;td&gt;Mexico&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Ernst Handel&lt;/td&gt;
  &lt;td&gt;Roland Mendel&lt;/td&gt;
  &lt;td&gt;Austria&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

&lt;h2&gt;caption-side: top (default):&lt;/h2&gt;
&lt;table id=&quot;example2&quot; border=&quot;1&quot;&gt;
&lt;caption&gt;Table 1.1 Customers&lt;/caption&gt;
&lt;tr&gt;
  &lt;th&gt;Company&lt;/th&gt;
  &lt;th&gt;Contact&lt;/th&gt;
  &lt;th&gt;Country&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Alfreds Futterkiste&lt;/td&gt;
  &lt;td&gt;Maria Anders&lt;/td&gt;
  &lt;td&gt;Germany&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Berglunds snabbk&ouml;p&lt;/td&gt;
  &lt;td&gt;Christina Berglund&lt;/td&gt;
  &lt;td&gt;Sweden&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Centro comercial Moctezuma&lt;/td&gt;
  &lt;td&gt;Francisco Chang&lt;/td&gt;
  &lt;td&gt;Mexico&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td&gt;Ernst Handel&lt;/td&gt;
  &lt;td&gt;Roland Mendel&lt;/td&gt;
  &lt;td&gt;Austria&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_caption-side.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_caption-side.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_caption-side.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_caption-side.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_caption-side.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_caption-side.html.pdf) |

## 🔬 CARET-COLOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/caret-color.html)

<details>
    <summary>
        View CARET-COLOR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_caret-color --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example1 {
  caret-color: red;
}

.example2 {
  caret-color: transparent;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The caret-color Property&lt;/h1&gt;

        &lt;input value=&quot;Default caret color&quot;&gt;&lt;br&gt;&lt;br&gt;
        
        &lt;input class=&quot;example1&quot; value=&quot;Custom caret color&quot;&gt;&lt;br&gt;&lt;br&gt;
        
        &lt;input class=&quot;example2&quot; value=&quot;Transparent caret color&quot;&gt;
        
        &lt;p contenteditable class=&quot;example1&quot;&gt;This paragraph can be edited. Its caret has a custom color as well.&lt;/p&gt;
        
        &lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; Edge and Safari 10 and earlier do not support the caret-color property.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_caret-color.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_caret-color.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_caret-color.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_caret-color.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_caret-color.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_caret-color.html.pdf) |

## 🔬 CLEAR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/clear.html)

<details>
    <summary>
        View CLEAR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/css/css_float_clear.asp --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .div1 {
  float: left;
  width: 100px;
  height: 50px;
  margin: 10px;
  border: 3px solid #73AD21;
}

.div2 {
  border: 1px solid red;
}

.div3 {
  float: left;
  width: 100px;
  height: 50px;
  margin: 10px;
  border: 3px solid #73AD21;
}

.div4 {
  border: 1px solid red;
  clear: left;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Without clear&lt;/h2&gt;
        &lt;div class=&quot;div1&quot;&gt;div1&lt;/div&gt;
        &lt;div class=&quot;div2&quot;&gt;div2 - Notice that div2 is after div1 in the HTML code. However, since div1 floats to the left, the text in div2 flows around div1.&lt;/div&gt;
        &lt;br&gt;&lt;br&gt;
        
        &lt;h2&gt;With clear&lt;/h2&gt;
        &lt;div class=&quot;div3&quot;&gt;div3&lt;/div&gt;
        &lt;div class=&quot;div4&quot;&gt;div4 - Here, clear: left; moves div4 down below the floating div3. The value &quot;left&quot; clears elements floated to the left. You can also clear &quot;right&quot; and &quot;both&quot;.&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_clear.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_clear.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_clear.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_clear.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_clear.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_clear.html.pdf) |

## 🔬 CLIP-PATH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/clip-path.html)

<details>
    <summary>
        View CLIP-PATH Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_clip-path --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        img {
  clip-path: circle(50%);
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;img src=&quot;https://www.w3schools.com/cssref/w3css.gif&quot; width=&quot;100&quot; height=&quot;140&quot;&gt;

        &lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; Edge does not support clip-path on HTML elements (only on SVG elements).&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_clip-path.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_clip-path.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_clip-path.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_clip-path.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_clip-path.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_clip-path.html.pdf) |

## 🔬 COLOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/color.html)

<details>
    <summary>
        View COLOR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/color/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .named { color: aqua; }

.hex { color: #00FFFF; }

.rgba { color: rgba(0, 255, 255, .5); }

.hsla { color: hsla(180, 100%, 50%, .5); }


/* Styling for Pen, unrelated to color */

body { 
  font-family: serif;
  font-size: 2.5em;
}

p {
  min-width: 50%;
  text-align: center;
  margin: .5em 0;
  text-transform: uppercase;
}

.demo {
  width: 50%;
  margin: 0 auto;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;demo&quot;&gt;
            &lt;p class=&quot;named&quot;&gt;Named Color&lt;/p&gt; &lt;!-- aqua --&gt;
            &lt;p class=&quot;hex&quot;&gt;Hex Color&lt;/p&gt; &lt;!-- #00FFFF --&gt;
            &lt;p class=&quot;rgba&quot;&gt;RGBa Color&lt;/p&gt; &lt;!-- rgba(0, 255, 255, .5) --&gt;
            &lt;p class=&quot;hsla&quot;&gt;HSLa Color&lt;/p&gt; &lt;!-- hsla(180, 100%, 50%, .5) --&gt;
            &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_color.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_color.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_color.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_color.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_color.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_color.html.pdf) |

## 🔬 COLUMN-COUNT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-count.html)

<details>
    <summary>
        View COLUMN-COUNT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-count/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-column-count: 4;
  -moz-column-count: 4;
  column-count: 4;
  -webkit-column-gap: 3em;
  -moz-column-gap: 3em;
  column-gap: 3em;
}

body {
  font-size: 12px;
  font-family: 'Georgia', serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 2em 1em 0;
}

.fa {
  font-size: 3em;
  text-align: center;
  margin-bottom: 0.5em;
  display: block;
  color: #2c3e50;
}

p {
  margin-bottom: 1.5em;
  text-align: center;
}
p:first-line {
  font-variant: small-caps;
  font-size: 1.2em;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;example&quot;&gt;
            &lt;i class=&quot;fa fa-mortar-board&quot;&gt;&lt;/i&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et.&lt;/p&gt;
            &lt;i class=&quot;fa fa-bank&quot;&gt;&lt;/i&gt;
            &lt;p&gt; Nulla vitae magna sed sapien ultricies dapibus a non libero. Fusce lobortis adipiscing purus vel rhoncus.&lt;/p&gt;
            &lt;i class=&quot;fa fa-life-ring&quot;&gt;&lt;/i&gt;
            &lt;p&gt;Proin blandit, tortor quis tristique porta, nisl est rhoncus turpis, non interdum nibh ligula sit amet dolor.&lt;/p&gt;
            &lt;i class=&quot;fa fa-bolt&quot;&gt;&lt;/i&gt;
            &lt;p&gt;Sed sagittis aliquam nulla vel viverra. Sed at augue eros. Nam tincidunt mi eu malesuada molestie.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-count.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-count.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-count.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-count.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-count.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-count.html.pdf) |

## 🔬 COLUMN-FILL

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-fill.html)

<details>
    <summary>
        View COLUMN-FILL Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-fill/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-columns: 4;
  -moz-columns: 4;
  columns: 4;
  height: 105px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0 0.5em;
}

.example-balance {
  -webkit-column-fill: balance;
  -moz-column-fill: balance;
  column-fill: balance;
  margin-bottom: 1em;
}

.example-auto {
  -webkit-column-fill: auto;
  -moz-column-fill: auto;
  column-fill: auto;
}

body {
  font-size: 12px;
  font-family: serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 1em;
}

code {
  font-family: &quot;Courier New&quot;, monospace;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;code&gt;column-fill: balance;&lt;/code&gt;
        &lt;div class=&quot;example example-balance&quot;&gt;
          &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, placerat at hendrerit nec, vulputate consectetur nisi. Morbi scelerisque lectus id sapien laoreet accumsan. Nunc eget tincidunt ligula, eget suscipit tellus. Sed iaculis nibh gravida faucibus porta. Sed lacinia tristique elementum. Etiam odio sem, dapibus eu tempus vel, consequat non turpis.&lt;/p&gt;
        
        &lt;/div&gt;
        &lt;code&gt;column-fill: auto;&lt;/code&gt;
        &lt;div class=&quot;example example-auto&quot;&gt;
          &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, placerat at hendrerit nec, vulputate consectetur nisi. Morbi scelerisque lectus id sapien laoreet accumsan. Nunc eget tincidunt ligula, eget suscipit tellus. Sed iaculis nibh gravida faucibus porta. Sed lacinia tristique elementum. Etiam odio sem, dapibus eu tempus vel, consequat non turpis.&lt;/p&gt;
        &lt;/div&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-fill.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-fill.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-fill.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-fill.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-fill.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-fill.html.pdf) |

## 🔬 COLUMN-GAP

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-gap.html)

<details>
    <summary>
        View COLUMN-GAP Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-gap/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-columns: 2;
  -moz-columns: 2;
  columns: 2;
  -webkit-column-gap: 5em;
  -moz-column-gap: 5em;
  column-gap: 5em;
  max-width: 450px;
  margin: 3em auto 0;
}

body {
  font-size: 12px;
  font-family: serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 1em;
}

p {
  margin-bottom: 1.3em;
  text-align: justify;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;example&quot;&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt; Nulla vitae magna sed sapien ultricies dapibus a non libero. Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Cras porta bibendum orci nec dapibus. &lt;/p&gt;
            &lt;p&gt;Proin blandit, tortor quis tristique porta, nisl est rhoncus turpis, non interdum nibh ligula sit amet dolor. Vestibulum tempus magna auctor purus elementum congue.&lt;/p&gt;
            &lt;p&gt;Sed sagittis aliquam nulla vel viverra. Sed at augue eros. Nam tincidunt mi eu malesuada molestie.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-gap.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-gap.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-gap.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-gap.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-gap.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-gap.html.pdf) |

## 🔬 COLUMN-RULE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-rule.html)

<details>
    <summary>
        View COLUMN-RULE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-rule/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-columns: 3 150px;
  -moz-columns: 3 150px;
  columns: 3 150px;
  -webkit-column-gap: 5em;
  -moz-column-gap: 5em;
  column-gap: 5em;
  -webkit-column-rule-width: 4px;
  -moz-column-rule-width: 4px;
  column-rule-width: 4px;
  -webkit-column-rule-color: #e74c3c;
  -moz-column-rule-color: #e74c3c;
  column-rule-color: #e74c3c;
  margin: 2em auto 7em;
}

.example-dotted {
  -webkit-column-rule-style: dotted;
  -moz-column-rule-style: dotted;
  column-rule-style: dotted;
}

.example-dashed {
  -webkit-column-rule-style: dashed;
  -moz-column-rule-style: dashed;
  column-rule-style: dashed;
}

.example-solid {
  -webkit-column-rule-style: solid;
  -moz-column-rule-style: solid;
  column-rule-style: solid;
}

.example-double {
  -webkit-column-rule-style: double;
  -moz-column-rule-style: double;
  column-rule-style: double;
}

.example-groove {
  -webkit-column-rule-style: groove;
  -moz-column-rule-style: groove;
  column-rule-style: groove;
}

.example-ridge {
  -webkit-column-rule-style: ridge;
  -moz-column-rule-style: ridge;
  column-rule-style: ridge;
}

.example-inset {
  -webkit-column-rule-style: inset;
  -moz-column-rule-style: inset;
  column-rule-style: inset;
}

.example-outset {
  -webkit-column-rule-style: outset;
  -moz-column-rule-style: outset;
  column-rule-style: outset;
}

.example-none {
  -webkit-column-rule-style: none;
  -moz-column-rule-style: none;
  column-rule-style: none;
}

.example-hidden {
  -webkit-column-rule-style: hidden;
  -moz-column-rule-style: hidden;
  column-rule-style: hidden;
}

body {
  font-size: 12px;
  font-family: 'Georgia', serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 1em;
}

p {
  margin-bottom: 1.3em;
  text-align: justify;
}

h1 {
  font-size: 4em;
  padding: 0.5em 0;
  text-align: center;
  font-family: &quot;Courier New&quot;, monospace;
}

code {
  font-family: &quot;Courier New&quot;, monospace;
  background: white;
  border-radius: 0.2em;
  padding: 0 0.2em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class='example example-dotted'&gt;
            &lt;h1&gt;dotted&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: dotted;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-dashed'&gt;
            &lt;h1&gt;dashed&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: dashed;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-solid'&gt;
            &lt;h1&gt;solid&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: solid;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-double'&gt;
            &lt;h1&gt;double&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: double;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-groove'&gt;
            &lt;h1&gt;groove&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: groove;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-ridge'&gt;
            &lt;h1&gt;ridge&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: ridge;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-inset'&gt;
            &lt;h1&gt;inset&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: inset;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-outset'&gt;
            &lt;h1&gt;outset&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: outset;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-none'&gt;
            &lt;h1&gt;none&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: none;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class='example example-hidden'&gt;
            &lt;h1&gt;hidden&lt;/h1&gt;
            &lt;p&gt;This example uses &lt;code&gt;column-rule-style: hidden;&lt;/code&gt;.&lt;/p&gt;
            &lt;p&gt;Nunc a vulputate turpis. Duis ornare lacus magna, vitae tincidunt leo elementum et. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
            &lt;p&gt;Fusce lobortis adipiscing purus vel rhoncus. Proin sit amet euismod justo, egestas auctor eros. Nulla vitae magna sed sapien ultricies dapibus a non libero. Sed posuere metus a pellentesque mattis.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-rule.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-rule.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-rule.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-rule.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-rule.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-rule.html.pdf) |

## 🔬 COLUMN-SPAN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-span.html)

<details>
    <summary>
        View COLUMN-SPAN Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-span/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-columns: 125px;
  -moz-columns: 125px;
  columns: 125px;
  max-width: 300px;
  margin: 2em auto 0;
}

hr {
  -webkit-column-span: all;
  -moz-column-span: all;
  column-span: all;
  margin: 1em auto;
  border-style: dashed;
  border-width: 1px 0 0;
  border-top-color: #e74c3c;
}

body {
  font-size: 12px;
  font-family: serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
}

h1 {
  font-size: 7em;
  text-align: center;
  font-weight: 400;
  margin-bottom: 0.15em;
  color: #2c3e50;
}

ul {
  list-style: square;
  margin-left: 2em;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;example&quot;&gt;
            &lt;h1&gt;A&lt;/h1&gt;
            &lt;ul&gt;
              &lt;li&gt;aardvark&lt;/li&gt;
              &lt;li&gt;aardwolf&lt;/li&gt;
              &lt;li&gt;aasvogel&lt;/li&gt;
              &lt;li&gt;abacuses&lt;/li&gt;
              &lt;li&gt;abalones&lt;/li&gt;
            &lt;/ul&gt;
            &lt;hr&gt;
          
            &lt;h1&gt;B&lt;/h1&gt;
            &lt;ul&gt;
              &lt;li&gt;baalisms&lt;/li&gt;
              &lt;li&gt;baaskaap&lt;/li&gt;
              &lt;li&gt;baaskaps&lt;/li&gt;
              &lt;li&gt;baasskap&lt;/li&gt;
              &lt;li&gt;babassus&lt;/li&gt;
            &lt;/ul&gt;
          
            &lt;hr&gt;
            &lt;h1&gt;C&lt;/h1&gt;
            &lt;ul&gt;
              &lt;li&gt;cabalism&lt;/li&gt;
              &lt;li&gt;cabalist&lt;/li&gt;
              &lt;li&gt;caballed&lt;/li&gt;
              &lt;li&gt;cabarets&lt;/li&gt;
              &lt;li&gt;cabbaged&lt;/li&gt;
            &lt;/ul&gt;  
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-span.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-span.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-span.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-span.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-span.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-span.html.pdf) |

## 🔬 COLUMN-WIDTH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/column-width.html)

<details>
    <summary>
        View COLUMN-WIDTH Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/column-width/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-column-width: 120px;
  -moz-column-width: 120px;
  column-width: 120px;
}

body {
  font-size: 12px;
  font-family: serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 1em;
}

.tag {
  text-decoration: none;
  display: block;
  background: white;
  color: #333;
  padding: 0.3em 0.75em;
  border-radius: 0.2em;
  margin-bottom: 0.5em;
}
.tag:hover {
  background: #34495e;
  color: white;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;example&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;ipsum&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;dolor&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;sit amet&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;consectetuer&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;adipiscing&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;elit&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;aliquam&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;tincidunt&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;mauris&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;eu risu&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;vestibulum&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;auctor&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;dapibus neque&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;vulputate&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;turpis&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;duis&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;ornare&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;lacus&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;magna&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;vitae&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;tincidunt&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;leo&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;elementum&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;sed posuere&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;metus&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;pellentesque&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;mattis&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;   
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_column-width.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_column-width.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_column-width.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_column-width.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_column-width.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_column-width.html.pdf) |

## 🔬 COLUMNS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/columns.html)

<details>
    <summary>
        View COLUMNS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/columns/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .example {
  -webkit-columns: 4 150px;
  -moz-columns: 4 150px;
  columns: 4 150px;
  -webkit-column-gap: 2em;
  -moz-column-gap: 2em;
  column-gap: 2em;
}

body {
  font-size: 12px;
  font-family: 'Georgia', serif;
  font-weight: 400;
  line-height: 1.45;
  color: #333;
  background: #ecf0f1;
  padding: 1em;
}

h1 {
  -webkit-column-span: all;
  -moz-column-span: all;
  column-span: all;
  font-size: 2em;
  margin-bottom: 0.5em;
  line-height: 1.2;
}

p {
  margin-bottom: 1.3em;
  text-align: justify;
}

.lead {
  font-variant: small-caps;
  font-size: 1.3em;
  text-align: left;
  font-style: italic;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;example&quot;&gt;
            &lt;h1&gt;Sed dignissim lacinia nunc&lt;/h1&gt;
            &lt;p class=&quot;lead&quot;&gt;Aenean quam. In scelerisque sem at dolor. Sed convallis tristique sem.&lt;/p&gt;
            &lt;p&gt;Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. &lt;/p&gt;
            &lt;p&gt;Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.  &lt;/p&gt;
          
            &lt;p&gt;Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. &lt;/p&gt;
          
            &lt;p&gt;Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus.  &lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_columns.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_columns.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_columns.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_columns.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_columns.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_columns.html.pdf) |

## 🔬 CONTENT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/content.html)

<details>
    <summary>
        View CONTENT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_content --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        a::after {
  content: &quot; (&quot; attr(href) &quot;)&quot;;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The content Property&lt;/h1&gt;
        &lt;p&gt;The content property is used to insert generated content.&lt;/p&gt;
        
        &lt;p&gt;Look at our:&lt;/p&gt;
        &lt;p&gt;
        &lt;a href=&quot;https://www.w3schools.com/css/&quot;&gt;CSS Tutorial&lt;/a&gt;&lt;br&gt;
        &lt;a href=&quot;https://www.w3schools.com/cssref/&quot;&gt;CSS Reference&lt;/a&gt;
        &lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_content.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_content.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_content.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_content.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_content.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_content.html.pdf) |

## 🔬 COUNTER-INCREMENT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/counter-increment.html)

<details>
    <summary>
        View COUNTER-INCREMENT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_counter-reset --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  /* Set &quot;my-sec-counter&quot; to 0 */
  counter-reset: my-sec-counter;
}

h2::before {
  /* Increment &quot;my-sec-counter&quot; by 1 */
  counter-increment: my-sec-counter;
  content: &quot;Section &quot; counter(my-sec-counter) &quot;. &quot;;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;HTML Tutorial&lt;/h2&gt;
        &lt;h2&gt;CSS Tutorial&lt;/h2&gt;
        &lt;h2&gt;JavaScript Tutorial&lt;/h2&gt;
        &lt;h2&gt;Bootstrap Tutorial&lt;/h2&gt;
        &lt;h2&gt;SQL Tutorial&lt;/h2&gt;
        &lt;h2&gt;PHP Tutorial&lt;/h2&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_counter-increment.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_counter-increment.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_counter-increment.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_counter-increment.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_counter-increment.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_counter-increment.html.pdf) |

## 🔬 COUNTER-RESET

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/counter-reset.html)

<details>
    <summary>
        View COUNTER-RESET Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/c/counter-reset/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        * {
  box-sizing: border-box;
}

article {
  padding: 1em;
  width: 100%;
  max-width: 700px;
  margin: 0 auto;
  
  counter-reset: section;
}

section {
  counter-increment: section;
}

section h2:before {
  content: counter(section) '. ';
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article&gt;
            &lt;section&gt;
            &lt;h2&gt;Papa-bear&lt;/h2&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
          &lt;/section&gt;
          &lt;section&gt;
            &lt;h2&gt;Mama-bear&lt;/h2&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
          &lt;/section&gt;
          &lt;section&gt;
            &lt;h2&gt;Baby-bear&lt;/h2&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
          &lt;/section&gt;
          &lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_counter-reset.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_counter-reset.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_counter-reset.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_counter-reset.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_counter-reset.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_counter-reset.html.pdf) |

## 🔬 CURSOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/C/cursor.html)

<details>
    <summary>
        View CURSOR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_cursor --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
       .alias {cursor: alias;}
.all-scroll {cursor: all-scroll;}
.auto {cursor: auto;}
.cell {cursor: cell;}
.context-menu {cursor: context-menu;}
.col-resize {cursor: col-resize;}
.copy {cursor: copy;}
.crosshair {cursor: crosshair;}
.default {cursor: default;}
.e-resize {cursor: e-resize;}
.ew-resize {cursor: ew-resize;}
.grab {cursor: -webkit-grab; cursor: grab;}
.grabbing {cursor: -webkit-grabbing; cursor: grabbing;}
.help {cursor: help;}
.move {cursor: move;}
.n-resize {cursor: n-resize;}
.ne-resize {cursor: ne-resize;}
.nesw-resize {cursor: nesw-resize;}
.ns-resize {cursor: ns-resize;}
.nw-resize {cursor: nw-resize;}
.nwse-resize {cursor: nwse-resize;}
.no-drop {cursor: no-drop;}
.none {cursor: none;}
.not-allowed {cursor: not-allowed;}
.pointer {cursor: pointer;}
.progress {cursor: progress;}
.row-resize {cursor: row-resize;}
.s-resize {cursor: s-resize;}
.se-resize {cursor: se-resize;}
.sw-resize {cursor: sw-resize;}
.text {cursor: text;}
.url {cursor: url(myBall.cur),auto;}
.w-resize {cursor: w-resize;}
.wait {cursor: wait;}
.zoom-in {cursor: zoom-in;}
.zoom-out {cursor: zoom-out;} 
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The cursor Property&lt;/h1&gt;
        &lt;p&gt;Mouse over the words to change the mouse cursor.&lt;/p&gt;
        
        &lt;p class=&quot;alias&quot;&gt;alias&lt;/p&gt;
        &lt;p class=&quot;all-scroll&quot;&gt;all-scroll&lt;/p&gt;
        &lt;p class=&quot;auto&quot;&gt;auto&lt;/p&gt;
        &lt;p class=&quot;cell&quot;&gt;cell&lt;/p&gt;
        &lt;p class=&quot;context-menu&quot;&gt;context-menu&lt;/p&gt;
        &lt;p class=&quot;col-resize&quot;&gt;col-resize&lt;/p&gt;
        &lt;p class=&quot;copy&quot;&gt;copy&lt;/p&gt;
        &lt;p class=&quot;crosshair&quot;&gt;crosshair&lt;/p&gt;
        &lt;p class=&quot;default&quot;&gt;default&lt;/p&gt;
        &lt;p class=&quot;e-resize&quot;&gt;e-resize&lt;/p&gt;
        &lt;p class=&quot;ew-resize&quot;&gt;ew-resize&lt;/p&gt;
        &lt;p class=&quot;grab&quot;&gt;grab&lt;/p&gt;
        &lt;p class=&quot;grabbing&quot;&gt;grabbing&lt;/p&gt;
        &lt;p class=&quot;help&quot;&gt;help&lt;/p&gt;
        &lt;p class=&quot;move&quot;&gt;move&lt;/p&gt;
        &lt;p class=&quot;n-resize&quot;&gt;n-resize&lt;/p&gt;
        &lt;p class=&quot;ne-resize&quot;&gt;ne-resize&lt;/p&gt;
        &lt;p class=&quot;nesw-resize&quot;&gt;nesw-resize&lt;/p&gt;
        &lt;p class=&quot;ns-resize&quot;&gt;ns-resize&lt;/p&gt;
        &lt;p class=&quot;nw-resize&quot;&gt;nw-resize&lt;/p&gt;
        &lt;p class=&quot;nwse-resize&quot;&gt;nwse-resize&lt;/p&gt;
        &lt;p class=&quot;no-drop&quot;&gt;no-drop&lt;/p&gt;
        &lt;p class=&quot;none&quot;&gt;none&lt;/p&gt;
        &lt;p class=&quot;not-allowed&quot;&gt;not-allowed&lt;/p&gt;
        &lt;p class=&quot;pointer&quot;&gt;pointer&lt;/p&gt;
        &lt;p class=&quot;progress&quot;&gt;progress&lt;/p&gt;
        &lt;p class=&quot;row-resize&quot;&gt;row-resize&lt;/p&gt;
        &lt;p class=&quot;s-resize&quot;&gt;s-resize&lt;/p&gt;
        &lt;p class=&quot;se-resize&quot;&gt;se-resize&lt;/p&gt;
        &lt;p class=&quot;sw-resize&quot;&gt;sw-resize&lt;/p&gt;
        &lt;p class=&quot;text&quot;&gt;text&lt;/p&gt;
        &lt;p class=&quot;url&quot;&gt;url&lt;/p&gt;
        &lt;p class=&quot;w-resize&quot;&gt;w-resize&lt;/p&gt;
        &lt;p class=&quot;wait&quot;&gt;wait&lt;/p&gt;
        &lt;p class=&quot;zoom-in&quot;&gt;zoom-in&lt;/p&gt;
        &lt;p class=&quot;zoom-out&quot;&gt;zoom-out&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_C_cursor.html.png) | ![typeset Preview](typeset__html_CSS_Properties_C_cursor.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_C_cursor.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_C_cursor.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_C_cursor.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_C_cursor.html.pdf) |


