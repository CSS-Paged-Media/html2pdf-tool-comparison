---
layout: details
title: R
permalink: /CSS-Selectors/R/
description: 
---



## 🔬 READ-ONLY

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/read-only.html){:target="_blank"}

<details>
    <summary>
        View READ-ONLY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_sel_read-only --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:-moz-read-only</span> { <span class="hljs-comment">/* For Firefox */</span>
  <span class="hljs-attribute">background-color</span>: yellow;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:read-only</span> {
  <span class="hljs-attribute">background-color</span>: yellow;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>A demonstration of the :read-only selector.<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A normal input element:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"hello"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A readonly input element:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">readonly</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"hello"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The :read-only selector selects form elements with a "readonly" attribute.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_read-only.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_read-only.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_read-only.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_R_read-only.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_read-only.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_R_read-only.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_read-only.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_R_read-only.html.pdf){:target="_blank"} |

## 🔬 READ-WRITE

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/read-write.html){:target="_blank"}

<details>
    <summary>
        View READ-WRITE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_sel_read-write --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:-moz-read-write</span> { <span class="hljs-comment">/* For Firefox */</span>
  <span class="hljs-attribute">background-color</span>: yellow;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:read-write</span> {
  <span class="hljs-attribute">background-color</span>: yellow;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>A demonstration of the :read-write selector.<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A normal input element:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"hello"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>A readonly input element:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">readonly</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"hello"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The :read-write selector selects form elements with no "readonly" attribute.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_read-write.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_read-write.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_read-write.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_R_read-write.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_read-write.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_R_read-write.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_read-write.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_R_read-write.html.pdf){:target="_blank"} |

## 🔬 REQUIRED

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/required.html){:target="_blank"}

<details>
    <summary>
        View REQUIRED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/r/required/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:required</span>,
<span class="hljs-selector-tag">textarea</span><span class="hljs-selector-pseudo">:required</span> {
  <span class="hljs-attribute">border-color</span>: red <span class="hljs-meta">!important</span>;
}
<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:required</span> + <span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>; 
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">500px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
}
<span class="hljs-selector-tag">form</span> <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
}
<span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">display</span>: block;
}
<span class="hljs-selector-tag">input</span> + <span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">display</span>: inline-block;
  <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">10px</span>;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=email]</span>,
<span class="hljs-selector-tag">textarea</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#999</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
  
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"name"</span>&gt;</span>Name<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"name"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"name"</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"email"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">required</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio-choice"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"radio-choice-1"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"choice-1"</span> <span class="hljs-attr">required</span> /&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"radio-choice-1"</span>&gt;</span>Choice 1<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio-choice"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"radio-choice-2"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"choice-2"</span> <span class="hljs-attr">required</span> /&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"radio-choice-2"</span>&gt;</span>Choice 2<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"textarea"</span>&gt;</span>Comment<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">cols</span>=<span class="hljs-string">"40"</span> <span class="hljs-attr">rows</span>=<span class="hljs-string">"8"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"textarea"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"textarea"</span> <span class="hljs-attr">required</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"buttons"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Submit"</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>  
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_required.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_required.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_required.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_R_required.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_required.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_R_required.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_required.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_R_required.html.pdf){:target="_blank"} |

## 🔬 ROOT

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/R/root.html){:target="_blank"}

<details>
    <summary>
        View ROOT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/r/root/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-pseudo">:root</span> {
  <span class="hljs-attribute">background-color</span>: cornflowerblue;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">3em</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: white;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1.5em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>We can take advantage of being able to apply CSS to the <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>html<span class="hljs-symbol">&amp;gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> element to skip the wrapper <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>div<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> and keep our markup clean!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_R_root.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_R_root.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_R_root.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_R_root.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_R_root.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_R_root.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_R_root.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_R_root.html.pdf){:target="_blank"} |


