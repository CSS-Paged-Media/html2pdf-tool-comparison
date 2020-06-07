---
layout: details
title: D
permalink: /CSS-Properties/D/
description: Test Section "D" to compare different html2pdf tools.
---



## 🔬 DIRECTION

### Input HTML & CSS

<details>
    <summary>
        View DIRECTION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/d/direction/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        *<span class="hljs-selector-attr">[dir=<span class="hljs-string">"ltr"</span>]</span> { <span class="hljs-attribute">direction</span>: ltr; <span class="hljs-attribute">unicode-bidi</span>: embed; }

*<span class="hljs-selector-attr">[dir=<span class="hljs-string">"rtl"</span>]</span> { <span class="hljs-attribute">direction</span>: rtl; <span class="hljs-attribute">unicode-bidi</span>: embed; }

<span class="hljs-selector-tag">bdo</span><span class="hljs-selector-attr">[dir=<span class="hljs-string">"ltr"</span>]</span> { <span class="hljs-attribute">direction</span>: ltr; <span class="hljs-attribute">unicode-bidi</span>: bidi-override; }

<span class="hljs-selector-tag">bdo</span><span class="hljs-selector-attr">[dir=<span class="hljs-string">"rtl"</span>]</span> { <span class="hljs-attribute">direction</span>: rtl; <span class="hljs-attribute">unicode-bidi</span>: bidi-override; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This text will go left to right.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">bdo</span> <span class="hljs-attr">dir</span>=<span class="hljs-string">"rtl"</span>&gt;</span>This text will go right to left.<span class="hljs-tag">&lt;/<span class="hljs-name">bdo</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/D/direction.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_D_direction.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_D_direction.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_D_direction.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_D_direction.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_D_direction.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_D_direction.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_D_direction.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_D_direction.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 DISPLAY

### Input HTML & CSS

<details>
    <summary>
        View DISPLAY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_display --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {<span class="hljs-attribute">color</span>: red;}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.ex1</span> {<span class="hljs-attribute">display</span>: none;}
<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.ex2</span> {<span class="hljs-attribute">display</span>: inline;}
<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.ex3</span> {<span class="hljs-attribute">display</span>: block;}
<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.ex4</span> {<span class="hljs-attribute">display</span>: inline-block;}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The display Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>display: none:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex1"</span>&gt;</span>HELLO WORLD!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>display: inline:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex2"</span>&gt;</span>HELLO WORLD!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>display: block:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex3"</span>&gt;</span>HELLO WORLD!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>display: inline-block:<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ex4"</span>&gt;</span>HELLO WORLD!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/D/display.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_D_display.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_D_display.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_D_display.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_D_display.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_D_display.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_D_display.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_D_display.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_D_display.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


