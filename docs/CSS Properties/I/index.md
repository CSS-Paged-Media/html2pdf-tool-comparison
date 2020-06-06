---
layout: details
title: I
permalink: /CSS-Properties/I/
description: 
---



## 🔬 IMAGE-RENDERING

### Input HTML & CSS

<details>
    <summary>
        View IMAGE-RENDERING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/i/image-rendering/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.pixelated</span> {
  <span class="hljs-attribute">-ms-interpolation-mode</span>: nearest-neighbor;
      <span class="hljs-attribute">image-rendering</span>: -moz-crisp-edges;
      <span class="hljs-attribute">image-rendering</span>: pixelated;
}

<span class="hljs-selector-class">.resize</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">45%</span>;
  <span class="hljs-attribute">clear</span>: none;
  <span class="hljs-attribute">float</span>: left;
}
<span class="hljs-selector-class">.resize</span><span class="hljs-selector-pseudo">:last-of-type</span> {
  <span class="hljs-attribute">float</span>: right;
}
<span class="hljs-selector-class">.resize</span> <span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#333</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fafafa</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"original"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Original image size<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span> 
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> /&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"resize"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>image-rendering: auto<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> /&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"resize"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>image-rendering: pixelated<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pixelated"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/qrcode.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> /&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/image-rendering.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_I_image-rendering.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_I_image-rendering.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_I_image-rendering.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_I_image-rendering.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_I_image-rendering.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_I_image-rendering.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_I_image-rendering.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_I_image-rendering.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 INITIAL-LETTER

### Input HTML & CSS

<details>
    <summary>
        View INITIAL-LETTER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/i/initial-letter/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.5em</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.5</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">50px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">article</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">60%</span>;
}

<span class="hljs-selector-tag">article</span><span class="hljs-selector-pseudo">::first-letter</span> {
  <span class="hljs-attribute">-webkit-initial-letter</span>: <span class="hljs-number">4</span> <span class="hljs-number">5</span>;
  <span class="hljs-attribute">initial-letter</span>: <span class="hljs-number">4</span> <span class="hljs-number">5</span>;
  <span class="hljs-attribute">background</span>: lightyellow;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">10px</span> solid <span class="hljs-number">#000</span>;
  <span class="hljs-attribute">color</span>: orange;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2em</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span>&gt;</span>It was the best of times, it was the worst of times, it was the age of wisdom, it was the age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despair, we had everything before us, we had nothing before us, we were all going direct to Heaven, we were all going direct the other way - in short, the period was so far like the present period, that some of its noisiest authorities insisted on its being received, for good or for evil, in the superlative degree of comparison only.<span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/initial-letter.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_I_initial-letter.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_I_initial-letter.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_I_initial-letter.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_I_initial-letter.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_I_initial-letter.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_I_initial-letter.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_I_initial-letter.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_I_initial-letter.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 ISOLATION

### Input HTML & CSS

<details>
    <summary>
        View ISOLATION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_isolation --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.a</span> {
  <span class="hljs-attribute">background-color</span>: lightgreen;
}
<span class="hljs-selector-id">#b</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">250px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">250px</span>;
}
<span class="hljs-selector-class">.c</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2px</span>;
  <span class="hljs-attribute">mix-blend-mode</span>: difference;
}
<span class="hljs-selector-id">#d</span> {
  <span class="hljs-attribute">isolation</span>: auto;
}
<span class="hljs-selector-id">#e</span> {
  <span class="hljs-attribute">isolation</span>: isolate;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The isolation Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"b"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"d"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a c"</span>&gt;</span>div d: isolation: auto;<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"e"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a c"</span>&gt;</span>div e: isolation: isolate;<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/I/isolation.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_I_isolation.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_I_isolation.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_I_isolation.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_I_isolation.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_I_isolation.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_I_isolation.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_I_isolation.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_I_isolation.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


