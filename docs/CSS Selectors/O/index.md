---
layout: details
title: O
permalink: /CSS-Selectors/O/
description: 
---



## 🔬 ONLY-CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/only-child.html)

<details>
    <summary>
        View ONLY-CHILD Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/only-child/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> <span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:only-child</span> {
  <span class="hljs-attribute">color</span>: red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the only child of its parent<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
           
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the first child of its parent<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is the second child of its parent<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_only-child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_only-child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_only-child.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_O_only-child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_only-child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_only-child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_only-child.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_O_only-child.html.pdf) |

## 🔬 ONLY-OF-TYPE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/only-of-type.html)

<details>
    <summary>
        View ONLY-OF-TYPE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/only-of-type/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">ul</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span> <span class="hljs-number">10px</span> <span class="hljs-number">10px</span> <span class="hljs-number">30px</span>;
}

<span class="hljs-selector-tag">li</span><span class="hljs-selector-pseudo">:only-of-type</span> {
  <span class="hljs-attribute">color</span>: red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>I'm all alone!<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>  
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>We are together.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>We are together.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>We are together.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>  
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_only-of-type.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_only-of-type.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_only-of-type.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_O_only-of-type.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_only-of-type.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_only-of-type.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_only-of-type.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_O_only-of-type.html.pdf) |

## 🔬 OPTIONAL

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/optional.html)

<details>
    <summary>
        View OPTIONAL Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/optional/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        * {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}

<span class="hljs-selector-pseudo">:optional</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.4</span>;
  <span class="hljs-attribute">transition</span>: .<span class="hljs-number">2s</span>;
}

<span class="hljs-selector-pseudo">:optional</span><span class="hljs-selector-pseudo">:hover</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">1</span>;
}

<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">20px</span> auto;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#EFEFEF</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#666</span>;
}

<span class="hljs-selector-class">.inline</span> {
  <span class="hljs-attribute">display</span>: inline;
  <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=<span class="hljs-string">"text"</span>]</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid silver;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=submit]</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">padding</span>:<span class="hljs-number">10px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">border-color</span>: <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">1</span>);
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">1</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">select</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid silver;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
}

<span class="hljs-keyword">@import</span> url(<span class="hljs-attribute">http:</span>//weloveiconfonts.com/api/?family=fontawesome);

<span class="hljs-comment">/* fontawesome */</span>
<span class="hljs-selector-attr">[class*=<span class="hljs-string">"fontawesome-"</span>]</span><span class="hljs-selector-pseudo">:before</span> {
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'FontAwesome'</span>, sans-serif;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"first-name"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fontawesome-user"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> Name<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"name"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"John Doe"</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"email"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fontawesome-envelope"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"john.doe@gmail.com"</span> <span class="hljs-attr">required</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"gender"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"man"</span> /&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"inline"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"man"</span>&gt;</span>Man<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"gender"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"woman"</span> /&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"inline"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"woman"</span>&gt;</span>Woman<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"continent"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fontawesome-globe"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> Continent<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"continent"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"0"</span>&gt;</span>Continent<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>North America<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>South America<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Europe<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"4"</span>&gt;</span>Africa<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"5"</span>&gt;</span>Asia<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"6"</span>&gt;</span>Oceania<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Sign up"</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_optional.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_optional.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_optional.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_O_optional.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_optional.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_optional.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_optional.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_O_optional.html.pdf) |

## 🔬 OUT-OF-RANGE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/O/out-of-range.html)

<details>
    <summary>
        View OUT-OF-RANGE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/o/out-of-range/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:out-of-range</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">min</span>=<span class="hljs-string">"5"</span> <span class="hljs-attr">max</span>=<span class="hljs-string">"10"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_O_out-of-range.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_O_out-of-range.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_O_out-of-range.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_O_out-of-range.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_O_out-of-range.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_O_out-of-range.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_O_out-of-range.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_O_out-of-range.html.pdf) |


