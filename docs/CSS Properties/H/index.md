---
layout: details
title: H
permalink: /CSS-Properties/H/
description: 
---



## 🔬 HANGING-PUNCTUATION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/hanging-punctuation.html)

<details>
    <summary>
        View HANGING-PUNCTUATION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/hanging-punctuation/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">blockquote</span> {
  <span class="hljs-attribute">font-style</span>: italic;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2rem</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">20em</span>;
  <span class="hljs-attribute">border-left</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ddd</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">3rem</span> <span class="hljs-number">0</span>;
  
  <span class="hljs-attribute">hanging-punctuation</span>: first;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span>&gt;</span>
            “Let your tears flow, but let them also cease. Let deepest sighs be drawn from your breast, but let them also find an end.” — Seneca
          <span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_hanging-punctuation.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_hanging-punctuation.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_hanging-punctuation.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_hanging-punctuation.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_hanging-punctuation.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_hanging-punctuation.html.pdf) |

## 🔬 HEIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/height.html)

<details>
    <summary>
        View HEIGHT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/height/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#e78629</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#212121</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#FFF</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.heightpx</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.heightem</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">8em</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.heightpercent</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-comment">/* height value determined by content */</span>
}

<span class="hljs-selector-class">.nesting</span> {
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> <span class="hljs-selector-class">.heightnested</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-comment">/* fills the available space of the containing parent element*/</span>
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> <span class="hljs-selector-class">.heightnested</span> {
  <span class="hljs-attribute">height</span>: auto;
  <span class="hljs-comment">/* fills the available space of the containing parent element*/</span>
}

<span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">margin-right</span>: .<span class="hljs-number">5em</span>;
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-class">.table-example1</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}

<span class="hljs-selector-class">.table-example2</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Height Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Block Level Elements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"heightpx"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"heightem"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 8em<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"heightpercent"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Elements Contained<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example1"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"heightnested"</span>&gt;</span>Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example2"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"heightnested"</span>&gt;</span>Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: auto<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Table Height<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"browser-support-table table-example1"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Height<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"chrome"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Chrome<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"safari"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Safari<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"firefox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Firefox<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opera"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Opera<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ie"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>IE<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"android"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Android<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"iOS"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>iOS<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>100px<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"browser-support-table table-example2"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Height<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"chrome"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Chrome<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"safari"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Safari<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"firefox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Firefox<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opera"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Opera<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ie"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>IE<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"android"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Android<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"iOS"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>iOS<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>100%<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_height.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_height.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_height.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_height.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_height.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_height.html.pdf) |

## 🔬 HYPHENS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/hyphens.html)

<details>
    <summary>
        View HYPHENS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/hyphenate/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">article</span> {
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">500px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> auto;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">text-align</span>: justify;
}

<span class="hljs-selector-tag">article</span> <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">-webkit-hyphens</span>: auto;
  <span class="hljs-attribute">-moz-hyphens</span>: auto;
  <span class="hljs-attribute">-ms-hyphens</span>: auto;
  <span class="hljs-attribute">hyphens</span>: auto;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>As designers attempting to creating functional work, oftentimes we are required to make our designs look as finished as possible.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>For example, if you are designing a brand new website for someone, most times you will have to make sure the prototype looks finished by inserting text or photos or what have you. The purpose of this is so the person viewing the prototype has a chance to actually feel and understand the idea behind what you have created.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Now in some circumstances, designers may use squares and rectangles to help you visualize what should and could be in a specific location.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>We all have our own techniques, but one of the most effective techniques is to actually put some text where text goes and some pictures where pictures go to make sure everyone can see the vision you’ve created.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Coming up with filler text on the fly is not easy, but it is becoming more and more of a requirement. Fortunately, some designers and developers around the web know this and have put together a bunch of text generators to help you present your vision.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Some are standard (like the always popular ‘Lorem Ipsum’ generators) and some are really fun. Either way, pick one of your favorites from below and start generating text and completing your vision.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>From <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://www.webdesignerdepot.com/2012/03/15-dummy-text-generators-you-should-know/"</span>&gt;</span>this article<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> on WebDesignerDepot.<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_hyphens.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_hyphens.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_hyphens.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_hyphens.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_hyphens.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_hyphens.html.pdf) |


