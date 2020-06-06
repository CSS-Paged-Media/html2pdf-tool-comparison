---
layout: details
title: A
permalink: /CSS-Properties/A/
description: 
---



## 🔬 ALIGN-CONTENT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-content.html)

<details>
    <summary>
        View ALIGN-CONTENT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/align-content/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
.flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  float: left;
  width: 120px;
  height: 300px;
  padding: 10px;
  border: 1px solid silver;
  margin-top: 10px;
  
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
  
  -webkit-flex-flow: row wrap;
  flex-flow: row wrap;
}

.flex-start { 
  -webkit-align-content: flex-start; 
  align-content: flex-start; 
}

.flex-end { 
  -webkit-align-content: flex-end; 
  align-content: flex-end; 
}
.flex-end li {
  background: gold;
}

.center { 
  -webkit-align-content: center; 
  align-content: center; 
}
.center li {
  background: deepskyblue;
}

.space-between { 
  -webkit-align-content: space-between; 
  align-content: space-between; 
}  
.space-between li {
  background: lightgreen;
}

.space-around { 
  -webkit-align-content: space-around; 
  align-content: space-around; 
}
.space-around li {
  background: hotpink;
}

.stretch { 
  -webkit-align-content: stretch; 
  align-content: stretch; 
}
.stretch li {
  background: chocolate;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 50px;
  height: 50px;
  
  line-height: 50px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul class=&quot;flex-container flex-start&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;ul class=&quot;flex-container flex-end&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;ul class=&quot;flex-container center&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;ul class=&quot;flex-container space-between&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;ul class=&quot;flex-container space-around&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;ul class=&quot;flex-container stretch&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_A_align-content.html.png) | ![typeset Preview](typeset__html_CSS_Properties_A_align-content.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_A_align-content.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_A_align-content.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_A_align-content.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_A_align-content.html.pdf) |

## 🔬 ALIGN-ITEMS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-items.html)

<details>
    <summary>
        View ALIGN-ITEMS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/align-items/ --&gt;
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
  float: left;
}

.flex-start { 
  -webkit-align-items: flex-start;
  align-items: flex-start; 
}

.flex-end { 
  -webkit-align-items: flex-end; 
  align-items: flex-end; 
}
.flex-end li {
  background: gold;
}

.center { 
  -webkit-align-items: center; 
  align-items: center; 
}  
.center li {
  background: deepskyblue;
}

.baseline { 
  -webkit-align-items: baseline; 
  align-items: baseline; 
}
.baseline li {
  background: lightgreen;
}

.stretch { 
  -webkit-align-items: stretch; 
  align-items: stretch; 
}  
.stretch li {
  background: hotpink;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 50px;
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
        &lt;ul class=&quot;flex-container flex-start&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;br&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;br&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container flex-end&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;br&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;br&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container center&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;br&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;br&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container baseline&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;br&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;br&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;ul class=&quot;flex-container stretch&quot;&gt;
            &lt;li class=&quot;flex-item&quot;&gt;1&lt;br&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;4&lt;br&gt;5&lt;/li&gt;
            &lt;li class=&quot;flex-item&quot;&gt;6&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_A_align-items.html.png) | ![typeset Preview](typeset__html_CSS_Properties_A_align-items.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_A_align-items.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_A_align-items.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_A_align-items.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_A_align-items.html.pdf) |

## 🔬 ALIGN-SELF

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-self.html)

<details>
    <summary>
        View ALIGN-SELF Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  https://css-tricks.com/almanac/properties/a/align-self/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  height: 200px;

  display: flex;
}

.flex-start { align-self: flex-start; }
.flex-end { align-self: flex-end; }
.center { align-self: center; }
.baseline { align-self: baseline; }
.stretch { align-self: stretch; }

.flex-item {
  background: tomato;
  padding: 5px;
  width: 100px;
  margin: 5px;
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
            &lt;li class=&quot;flex-item flex-start&quot;&gt;1&lt;/li&gt;
            &lt;li class=&quot;flex-item flex-end&quot;&gt;2&lt;/li&gt;
            &lt;li class=&quot;flex-item center&quot;&gt;3&lt;/li&gt;
            &lt;li class=&quot;flex-item baseline&quot;&gt;4&lt;/li&gt;
            &lt;li class=&quot;flex-item stretch&quot;&gt;5&lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_A_align-self.html.png) | ![typeset Preview](typeset__html_CSS_Properties_A_align-self.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_A_align-self.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_A_align-self.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_A_align-self.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_A_align-self.html.pdf) |

## 🔬 ALL

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/all.html)

<details>
    <summary>
        View ALL Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/all/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .container {
  font-family: sans-serif;
  /* inherited */
  
  font-size: 1.5em;
  /* inherited */
  
  text-align: center;
  /* inherited */
  
  text-transform: uppercase;
  /* inherited */
  
  text-shadow: 1px 1px 1px black;
  /* inherited */
}

.parent {
  color: green;
  /* inherited */
  
  background-color: gainsboro;
  /* not inherited */
  
  width: 80%;
  /* not inherited */
  
  padding: 1em;
  /* not inherited */
  
  border: 5px solid #E18728;
  /* not inherited */
}

.alltest{
    all:inherit;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;container&quot;&gt;
          &lt;div class=&quot;parent&quot;&gt;
            &lt;div class=&quot;alltest&quot;&gt;
              &lt;p&gt;Change this div's &lt;code&gt;all&lt;/code&gt; value.&lt;/p&gt;
            &lt;/div&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_A_all.html.png) | ![typeset Preview](typeset__html_CSS_Properties_A_all.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_A_all.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_A_all.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_A_all.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_A_all.html.pdf) |

## 🔬 APPEARANCE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/appearance.html)

<details>
    <summary>
        View APPEARANCE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/appearance/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .reset {
  -webkit-appearance: none; 
}

.fake-like-search {
  -webkit-appearance: searchfield;   
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input type=&quot;search&quot;&gt; type=search 
        &lt;br&gt;&lt;br&gt;
        &lt;input type=&quot;text&quot; class=&quot;fake-like-search&quot;&gt; type=text, made like search
        &lt;br&gt;&lt;br&gt;
        &lt;input type=&quot;search&quot; class=&quot;reset&quot;&gt; type=search, reset 
        &lt;br&gt;&lt;br&gt;
        &lt;input type=&quot;text&quot;&gt; type=text
        &lt;br&gt;&lt;br&gt;
        &lt;input type=&quot;text&quot; class=&quot;reset&quot;&gt; type=text, reset
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_A_appearance.html.png) | ![typeset Preview](typeset__html_CSS_Properties_A_appearance.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_A_appearance.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_A_appearance.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_A_appearance.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_A_appearance.html.pdf) |


