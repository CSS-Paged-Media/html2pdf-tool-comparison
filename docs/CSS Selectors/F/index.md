---
layout: details
title: F
permalink: /CSS-Selectors/F/
description: 
---



## 🔬 FIRST-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-child.html)

<details>
    <summary>
        View FIRST-CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-child/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  font-family: Palatino, Georgia, serif;
  max-width: 32em;
  padding: 1em 0 0 1em;
  line-height: 1.4;
}

/* by formatting the selector this way, we are less specific than `article p:first-child`
 this means ANY element that is the first child of `article` can be styled */
article :first-child {
color: red;
}

p:last-child {
  font-size: 0.75em;
  font-style: italic;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article&gt;
            &lt;p&gt;&quot;Very well, Sir Francis,&quot; replied Mr. Fogg; &quot;if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master.&quot;&lt;/p&gt;
          
            &lt;p&gt;The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.&lt;/p&gt;
          
            &lt;p&gt;Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.&lt;/p&gt;
          &lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_first-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_first-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_first-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_first-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_first-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_first-child.html.pdf) |

## 🔬 FIRST-LETTER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-letter.html)

<details>
    <summary>
        View FIRST-LETTER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-letter/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p::first-letter {
  font-weight: bold;
  color: red;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;
            The first letter is bold and red
           &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_first-letter.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_first-letter.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_first-letter.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_first-letter.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_first-letter.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_first-letter.html.pdf) |

## 🔬 FIRST-LINE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-line.html)

<details>
    <summary>
        View FIRST-LINE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-line/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        article {
  padding: 20px;
}

p {
  color: #444;
}

p:first-line {
  color: deepskyblue;
}

.p2 {
  color: #444;
}

.p2:first-line {
  color: tomato;
}

#p3 {
  color: #444;
}

#p3:first-line {
  color: firebrick;
}

#p4 {
  color: #444 !important;
}

#p4:first-line {
  color: hotpink;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article&gt;
            &lt;h2&gt;::first-line vs. tag selector&lt;/h2&gt;
              &lt;p&gt;This paragraph color is set to &lt;code&gt;#444&lt;/code&gt; with &lt;code&gt;p { color: #444; }&lt;/code&gt;. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
            
            &lt;h2&gt;::first-line vs class selector&lt;/h2&gt;
            &lt;p class=&quot;p2&quot;&gt;This paragraph color is set to &lt;code&gt;#444&lt;/code&gt; with &lt;code&gt;.p2 { color: #444; }&lt;/code&gt;. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
            
            &lt;h2&gt;::first-line vs ID selector&lt;/h2&gt;
            &lt;p id=&quot;p3&quot;&gt;This paragraph color is set to &lt;code&gt;#444&lt;/code&gt; with &lt;code&gt;#p3 { color: #444; }&lt;/code&gt;. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
            
            &lt;h2&gt;::first-line vs !important&lt;/h2&gt;
            &lt;p id=&quot;p4&quot;&gt;This paragraph color is set to &lt;code&gt;#444&lt;/code&gt; with &lt;code&gt;#p4 { color: #444 !important; }&lt;/code&gt;. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p&gt;  
            &lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_first-line.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_first-line.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_first-line.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_first-line.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_first-line.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_first-line.html.pdf) |

## 🔬 FIRST-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-of-type.html)

<details>
    <summary>
        View FIRST-OF-TYPE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-of-type/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  font-family: Palatino, Georgia, serif;
  max-width: 32em;
  padding: 1em 0 0 1em;
  line-height: 1.4;
}

p:first-of-type {
  font-size: 1.25em;
}

p:last-of-type {
  font-size: 0.75em;
  font-style: italic;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Around the World in Eighty Days&lt;/h1&gt;

        &lt;p&gt;&quot;Very well, Sir Francis,&quot; replied Mr. Fogg; &quot;if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master.&quot;&lt;/p&gt;
        
        &lt;p&gt;The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.&lt;/p&gt;
        
        &lt;p&gt;Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.&lt;/p&gt;
         
         
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_first-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_first-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_first-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_first-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_first-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_first-of-type.html.pdf) |

## 🔬 FOCUS-VISIBLE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus-visible.html)

<details>
    <summary>
        View FOCUS-VISIBLE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        input, button {
  margin: 10px;
}

.focus-only:focus {
  outline: 2px solid black;  
}

.focus-visible-only:focus-visible {
  outline: 4px dashed darkorange;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input value=&quot;Default styles&quot;&gt;&lt;br&gt;
        &lt;button&gt;Default styles&lt;/button&gt;&lt;br&gt;
        &lt;input class=&quot;focus-only&quot; value=&quot;:focus only&quot;&gt;&lt;br&gt;
        &lt;button class=&quot;focus-only&quot;&gt;:focus only&lt;/button&gt;&lt;br&gt;
        &lt;input class=&quot;focus-visible-only&quot; value=&quot;:focus-visible only&quot;&gt;&lt;br&gt;
        &lt;button class=&quot;focus-visible-only&quot;&gt;:focus-visible only&lt;/button&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_focus-visible.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_focus-visible.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_focus-visible.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_focus-visible.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_focus-visible.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_focus-visible.html.pdf) |

