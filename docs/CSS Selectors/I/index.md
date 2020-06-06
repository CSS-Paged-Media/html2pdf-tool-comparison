---
layout: details
title: I
permalink: /CSS-Selectors/I/
description: 
---



## 🔬 ID

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/id.html)

<details>
    <summary>
        View ID Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/id/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  padding: 1em;
  font-family: serif;
  line-height: 1.6;
}

#unique {
  color: red;
}

.reusable {
  color: blue;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p class=&quot;reusable&quot; id=&quot;unique&quot;&gt;&quot;Very well, Sir Francis,&quot; replied Mr. Fogg; &quot;if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master.&quot; The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish...&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_I_id.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_I_id.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_I_id.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_I_id.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_I_id.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_I_id.html.pdf) |

## 🔬 IN-RANGE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/in-range.html)

<details>
    <summary>
        View IN-RANGE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/in-range/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input:in-range {
  border: 5px solid green;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_I_in-range.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_I_in-range.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_I_in-range.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_I_in-range.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_I_in-range.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_I_in-range.html.pdf) |

## 🔬 INVALID

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/invalid.html)

<details>
    <summary>
        View INVALID Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/invalid/ --&gt;
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
fieldset {
 border: 0;   
}
input {
  padding: 0.25em 0;
  margin-bottom: 0.75em;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;fieldset&gt;
            &lt;label for=&quot;email&quot;&gt;Email:&lt;/label&gt;
            &lt;input type=&quot;email&quot; name=&quot;email&quot;&gt;
          &lt;/fieldset&gt;
            
          &lt;fieldset&gt;
            &lt;label for=&quot;emailRequired&quot;&gt;Email (required):&lt;/label&gt;
            &lt;input type=&quot;email&quot; name=&quot;emailRequired&quot; required&gt;
          &lt;/fieldset&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_I_invalid.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_I_invalid.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_I_invalid.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_I_invalid.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_I_invalid.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_I_invalid.html.pdf) |

## 🔬 IS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/is.html)

<details>
    <summary>
        View IS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from  --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        :-moz-any(div, ul, .match-me) span { 
  color: #44a244;
}

:-webkit-any(div, ul, .match-me) span { 
  color: #44a244;
}
:matches(div, ul, .match-me) span { 
  color: #44a244;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;span&gt;This is green because &lt;code&gt;div&lt;/code&gt; is one of the arguments we gave to :any&lt;/span&gt;
          &lt;/div&gt;
          
          &lt;ul&gt;
            &lt;li&gt;
              &lt;span&gt;This is green because &lt;code&gt;ul&lt;/code&gt; is one of the arguments we gave to :any&lt;/span&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          
          &lt;p&gt;
            &lt;span&gt;This is &lt;strong&gt;not&lt;/strong&gt; green because &lt;code&gt;p&lt;/code&gt; is &lt;strong&gt;not&lt;/strong&gt; one of the arguments we gave to :any&lt;/span&gt;
          &lt;/p&gt;
          
          &lt;p class=&quot;match-me&quot;&gt;
            &lt;span&gt;This is green because &lt;code&gt;.match-me&lt;/code&gt; is one of the arguments we gave to :any&lt;/span&gt;
          &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_I_is.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_I_is.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_I_is.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_I_is.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_I_is.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_I_is.html.pdf) |


