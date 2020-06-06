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
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/lang/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">q</span><span class="hljs-selector-pseudo">:before</span> { <span class="hljs-attribute">content</span>: open-quote; }
<span class="hljs-selector-tag">q</span><span class="hljs-selector-pseudo">:after</span> { <span class="hljs-attribute">content</span>: close-quote; }

<span class="hljs-selector-pseudo">:lang(en)</span> <span class="hljs-selector-tag">q</span> { <span class="hljs-attribute">quotes</span>: <span class="hljs-string">'“'</span> <span class="hljs-string">'”'</span>; }
<span class="hljs-selector-pseudo">:lang(fr)</span> <span class="hljs-selector-tag">q</span> { <span class="hljs-attribute">quotes</span>: <span class="hljs-string">'«'</span> <span class="hljs-string">'»'</span>; }
<span class="hljs-selector-pseudo">:lang(de)</span> <span class="hljs-selector-tag">q</span> { <span class="hljs-attribute">quotes</span>: <span class="hljs-string">'»'</span> <span class="hljs-string">'«'</span>; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">q</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_lang.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_lang.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_lang.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_L_lang.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_lang.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_lang.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_lang.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_L_lang.html.pdf) |

## 🔬 LAST-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/last-child.html)

<details>
    <summary>
        View LAST-CHILD Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/last-child/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: Palatino, Georgia, serif;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">32em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.4</span>;
}

<span class="hljs-comment">/* by formatting the selector this way, we are less specific than `article p:first-child`
 this means ANY element that is the first child of `article` can be styled */</span>
<span class="hljs-selector-tag">article</span> <span class="hljs-selector-pseudo">:first-child</span> {
<span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:last-child</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.75em</span>;
  <span class="hljs-attribute">font-style</span>: italic;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>"Very well, Sir Francis," replied Mr. Fogg; "if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master."<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_last-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_last-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_last-child.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_L_last-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_last-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_last-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_last-child.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_L_last-child.html.pdf) |

## 🔬 LAST-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/last-of-type.html)

<details>
    <summary>
        View LAST-OF-TYPE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/last-of-type/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: Palatino, Georgia, serif;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">32em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.4</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:first-of-type</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.25em</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:last-of-type</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.75em</span>;
  <span class="hljs-attribute">font-style</span>: italic;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Around the World in Eighty Days<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>"Very well, Sir Francis," replied Mr. Fogg; "if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master."<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         
         
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_last-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_last-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_last-of-type.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_L_last-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_last-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_last-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_last-of-type.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_L_last-of-type.html.pdf) |

## 🔬 LINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/L/link.html)

<details>
    <summary>
        View LINK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/l/link/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-pseudo">:link</span> {
  <span class="hljs-attribute">color</span>: aquamarine;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://css-tricks.com"</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">""</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://css-tricks.com"</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_L_link.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_L_link.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_L_link.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_L_link.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_L_link.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_L_link.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_L_link.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_L_link.html.pdf) |


