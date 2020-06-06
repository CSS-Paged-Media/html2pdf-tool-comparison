---
layout: details
title: N
permalink: /CSS-Selectors/N/
description: 
---



## 🔬 NOT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/N/not.html)

<details>
    <summary>
        View NOT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/n/not/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /**
*
* Global Styles
*
*/

a {
  color: #4186db;
}

html {
  background: #303031;
  color: #e78629;
}


.entry {
  width: 42em;
  margin: 0 auto;
}


/**
*
* Demo A
* Class Selector on Nested Element
*/
.entry.A .entry-content :not(.intro) {
  color: #31cdf7;
}


/**
*
* Demo B
* Class Selector w/out Nesting
*
*/
.entry.B :not(.intro) {
  font-size: 14px;
}


/**
*
* Demo C
* This demo uses the attribute as our simple selector
* http://www.w3.org/TR/selectors/#simple-selectors-dfn
*
*/
.entry.C button:not([disabled]) {
  font-size: 20px;
}


/**
*
* Demo D
* Attribute Selector
*
*/
.entry.D a:not([href*=&quot;http://css-tricks&quot;]) {
  color: #FFF;
  text-decoration: none;
}


/**
*
* Demo E
* won't work because ::first-line is a pseudo element
*
*/
.entry.E p:not(::first-line) {
  color: white;
}


/**
*
* Demo F
* nth-child Pseudo Class
*
*/
.entry.F p:not(:nth-child(2n+1)) {
  border: 1px solid orange;
  color: white;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article class=&quot;entry A&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;A&lt;/h1&gt;
            &lt;/header&gt;
            &lt;div class=&quot;entry-content&quot;&gt;
              &lt;p class=&quot;intro&quot;&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
          
              &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
            &lt;/div&gt;
          &lt;/article&gt;
          
          &lt;hr&gt;
          
          &lt;article class=&quot;entry B&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;B&lt;/h1&gt;
            &lt;/header&gt;
             &lt;p class=&quot;intro&quot;&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
          
             &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
          &lt;/article&gt;
          
          &lt;hr&gt;
          
          &lt;article class=&quot;entry C&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;C&lt;/h1&gt;
            &lt;/header&gt;
            &lt;button&gt;button A&lt;/button&gt;
            &lt;button&gt;button B&lt;/button&gt;
            &lt;button disabled&gt;button C&lt;/button&gt;
          &lt;/article&gt;
          
          &lt;hr&gt;
          
          &lt;article class=&quot;entry D&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;D&lt;/h1&gt;
            &lt;/header&gt;
            &lt;a href=&quot;https://css-tricks.com&quot;&gt;Link1&lt;/a&gt;
            &lt;a href=&quot;https://css-tricks.com&quot;&gt;Link2&lt;/a&gt;
            &lt;a href=&quot;https://google.com&quot;&gt;Link3&lt;/a&gt;
            &lt;a href=&quot;https://google.com&quot;&gt;Link4&lt;/a&gt;
          &lt;/article&gt;
          
          &lt;hr&gt;
          
          &lt;article class=&quot;entry E&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;E&lt;/h1&gt;
            &lt;/header&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
          &lt;/article&gt;
          
          &lt;hr&gt;
          
          &lt;article class=&quot;entry F&quot;&gt;
            &lt;header&gt;
              &lt;h1&gt;F&lt;/h1&gt;
            &lt;/header&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
            &lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;
          &lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_N_not.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_N_not.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_N_not.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_N_not.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_N_not.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_N_not.html.pdf) |

## 🔬 NTH-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/N/nth-child.html)

<details>
    <summary>
        View NTH-CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/n/nth-child/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 1em 2em;
}

ul, ol {
  list-style: none;
  padding: 0;
}
li {
  text-align: center;
  line-height: 2;
  background: slategrey;
}
div {
  width: 12em;
  float: left;
  margin-right: 2em;
}
hr {
  clear: both;
  padding-top: 1em;
  border: 0;
  border-bottom: 1px solid grey;
}

.one li:nth-child(1) {
  background: lightsteelblue;
}

.two :nth-child(2) :nth-child(3) {
  background: lightsteelblue;
}

.three :nth-child(odd) li:nth-child(-n+3) {
  background: lightsteelblue;
}



div:before {
  font-family: monospace;
  white-space: nowrap;
  font-size: 12px;
}

.one:before {
  content: &quot;li:nth-child(1)&quot;;
}
.two:before {
  content: &quot;:nth-child(2) :nth-child(3)&quot;;
}
.three:before {
  content: &quot;:nth-child(odd) li:nth-child(-n+3)&quot;;
}


        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;one&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;  
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
            &lt;i&gt;select &amp;lt;li&amp;gt; elements that are the first child of their parent&lt;/i&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;two&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
            &lt;i&gt;select the third child element of the second element&lt;/i&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;three&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
            &lt;ul&gt;
              &lt;li&gt;Nine&lt;/li&gt;
              &lt;li&gt;Ten&lt;/li&gt;
              &lt;li&gt;Eleven&lt;/li&gt;
              &lt;li&gt;Twelve&lt;/li&gt;
            &lt;/ul&gt;
            &lt;i&gt;select the first three &amp;lt;li&amp;gt; elements inside of every odd element&lt;/i&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_N_nth-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_N_nth-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_N_nth-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_N_nth-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_N_nth-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_N_nth-child.html.pdf) |

