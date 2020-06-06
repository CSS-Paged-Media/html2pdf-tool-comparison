---
layout: details
title: B
permalink: /CSS-Selectors/B/
description: 
---



## 🔬 BEFORE

### Input HTML & CSS

<details>
    <summary>
        View BEFORE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/after-and-before/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">::before</span> {
  <span class="hljs-attribute">content</span>: <span class="hljs-string">"before"</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Hello World<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>    
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Test for before.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/B/before.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Selectors_B_before.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Selectors_B_before.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Selectors_B_before.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Selectors_B_before.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Selectors_B_before.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Selectors_B_before.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Selectors_B_before.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Selectors_B_before.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 BLANK

### Input HTML & CSS

<details>
    <summary>
        View BLANK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/b/blank/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">30px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">250px</span>;
  <span class="hljs-attribute">background-color</span>: lightblue;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:blank</span> { <span class="hljs-attribute">display</span>: none; }

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:-moz-only-whitespace</span> { <span class="hljs-attribute">display</span>: none; } <span class="hljs-comment">/* Mozilla-only pseudo-class that works like :blank will */</span>
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"blanks"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is not empty or blank.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-comment">&lt;!--this is empty and blank --&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
              
              <span class="hljs-comment">&lt;!-- this is not empty, because it has whitespace. But it is blank.--&gt;</span>
              
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph is not empty or blank.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/B/blank.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Selectors_B_blank.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Selectors_B_blank.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Selectors_B_blank.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Selectors_B_blank.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Selectors_B_blank.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Selectors_B_blank.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Selectors_B_blank.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Selectors_B_blank.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


