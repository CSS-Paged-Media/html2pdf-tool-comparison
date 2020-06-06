---
layout: details
title: T
permalink: /CSS-Selectors/T/
description: 
---



## 🔬 TARGET

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/T/target.html)

<details>
    <summary>
        View TARGET Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_target --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-pseudo">:target</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid <span class="hljs-number">#D4D4D4</span>;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#e5eecc</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>This is a heading<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#news1"</span>&gt;</span>Jump to New content 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#news2"</span>&gt;</span>Jump to New content 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Click on the links above and the :target selector highlight the current active HTML anchor.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"news1"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>New content 1...<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"news2"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>New content 2...<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_T_target.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_T_target.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_T_target.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_T_target.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_T_target.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_T_target.html.pdf) |

## 🔬 TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/T/type.html)

<details>
    <summary>
        View TYPE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/t/type/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> { <span class="hljs-comment">/* "p" is the type selector */</span>
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1em</span> <span class="hljs-number">0</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Hello Type.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_T_type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_T_type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_T_type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_T_type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_T_type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_T_type.html.pdf) |


