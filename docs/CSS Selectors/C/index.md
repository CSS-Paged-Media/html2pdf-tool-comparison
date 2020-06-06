---
layout: details
title: C
permalink: /CSS-Selectors/C/
description: 
---



## 🔬 CHECKED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/checked.html)

<details>
    <summary>
        View CHECKED Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/checked/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 
input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
} 
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input type=&quot;checkbox&quot; id=&quot;ossm&quot; name=&quot;ossm&quot;&gt; 
        &lt;label for=&quot;ossm&quot;&gt;CSS is Awesome&lt;/label&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_checked.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_checked.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_checked.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_checked.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_checked.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_checked.html.pdf) |

## 🔬 CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/child.html)

<details>
    <summary>
        View CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/child/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        ol &gt; li {
  color: red;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;ol&gt;
            &lt;li&gt;Numbered list item 1&lt;/li&gt;
            &lt;li&gt;Numbered list item 2&lt;/li&gt;
            &lt;ul&gt;
              &lt;li&gt;List item 1&lt;/li&gt;
              &lt;li&gt;List item 2&lt;/li&gt;
            &lt;/ul&gt;
            &lt;li&gt;Numbered list item 3&lt;/li&gt;
          &lt;/ol&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_child.html.pdf) |

## 🔬 CLASS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/class.html)

<details>
    <summary>
        View CLASS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/class/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        /*CSS for elements with the .intro class */
.intro {
  font-family: sans-serif;
}

/*CSS for elements with the .blue class */
.blue {
  background-color: #799FE5;
}

/*CSS for elements with both the intro and blue classes */
.intro.blue {
  padding: 1em;
  font-size: 1.3em;
}

/* this is just to keep the demo area small */
section {
width: 50%;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;section&gt;
            &lt;p class=&quot;intro blue&quot;&gt;
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nulla nunc. Quisque mi, varius ac suscipit a, bibendum ut tellus. Morbi mollis diam vel libero vestibulum, at congue turpis imperdiet.
            &lt;/p&gt;
            
            &lt;p class=&quot;intro&quot;&gt;
              Donec vestibulum convallis mauris a eleifend. Duis a turpis et sapien maximus rhoncus. Morbi at nunc ultricies, rutrum velit et, porta magna. Nunc non leo mattis, mollis mauris eu, facilisis est. Vestibulum viverra urna efficitur bibendum consectetur. Phasellus aliquet ac tellus quis tristique. Fusce fermentum venenatis dolor, id ultrices tellus condimentum vel. Donec elementum in purus vitae tristique. Etiam luctus lorem non nibh pretium volutpat a at libero.
            &lt;/p&gt;
            &lt;/div&gt;
            &lt;/section&gt;
            
            
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_class.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_class.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_class.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_class.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_class.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_class.html.pdf) |


