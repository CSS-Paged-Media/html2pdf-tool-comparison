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
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/filter/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        img { display: block; width: 90%; }

img {
  -webkit-filter: sepia(1);
  filter: sepia(1);
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;img src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/redwood-ukulele-top.jpg&quot; alt=&quot;ukulele&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_filter.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_filter.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_filter.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_filter.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_filter.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_filter.html.pdf) |

## 🔬 FLEX-BASIS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-basis.html)

<details>
    <summary>
        View FLEX-BASIS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-basis/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}

.flex-item {
  background: tomato;
  padding: 10px;
  border: 5px solid red;
  
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}

.flex1 { flex: 1 1 20em; }
.flex2 { flex: 2 2 20em; } 
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container&quot;&gt;
            &lt;li class=&quot;flex-item flex1&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item flex2&quot;&gt;2&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-basis.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-basis.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-basis.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-basis.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-basis.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-basis.html.pdf) |

## 🔬 FLEX-DIRECTION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-direction.html)

<details>
    <summary>
        View FLEX-DIRECTION Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-direction/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}

.row            { 
  -webkit-flex-direction: row; 
  flex-direction: row;
}

.row-reverse    { 
  -webkit-flex-direction: row-reverse; 
  flex-direction: row-reverse;
}  
.row-reverse li {
  background: gold;
}

.column { 
  -webkit-flex-direction: column; 
  flex-direction: column; 
  float: left;
}
.column li {
  background: deepskyblue;
}

.column-reverse { 
  -webkit-flex-direction: column-reverse; 
  flex-direction: column-reverse; 
  float: right;
}
.column-reverse li {
  background: lightgreen;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 50px;
  height: 50px;
  margin: 5px;
  
  line-height: 50px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container row&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container row-reverse&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container column&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container column-reverse&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-direction.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-direction.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-direction.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-direction.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-direction.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-direction.html.pdf) |

## 🔬 FLEX-FLOW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-flow.html)

<details>
    <summary>
        View FLEX-FLOW Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-flow/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}

h1 {
  padding-left: .5em; 
}

.shorthand { 
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-flex-direction: row;
  flex-direction: row;
}

.longhand { 
  -webkit-flex-flow: wrap row;
  flex-flow: wrap row;
  
}

.longhand li {
  background: deepskyblue;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 100px;
  height: 100px;
  margin: 10px;
  
  line-height: 100px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;flex-wrap: wrap; flex-direction: row;&lt;/h1&gt;
        &lt;ul class=&quot;flex-container longhand&quot;&gt;
          &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;h1&gt;flex-flow: row wrap;&lt;/h1&gt;
        &lt;ul class=&quot;flex-container shorthand&quot;&gt;
          &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
          &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-flow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-flow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-flow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-flow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-flow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-flow.html.pdf) |

## 🔬 FLEX-GROW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-grow.html)

<details>
    <summary>
        View FLEX-GROW Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-grow/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
    
  -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-align-items: stretch;
  align-items: stretch;
}

.flex-item:nth-of-type(1) { flex-grow: 1; }
.flex-item:nth-of-type(2) { flex-grow: 1; }
.flex-item:nth-of-type(3) { flex-grow: 2; }
.flex-item:nth-of-type(4) { flex-grow: 1; }
.flex-item:nth-of-type(5) { flex-grow: 1; }

.flex-item {
  
  background: tomato;
  border: 3px solid rgba(0,0,0,.2);
  line-height: 100px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-grow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-grow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-grow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-grow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-grow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-grow.html.pdf) |

## 🔬 FLEX-SHRINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-shrink.html)

<details>
    <summary>
        View FLEX-SHRINK Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-shrink/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}

.flex-item {
  background: tomato;
  padding: 10px;
  border: 5px solid red;
  
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}

.flex1 { flex: 1 1 20em; }
.flex2 { flex: 2 2 20em; } 
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container&quot;&gt;
            &lt;li class=&quot;flex-item flex1&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item flex2&quot;&gt;2&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-shrink.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-shrink.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-shrink.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-shrink.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-shrink.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-shrink.html.pdf) |

## 🔬 FLEX-WRAP

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex-wrap.html)

<details>
    <summary>
        View FLEX-WRAP Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex-wrap/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  border: 1px solid silver;
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}

.nowrap  { 
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.wrap    { 
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}  
.wrap li {
  background: gold;
}

.wrap-reverse         { 
  -webkit-flex-wrap: wrap-reverse;
  flex-wrap: wrap-reverse;
}  
.wrap-reverse li {
  background: deepskyblue;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 100px;
  height: 100px;
  margin: 10px;
  
  line-height: 100px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container nowrap&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;7&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;8&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container wrap&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;7&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;8&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container wrap-reverse&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;7&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;8&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex-wrap.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex-wrap.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex-wrap.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex-wrap.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex-wrap.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex-wrap.html.pdf) |

## 🔬 FLEX

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/flex.html)

