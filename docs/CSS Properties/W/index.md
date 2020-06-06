---
layout: details
title: W
permalink: /CSS-Properties/W/
description: 
---



## 🔬 WHITE-SPACE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/white-space.html)

<details>
    <summary>
        View WHITE-SPACE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_text_white-space --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
 p.a {
  white-space: nowrap;
}

p.b {
  white-space: normal;
}

p.c {
  white-space: pre;
}       
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h1&gt;The white-space Property&lt;/h1&gt;

&lt;h2&gt;white-space: nowrap:&lt;/h2&gt;
&lt;p class=&quot;a&quot;&gt;
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
&lt;/p&gt;

&lt;h2&gt;white-space: normal:&lt;/h2&gt;
&lt;p class=&quot;b&quot;&gt;
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
&lt;/p&gt;

&lt;h2&gt;white-space: pre:&lt;/h2&gt;
&lt;p class=&quot;c&quot;&gt;
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_W_white-space.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_white-space.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_white-space.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_white-space.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_white-space.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_white-space.html.pdf) |

## 🔬 WIDOWS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/widows.html)

<details>
    <summary>
        View WIDOWS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/jsref/prop_style_widows.asp --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .othercontent {
  width: 400px;
  border-top: 19cm solid #c3c3c3;
}

@page {
/* set size of printed page */
  size: 21cm 27cm;
  margin-top: 2cm;
}

  #p1 {
    widows:2;
  }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;div class=&quot;othercontent&quot;&gt;
    
    &lt;p style=&quot;font-size:120%&quot; id=&quot;p1&quot;&gt;
    Line 2&lt;br&gt;
    Line 3&lt;br&gt;
    Line 4&lt;br&gt;
    Line 5&lt;br&gt;
    Line 6&lt;br&gt;
    Line 7&lt;br&gt;
    Line 8&lt;br&gt;
    &lt;/p&gt;
    &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_W_widows.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_widows.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_widows.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_widows.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_widows.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_widows.html.pdf) |

## 🔬 WIDTH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/width.html)

<details>
    <summary>
        View WIDTH Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/w/width/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        html {
	background: #292a2b;
	color: #FFF;
}

.box-width {
	height: 50px;
	background: #e78629;
}


.viewport {
	outline: 1px solid #ed862a;
	.box-width.percentage {
		width: 100%; // %
	}
  .box-width.pixel {
		width: 200px; // px
	}
	.box-width.em {
		width: 20em; // em
	}
	.box-width.em {
		width: 20rem; // rem
	}
}

.container {
	outline: 1px solid #ed862a;
	width: 500px;
	.box-width.percentage-half {
		width: 50%; // half %
	}
	.box-width.percentage-full {
		width: 100%; // full %
	}
	.box-width.pixel {
		width: 200px; // px
	}
	.box-width.em {
		width: 20em; // em
	}
	.box-width.em {
		width: 20rem; // rem
	}
}

.absolute-position {
  position: relative;
  .box-width.no-width { // width is calculated based on content
    outline: 1px solid black;
    position: absolute;
    top: 0;
    right: 0;
  }
}

.box-width.row-percent {
	width: 50%;
}

