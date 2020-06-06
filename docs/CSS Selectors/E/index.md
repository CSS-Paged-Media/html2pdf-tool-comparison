---
layout: details
title: E
permalink: /CSS-Selectors/E/
description: 
---



## 🔬 EMPTY

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/E/empty.html){:target="_blank"}

<details>
    <summary>
        View EMPTY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/e/empty/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
            <span class="hljs-selector-tag">div</span>{
                <span class="hljs-attribute">border</span>:<span class="hljs-number">2px</span> solid red;
                <span class="hljs-attribute">height</span>:<span class="hljs-number">200px</span>;
                <span class="hljs-attribute">width</span>:<span class="hljs-number">200px</span>;
            }
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:empty</span> {
   <span class="hljs-attribute">display</span>: none;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><span class="hljs-comment">&lt;!-- test --&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>test<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><span class="hljs-comment">&lt;!-- test --&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_E_empty.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_E_empty.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_E_empty.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_E_empty.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_E_empty.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_E_empty.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_E_empty.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_E_empty.html.pdf){:target="_blank"} |

## 🔬 ENABLED

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/E/enabled.html){:target="_blank"}

<details>
    <summary>
        View ENABLED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_enabled_disabled --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span><span class="hljs-selector-pseudo">:enabled</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#ffff00</span>;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span><span class="hljs-selector-pseudo">:disabled</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#dddddd</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">""</span>&gt;</span>
            First name: <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Mickey"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Last name: <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Mouse"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Country: <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">disabled</span>=<span class="hljs-string">"disabled"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Disneyland"</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_E_enabled.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_E_enabled.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_E_enabled.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_E_enabled.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_E_enabled.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_E_enabled.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_E_enabled.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_E_enabled.html.pdf){:target="_blank"} |


