---
layout: details
title: S
permalink: /CSS-Selectors/S/
description: 
---



## 🔬 SELECTION

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/S/selection.html){:target="_blank"}

<details>
    <summary>
        View SELECTION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/s/selection/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.example-color</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#8e44ad</span>;
}
<span class="hljs-selector-class">.example-background-color</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#f1c40f</span>;
}
<span class="hljs-selector-class">.example-background</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#e74c3c</span>;
}
<span class="hljs-selector-class">.example-both</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#8e44ad</span>;
  <span class="hljs-attribute">color</span>: white;
}
<span class="hljs-selector-class">.example-shadow</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">text-shadow</span>: <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-number">#27ae60</span>;
}
<span class="hljs-selector-class">.example-input</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#2ecc71</span>;
}
<span class="hljs-selector-class">.example-textarea</span><span class="hljs-selector-pseudo">::selection</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#34495e</span>;
  <span class="hljs-attribute">color</span>: white;
}
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Source Sans Pro'</span>, Arial, sans-serif;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.45</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#E0DCCC</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">18px</span>;
}

<span class="hljs-selector-tag">p</span>,<span class="hljs-selector-tag">input</span>,<span class="hljs-selector-tag">textarea</span>  {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">1em</span>;
}
<span class="hljs-selector-tag">input</span>,<span class="hljs-selector-tag">textarea</span> {
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-family</span>: inherit;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Select me to see normal behavior.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-color'</span>&gt;</span>Try selecting me for a different text color.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-background-color'</span>&gt;</span>You can select me for a different background color.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-background'</span>&gt;</span>You can also select me for a different background.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-both'</span>&gt;</span>Guess what<span class="hljs-symbol">&amp;hellip;</span> you can select me for a different background color and text color.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-shadow'</span>&gt;</span>How about a text-shadow? Sure, select me for a different text-shadow.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-background-color'</span>&gt;</span>
          What about nest elements? Select me for a different background color.
          <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-color'</span>&gt;</span>And this sentence is just a color selection.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
          Nesting works!
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-input'</span> <span class="hljs-attr">type</span>=<span class="hljs-string">'text'</span> <span class="hljs-attr">value</span>=<span class="hljs-string">'Inputs work!*'</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'example-textarea'</span> <span class="hljs-attr">cols</span>=<span class="hljs-string">'30'</span> <span class="hljs-attr">name</span>=<span class="hljs-string">''</span> <span class="hljs-attr">rows</span>=<span class="hljs-string">'10'</span>&gt;</span>Textarea, too!*<span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'foot-notes'</span>&gt;</span>*not Safari<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_S_selection.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_S_selection.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_S_selection.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_S_selection.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_S_selection.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_S_selection.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_S_selection.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_S_selection.html.pdf){:target="_blank"} |


