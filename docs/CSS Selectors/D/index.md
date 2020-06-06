---
layout: details
title: D
permalink: /CSS-Selectors/D/
description: 
---



## 🔬 DEFAULT

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/default.html){:target="_blank"}

<details>
    <summary>
        View DEFAULT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/default/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=<span class="hljs-string">"radio"</span>]</span><span class="hljs-selector-pseudo">:default</span> + <span class="hljs-selector-tag">label</span><span class="hljs-selector-pseudo">:after</span> {
   <span class="hljs-attribute">content</span>: <span class="hljs-string">' (default)'</span>;
   <span class="hljs-attribute">color</span>: <span class="hljs-number">#999</span>;
   <span class="hljs-attribute">font-style</span>: italic;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"color"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"red"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"red"</span>&gt;</span> 
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"red"</span>&gt;</span>red<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"green"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"green"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"green"</span> <span class="hljs-attr">checked</span>&gt;</span> 
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"green"</span>&gt;</span>green<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"blue"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"blue"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"blue"</span>&gt;</span> 
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"blue"</span>&gt;</span>blue<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_default.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_default.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_default.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_D_default.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_default.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_D_default.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_default.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_D_default.html.pdf){:target="_blank"} |

## 🔬 DESCENDANT

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/descendant.html){:target="_blank"}

<details>
    <summary>
        View DESCENDANT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/descendant/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
            <span class="hljs-selector-tag">div</span> <span class="hljs-selector-tag">span</span>{
                <span class="hljs-attribute">color</span>:red;
            }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>I will match<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
                 <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>I will match too<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_descendant.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_descendant.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_descendant.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_D_descendant.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_descendant.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_D_descendant.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_descendant.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_D_descendant.html.pdf){:target="_blank"} |

## 🔬 DIR

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/dir.html){:target="_blank"}

<details>
    <summary>
        View DIR Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/dir/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#000</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#eaeaea</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:dir(ltr)</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:dir(rtl)</span> {
  <span class="hljs-attribute">background</span>: red;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
}

<span class="hljs-selector-class">.support</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">display</span>: block;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"support"</span>&gt;</span>This demo currently only works in Firefox<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">dir</span>=<span class="hljs-string">"ltr"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>left-to-right<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">cite</span>&gt;</span><span class="hljs-symbol">&amp;mdash;</span>Bill Watterson<span class="hljs-tag">&lt;/<span class="hljs-name">cite</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">dir</span>=<span class="hljs-string">"rtl"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>right to left<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">cite</span>&gt;</span><span class="hljs-symbol">&amp;mdash;</span>Bill Watterson<span class="hljs-tag">&lt;/<span class="hljs-name">cite</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_dir.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_dir.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_dir.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_D_dir.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_dir.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_D_dir.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_dir.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_D_dir.html.pdf){:target="_blank"} |

## 🔬 DISABLED

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/D/disabled.html){:target="_blank"}

<details>
    <summary>
        View DISABLED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/d/disabled/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/* The good stuff starts here :)
*/</span>

  <span class="hljs-selector-tag">input</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">60%</span>;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">border</span>: none;
    <span class="hljs-attribute">outline</span>: <span class="hljs-number">1px</span> solid lightgrey;
    <span class="hljs-attribute">outline-offset</span>: <span class="hljs-number">2px</span>;
  }

<span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:disabled</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAIklEQVQIW2NkQAKrVq36zwjjgzhhYWGMYAEYB8RmROaABADeOQ8CXl/xfgAAAABJRU5ErkJggg==) repeat;
}

<span class="hljs-comment">/* BASIC PAGE CSS. NOT PART OF THE EXAMPLE
*/</span>

* {
  <span class="hljs-attribute">-webkit-box-sizing</span>: border-box;
  <span class="hljs-attribute">-moz-box-sizing</span>: border-box;
  <span class="hljs-attribute">box-sizing</span>: border-box;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font</span>: <span class="hljs-number">300</span> <span class="hljs-number">16px</span>/<span class="hljs-number">1.25</span> <span class="hljs-string">"Helvetica Neue"</span>, sans-serif;
  <span class="hljs-attribute">color</span>: slategrey;
  <span class="hljs-attribute">background</span>: cornflowerblue;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1.5em</span>;
}

<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">background</span>: whitesmoke;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1.5em</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">3px</span> solid <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0</span>, <span class="hljs-number">0.25</span>);
}

  <span class="hljs-selector-tag">hr</span> {
    <span class="hljs-attribute">visibility</span>: hidden;
  }

  <span class="hljs-selector-tag">label</span> {
    <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">3%</span>;
  <span class="hljs-attribute">text-align</span>: left;
    <span class="hljs-attribute">display</span>: inline-block;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">35%</span>;
  }

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">"#"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"name"</span>&gt;</span>Enabled Input:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">autofocus</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"name"</span>&gt;</span>Disabled Input:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">disabled</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>  
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_D_disabled.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_D_disabled.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_D_disabled.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_D_disabled.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_D_disabled.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_D_disabled.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_D_disabled.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_D_disabled.html.pdf){:target="_blank"} |


