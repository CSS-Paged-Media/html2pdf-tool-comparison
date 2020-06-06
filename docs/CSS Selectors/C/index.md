---
layout: details
title: C
permalink: /CSS-Selectors/C/
description: 
---



## 🔬 CHECKED

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/checked.html)

<details>
    <summary>
        View CHECKED Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/checked/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=checkbox]</span> + <span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">font-style</span>: italic;
} 
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=checkbox]</span><span class="hljs-selector-pseudo">:checked</span> + <span class="hljs-selector-tag">label</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#f00</span>;
  <span class="hljs-attribute">font-style</span>: normal;
} 
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ossm"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"ossm"</span>&gt;</span> 
        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"ossm"</span>&gt;</span>CSS is Awesome<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_checked.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_checked.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_checked.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_checked.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_checked.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_checked.html.pdf) |

## 🔬 CHILD

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/child.html)

<details>
    <summary>
        View CHILD Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/child/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">ol</span> &gt; <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">color</span>: red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ol</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Numbered list item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Numbered list item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Numbered list item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ol</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_child.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_child.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_child.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_child.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_child.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_child.html.pdf) |

## 🔬 CLASS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/C/class.html)

<details>
    <summary>
        View CLASS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/c/class/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/*CSS for elements with the .intro class */</span>
<span class="hljs-selector-class">.intro</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif;
}

<span class="hljs-comment">/*CSS for elements with the .blue class */</span>
<span class="hljs-selector-class">.blue</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#799FE5</span>;
}

<span class="hljs-comment">/*CSS for elements with both the intro and blue classes */</span>
<span class="hljs-selector-class">.intro</span><span class="hljs-selector-class">.blue</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.3em</span>;
}

<span class="hljs-comment">/* this is just to keep the demo area small */</span>
<span class="hljs-selector-tag">section</span> {
<span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"intro blue"</span>&gt;</span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nulla nunc. Quisque mi, varius ac suscipit a, bibendum ut tellus. Morbi mollis diam vel libero vestibulum, at congue turpis imperdiet.
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"intro"</span>&gt;</span>
              Donec vestibulum convallis mauris a eleifend. Duis a turpis et sapien maximus rhoncus. Morbi at nunc ultricies, rutrum velit et, porta magna. Nunc non leo mattis, mollis mauris eu, facilisis est. Vestibulum viverra urna efficitur bibendum consectetur. Phasellus aliquet ac tellus quis tristique. Fusce fermentum venenatis dolor, id ultrices tellus condimentum vel. Donec elementum in purus vitae tristique. Etiam luctus lorem non nibh pretium volutpat a at libero.
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
            
            
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_C_class.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_C_class.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_C_class.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_C_class.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_C_class.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_C_class.html.pdf) |


