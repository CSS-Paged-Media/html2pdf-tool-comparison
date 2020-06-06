---
layout: details
title: M
permalink: /CSS-Properties/M/
description: 
---



## 🔬 MARGIN

### Input HTML & CSS

<details>
    <summary>
        View MARGIN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/margin/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h2</span> {
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">p</span> {
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Collapsing Margins<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Example text.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/margin.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_margin.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_margin.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_margin.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_margin.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_margin.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_margin.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_margin.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_margin.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MASK-IMAGE

### Input HTML & CSS

<details>
    <summary>
        View MASK-IMAGE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/mask-image/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        * {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#8f7a66</span>;
}

<span class="hljs-selector-class">.el</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100vw</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100vh</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1rem</span>;

  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(https://images.unsplash.com/photo-<span class="hljs-number">1528287942171</span>-fbe365d1d9ac?ixlib=rb-<span class="hljs-number">1.2</span>.<span class="hljs-number">1</span>&amp;q=<span class="hljs-number">85</span>&amp;fm=jpg&amp;crop=entropy&amp;w=<span class="hljs-number">1200</span>&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ);
  <span class="hljs-attribute">background-size</span>: contain;
  <span class="hljs-attribute">background-position</span>: center;
  <span class="hljs-attribute">background-repeat</span>: no-repeat;

  <span class="hljs-attribute">mask-image</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">3</span>/sun.svg);
  <span class="hljs-attribute">mask-size</span>: <span class="hljs-number">100vmin</span>;
  <span class="hljs-attribute">mask-repeat</span>: no-repeat;
  <span class="hljs-attribute">mask-position</span>: center;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"el"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/mask-image.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_mask-image.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_mask-image.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_mask-image.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_mask-image.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_mask-image.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_mask-image.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_mask-image.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_mask-image.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MASK-REPEAT

### Input HTML & CSS

<details>
    <summary>
        View MASK-REPEAT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/mask-repeat/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        * {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#8f7a66</span>;
}

<span class="hljs-selector-class">.el</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100vw</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100vh</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1rem</span>;

  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(https://images.unsplash.com/photo-<span class="hljs-number">1528287942171</span>-fbe365d1d9ac?ixlib=rb-<span class="hljs-number">1.2</span>.<span class="hljs-number">1</span>&amp;q=<span class="hljs-number">85</span>&amp;fm=jpg&amp;crop=entropy&amp;w=<span class="hljs-number">1200</span>&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ);
  <span class="hljs-attribute">background-size</span>: contain;
  <span class="hljs-attribute">background-position</span>: center;
  <span class="hljs-attribute">background-repeat</span>: no-repeat;

  <span class="hljs-attribute">mask-image</span>: <span class="hljs-built_in">url</span>(https://s3-us-west-<span class="hljs-number">2</span>.amazonaws.com/s.cdpn.io/<span class="hljs-number">3</span>/sun.svg);
  <span class="hljs-attribute">mask-size</span>: <span class="hljs-number">100vmin</span>;
  <span class="hljs-attribute">mask-repeat</span>: no-repeat;
  <span class="hljs-attribute">mask-position</span>: center;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"el"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/mask-repeat.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_mask-repeat.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_mask-repeat.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_mask-repeat.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_mask-repeat.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_mask-repeat.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_mask-repeat.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_mask-repeat.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_mask-repeat.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MAX-HEIGHT

### Input HTML & CSS

<details>
    <summary>
        View MAX-HEIGHT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/max-height/ --&gt;</span>
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

<span class="hljs-selector-class">.nesting</span> {
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">margin-right</span>: .<span class="hljs-number">5em</span>;
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.max-height-px</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.max-height-em</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">8em</span>;
}

<span class="hljs-comment">/**
* Two percentages will not produce a result
*/</span>
<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.max-height-percent</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> <span class="hljs-selector-class">.max-heightnested</span> {
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">20%</span>;
  <span class="hljs-comment">/* works because height is an absolute length value */</span>
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> <span class="hljs-selector-class">.max-heightnested</span> {
  <span class="hljs-attribute">height</span>: auto;
}

<span class="hljs-selector-class">.table-example1</span> {
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">800px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}

<span class="hljs-selector-class">.table-example2</span> {
  <span class="hljs-attribute">max-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Max-Height<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Block Level Elements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max-height-px"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 50px / max-height: 20px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max-height-em"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100% / max-height: 8em<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max-height-percent"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100% / max-height: 50%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Elements Nested<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example1"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max-heightnested"</span>&gt;</span>Example#1 : Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>max-height: 20%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example2"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max-heightnested"</span>&gt;</span>Example#2 : Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>max-height: auto<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Tables<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px; max-height: 800px;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
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
        
        <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%; max-height: 100px;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
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
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/max-height.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_max-height.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_max-height.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_max-height.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_max-height.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_max-height.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_max-height.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_max-height.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_max-height.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MAX-WIDTH

### Input HTML & CSS

<details>
    <summary>
        View MAX-WIDTH Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/max-width/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#444444</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#ffffff</span>;
}

<span class="hljs-selector-class">.demo</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#000</span>;
}

<span class="hljs-selector-class">.max</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#e78629</span>;
}

<span class="hljs-selector-class">.max600</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">600px</span>;
}

<span class="hljs-selector-class">.max320</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">320px</span>;
}

<span class="hljs-selector-class">.max-percent</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.em40</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">40em</span>;
}

<span class="hljs-selector-class">.rem40</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">40rem</span>;
}