.box-width.row-em {
	width: 20em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;!-- Entire Viewport --&gt;
&lt;h1&gt;Entire Viewport&lt;/h1&gt;
&lt;div class=&quot;viewport&quot;&gt;
	&lt;p&gt;Width &lt;code&gt;%&lt;/code&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width percentage&quot;&gt;100%&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;px&lt;/code&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width pixel&quot;&gt;200px&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;em&lt;/code&gt; &lt;small&gt;(based on 16px computed font-size)&lt;/small&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width em&quot;&gt;20em&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;rem&lt;/code&gt; &lt;small&gt;(based on 16px computed font-size of root element)&lt;/small&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width em&quot;&gt;20rem&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Container 480px --&gt;
&lt;h1&gt;Container 480px&lt;/h1&gt;
&lt;div class=&quot;container&quot;&gt;
	&lt;p&gt;Width &lt;code&gt;%&lt;/code&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width percentage-half&quot;&gt;50%&lt;/div&gt;
	&lt;div class=&quot;box-width percentage-full&quot;&gt;100%&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;px&lt;/code&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width pixel&quot;&gt;200px&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;em&lt;/code&gt; &lt;small&gt;(based on 16px computed font-size)&lt;/small&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width em&quot;&gt;20em&lt;/div&gt;
	&lt;p&gt;Width  &lt;code&gt;rem&lt;/code&gt; &lt;small&gt;(based on 16px computed font-size of root element)&lt;/small&gt;&lt;/p&gt;
	&lt;div class=&quot;box-width em&quot;&gt;20rem&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Absolute Position --&gt;
&lt;h1&gt;Absolute Position&lt;/h1&gt;
&lt;div class=&quot;absolute-position&quot;&gt;
	&lt;div class=&quot;box-width no-width&quot;&gt;Based on content if width is not defined&lt;/div&gt;
  &lt;div class=&quot;box-width rem&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;box-width em&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Table Rows --&gt;
&lt;h1&gt;Table Rows :(&lt;/h1&gt;
&lt;table&gt;
	&lt;tr class=&quot;box-width row-percent&quot;&gt;
		&lt;td&gt;%&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr class=&quot;box-width row-em&quot;&gt;
		&lt;td&gt;em&lt;/td&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Properties_W_width.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_width.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_width.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_width.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_width.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_width.html.pdf) |

## 🔬 WORD-BREAK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/word-break.html)

<details>
    <summary>
        View WORD-BREAK Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/w/word-break/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        .txt {
  word-break: break-all;
  line-height: 1;
  text-transform: uppercase;
  text-align: center;
  font-size: 40px;
  font-weight: bold;
  color: #eee;
  width: 1em;
}

html, body {
  height: 100%;
}

body {
  font-family: Palatino, serif;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #0074d9;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1 class=&quot;txt&quot;&gt;Marco&lt;/h1&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_W_word-break.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_word-break.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_word-break.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_word-break.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_word-break.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_word-break.html.pdf) |

## 🔬 WORD-SPACING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/word-spacing.html)

<details>
    <summary>
        View WORD-SPACING Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_text_word-spacing --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p.a { 
  word-spacing: normal;
}

p.b { 
  word-spacing: 30px;
}

p.c { 
  word-spacing: 1cm;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h1&gt;The word-spacing Property&lt;/h1&gt;

&lt;h2&gt;word-spacing: normal:&lt;/h2&gt;
&lt;p class=&quot;a&quot;&gt;This is some text. This is some text.&lt;/p&gt;

&lt;h2&gt;word-spacing: 30px:&lt;/h2&gt;
&lt;p class=&quot;b&quot;&gt;This is some text. This is some text.&lt;/p&gt;

&lt;h2&gt;word-spacing: 1cm:&lt;/h2&gt;
&lt;p class=&quot;c&quot;&gt;This is some text. This is some text.&lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_W_word-spacing.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_word-spacing.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_word-spacing.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_word-spacing.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_word-spacing.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_word-spacing.html.pdf) |

## 🔬 WRITING-MODE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/W/writing-mode.html)

<details>
    <summary>
        View WRITING-MODE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/w/writing-mode/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p {
  font-family: Georgia, serif;
  font-size: 18px;
}

.vertical-rl {
  -webkit-writing-mode: vertical-rl;
      -ms-writing-mode: tb-rl;
          writing-mode: vertical-rl;
  color: #0074d9;
  display: inline-block;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;This is text that needs to be read from top to bottom, and from right to left:&lt;/p&gt;

        &lt;p class=&quot;vertical-rl&quot;&gt;This is text that needs to be read from top to bottom, and from right to left.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_W_writing-mode.html.png) | ![typeset Preview](typeset__html_CSS_Properties_W_writing-mode.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_W_writing-mode.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_W_writing-mode.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_W_writing-mode.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_W_writing-mode.html.pdf) |


