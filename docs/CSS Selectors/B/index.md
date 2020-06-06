---
layout: details
title: B
permalink: /CSS-Selectors/B/
description: 
---



## 🔬 BEFORE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/B/before.html)

<details>
    <summary>
        View BEFORE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/after-and-before/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div::before {
  content: &quot;before&quot;;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;h1&gt;Hello World&lt;/h1&gt;    
            &lt;p&gt;Test for before.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_B_before.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_B_before.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_B_before.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_B_before.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_B_before.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_B_before.html.pdf) |

## 🔬 BLANK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/B/blank.html)

<details>
    <summary>
        View BLANK Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/b/blank/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p {
  min-height: 30px;
  width: 250px;
  background-color: lightblue;
}

p:blank { display: none; }

p:-moz-only-whitespace { display: none; } /* Mozilla-only pseudo-class that works like :blank will */
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;blanks&quot;&gt;
            &lt;p&gt;This paragraph is not empty or blank.&lt;/p&gt;
            &lt;p&gt;&lt;!--this is empty and blank --&gt;&lt;/p&gt;
            &lt;p&gt;
              
              &lt;!-- this is not empty, because it has whitespace. But it is blank.--&gt;
              
            &lt;/p&gt;
            &lt;p&gt;This paragraph is not empty or blank.&lt;/p&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_B_blank.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_B_blank.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_B_blank.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_B_blank.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_B_blank.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_B_blank.html.pdf) |


