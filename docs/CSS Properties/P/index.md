---
layout: details
title: P
permalink: /CSS-Properties/P/
description: 
---



## 🔬 PADDING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/padding.html)

<details>
    <summary>
        View PADDING Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/padding/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .box {
  margin: 0 auto;
  background-color: aquamarine;
  width: 400px; 
  height: 400px;
  padding: 20px;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;box&quot;&gt;The width of this box is 440px, even though it is defined at 400px in the CSS.&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_padding.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_padding.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_padding.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_padding.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_padding.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_padding.html.pdf) |

## 🔬 PERSPECTIVE-ORIGIN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/perspective-origin.html)

<details>
    <summary>
        View PERSPECTIVE-ORIGIN Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/perspective-origin/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .wrapper {
  width: 30%;
  display: inline-block;
  padding-bottom: 1em;
}

.wrapper h1 {
  text-align: center;
  font-size: 1.5em;
}

.cube {
  font-size: 2em;
  width: 2em;
  height: 2em;
  margin: .5em auto;
  transform-style: preserve-3d;
  perspective: 250px;
}

.w1 .cube {
  perspective-origin: top left;
}

.w2 .cube {
  perspective-origin: top;
}

.w3 .cube {
  perspective-origin: top right;
}

.w4 .cube {
  perspective-origin: left;
}

.w5 .cube {
  perspective-origin: center;
}

.w6 .cube {
  perspective-origin: right;
}

.w7 .cube {
  perspective-origin: bottom left;
}

.w8 .cube {
  perspective-origin: bottom;
}

.w9 .cube {
  perspective-origin: bottom right;
}

.side {
  position: absolute;
  width: 2em;
  height: 2em;
  background: rgba(255, 99, 71, 0.6);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: white;
  text-align: center;
  line-height: 2em;
}

.front {
  transform: translateZ(1em);
}

.top {
  transform: rotateX(90deg) translateZ(1em);
}

.right {
  transform: rotateY(90deg) translateZ(1em);
}

.left {
  transform: rotateY(-90deg) translateZ(1em);
}

.bottom {
  transform: rotateX(-90deg) translateZ(1em);
}

.back {
  transform: rotateY(-180deg) translateZ(1em);
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;wrapper w1&quot;&gt;
            &lt;h1&gt;&lt;code&gt;top left&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w2&quot;&gt;
            &lt;h1&gt;&lt;code&gt;top&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w3&quot;&gt;
            &lt;h1&gt;&lt;code&gt;top right&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w4&quot;&gt;
            &lt;h1&gt;&lt;code&gt;left&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w5&quot;&gt;
            &lt;h1&gt;&lt;code&gt;center&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w6&quot;&gt;
            &lt;h1&gt;&lt;code&gt;right&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w7&quot;&gt;
            &lt;h1&gt;&lt;code&gt;bottom left&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w8&quot;&gt;
            &lt;h1&gt;&lt;code&gt;bottom&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w9&quot;&gt;
            &lt;h1&gt;&lt;code&gt;bottom right&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_P_perspective-origin.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_perspective-origin.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_perspective-origin.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_perspective-origin.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_perspective-origin.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_perspective-origin.html.pdf) |

## 🔬 PERSPECTIVE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/perspective.html)

<details>
    <summary>
        View PERSPECTIVE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/p/perspective/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .wrapper {
  width: 50%;
  float: left;
}

.w1 {
  perspective: 1000px;
}

.w2 {
  perspective: 250px;
}

.wrapper h1 {
  text-align: center;
}

.cube {
  font-size: 4em;
  width: 2em;
  margin: 1.5em auto;
  transform-style: preserve-3d;
  transform: rotateX(-40deg) rotateY(32deg);
}

.side {
  position: absolute;
  width: 2em;
  height: 2em;
  background: rgba(255, 99, 71, 0.6);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: white;
  text-align: center;
  line-height: 2em;
}

.front {
  transform: translateZ(1em);
}

.top {
  transform: rotateX(90deg) translateZ(1em);
}

.right {
  transform: rotateY(90deg) translateZ(1em);
}

.left {
  transform: rotateY(-90deg) translateZ(1em);
}

.bottom {
  transform: rotateX(-90deg) translateZ(1em);
}

.back {
  transform: rotateY(-180deg) translateZ(1em);
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;wrapper w1&quot;&gt;
            &lt;h1&gt;&lt;code&gt;perspective: 1000px&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;wrapper w2&quot;&gt;
            &lt;h1&gt;&lt;code&gt;perspective: 250px&lt;/code&gt;&lt;/h1&gt;
            &lt;div class=&quot;cube&quot;&gt;
              &lt;div class=&quot;side  front&quot;&gt;1&lt;/div&gt;
              &lt;div class=&quot;side   back&quot;&gt;6&lt;/div&gt;
              &lt;div class=&quot;side  right&quot;&gt;4&lt;/div&gt;
              &lt;div class=&quot;side   left&quot;&gt;3&lt;/div&gt;
              &lt;div class=&quot;side    top&quot;&gt;5&lt;/div&gt;
              &lt;div class=&quot;side bottom&quot;&gt;2&lt;/div&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_P_perspective.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_perspective.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_perspective.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_perspective.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_perspective.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_perspective.html.pdf) |

## 🔬 POSITION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/P/position.html)

<details>
    <summary>
        View POSITION Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_position_absolute --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid #73AD21;
} 

div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;position: absolute;&lt;/h2&gt;

        &lt;p&gt;An element with position: absolute; is positioned relative to the nearest positioned ancestor (instead of positioned relative to the viewport, like fixed):&lt;/p&gt;
        
        &lt;div class=&quot;relative&quot;&gt;This div element has position: relative;
          &lt;div class=&quot;absolute&quot;&gt;This div element has position: absolute;&lt;/div&gt;
        &lt;/div&gt; 
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_P_position.html.png) | ![typeset Preview](typeset__html_CSS_Properties_P_position.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_P_position.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_P_position.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_P_position.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_P_position.html.pdf) |


