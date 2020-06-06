---
layout: details
title: O
permalink: /CSS-Properties/O/
description: 
---



## 🔬 OBJECT-FIT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/object-fit.html)

<details>
    <summary>
        View OBJECT-FIT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/object-fit/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .object-fit_fill {
  -o-object-fit: fill;
     object-fit: fill;
}

.object-fit_contain {
  -o-object-fit: contain;
     object-fit: contain;
}

.object-fit_cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.object-fit_none {
  -o-object-fit: none;
     object-fit: none;
}

.object-fit_scale-down {
  -o-object-fit: scale-down;
     object-fit: scale-down;
}

html {
  color: #eee;
  padding: 30px;
  font-family: 'Source Code Pro', Monaco;
  background-color: #333;
}

p {
  font-weight: 200;
  font-size: 13px;
  margin-bottom: 10px;
  margin-top: 0;
}

img {
  height: 120px;
  background-color: #444;
}

img[class] {
  width: 100%;
}

.original-image {
  margin-bottom: 50px;
}

.image {
  float: left;
  width: 40%;
  margin: 0 30px 20px 0;
}
.image:nth-child(2n) {
  clear: left;
}
.image:nth-child(2n+1) {
  margin-right: 0;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;original-image&quot;&gt;
            &lt;p&gt;original image&lt;/p&gt;
            &lt;img src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt; 
            &lt;/div&gt;
            
            &lt;div class=&quot;image&quot;&gt;
              &lt;p&gt;object-fit: fill&lt;/p&gt;
            &lt;img class=&quot;object-fit_fill&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;image&quot;&gt;
              &lt;p&gt;object-fit: contain&lt;/p&gt;
            &lt;img class=&quot;object-fit_contain&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;image&quot;&gt;
              &lt;p&gt;object-fit: cover&lt;/p&gt;
            &lt;img class=&quot;object-fit_cover&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;image&quot;&gt;
              &lt;p&gt;object-fit: none&lt;/p&gt;
            &lt;img class=&quot;object-fit_none&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;image&quot;&gt;
              &lt;p&gt;object-fit: scale-down&lt;/p&gt;
            &lt;img class=&quot;object-fit_scale-down&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png&quot;&gt;
             &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_object-fit.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_object-fit.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_object-fit.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_object-fit.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_object-fit.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_object-fit.html.pdf) |

## 🔬 OBJECT-POSITION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/object-position.html)

<details>
    <summary>
        View OBJECT-POSITION Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/object-position/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        img {
  background-color: yellow;
  height: 180px;
}

.image {
  height: 170px;
  object-fit: none;
  /*  background-color: yellow;*/
}

.image--center {
  object-position: 50% 50%;
}

.image--bottom-right {
  object-position: 100% 100%;
}

.image--bottom-left {
  object-position: 0  100%;
}

.image--top-left {
  object-position: 0  0;
}

.image--up {
  object-position: 50%  120%;
}

.image--down {
  object-position: 50%  -20%;
}

.image--left {
  object-position: 120%  50%;
}

.image--right {
  object-position: -20%  50%;
}

.image--background-image {
  object-position: 140%  90%;
  background-image: url(&quot;http://fillmurray.com/g/50/50&quot;);
}

html {
  color: #eee;
  padding: 30px;
  font-family: 'Source Code Pro', Monaco;
  background-color: #333;
}

.container {
  float: left;
  margin: 0 20px 20px 0;
  padding: 0;
  width: 45%;
}
.container:nth-child(2n + 1) {
  margin-right: 0;
}

p {
  font-weight: 600;
  font-size: 13px;
  margin-bottom: 10px;
  margin-top: 0;
}

img[class] {
  width: 100%;
}

.original-image {
  margin-bottom: 50px;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;original-image&quot;&gt;
            &lt;p&gt;original image &lt;br&gt; (with a yellow background)&lt;/p&gt;
          &lt;img src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 50% 50%&lt;/p&gt;
          &lt;img class=&quot;image image--center&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 100% 150%&lt;/p&gt;
          &lt;img class=&quot;image image--bottom-right&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 0 150%&lt;/p&gt;
          &lt;img class=&quot;image image--bottom-left&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
                &lt;p&gt;object-position: 0 0&lt;/p&gt;
          &lt;img class=&quot;image image--top-left&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 50% 120%&lt;/p&gt;
          &lt;img class=&quot;image image--up&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 50% -20%&lt;/p&gt;
          &lt;img class=&quot;image image--down&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 120% 50%&lt;/p&gt;
          &lt;img class=&quot;image image--left&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: -20% 50%&lt;/p&gt;
          &lt;img class=&quot;image image--right&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
          
          
          &lt;div class=&quot;container&quot;&gt;
              &lt;p&gt;object-position: 140% 90% &lt;br&gt;(with background image)&lt;/p&gt;
          &lt;img class=&quot;image image--background-image&quot; src=&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png&quot;&gt; 
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_object-position.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_object-position.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_object-position.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_object-position.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_object-position.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_object-position.html.pdf) |

## 🔬 OFFSET-ANCHOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-anchor.html)

<details>
    <summary>
        View OFFSET-ANCHOR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-anchor.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-anchor.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-anchor.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-anchor.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-anchor.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-anchor.html.pdf) |

