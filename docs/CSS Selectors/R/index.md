---
layout: details
title: R
permalink: /CSS-Selectors/R/
description: 
---



## 🔬 READ-ONLY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/read-only.html)

<details>
    <summary>
        View READ-ONLY Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_sel_read-only --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:-moz-read-only { /* For Firefox */
  background-color: yellow;
}

input:read-only {
  background-color: yellow;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h3&gt;A demonstration of the :read-only selector.&lt;/h3&gt;

        &lt;p&gt;A normal input element:&lt;br&gt;&lt;input value=&quot;hello&quot;&gt;&lt;/p&gt;
        
        &lt;p&gt;A readonly input element:&lt;br&gt;&lt;input readonly value=&quot;hello&quot;&gt;&lt;/p&gt;
        
        &lt;p&gt;The :read-only selector selects form elements with a &quot;readonly&quot; attribute.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_read-only.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_read-only.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_read-only.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_read-only.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_R_read-only.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_read-only.html.pdf) |

## 🔬 READ-WRITE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/read-write.html)

<details>
    <summary>
        View READ-WRITE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_sel_read-write --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:-moz-read-write { /* For Firefox */
  background-color: yellow;
}

input:read-write {
  background-color: yellow;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
&lt;h3&gt;A demonstration of the :read-write selector.&lt;/h3&gt;

&lt;p&gt;A normal input element:&lt;br&gt;&lt;input value=&quot;hello&quot;&gt;&lt;/p&gt;

&lt;p&gt;A readonly input element:&lt;br&gt;&lt;input readonly value=&quot;hello&quot;&gt;&lt;/p&gt;

&lt;p&gt;The :read-write selector selects form elements with no &quot;readonly&quot; attribute.&lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_read-write.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_read-write.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_read-write.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_read-write.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_R_read-write.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_read-write.html.pdf) |

## 🔬 REQUIRED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/required.html)

<details>
    <summary>
        View REQUIRED Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/r/required/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:required,
textarea:required {
  border-color: red !important;
}
input:required + label {
  color: red;
}

form {
  padding: 20px; 
  max-width: 500px;
  margin: 0 auto;
}
form div {
  padding: 5px;
}
label {
  display: block;
}
input + label {
  display: inline-block;
  margin-right: 10px;
}

input[type=text],
input[type=email],
textarea {
  border: 1px solid #999;
  padding: 5px;
  width: 100%;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form&gt;
  
            &lt;div&gt;
              &lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;
              &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; /&gt;
            &lt;/div&gt;
            
            &lt;div&gt;
              &lt;label for=&quot;email&quot;&gt;Email&lt;/label&gt;
              &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; required /&gt;
            &lt;/div&gt;
          
            &lt;div&gt;
              &lt;input type=&quot;radio&quot; name=&quot;radio-choice&quot; id=&quot;radio-choice-1&quot; value=&quot;choice-1&quot; required /&gt;
              &lt;label for=&quot;radio-choice-1&quot;&gt;Choice 1&lt;/label&gt;
              
              &lt;input type=&quot;radio&quot; name=&quot;radio-choice&quot; id=&quot;radio-choice-2&quot; value=&quot;choice-2&quot; required /&gt;
              &lt;label for=&quot;radio-choice-2&quot;&gt;Choice 2&lt;/label&gt;
            &lt;/div&gt;
              
            &lt;div&gt;
              &lt;label for=&quot;textarea&quot;&gt;Comment&lt;/label&gt;
              &lt;textarea cols=&quot;40&quot; rows=&quot;8&quot; name=&quot;textarea&quot; id=&quot;textarea&quot; required&gt;&lt;/textarea&gt;
            &lt;/div&gt;
          
            &lt;div class=&quot;buttons&quot;&gt;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot; /&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_required.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_required.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_required.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_required.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_R_required.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_required.html.pdf) |

## 🔬 ROOT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/root.html)

<details>
    <summary>
        View ROOT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/r/root/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        :root {
  background-color: cornflowerblue;
  padding: 3em;
}

body {
  background-color: white;
  padding: 1.5em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;We can take advantage of being able to apply CSS to the &lt;code&gt;&amp;lt;html&amp;gt;&lt;/code&gt; element to skip the wrapper &lt;code&gt;div&lt;/code&gt; and keep our markup clean!&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_root.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_root.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_root.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_root.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_R_root.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_root.html.pdf) |


