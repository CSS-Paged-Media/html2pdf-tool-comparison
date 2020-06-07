---
layout: details
title: I
permalink: /CSS-Selectors/I/
description: Test Section 'I' to compare different html2pdf tools.
---



## 🔬 ID

### Input HTML & CSS

<details>
    <summary>
        View ID Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/id/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">font-family</span>: serif;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.6</span>;
}

<span class="hljs-selector-id">#unique</span> {
  <span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-class">.reusable</span> {
  <span class="hljs-attribute">color</span>: blue;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"reusable"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"unique"</span>&gt;</span>"Very well, Sir Francis," replied Mr. Fogg; "if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master." The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/id.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_id.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_I_id.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_id.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_id.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_id.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_CSS_Selectors_I_id.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_CSS_Selectors_I_id.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>

## 🔬 IN-RANGE

### Input HTML & CSS

<details>
    <summary>
        View IN-RANGE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/in-range/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span><span class="hljs-selector-pseudo">:in-range</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid green;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">min</span>=<span class="hljs-string">"5"</span> <span class="hljs-attr">max</span>=<span class="hljs-string">"10"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/in-range.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_in-range.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_I_in-range.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_in-range.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_in-range.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_in-range.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_CSS_Selectors_I_in-range.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_CSS_Selectors_I_in-range.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>

## 🔬 INVALID

### Input HTML & CSS

<details>
    <summary>
        View INVALID Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/i/invalid/ --&gt;</span>
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
<span class="hljs-selector-tag">fieldset</span> {
 <span class="hljs-attribute">border</span>: <span class="hljs-number">0</span>;   
}
<span class="hljs-selector-tag">input</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.25em</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">0.75em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"email"</span>&gt;</span>Email:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"email"</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
            
          <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"emailRequired"</span>&gt;</span>Email (required):<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"emailRequired"</span> <span class="hljs-attr">required</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/invalid.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_invalid.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_I_invalid.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_invalid.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_invalid.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_invalid.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_CSS_Selectors_I_invalid.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_CSS_Selectors_I_invalid.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>

## 🔬 IS

### Input HTML & CSS

<details>
    <summary>
        View IS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-pseudo">:-moz-any(div</span>, <span class="hljs-selector-tag">ul</span>, <span class="hljs-selector-class">.match-me</span>) <span class="hljs-selector-tag">span</span> { 
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#44a244</span>;
}

<span class="hljs-selector-pseudo">:-webkit-any(div</span>, <span class="hljs-selector-tag">ul</span>, <span class="hljs-selector-class">.match-me</span>) <span class="hljs-selector-tag">span</span> { 
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#44a244</span>;
}
<span class="hljs-selector-pseudo">:matches(div</span>, <span class="hljs-selector-tag">ul</span>, <span class="hljs-selector-class">.match-me</span>) <span class="hljs-selector-tag">span</span> { 
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#44a244</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>This is green because <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>div<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> is one of the arguments we gave to :any<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>This is green because <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>ul<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> is one of the arguments we gave to :any<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>This is <span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>not<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> green because <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>p<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> is <span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>not<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> one of the arguments we gave to :any<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"match-me"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>This is green because <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.match-me<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> is one of the arguments we gave to :any<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/I/is.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_is.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_I_is.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_is.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_is.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_is.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_CSS_Selectors_I_is.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_CSS_Selectors_I_is.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>