## 🔬 OFFSET-DISTANCE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-distance.html)

<details>
    <summary>
        View OFFSET-DISTANCE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-distance.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-distance.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-distance.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-distance.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-distance.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-distance.html.pdf) |

## 🔬 OFFSET-PATH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-path.html)

<details>
    <summary>
        View OFFSET-PATH Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-path.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-path.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-path.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-path.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-path.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-path.html.pdf) |

## 🔬 OFFSET-ROTATE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-rotate.html)

<details>
    <summary>
        View OFFSET-ROTATE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-rotate.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-rotate.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-rotate.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-rotate.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-rotate.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-rotate.html.pdf) |

## 🔬 OPACITY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/opacity.html)

<details>
    <summary>
        View OPACITY Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/opacity/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /* General Box Styling */
/*===========================*/
.container &gt; div {
  display: inline-block;
  height: 100px;
  width: 100px;
  background: #d58a3c;
}

/* Begin Opacity Demo Styles */
/*===========================*/
div.opacity100 {
  opacity: 1;
}

div.opacity90 {
  opacity: 0.9;
}

div.opacity80 {
  opacity: 0.8;
}

div.opacity70 {
  opacity: 0.7;
}

div.opacity60 {
  opacity: 0.6;
}

div.opacity50 {
  opacity: 0.5;
}

div.opacity40 {
  opacity: 0.4;
}

div.opacity30 {
  opacity: 0.3;
}

div.opacity20 {
  opacity: 0.2;
}

div.opacity10 {
  opacity: 0.1;
}

div.opacity0 {
  opacity: 0;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;h3&gt;Opacity without child elements&lt;/h3&gt;
            &lt;div class=&quot;opacity100&quot;&gt;opacity: 1&lt;/div&gt;
            &lt;div class=&quot;opacity90&quot;&gt;opacity: 0.9&lt;/div&gt;
            &lt;div class=&quot;opacity80&quot;&gt;opacity: 0.8&lt;/div&gt;
            &lt;div class=&quot;opacity70&quot;&gt;opacity: 0.7&lt;/div&gt;
            &lt;div class=&quot;opacity60&quot;&gt;opacity: 0.6&lt;/div&gt;
            &lt;div class=&quot;opacity50&quot;&gt;opacity: 0.5&lt;/div&gt;
            &lt;div class=&quot;opacity40&quot;&gt;opacity: 0.4&lt;/div&gt;
            &lt;div class=&quot;opacity30&quot;&gt;opacity: 0.3&lt;/div&gt;
            &lt;div class=&quot;opacity20&quot;&gt;opacity: 0.2&lt;/div&gt;
            &lt;div class=&quot;opacity10&quot;&gt;opacity: 0.1&lt;/div&gt;
            &lt;div class=&quot;opacity0&quot;&gt;opacity: 0&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;container&quot;&gt;
            &lt;h3&gt;Opacity with child elements&lt;/h3&gt;
            &lt;div class=&quot;opacity100&quot;&gt;
              opacity: 1
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity90&quot;&gt;
              opacity: 0.9
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity80&quot;&gt;
              opacity: 0.8
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity70&quot;&gt;
              opacity: 0.7
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity60&quot;&gt;
              opacity: 0.6
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity50&quot;&gt;
              opacity: 0.5
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity40&quot;&gt;
              opacity: 0.4
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity30&quot;&gt;
              opacity: 0.3
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity20&quot;&gt;
              opacity: 0.2
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity10&quot;&gt;
              opacity: 0.1
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;opacity0&quot;&gt;
              opacity: 0
              &lt;p&gt;Paragraph Element&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;p&gt;&lt;small&gt;Elements with an &lt;code&gt;opacity&lt;/code&gt; value of '0' are invisible&lt;/small&gt;&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_opacity.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_opacity.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_opacity.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_opacity.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_opacity.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_opacity.html.pdf) |

## 🔬 ORDER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/order.html)

<details>
    <summary>
        View ORDER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/order/ --&gt;
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
  
  -webkit-flex-flow: row wrap;
  flex-flow: row wrap;
}

