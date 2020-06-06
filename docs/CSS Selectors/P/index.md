---
layout: details
title: P
permalink: /CSS-Selectors/P/
description: 
---



## 🔬 PLACEHOLDER-SHOWN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/P/placeholder-shown.html)

<details>
    <summary>
        View PLACEHOLDER-SHOWN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/p/placeholder-shown/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5rem</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">65%</span>;
}
<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:placeholder-shown</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid red;
}



<span class="hljs-selector-tag">html</span>, <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#333</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">4em</span>;
}

<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">flex-direction</span>: column;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
  
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Placeholder text"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Currently has a value (not showing placeholder)."</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Currently has no value (showing placeholder)."</span>&gt;</span>
            
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
            
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_P_placeholder-shown.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_P_placeholder-shown.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_P_placeholder-shown.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_P_placeholder-shown.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_P_placeholder-shown.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_P_placeholder-shown.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_P_placeholder-shown.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_P_placeholder-shown.html.pdf) |

## 🔬 PLACEHOLDER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/P/placeholder.html)

<details>
    <summary>
        View PLACEHOLDER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/p/placeholder/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">4px</span>;
}
<span class="hljs-selector-tag">input</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">#000</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.2em</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}
<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">::placeholder</span> {
  <span class="hljs-attribute">color</span>: red;
}
<span class="hljs-selector-tag">label</span>, <span class="hljs-selector-tag">input</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif;
}
<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">65%</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">align-items</span>: center;
}
* {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">""</span>&gt;</span>
  
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"school"</span>&gt;</span>School Name:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"school"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"schoo"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Cherry River Middle School"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            
            
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_P_placeholder.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_P_placeholder.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_P_placeholder.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_P_placeholder.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_P_placeholder.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_P_placeholder.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_P_placeholder.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_P_placeholder.html.pdf) |


