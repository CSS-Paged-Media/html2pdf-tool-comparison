---
layout: details
title: E
permalink: /CSS-Selectors/E/
description: 
---



## 🔬 EMPTY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/E/empty.html)

<details>
    <summary>
        View EMPTY Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/e/empty/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
            div{
                border:2px solid red;
                height:200px;
                width:200px;
            }
        div:empty {
   display: none;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;&lt;/div&gt;

        &lt;div&gt;&lt;!-- test --&gt;&lt;/div&gt;&lt;div&gt;test&lt;/div&gt;

        &lt;div&gt;&lt;!-- test --&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_E_empty.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_E_empty.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_E_empty.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_E_empty.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_E_empty.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_E_empty.html.pdf) |

## 🔬 ENABLED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/E/enabled.html)

<details>
    <summary>
        View ENABLED Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_enabled_disabled --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
input[type=text]:enabled {
  background: #ffff00;
}

input[type=text]:disabled {
  background: #dddddd;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;&quot;&gt;
            First name: &lt;input type=&quot;text&quot; value=&quot;Mickey&quot;&gt;&lt;br&gt;
            Last name: &lt;input type=&quot;text&quot; value=&quot;Mouse&quot;&gt;&lt;br&gt;
            Country: &lt;input type=&quot;text&quot; disabled=&quot;disabled&quot; value=&quot;Disneyland&quot;&gt;
          &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_E_enabled.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_E_enabled.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_E_enabled.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_E_enabled.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_E_enabled.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_E_enabled.html.pdf) |