.flex-item:nth-of-type(1) { order: 3; }
.flex-item:nth-of-type(2) { order: 4; }
.flex-item:nth-of-type(3) { order: 1; }
.flex-item:nth-of-type(4) { order: 5; }
.flex-item:nth-of-type(5) { order: 2; }

.flex-item {
  background: tomato;
  padding: 5px;
  width: 100px;
  height: 100px;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_O_order.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_order.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_order.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_order.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_order.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_order.html.pdf) |

## 🔬 ORPHANS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/orphans.html)

<details>
    <summary>
        View ORPHANS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/jsref/prop_style_orphans.asp --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .othercontent {
  width: 400px;
  border-top: 19cm solid #c3c3c3;
}

@page {
  /* set size of printed page */
  size:21cm 27cm;
  margin-top:2cm;
}

  .orphans {
    orphans:2;
  }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;othercontent&quot;&gt;
            
            &lt;p style=&quot;font-size:120%&quot; id=&quot;p1&quot;&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
                orphans &lt;br&gt;
            Line 2&lt;br&gt;
            Line 3&lt;br&gt;
            Line 4&lt;br&gt;
            Line 5&lt;br&gt;
            Line 6&lt;br&gt;
            Line 7&lt;br&gt;
            Line 8&lt;br&gt;
            &lt;/p&gt; 
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_orphans.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_orphans.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_orphans.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_orphans.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_orphans.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_orphans.html.pdf) |

## 🔬 OUTLINE-OFFSET

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/outline-offset.html)

<details>
    <summary>
        View OUTLINE-OFFSET Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/outline-offset/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 40px;
}

h2 {
  text-align: center;
  margin: 0 0 40px;
}

.box {
  width: 200px;
  height: 200px;
  background: #ccc;
  margin: auto;
  border: solid 8px yellow;
  outline: solid 8px orange;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Dual border effect with outline and border&lt;/h2&gt;

        &lt;div class=&quot;box&quot;&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_outline-offset.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_outline-offset.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_outline-offset.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_outline-offset.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_outline-offset.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_outline-offset.html.pdf) |

## 🔬 OUTLINE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/outline.html)

<details>
    <summary>
        View OUTLINE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/outline-offset/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 40px;
}

h2 {
  text-align: center;
  margin: 0 0 40px;
}

.box {
  width: 200px;
  height: 200px;
  background: #ccc;
  margin: auto;
  outline: solid 8px orange;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;outline&lt;/h2&gt;

        &lt;div class=&quot;box&quot;&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_outline.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_outline.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_outline.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_outline.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_outline.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_outline.html.pdf) |

## 🔬 OVERFLOW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/overflow.html)

<details>
    <summary>
        View OVERFLOW Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/overflow/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .box {
  border: 1px solid #222;
  width: 300px;
  height: 300px;
  overflow-y: hidden;
  overflow-x: scroll;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;box&quot;&gt;
            &lt;img src=&quot;http://placehold.it/450x150&quot; alt=&quot;&quot; /&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae suscipit, autem magnam ab. Possimus perferendis officiis doloremque impedit quia quos labore optio quas cum incidunt. Blanditiis dicta, sunt numquam quos.&lt;/p&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae suscipit, autem magnam ab. Possimus perferendis officiis doloremque impedit quia quos labore optio quas cum incidunt. Blanditiis dicta, sunt numquam quos.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_overflow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_overflow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_overflow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_overflow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_overflow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_overflow.html.pdf) |

## 🔬 OVERSCROLL-BEHAVIOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/overscroll-behavior.html)

<details>
    <summary>
        View OVERSCROLL-BEHAVIOR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/overscroll-behavior/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p {
  height: 100px;
  width: 100px;
  overflow: scroll;
  margin: 20px;
}

p:nth-child(2) {
  overscroll-behavior: contain;
}

body {
  display: flex;
  padding: 20px;
  min-height: 200vh;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;&lt;strong&gt;Default!&lt;/strong&gt; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat placeat qui praesentium. Earum itaque architecto laboriosam voluptates beatae dolore molestiae quas magni quo non vel doloribus, accusamus repellendus quaerat aut!&lt;/p&gt;
        &lt;p&gt;&lt;strong&gt;Contain!&lt;/strong&gt; Perspiciatis dolorum corporis minus soluta! Culpa aspernatur non facilis porro. Magni qui cumque eligendi ducimus neque dolor minima, provident quod nihil? Nostrum deleniti laudantium illum corporis iure quasi error earum?&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_overscroll-behavior.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_overscroll-behavior.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_overscroll-behavior.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_overscroll-behavior.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_overscroll-behavior.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_overscroll-behavior.html.pdf) |


