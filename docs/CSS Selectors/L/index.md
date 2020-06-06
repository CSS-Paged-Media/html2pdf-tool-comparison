---
layout: details
title: L
permalink: /CSS-Selectors/L/
description: 
---



## 🔬 LANG

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/lang.html)

<details>
    <summary>
        View LANG Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/lang/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        q:before { content: open-quote; }
q:after { content: close-quote; }

:lang(en) q { quotes: '&ldquo;' '&rdquo;'; }
:lang(fr) q { quotes: '&laquo;' '&raquo;'; }
:lang(de) q { quotes: '&raquo;' '&laquo;'; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;&lt;q&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/q&gt;&lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_lang.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_lang.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_lang.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_lang.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_lang.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_lang.html.pdf) |

## 🔬 LAST-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/last-child.html)

<details>
    <summary>
        View LAST-CHILD Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/last-child/ --&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_last-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_last-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_last-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_last-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_last-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_last-child.html.pdf) |

## 🔬 LAST-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/last-of-type.html)

<details>
    <summary>
        View LAST-OF-TYPE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/last-of-type/ --&gt;
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
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_last-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_last-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_last-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_last-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_last-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_last-of-type.html.pdf) |

## 🔬 LINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/link.html)

<details>
    <summary>
        View LINK Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/link/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        :link {
  color: aquamarine;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;a href=&quot;https://css-tricks.com&quot;&gt;CSS-Tricks&lt;/a&gt;

        &lt;a href=&quot;&quot;&gt;CSS-Tricks&lt;/a&gt;
        
        &lt;a href&gt;CSS-Tricks&lt;/a&gt;

        &lt;div href=&quot;https://css-tricks.com&quot;&gt;CSS-Tricks&lt;/div&gt;

    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_link.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_link.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_link.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_link.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_link.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_link.html.pdf) |


