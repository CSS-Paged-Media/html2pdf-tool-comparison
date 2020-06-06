---
layout: details
title: V
permalink: /CSS-Selectors/V/
description: 
---



## 🔬 VALID

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/V/valid.html)

<details>
    <summary>
        View VALID Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/v/valid/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:invalid</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">hsla</span>(<span class="hljs-number">0</span>, <span class="hljs-number">90%</span>, <span class="hljs-number">70%</span>, <span class="hljs-number">1</span>);
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:valid</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">hsla</span>(<span class="hljs-number">100</span>, <span class="hljs-number">90%</span>, <span class="hljs-number">70%</span>, <span class="hljs-number">1</span>);
}


<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">3em</span>;
}
<span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">display</span>: block;
}
<span class="hljs-selector-tag">input</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.25em</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">0.75em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"email"</span>&gt;</span>Email:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"email"</span> /&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"emailRequired"</span>&gt;</span>Email (required):<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"emailRequired"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"emailRequired"</span> <span class="hljs-attr">required</span> /&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">"#"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"guess"</span>&gt;</span>Enter a number 1 through 9:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"guess"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"guess"</span> <span class="hljs-attr">pattern</span>=<span class="hljs-string">"[1-9]{1}"</span> <span class="hljs-attr">required</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_V_valid.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_V_valid.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_V_valid.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_V_valid.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_V_valid.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_V_valid.html.pdf) |

## 🔬 VISITED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/V/visited.html)

<details>
    <summary>
        View VISITED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/v/visited/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.csstricks</span> {
  <span class="hljs-attribute">color</span>: green;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.csstricks</span><span class="hljs-selector-pseudo">:visited</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#E18728</span>;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.codepen</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid blue;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.codepen</span><span class="hljs-selector-pseudo">:visited</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> solid black;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.google</span> {
  <span class="hljs-attribute">background-color</span>: yellow;
  <span class="hljs-attribute">color</span>: black;
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-class">.google</span><span class="hljs-selector-pseudo">:visited</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">color</span>: white;
}
<span class="hljs-comment">/* Pen styling, unrelated to :visited */</span>

<span class="hljs-selector-class">.links</span> {
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">70vw</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Source Sans Pro'</span>, sans-serif;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"links"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.css-tricks.com"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"csstricks"</span>&gt;</span>This link goes to CSS-Tricks. After it's been visited, it will turn orange.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.codepen.io"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"codepen"</span>&gt;</span>This link goes to CodePen. After it's been visited, its border will turn black.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.google.com"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"google"</span>&gt;</span>This link goes to Google. After it's been visited, it will turn white and the background will turn orange. <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_V_visited.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_V_visited.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_V_visited.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_V_visited.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_V_visited.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_V_visited.html.pdf) |