<details>
    <summary>
        View FLEX Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/flex/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  display: flex;
  flex-wrap: wrap;
}
body &gt; * {
  background: #eee;
  padding: 2rem;
  text-align: center;
  border: 5px solid white;
}

.header,
.footer {
  flex: 1 100%;
}
.sidebar {
  flex: 1;
}
.main {
  flex: 2;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;header class=&quot;header&quot;&gt;Header&lt;/header&gt;
        &lt;main class=&quot;main&quot;&gt;Main&lt;/main&gt;
        &lt;aside class=&quot;sidebar&quot;&gt;Sidebar&lt;/aside&gt;
        &lt;footer class=&quot;footer&quot;&gt;Footer&lt;/footer&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_flex.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_flex.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_flex.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_flex.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_flex.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_flex.html.pdf) |

## 🔬 FLOAT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/float.html)

<details>
    <summary>
        View FLOAT Code
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
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Float&lt;/h2&gt;
        &lt;div class=&quot;div1&quot;&gt;div1&lt;/div&gt;
        &lt;div class=&quot;div2&quot;&gt;div2 - Notice that div2 is after div1 in the HTML code. However, since div1 floats to the left, the text in div2 flows around div1.&lt;/div&gt;
     
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_float.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_float.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_float.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_float.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_float.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_float.html.pdf) |

## 🔬 FONT-FAMILY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-family.html)

<details>
    <summary>
        View FONT-FAMILY Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_font-family --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .serif {
  font-family: &quot;Times New Roman&quot;, Times, serif;
}

.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}

.monospace {
  font-family: &quot;Lucida Console&quot;, Courier, monospace;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;CSS font-family&lt;/h1&gt;
        &lt;p class=&quot;serif&quot;&gt;This is a paragraph, shown in the Times New Roman font.&lt;/p&gt;
        &lt;p class=&quot;sansserif&quot;&gt;This is a paragraph, shown in the Arial font.&lt;/p&gt;
        &lt;p class=&quot;monospace&quot;&gt;This is a paragraph, shown in the Lucida Console font.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-family.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-family.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-family.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-family.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-family.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-family.html.pdf) |

## 🔬 FONT-FEATURE-SETTINGS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-feature-settings.html)

<details>
    <summary>
        View FONT-FEATURE-SETTINGS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_font-feature-settings --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /* enable small-caps */
.ex1 { font-feature-settings: &quot;smcp&quot; on; }

/* convert both upper and lowercase to small caps */
.ex2 { font-feature-settings: &quot;c2sc&quot;, &quot;smcp&quot;; }

/* no common ligatures */
.ex3 { font-feature-settings: &quot;liga&quot; 0; }

/* enable automatic fractions */
.ex4 { font-feature-settings: &quot;frac&quot;; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The font-feature-settings Property&lt;/h1&gt;

        &lt;div class=&quot;ex1&quot;&gt;This is some text 0123.&lt;/div&gt;
        &lt;div class=&quot;ex2&quot;&gt;This is some text 0123.&lt;/div&gt;
        &lt;div class=&quot;ex3&quot;&gt;This is some text 0123.&lt;/div&gt;
        &lt;div class=&quot;ex4&quot;&gt;This is some text 0123.&lt;/div&gt;
        
        &lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; Internet Explorer 9 and earlier versions do not support the font-feature-settings property.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-feature-settings.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-feature-settings.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-feature-settings.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-feature-settings.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-feature-settings.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-feature-settings.html.pdf) |

## 🔬 FONT-SIZE-ADJUST

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-size-adjust.html)

<details>
    <summary>
        View FONT-SIZE-ADJUST Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_font-size-adjust --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div.a {font-family: verdana;}
div.b {font-family: 'times new roman';}
#div1, #div2 {font-size-adjust: 0.58;}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h1&gt;The font-size-adjust Property&lt;/h1&gt;

&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; Only Firefox supports the font-size-adjust property.&lt;/p&gt;

&lt;h2&gt;Two divs with the same font-size-adjust property:&lt;/h2&gt;
&lt;div id=&quot;div1&quot; class=&quot;a&quot;&gt;
You control the font size better with the font-size-adjust property.
&lt;/div&gt;
&lt;div id=&quot;div2&quot; class=&quot;b&quot;&gt;
You control the font size better with the font-size-adjust property.
&lt;/div&gt;