## 🔬 NTH-LAST-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/N/nth-last-child.html)

<details>
    <summary>
        View NTH-LAST-CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/n/nth-last-child/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 1em 2em;
}

ul, ol {
  list-style: none;
  padding: 0;
}
li {
  text-align: center;
  line-height: 2;
  background: slategrey;
}
div {
  width: 12em;
  float: left;
  margin-right: 2em;
}
hr {
  clear: both;
  padding-top: 1em;
  border: 0;
  border-bottom: 1px solid grey;
}

.one li:nth-last-child(1) {
  background: lightsteelblue;
}

.two ol :nth-last-child(3) {
  background: lightsteelblue;
}

.three :nth-last-child(-n+2) :nth-last-child(1) {
  background: lightsteelblue;
}



div:before {
  font-family: monospace;
  white-space: nowrap;
  font-size: 12px;
}
div:after {
  font-style: italic;
}

.one:before {
  content: &quot;li:nth-last-child(1)&quot;;
}
.one:after {
  content: &quot;select &lt;li&gt; elements that are the last child of their parent&quot;;
}

.two:before {
  content: &quot;ol :nth-last-child(3)&quot;;
}
.two:after {
  content: &quot;select the third-from-last child element of an &lt;ol&gt;&quot;;
}

.three:before {
  content: &quot;:nth-last-child(-n+2) :nth-last-child(-n+3)&quot;;
}
.three:after {
  content: &quot;select the last &lt;li&gt; element inside the last two elements&quot;;
}


        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;one&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;  
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;two&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;three&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
            &lt;/ul&gt;
            &lt;ol&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ol&gt;
            &lt;ul&gt;
              &lt;li&gt;Nine&lt;/li&gt;
              &lt;li&gt;Ten&lt;/li&gt;
              &lt;li&gt;Eleven&lt;/li&gt;
              &lt;li&gt;Twelve&lt;/li&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_N_nth-last-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_N_nth-last-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_N_nth-last-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_N_nth-last-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_N_nth-last-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_N_nth-last-child.html.pdf) |

## 🔬 NTH-LAST-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/N/nth-last-of-type.html)

<details>
    <summary>
        View NTH-LAST-OF-TYPE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 1em 2em;
}

ul {
  list-style: none;
  width: 12em;
  border: 1px solid #444;
  padding: 0
}
li {
  text-align: center;
  line-height: 2;
  background: slategrey;
}
div {
  float: left;
  margin-right: 2em;
}
pre {
  font-size: 14px;
}
hr {
  clear: both;
  padding-top: 1em;
  border: 0;
  border-bottom: 1px solid grey;
}

.four li:nth-last-of-type(3) {
  background: lightsteelblue;
}

.five li:nth-last-of-type(3n+1) {
  background: lightsteelblue;
}

.six li:nth-last-of-type(even) {
  background: lightsteelblue;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;pre&gt;:nth-last-of-type(3)&lt;/pre&gt;
            &lt;ul class=&quot;four&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;  
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          
          &lt;div&gt;
            &lt;pre&gt;:nth-last-of-type(3n+1)&lt;/pre&gt;
            &lt;ul class=&quot;five&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          
          &lt;div&gt;
            &lt;pre&gt;:nth-last-of-type(even)&lt;/pre&gt;
            &lt;ul class=&quot;six&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_N_nth-last-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_N_nth-last-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_N_nth-last-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_N_nth-last-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_N_nth-last-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_N_nth-last-of-type.html.pdf) |

## 🔬 NTH-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/N/nth-of-type.html)

<details>
    <summary>
        View NTH-OF-TYPE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/n/nth-of-type/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 1em 2em;
}

ul {
  list-style: none;
  width: 12em;
  border: 1px solid #444;
  padding: 0
}
li {
  text-align: center;
  line-height: 2;
  background: slategrey;
}
div {
  float: left;
  margin-right: 2em;
}
pre {
  font-size: 14px;
}
hr {
  clear: both;
  padding-top: 1em;
  border: 0;
  border-bottom: 1px solid grey;
}

.one li:nth-of-type(1) {
  background: lightsteelblue;
}

.two li:nth-of-type(odd) {
  background: lightsteelblue;
}

.three li:nth-of-type(3n+2) {
  background: lightsteelblue;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;pre&gt;:nth-of-type(1)&lt;/pre&gt;
            &lt;ul class=&quot;one&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;  
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          
          &lt;div&gt;
            &lt;pre&gt;:nth-of-type(odd)&lt;/pre&gt;
            &lt;ul class=&quot;two&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          
          &lt;div&gt;
            &lt;pre&gt;:nth-of-type(3n+2)&lt;/pre&gt;
            &lt;ul class=&quot;three&quot;&gt;
              &lt;li&gt;One&lt;/li&gt;
              &lt;li&gt;Two&lt;/li&gt;
              &lt;li&gt;Three&lt;/li&gt;
              &lt;li&gt;Four&lt;/li&gt;
              &lt;li&gt;Five&lt;/li&gt;
              &lt;li&gt;Six&lt;/li&gt;
              &lt;li&gt;Seven&lt;/li&gt;
              &lt;li&gt;Eight&lt;/li&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_N_nth-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_N_nth-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_N_nth-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_N_nth-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_N_nth-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_N_nth-of-type.html.pdf) |