<span class="hljs-selector-class">.maxtable</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">600px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>max-width<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max max600"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 80% / Maximum Width = 600px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max max320"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Maximum Width = 320px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max max-percent"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Maximum Width = 50%<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max em40"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Maximum Width = 40em<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max rem40"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Maximum Width = 40rem<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Tables<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"max maxtable"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
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
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>24+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>5.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>18+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>12.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>8+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>1.0+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>2.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Maximum Width = 600px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">footer</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">small</span>&gt;</span>*These examples use the entire viewport width in order to understand and grasp the concepts outlined. Squeeze your browser to witness the results.<span class="hljs-tag">&lt;/<span class="hljs-name">small</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">footer</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/max-width.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_max-width.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_max-width.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_max-width.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_max-width.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_max-width.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_max-width.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_max-width.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_max-width.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MIN-HEIGHT

### Input HTML & CSS

<details>
    <summary>
        View MIN-HEIGHT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/min-height/ --&gt;</span>
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

<span class="hljs-selector-class">.nesting</span> {
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">margin-right</span>: .<span class="hljs-number">5em</span>;
  <span class="hljs-attribute">background</span>: white;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.min-height-px</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.min-height-em</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">8em</span>;
}

<span class="hljs-comment">/**
* height value determined by 
* content and not these % values
*/</span>
<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.min-height-percent</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example1</span> <span class="hljs-selector-class">.min-heightnested</span> {
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">70%</span>;
  <span class="hljs-comment">/* works because height is an absolute length value */</span>
}

<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}
<span class="hljs-selector-class">.nesting</span><span class="hljs-selector-class">.example2</span> <span class="hljs-selector-class">.min-heightnested</span> {
  <span class="hljs-attribute">height</span>: auto;
}

<span class="hljs-selector-class">.table-example1</span> {
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">500px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
}

<span class="hljs-selector-class">.table-example2</span> {
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Min-Height<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Block Level Elements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min-height-px"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100% / min-height: 50px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min-height-em"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100% / min-height: 8em<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min-height-percent"</span>&gt;</span>Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100% / min-height: 50%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Elements Nested<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example1"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min-heightnested"</span>&gt;</span>Example#1 : Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>min-height: 70%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nesting example2"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min-heightnested"</span>&gt;</span>Example#2 : Containing element : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.  Content in a paragraph : <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: auto<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Tables<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100px; min-height: 500px;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
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
        
        <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>height: 100%; min-height: 100px;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
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
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep"</span>&gt;</span>All<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/min-height.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_min-height.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_min-height.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_min-height.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_min-height.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_min-height.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_min-height.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_min-height.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_min-height.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MIN-WIDTH

### Input HTML & CSS

<details>
    <summary>
        View MIN-WIDTH Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/min-width/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#444444</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#ffffff</span>;
}

<span class="hljs-selector-class">.demo</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#000</span>;
}

<span class="hljs-selector-class">.min</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#e78629</span>;
}

<span class="hljs-selector-class">.min600</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">80%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">600px</span>;
}

<span class="hljs-selector-class">.min320</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">320px</span>;
}

