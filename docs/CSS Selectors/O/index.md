---
layout: details
title: O
permalink: /CSS-Selectors/O/
description: 
---



## 🔬 ONLY-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/only-child.html)

<details>
    <summary>
        View ONLY-CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/only-child/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div p:only-child {
  color: red;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;p&gt;This paragraph is the only child of its parent&lt;/p&gt;
          &lt;/div&gt;
           
          &lt;div&gt;
            &lt;p&gt;This paragraph is the first child of its parent&lt;/p&gt;
            &lt;p&gt;This paragraph is the second child of its parent&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_only-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_only-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_only-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_only-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_only-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_only-child.html.pdf) |

## 🔬 ONLY-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/only-of-type.html)

<details>
    <summary>
        View ONLY-OF-TYPE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/only-of-type/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        ul {
  border: 1px solid #ccc;
  margin: 20px;
  padding: 10px 10px 10px 30px;
}

li:only-of-type {
  color: red;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ul&gt;
            &lt;li&gt;I'm all alone!&lt;/li&gt;
          &lt;/ul&gt;  
          
          &lt;ul&gt;
            &lt;li&gt;We are together.&lt;/li&gt;
            &lt;li&gt;We are together.&lt;/li&gt;
            &lt;li&gt;We are together.&lt;/li&gt;
          &lt;/ul&gt;  
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_only-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_only-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_only-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_only-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_only-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_only-of-type.html.pdf) |

## 🔬 OPTIONAL

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/optional.html)

<details>
    <summary>
        View OPTIONAL Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/optional/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        * {
  box-sizing: border-box;
}

:optional {
  opacity: 0.4;
  transition: .2s;
}

:optional:hover {
  opacity: 1;
}

form {
  width: 100%;
  max-width: 400px;
  margin: 20px auto;
  background: #EFEFEF;
  padding: 1em;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

.inline {
  display: inline;
  margin-right: 1em;
}

input[type=&quot;text&quot;] {
  padding: 5px;
  width: 100%;
  border: 1px solid silver;
}

input[type=submit] {
  background: deepskyblue;
  color: white;
  padding:10px 0;
  border-color: rgba(0,0,0,.1);
  font-weight: bold;
  opacity: 1;
  width: 100%;
}

select {
  width: 100%;
  border: 1px solid silver;
  padding: 5px;
}

@import url(http://weloveiconfonts.com/api/?family=fontawesome);

/* fontawesome */
[class*=&quot;fontawesome-&quot;]:before {
  font-family: 'FontAwesome', sans-serif;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form&gt;
            &lt;p&gt;
              &lt;label for=&quot;first-name&quot;&gt;&lt;span class=&quot;fontawesome-user&quot;&gt;&lt;/span&gt; Name&lt;/label&gt;
              &lt;input type=&quot;text&quot; id=&quot;name&quot; placeholder=&quot;John Doe&quot; /&gt;
            &lt;/p&gt;
            &lt;p&gt;
              &lt;label for=&quot;email&quot;&gt;&lt;span class=&quot;fontawesome-envelope&quot;&gt;&lt;/span&gt; Email&lt;/label&gt;
              &lt;input type=&quot;text&quot; id=&quot;email&quot; placeholder=&quot;john.doe@gmail.com&quot; required /&gt;
            &lt;/p&gt;
            &lt;p&gt;
              &lt;input type=&quot;radio&quot; name=&quot;gender&quot; id=&quot;man&quot; /&gt; &lt;label class=&quot;inline&quot; for=&quot;man&quot;&gt;Man&lt;/label&gt;
              &lt;input type=&quot;radio&quot; name=&quot;gender&quot; id=&quot;woman&quot; /&gt; &lt;label class=&quot;inline&quot; for=&quot;woman&quot;&gt;Woman&lt;/label&gt;
            &lt;/p&gt;
            &lt;p&gt;
              &lt;label for=&quot;continent&quot;&gt;&lt;span class=&quot;fontawesome-globe&quot;&gt;&lt;/span&gt; Continent&lt;/label&gt;
              &lt;select id=&quot;continent&quot;&gt;
                &lt;option value=&quot;0&quot;&gt;Continent&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;North America&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;South America&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Europe&lt;/option&gt;
                &lt;option value=&quot;4&quot;&gt;Africa&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Asia&lt;/option&gt;
                &lt;option value=&quot;6&quot;&gt;Oceania&lt;/option&gt;
              &lt;/select&gt;
            &lt;/p&gt;
            &lt;p&gt;
              &lt;input type=&quot;submit&quot; value=&quot;Sign up&quot; /&gt;
            &lt;/p&gt;
          &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_optional.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_optional.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_optional.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_optional.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_optional.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_optional.html.pdf) |

## 🔬 OUT-OF-RANGE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/out-of-range.html)

<details>
    <summary>
        View OUT-OF-RANGE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/out-of-range/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:out-of-range {
  border: 5px solid red;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input type=&quot;number&quot; min=&quot;5&quot; max=&quot;10&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_out-of-range.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_out-of-range.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_out-of-range.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_out-of-range.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_out-of-range.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_out-of-range.html.pdf) |