## 🔬 FOCUS-WITHIN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus-within.html)

<details>
    <summary>
        View FOCUS-WITHIN Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/focus-within/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;
  line-height: 1.4;
}
body {
  padding: 20px 15%;
  background: #3c889b;
}

form {
  background: white;
}
form:focus-within {
  background: #f9f98b;
}
form header {
  padding: 2rem;
}
form header div {
  font-size: 90%;
  color: #999;
}
form header h2 {
  margin: 0 0 5px 0;
}
form &gt; div {
  clear: both;
  overflow: hidden;
  padding: 0.5rem 2rem;
}
form &gt; div:last-child {
  padding-bottom: 2rem;
}
form &gt; div:focus-within {
  background: #a1c084;
}
form &gt; div &gt; fieldset &gt; div &gt; div {
  margin: 0 0 5px 0;
}
form &gt; div &gt; label,
legend {
	width: 25%;
  float: left;
  padding-right: 10px;
}
form &gt; div &gt; div,
form &gt; div &gt; fieldset &gt; div {
  width: 75%;
  float: right;
}
form &gt; div &gt; fieldset label {
	font-size: 90%;
}
fieldset {
	border: 0;
  padding: 0;
}

input[type=text],
input[type=email],
input[type=url],
input[type=password],
textarea {
	width: 100%;
  border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password] {
  width: 50%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
textarea:focus {
  outline: 0;
  border-color: #4697e4;
}

@media (max-width: 600px) {
  form &gt; div &gt; label,
  legend {
	  width: 100%;
    float: none;
    margin: 0 0 5px 0;
  }
  form &gt; div &gt; div,
  form &gt; div &gt; fieldset &gt; div {
    width: 100%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    width: 100%; 
  }
}
@media (min-width: 1200px) {
  form &gt; div &gt; label,
	legend {
  	text-align: right;
  }
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;#&quot;&gt;

            &lt;header&gt;
              &lt;h2&gt;This is a form.&lt;/h2&gt;
              &lt;div&gt;This form breaks at 600px and goes from a left-label form to a top-label form. At above 1200px, the labels align right. It also indicates focused fields with :focus-within.&lt;/div&gt;
            &lt;/header&gt;
            
            &lt;div&gt;
              &lt;label class=&quot;desc&quot; id=&quot;title1&quot; for=&quot;Field1&quot;&gt;Full Name&lt;/label&gt;
              &lt;div&gt;
                &lt;input id=&quot;Field1&quot; name=&quot;Field1&quot; type=&quot;text&quot; class=&quot;field text fn&quot; value=&quot;&quot; size=&quot;8&quot; tabindex=&quot;1&quot;&gt;
              &lt;/div&gt;
            &lt;/div&gt;
              
            &lt;div&gt;
              &lt;label class=&quot;desc&quot; id=&quot;title3&quot; for=&quot;Field3&quot;&gt;
                Email
              &lt;/label&gt;
              &lt;div&gt;
                &lt;input id=&quot;Field3&quot; name=&quot;Field3&quot; type=&quot;email&quot; spellcheck=&quot;false&quot; value=&quot;&quot; maxlength=&quot;255&quot; tabindex=&quot;3&quot;&gt; 
             &lt;/div&gt;
            &lt;/div&gt;
              
            &lt;div&gt;
              &lt;label class=&quot;desc&quot; id=&quot;title4&quot; for=&quot;Field4&quot;&gt;
                Message
              &lt;/label&gt;
            
              &lt;div&gt;
                &lt;textarea id=&quot;Field4&quot; name=&quot;Field4&quot; spellcheck=&quot;true&quot; rows=&quot;10&quot; cols=&quot;50&quot; tabindex=&quot;4&quot;&gt;&lt;/textarea&gt;
              &lt;/div&gt;
            &lt;/div&gt;
              
            &lt;div&gt;
              &lt;fieldset&gt;
              
                &lt;legend id=&quot;title5&quot; class=&quot;desc&quot;&gt;
                  Select a Choice
                &lt;/legend&gt;
                
                &lt;div&gt;
                    &lt;input id=&quot;radioDefault_5&quot; name=&quot;Field5&quot; type=&quot;hidden&quot; value=&quot;&quot;&gt;
                    &lt;div&gt;
                        &lt;input id=&quot;Field5_0&quot; name=&quot;Field5&quot; type=&quot;radio&quot; value=&quot;First Choice&quot; tabindex=&quot;5&quot; checked=&quot;checked&quot;&gt;
                        &lt;label class=&quot;choice&quot; for=&quot;Field5_0&quot;&gt;First Choice&lt;/label&gt;
                    &lt;/div&gt;
                  &lt;div&gt;
                      &lt;input id=&quot;Field5_1&quot; name=&quot;Field5&quot; type=&quot;radio&quot; value=&quot;Second Choice&quot; tabindex=&quot;6&quot;&gt;
                      &lt;label class=&quot;choice&quot; for=&quot;Field5_1&quot;&gt;Second Choice&lt;/label&gt;
                  &lt;/div&gt;
                  &lt;div&gt;
                      &lt;input id=&quot;Field5_2&quot; name=&quot;Field5&quot; type=&quot;radio&quot; value=&quot;Third Choice&quot; tabindex=&quot;7&quot;&gt;
                      &lt;label class=&quot;choice&quot; for=&quot;Field5_2&quot;&gt;Third Choice&lt;/label&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/fieldset&gt;
            &lt;/div&gt;
            
            &lt;div&gt;
              &lt;fieldset&gt;
                &lt;legend id=&quot;title6&quot; class=&quot;desc&quot;&gt;
                  Check All That Apply
                &lt;/legend&gt;
                &lt;div&gt;
                &lt;div&gt;
                    &lt;input id=&quot;Field6&quot; name=&quot;Field6&quot; type=&quot;checkbox&quot; value=&quot;First Choice&quot; tabindex=&quot;8&quot;&gt;
                    &lt;label class=&quot;choice&quot; for=&quot;Field6&quot;&gt;First Choice&lt;/label&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;input id=&quot;Field7&quot; name=&quot;Field7&quot; type=&quot;checkbox&quot; value=&quot;Second Choice&quot; tabindex=&quot;9&quot;&gt;
                    &lt;label class=&quot;choice&quot; for=&quot;Field7&quot;&gt;Second Choice&lt;/label&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;input id=&quot;Field8&quot; name=&quot;Field8&quot; type=&quot;checkbox&quot; value=&quot;Third Choice&quot; tabindex=&quot;10&quot;&gt;
                    &lt;label class=&quot;choice&quot; for=&quot;Field8&quot;&gt;Third Choice&lt;/label&gt;
                &lt;/span&gt;
                &lt;/div&gt;
              &lt;/fieldset&gt;
            &lt;/div&gt;
            
            &lt;div&gt;
              &lt;label class=&quot;desc&quot; id=&quot;title106&quot; for=&quot;Field106&quot;&gt;
                  Select a Choice
              &lt;/label&gt;
              &lt;div&gt;
              &lt;select id=&quot;Field106&quot; name=&quot;Field106&quot; class=&quot;field select medium&quot; tabindex=&quot;11&quot;&gt; 
                &lt;option value=&quot;First Choice&quot;&gt;First Choice&lt;/option&gt;
                &lt;option value=&quot;Second Choice&quot;&gt;Second Choice&lt;/option&gt;
                &lt;option value=&quot;Third Choice&quot;&gt;Third Choice&lt;/option&gt;
              &lt;/select&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            
            &lt;div&gt;
                  &lt;div&gt;
                    &lt;input id=&quot;saveForm&quot; name=&quot;saveForm&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
              &lt;/div&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_focus-within.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_focus-within.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_focus-within.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_focus-within.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_focus-within.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_focus-within.html.pdf) |

## 🔬 FOCUS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus.html)

<details>
    <summary>
        View FOCUS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/focus/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        :focus {
  background: pink;
}

div {
  margin: 16px 0;
}

textarea {
  width: 500px;
}

button {
  margin: 16px 0;
  display: block;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;HTML5 Methods for Making Things Tab-able&lt;/h1&gt;

        &lt;p&gt;All of the items below are tabbable. The text area and button are tabbable by default, and the divs use two different methods.&lt;/p&gt;
        
        &lt;textarea tabindex=&quot;1&quot;&gt;A textarea. Focus states work by default.&lt;/textarea&gt;
        &lt;button tabindex=&quot;2&quot;&gt;And I'm a button. Again, works by default.&lt;/button&gt;
        &lt;div contenteditable tabindex=&quot;3&quot;&gt;Divs don't usually have a focus state. But I'm special, because I'm &lt;code&gt;contenteditable&lt;/code&gt;.&lt;/div&gt;
        &lt;div tabindex=&quot;4&quot;&gt;I'm another div, and I have a &lt;code&gt;tabindex&lt;/code&gt;. You can't edit me like the div above, but you can tab to me.&lt;/div&gt;
        &lt;textarea tabindex=&quot;-1&quot;&gt;I can't be tabbed to. This is a terrible idea, generally, but it can be done using tabindex=&quot;-1&quot;. Notice that (if you click) I still have a focus state, even though you can't tab to me.&lt;/textarea&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_F_focus.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_F_focus.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_F_focus.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_F_focus.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_F_focus.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_F_focus.html.pdf) |


