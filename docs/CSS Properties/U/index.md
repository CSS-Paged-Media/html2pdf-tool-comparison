---
layout: details
title: U
permalink: /CSS-Properties/U/
description: 
---



## 🔬 UNICODE-BIDI

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/U/unicode-bidi.html)

<details>
    <summary>
        View UNICODE-BIDI Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/d/direction/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        *<span class="hljs-selector-attr">[dir=<span class="hljs-string">"ltr"</span>]</span> { <span class="hljs-attribute">direction</span>: ltr; <span class="hljs-attribute">unicode-bidi</span>: embed; }

*<span class="hljs-selector-attr">[dir=<span class="hljs-string">"rtl"</span>]</span> { <span class="hljs-attribute">direction</span>: rtl; <span class="hljs-attribute">unicode-bidi</span>: embed; }

<span class="hljs-selector-tag">bdo</span><span class="hljs-selector-attr">[dir=<span class="hljs-string">"ltr"</span>]</span> { <span class="hljs-attribute">direction</span>: ltr; <span class="hljs-attribute">unicode-bidi</span>: bidi-override; }

<span class="hljs-selector-tag">bdo</span><span class="hljs-selector-attr">[dir=<span class="hljs-string">"rtl"</span>]</span> { <span class="hljs-attribute">direction</span>: rtl; <span class="hljs-attribute">unicode-bidi</span>: bidi-override; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This text will go left to right.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">bdo</span> <span class="hljs-attr">dir</span>=<span class="hljs-string">"rtl"</span>&gt;</span>This text will go right to left.<span class="hljs-tag">&lt;/<span class="hljs-name">bdo</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_U_unicode-bidi.html.png) | ![typeset Preview](typeset__html_CSS_Properties_U_unicode-bidi.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_U_unicode-bidi.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_U_unicode-bidi.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_U_unicode-bidi.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_U_unicode-bidi.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_U_unicode-bidi.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_U_unicode-bidi.html.pdf) |

## 🔬 USER-SELECT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/U/user-select.html)

<details>
    <summary>
        View USER-SELECT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_user-select --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">-webkit-user-select</span>: none; <span class="hljs-comment">/* Safari */</span>
  <span class="hljs-attribute">-ms-user-select</span>: none; <span class="hljs-comment">/* IE 10+ and Edge */</span>
  <span class="hljs-attribute">user-select</span>: none; <span class="hljs-comment">/* Standard syntax */</span>
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The user-select Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>The text of this div element cannot be selected. If you double-click me, my text will not be highlighted.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_U_user-select.html.png) | ![typeset Preview](typeset__html_CSS_Properties_U_user-select.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_U_user-select.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_U_user-select.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_U_user-select.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_U_user-select.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_U_user-select.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_U_user-select.html.pdf) |


