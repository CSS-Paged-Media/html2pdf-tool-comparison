---
layout: details
title: A
permalink: /CSS-Properties/A/
description: 
---



## 🔬 ALIGN-CONTENT

### Input HTML & CSS

<details>
    <summary>
        View ALIGN-CONTENT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/align-content/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">120px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid silver;
  <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">10px</span>;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
  
  <span class="hljs-attribute">-webkit-flex-flow</span>: row wrap;
  <span class="hljs-attribute">flex-flow</span>: row wrap;
}

<span class="hljs-selector-class">.flex-start</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: flex-start; 
  <span class="hljs-attribute">align-content</span>: flex-start; 
}

<span class="hljs-selector-class">.flex-end</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: flex-end; 
  <span class="hljs-attribute">align-content</span>: flex-end; 
}
<span class="hljs-selector-class">.flex-end</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: gold;
}

<span class="hljs-selector-class">.center</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: center; 
  <span class="hljs-attribute">align-content</span>: center; 
}
<span class="hljs-selector-class">.center</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
}

<span class="hljs-selector-class">.space-between</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: space-between; 
  <span class="hljs-attribute">align-content</span>: space-between; 
}  
<span class="hljs-selector-class">.space-between</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: lightgreen;
}

<span class="hljs-selector-class">.space-around</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: space-around; 
  <span class="hljs-attribute">align-content</span>: space-around; 
}
<span class="hljs-selector-class">.space-around</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: hotpink;
}

<span class="hljs-selector-class">.stretch</span> { 
  <span class="hljs-attribute">-webkit-align-content</span>: stretch; 
  <span class="hljs-attribute">align-content</span>: stretch; 
}
<span class="hljs-selector-class">.stretch</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: chocolate;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">50px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container flex-start"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container flex-end"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container center"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container space-between"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container space-around"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container stretch"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-content.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.dir }}/mpdf__html_CSS_Properties_A_align-content.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_A_align-content.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_A_align-content.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_A_align-content.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_A_align-content.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_A_align-content.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_A_align-content.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_A_align-content.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 ALIGN-ITEMS

### Input HTML & CSS

<details>
    <summary>
        View ALIGN-ITEMS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/align-items/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">float</span>: left;
}

<span class="hljs-selector-class">.flex-start</span> { 
  <span class="hljs-attribute">-webkit-align-items</span>: flex-start;
  <span class="hljs-attribute">align-items</span>: flex-start; 
}

<span class="hljs-selector-class">.flex-end</span> { 
  <span class="hljs-attribute">-webkit-align-items</span>: flex-end; 
  <span class="hljs-attribute">align-items</span>: flex-end; 
}
<span class="hljs-selector-class">.flex-end</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: gold;
}

<span class="hljs-selector-class">.center</span> { 
  <span class="hljs-attribute">-webkit-align-items</span>: center; 
  <span class="hljs-attribute">align-items</span>: center; 
}  
<span class="hljs-selector-class">.center</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: deepskyblue;
}

<span class="hljs-selector-class">.baseline</span> { 
  <span class="hljs-attribute">-webkit-align-items</span>: baseline; 
  <span class="hljs-attribute">align-items</span>: baseline; 
}
<span class="hljs-selector-class">.baseline</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: lightgreen;
}

<span class="hljs-selector-class">.stretch</span> { 
  <span class="hljs-attribute">-webkit-align-items</span>: stretch; 
  <span class="hljs-attribute">align-items</span>: stretch; 
}  
<span class="hljs-selector-class">.stretch</span> <span class="hljs-selector-tag">li</span> {
  <span class="hljs-attribute">background</span>: hotpink;
}

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">5px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container flex-start"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container flex-end"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container center"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container baseline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container stretch"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-items.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_A_align-items.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_A_align-items.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_A_align-items.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_A_align-items.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_A_align-items.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_A_align-items.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_A_align-items.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_A_align-items.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 ALIGN-SELF

### Input HTML & CSS

<details>
    <summary>
        View ALIGN-SELF Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  https://css-tricks.com/almanac/properties/a/align-self/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;

  <span class="hljs-attribute">display</span>: flex;
}

<span class="hljs-selector-class">.flex-start</span> { <span class="hljs-attribute">align-self</span>: flex-start; }
<span class="hljs-selector-class">.flex-end</span> { <span class="hljs-attribute">align-self</span>: flex-end; }
<span class="hljs-selector-class">.center</span> { <span class="hljs-attribute">align-self</span>: center; }
<span class="hljs-selector-class">.baseline</span> { <span class="hljs-attribute">align-self</span>: baseline; }
<span class="hljs-selector-class">.stretch</span> { <span class="hljs-attribute">align-self</span>: stretch; }

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex-start"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item flex-end"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item center"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item baseline"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item stretch"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/align-self.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_A_align-self.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_A_align-self.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_A_align-self.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_A_align-self.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_A_align-self.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_A_align-self.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_A_align-self.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_A_align-self.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 ALL

### Input HTML & CSS

<details>
    <summary>
        View ALL Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/all/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.container</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif;
  <span class="hljs-comment">/* inherited */</span>
  
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
  <span class="hljs-comment">/* inherited */</span>
  
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-comment">/* inherited */</span>
  
  <span class="hljs-attribute">text-transform</span>: uppercase;
  <span class="hljs-comment">/* inherited */</span>
  
  <span class="hljs-attribute">text-shadow</span>: <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> black;
  <span class="hljs-comment">/* inherited */</span>
}

<span class="hljs-selector-class">.parent</span> {
  <span class="hljs-attribute">color</span>: green;
  <span class="hljs-comment">/* inherited */</span>
  
  <span class="hljs-attribute">background-color</span>: gainsboro;
  <span class="hljs-comment">/* not inherited */</span>
  
  <span class="hljs-attribute">width</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-comment">/* not inherited */</span>
  
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-comment">/* not inherited */</span>
  
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-comment">/* not inherited */</span>
}

<span class="hljs-selector-class">.alltest</span>{
    <span class="hljs-attribute">all</span>:inherit;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"parent"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alltest"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Change this div's <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>all<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> value.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>    
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/all.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_A_all.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_A_all.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_A_all.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_A_all.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_A_all.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_A_all.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_A_all.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_A_all.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 APPEARANCE

### Input HTML & CSS

<details>
    <summary>
        View APPEARANCE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/a/appearance/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.reset</span> {
  <span class="hljs-attribute">-webkit-appearance</span>: none; 
}

<span class="hljs-selector-class">.fake-like-search</span> {
  <span class="hljs-attribute">-webkit-appearance</span>: searchfield;   
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span>&gt;</span> type=search 
        <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fake-like-search"</span>&gt;</span> type=text, made like search
        <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"reset"</span>&gt;</span> type=search, reset 
        <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span> type=text
        <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"reset"</span>&gt;</span> type=text, reset
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/A/appearance.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_A_appearance.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_A_appearance.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_A_appearance.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_A_appearance.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_A_appearance.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_A_appearance.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_A_appearance.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_A_appearance.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


