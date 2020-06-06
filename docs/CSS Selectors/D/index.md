---
layout: details
title: D
permalink: /CSS-Selectors/D/
description: 
---



## 🔬 DEFAULT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/default.html)

<details>
    <summary>
        View DEFAULT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/default/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input[type=&quot;radio&quot;]:default + label:after {
   content: ' (default)';
   color: #999;
   font-style: italic;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul&gt;
            &lt;li&gt;
              &lt;input type=&quot;radio&quot; name=&quot;color&quot; value=&quot;red&quot; id=&quot;red&quot;&gt; 
              &lt;label for=&quot;red&quot;&gt;red&lt;/label&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;input type=&quot;radio&quot; name=&quot;green&quot; value=&quot;green&quot; id=&quot;green&quot; checked&gt; 
              &lt;label for=&quot;green&quot;&gt;green&lt;/label&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;input type=&quot;radio&quot; name=&quot;blue&quot; value=&quot;blue&quot; id=&quot;blue&quot;&gt; 
              &lt;label for=&quot;blue&quot;&gt;blue&lt;/label&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_default.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_default.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_default.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_default.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_D_default.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_default.html.pdf) |

## 🔬 DESCENDANT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/descendant.html)

<details>
    <summary>
        View DESCENDANT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/descendant/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
            div span{
                color:red;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;span&gt;I will match&lt;/span&gt;
            &lt;ul&gt;
              &lt;li&gt;
                 &lt;span&gt;I will match too&lt;/span&gt;
              &lt;/li&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_descendant.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_descendant.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_descendant.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_descendant.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_D_descendant.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_descendant.html.pdf) |

## 🔬 DIR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/dir.html)

<details>
    <summary>
        View DIR Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/dir/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  background-color: #000;
  width: 100%;
}

div {
  background-color: #eaeaea;
  margin: 1em;
  padding: 2em;
  max-width: 100%;
}

div:dir(ltr) {
  background-color: #333;
  color: #fff;
}

div:dir(rtl) {
  background: red;
  color: #fff;
}

.support {
  color: #fff;
  text-align: center;
  display: block;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p class=&quot;support&quot;&gt;This demo currently only works in Firefox&lt;/p&gt;

        &lt;div dir=&quot;ltr&quot;&gt;
          &lt;h1&gt;left-to-right&lt;/h1&gt;
          &lt;p&gt;Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.&lt;/p&gt;
          &lt;cite&gt;&amp;mdash;Bill Watterson&lt;/cite&gt;
        &lt;/div&gt;
        &lt;div dir=&quot;rtl&quot;&gt;
          &lt;h1&gt;right to left&lt;/h1&gt;
          &lt;p&gt;Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.&lt;/p&gt;
          &lt;cite&gt;&amp;mdash;Bill Watterson&lt;/cite&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_dir.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_dir.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_dir.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_dir.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_D_dir.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_dir.html.pdf) |

## 🔬 DISABLED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/disabled.html)

<details>
    <summary>
        View DISABLED Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/disabled/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /* The good stuff starts here :)
*/

  input {
    width: 60%;
    margin: 0;
    border: none;
    outline: 1px solid lightgrey;
    outline-offset: 2px;
  }

input:disabled {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAIklEQVQIW2NkQAKrVq36zwjjgzhhYWGMYAEYB8RmROaABADeOQ8CXl/xfgAAAABJRU5ErkJggg==) repeat;
}

/* BASIC PAGE CSS. NOT PART OF THE EXAMPLE
*/

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font: 300 16px/1.25 &quot;Helvetica Neue&quot;, sans-serif;
  color: slategrey;
  background: cornflowerblue;
  padding: 1.5em;
}

form {
  background: whitesmoke;
  padding: 1.5em;
  max-width: 400px;
  width: 100%;
  outline: 3px solid rgba(0, 0, 0, 0.25);
}

  hr {
    visibility: hidden;
  }

  label {
    margin-right: 3%;
  text-align: left;
    display: inline-block;
    width: 35%;
  }

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;#&quot;&gt;
            &lt;label for=&quot;name&quot;&gt;Enabled Input:&lt;/label&gt;
            &lt;input type=&quot;text&quot; autofocus&gt;
              &lt;hr&gt;
            &lt;label for=&quot;name&quot;&gt;Disabled Input:&lt;/label&gt;
            &lt;input type=&quot;text&quot; disabled&gt;
        &lt;/form&gt;  
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_disabled.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_disabled.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_disabled.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_disabled.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_D_disabled.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_disabled.html.pdf) |


