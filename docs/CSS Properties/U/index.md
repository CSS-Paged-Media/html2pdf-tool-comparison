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
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/d/direction/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        *[dir=&quot;ltr&quot;] { direction: ltr; unicode-bidi: embed; }

*[dir=&quot;rtl&quot;] { direction: rtl; unicode-bidi: embed; }

bdo[dir=&quot;ltr&quot;] { direction: ltr; unicode-bidi: bidi-override; }

bdo[dir=&quot;rtl&quot;] { direction: rtl; unicode-bidi: bidi-override; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;This text will go left to right.&lt;/p&gt;
        &lt;p&gt;&lt;bdo dir=&quot;rtl&quot;&gt;This text will go right to left.&lt;/bdo&gt;&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_U_unicode-bidi.html.png) | ![typeset Preview](typeset__html_CSS_Properties_U_unicode-bidi.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_U_unicode-bidi.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_U_unicode-bidi.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_U_unicode-bidi.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_U_unicode-bidi.html.pdf) |

## 🔬 USER-SELECT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/U/user-select.html)

<details>
    <summary>
        View USER-SELECT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_user-select --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div {
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10+ and Edge */
  user-select: none; /* Standard syntax */
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;The user-select Property&lt;/h1&gt;

        &lt;div&gt;The text of this div element cannot be selected. If you double-click me, my text will not be highlighted.&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_U_user-select.html.png) | ![typeset Preview](typeset__html_CSS_Properties_U_user-select.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_U_user-select.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_U_user-select.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_U_user-select.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_U_user-select.html.pdf) |


