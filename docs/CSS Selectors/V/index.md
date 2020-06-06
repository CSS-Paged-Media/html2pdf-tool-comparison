---
layout: details
title: V
permalink: /CSS-Selectors/V/
description: 
---



## 🔬 VALID

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/V/valid.html)

<details>
    <summary>
        View VALID Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/v/valid/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:invalid {
  background: hsla(0, 90%, 70%, 1);
}

input:valid {
  background: hsla(100, 90%, 70%, 1);
}


body {
  padding: 3em;
}
label {
  display: block;
}
input {
  padding: 0.25em 0;
  margin-bottom: 0.75em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;label for=&quot;email&quot;&gt;Email:&lt;/label&gt;
        &lt;input type=&quot;email&quot; id=&quot;email&quot; name=&quot;email&quot; /&gt;
        
        &lt;label for=&quot;emailRequired&quot;&gt;Email (required):&lt;/label&gt;
        &lt;input type=&quot;email&quot; id=&quot;emailRequired&quot; name=&quot;emailRequired&quot; required /&gt;
        
        &lt;form action=&quot;#&quot;&gt;
          &lt;label id=&quot;guess&quot;&gt;Enter a number 1 through 9:&lt;/label&gt;
          &lt;input type=&quot;text&quot; id=&quot;guess&quot; name=&quot;guess&quot; pattern=&quot;[1-9]{1}&quot; required /&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_V_valid.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_V_valid.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_V_valid.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_V_valid.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_V_valid.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_V_valid.html.pdf) |

## 🔬 VISITED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/V/visited.html)

<details>
    <summary>
        View VISITED Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/v/visited/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        a.csstricks {
  color: green;
}

a.csstricks:visited {
  color: #E18728;
}

a.codepen {
  border: 2px solid blue;
}

a.codepen:visited {
  border: 2px solid black;
}

a.google {
  background-color: yellow;
  color: black;
}

a.google:visited {
  background-color: #E18728;
  color: white;
}
/* Pen styling, unrelated to :visited */

.links {
  max-width: 70vw;
  margin: 0 auto;
  font-size: 1.5em;
  font-family: 'Source Sans Pro', sans-serif;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;section class=&quot;links&quot;&gt;
            &lt;p&gt;&lt;a href=&quot;https://www.css-tricks.com&quot; class=&quot;csstricks&quot;&gt;This link goes to CSS-Tricks. After it's been visited, it will turn orange.&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href=&quot;https://www.codepen.io&quot; class=&quot;codepen&quot;&gt;This link goes to CodePen. After it's been visited, its border will turn black.&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href=&quot;https://www.google.com&quot; class=&quot;google&quot;&gt;This link goes to Google. After it's been visited, it will turn white and the background will turn orange. &lt;/a&gt;&lt;/p&gt;
          &lt;/section&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_V_visited.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_V_visited.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_V_visited.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_V_visited.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_V_visited.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_V_visited.html.pdf) |