&lt;h2&gt;Two divs without the font-size-adjust property:&lt;/h2&gt;
&lt;div class=&quot;a&quot;&gt;
You control the font size better with the font-size-adjust property.
&lt;/div&gt;
&lt;div class=&quot;b&quot;&gt;
You control the font size better with the font-size-adjust property.
&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-size-adjust.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-size-adjust.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-size-adjust.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-size-adjust.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-size-adjust.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-size-adjust.html.pdf) |

## 🔬 FONT-SIZE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-size.html)

<details>
    <summary>
        View FONT-SIZE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-size/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        html {
  background-color: #cecece;
  font-size: 24px;
  line-height: 36px;
}

div {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 50px;
  padding: 20px;
}

.module-2 {
  font-size: 42px;
  line-height: 36px;
}

.module-2 p {
  font-size: 110%;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;module-1&quot;&gt;
            &lt;p&gt;I am sized relative to the document.&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;module-2&quot;&gt;
            &lt;p&gt;I am sized relative to the parent element.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-size.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-size.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-size.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-size.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-size.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-size.html.pdf) |

## 🔬 FONT-STRETCH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-stretch.html)

<details>
    <summary>
        View FONT-STRETCH Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/css3_pr_font-stretch.asp --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div {
  font-family: sans-serif, &quot;Helvetica Neue&quot;, &quot;Lucida Grande&quot;, Arial;
  font-stretch: expanded;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;p&gt;Font Stretch Example&lt;/p&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-stretch.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-stretch.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-stretch.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-stretch.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-stretch.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-stretch.html.pdf) |

## 🔬 FONT-STYLE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-style.html)

<details>
    <summary>
        View FONT-STYLE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-style/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p {
  font-family: sans-serif;
  padding: 0 20px;
  font-size: 20px;
}

.one { font-style: italic; }
.two { font-style: oblique; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p class=&quot;one&quot;&gt;This is italic text.&lt;/p&gt;

        &lt;p class=&quot;two&quot;&gt;This is oblique text.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-style.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-style.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-style.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-style.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-style.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-style.html.pdf) |

## 🔬 FONT-VARIANT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-variant.html)

<details>
    <summary>
        View FONT-VARIANT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-variant/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p {
  font-size: 20px;
  padding: 0 20px;
  font-variant: small-caps;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;This is small-caps.&lt;/p&gt;

        &lt;p&gt;THIS IS REGULAR CAPS.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-variant.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-variant.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-variant.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-variant.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-variant.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-variant.html.pdf) |

## 🔬 FONT-WEIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font-weight.html)

<details>
    <summary>
        View FONT-WEIGHT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/f/font-weight/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 0 20px;
  font-family: 'Open Sans';
}

.w100 {
  font-weight: 100;
}

.w200 {
  font-weight: 200;
}

.w300 {
  font-weight: 300;
}

.w400 {
  font-weight: 400;
}

.w500 {
  font-weight: 500;
}

.w600 {
  font-weight: 600;
}

.w700 {
  font-weight: 700;
}

.w800 {
  font-weight: 800;
}

.w900 {
  font-weight: 900;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'&gt;
  
        &lt;p class=&quot;w100&quot;&gt;This is 100 weight&lt;/p&gt;
        
        &lt;p class=&quot;w200&quot;&gt;This is 200 weight&lt;/p&gt;
        
        &lt;p class=&quot;w300&quot;&gt;This is 300 weight (available)&lt;/p&gt;
        
        &lt;p class=&quot;w400&quot;&gt;This is 400 weight (available)&lt;/p&gt;
        
        &lt;p class=&quot;w500&quot;&gt;This is 500 weight&lt;/p&gt;
        
        &lt;p class=&quot;w600&quot;&gt;This is 600 weight (available)&lt;/p&gt;
        
        &lt;p class=&quot;w700&quot;&gt;This is 700 weight (available)&lt;/p&gt;
        
        &lt;p class=&quot;w800&quot;&gt;This is 800 weight (available)&lt;/p&gt;
        
        &lt;p class=&quot;w900&quot;&gt;This is 900 weight&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font-weight.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font-weight.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font-weight.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font-weight.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font-weight.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font-weight.html.pdf) |

## 🔬 FONT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/F/font.html)

<details>
    <summary>
        View FONT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_font --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p.a {
  font: 20px Arial, sans-serif;
}

p.b {
  font: italic bold 12px/30px Georgia, serif;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p class=&quot;a&quot;&gt;This is a paragraph. The font size is set to 20 pixels, and the font family is Arial.&lt;/p&gt;

        &lt;p class=&quot;b&quot;&gt;This is a paragraph. The font is set to italic and bold, the font size is set to 12 pixels, the line height is set to 30 pixels, and the font family is Georgia.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_F_font.html.png) | ![typeset Preview](typeset__html_CSS_Properties_F_font.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_F_font.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_F_font.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_F_font.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_F_font.html.pdf) |