<span class="hljs-selector-class">.min480</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">600px</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">480px</span>;
}

<span class="hljs-selector-class">.min-percent</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.rem40</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">40em</span>;
}

<span class="hljs-selector-class">.rem40</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">40rem</span>;
}

<span class="hljs-selector-class">.mintable</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">min-width</span>: <span class="hljs-number">600px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>min-width<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min min600"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 80% / Minimum Width = 600px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min min320"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Minimum Width = 320px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min min480"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 600px / Minimum Width = 480px (won't work)<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min min-percent"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Minimum Width = 50% (won't work)<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min em40"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Minimum Width = 40em<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min rem40"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Minimum Width = 40rem<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Tables<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">figure</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"min mintable"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
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
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>24+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>5.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>18+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>12.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>8+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>1.0+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yep-nope"</span>&gt;</span>2.1+<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">figcaption</span>&gt;</span>Width = 100% / Minimum Width = 600px<span class="hljs-tag">&lt;/<span class="hljs-name">figcaption</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">figure</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">footer</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">small</span>&gt;</span>*These examples use the entire viewport width in order to understand and grasp the concepts outlined. Squeeze your browser to witness the results.<span class="hljs-tag">&lt;/<span class="hljs-name">small</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">footer</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/min-width.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_min-width.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_min-width.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_min-width.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_min-width.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_min-width.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_min-width.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_min-width.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_min-width.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MIX-BLEND-MODE

### Input HTML & CSS

<details>
    <summary>
        View MIX-BLEND-MODE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/m/mix-blend-mode/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#fff</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">html</span>, <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Nocturno Display Medium 4"</span>, Georgia;
  <span class="hljs-attribute">font-style</span>: normal;
  <span class="hljs-attribute">font-weight</span>: normal;
  <span class="hljs-attribute">font-stretch</span>: normal;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-built_in">url</span>(http://unsplash.it/<span class="hljs-number">1499</span>/<span class="hljs-number">1000</span>);
  <span class="hljs-attribute">background-size</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">background-size</span>: cover;
  <span class="hljs-attribute">background-repeat</span>: no-repeat;
}

<span class="hljs-selector-class">.blend</span> {
  <span class="hljs-attribute">mix-blend-mode</span>: exclusion;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">-webkit-box-orient</span>: vertical;
  <span class="hljs-attribute">-webkit-box-direction</span>: normal;
          <span class="hljs-attribute">flex-direction</span>: column;
  <span class="hljs-attribute">-webkit-box-pack</span>: center;
          <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">-webkit-box-align</span>: center;
          <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">6vw</span>;
}

<span class="hljs-selector-class">.red</span> {
  <span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-class">.blue</span> {
  <span class="hljs-attribute">color</span>: blue;
}

<span class="hljs-selector-class">.green</span> {
  <span class="hljs-attribute">color</span>: green;
}

<span class="hljs-selector-tag">blockquote</span> {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.1</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"blend"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"red"</span>&gt;</span>“Attack design doldrums with stylistic souplesse”<span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"yellow"</span>&gt;</span>“Fashionable figures break away from the populist peloton”<span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">blockquote</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"green"</span>&gt;</span>“Comprehensive characters for culturally correct creations”<span class="hljs-tag">&lt;/<span class="hljs-name">blockquote</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-comment">&lt;!-- 
          All quotes are taken from House Industries’ introduction of Velo:
          
          http://houseindustries.cmail1.com/t/ViewEmail/y/68885BCE0F413AE5/B9C37F14E9781D9EA7F290B8E8FDC6A0
          --&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/M/mix-blend-mode.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="mpdf__html_CSS_Properties_M_mix-blend-mode.html.png" alt="mPDF Preview" />
        <p>
            <a href="mpdf__html_CSS_Properties_M_mix-blend-mode.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="typeset__html_CSS_Properties_M_mix-blend-mode.html.png" alt="typeset Preview" />
        <p>
            <a href="typeset__html_CSS_Properties_M_mix-blend-mode.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="pdfreactor__html_CSS_Properties_M_mix-blend-mode.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="pdfreactor__html_CSS_Properties_M_mix-blend-mode.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="wkhtmltopdf__html_CSS_Properties_M_mix-blend-mode.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="wkhtmltopdf__html_CSS_Properties_M_mix-blend-mode.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


