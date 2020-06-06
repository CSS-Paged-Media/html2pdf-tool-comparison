---
layout: details
title: P
permalink: /CSS-Selectors/P/
description: 
---



## 🔬 PLACEHOLDER-SHOWN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/P/placeholder-shown.html)

<details>
    <summary>
        View PLACEHOLDER-SHOWN Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/p/placeholder-shown/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input {
  font-size: 1.5rem;
  margin: 10px;
  padding: 10px;
  width: 65%;
}
input:placeholder-shown {
  border: 5px solid red;
}



html, body {
  background: #333;
}

body {
  padding-top: 4em;
}

form {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form&gt;
  
            &lt;input type=&quot;text&quot; placeholder=&quot;Placeholder text&quot; value=&quot;Currently has a value (not showing placeholder).&quot;&gt;
            
            &lt;input type=&quot;text&quot; placeholder=&quot;Currently has no value (showing placeholder).&quot;&gt;
            
          &lt;/form&gt;
            
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_P_placeholder-shown.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_P_placeholder-shown.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_P_placeholder-shown.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_P_placeholder-shown.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_P_placeholder-shown.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_P_placeholder-shown.html.pdf) |

## 🔬 PLACEHOLDER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/P/placeholder.html)

<details>
    <summary>
        View PLACEHOLDER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/p/placeholder/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        label {
  display: block;
  color: white;
  margin: 0 0 4px;
}
input {
  border: #000;
  padding: 10px;
  font-size: 1.2em;
  width: 100%;
}
input::placeholder {
  color: red;
}
label, input {
  font-family: sans-serif;
}
form {
  width: 65%;
}

body {
  background: #333;
  display: flex;
  justify-content: center;
  align-items: center;
}
* {
  box-sizing: border-box;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;&quot;&gt;
  
            &lt;div&gt;
              &lt;label for=&quot;school&quot;&gt;School Name:&lt;/label&gt;
              &lt;input id=&quot;school&quot; name=&quot;schoo&quot; type=&quot;text&quot; placeholder=&quot;Cherry River Middle School&quot;&gt;
            &lt;/div&gt;
            
            
            
          &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_P_placeholder.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_P_placeholder.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_P_placeholder.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_P_placeholder.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_P_placeholder.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_P_placeholder.html.pdf) |


