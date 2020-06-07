---
layout: details
title: Q
permalink: /CSS-Properties/Q/
description: Test Section 'Q' to compare different html2pdf tools.
---



## 🔬 QUOTES

### Input HTML & CSS

<details>
    <summary>
        View QUOTES Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss_gen_quotes --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
    <span class="hljs-selector-id">#a</span> {
  <span class="hljs-attribute">quotes</span>: <span class="hljs-string">"'"</span> <span class="hljs-string">"'"</span>;
}

<span class="hljs-selector-id">#b</span> {
  <span class="hljs-attribute">quotes</span>: <span class="hljs-string">"„"</span> <span class="hljs-string">"“"</span> <span class="hljs-string">"‚"</span> <span class="hljs-string">"‘"</span>;
}

<span class="hljs-selector-id">#c</span> {
  <span class="hljs-attribute">quotes</span>: <span class="hljs-string">"«"</span> <span class="hljs-string">"»"</span> <span class="hljs-string">"‹"</span> <span class="hljs-string">"›"</span>;
}    
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The quotes Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">q</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"a"</span>&gt;</span>This is a quote.<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">q</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"b"</span>&gt;</span>This is a <span class="hljs-tag">&lt;<span class="hljs-name">q</span>&gt;</span>quote<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span> inside a quote.<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">q</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"c"</span>&gt;</span>This is a <span class="hljs-tag">&lt;<span class="hljs-name">q</span>&gt;</span>quote<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span> inside a quote.<span class="hljs-tag">&lt;/<span class="hljs-name">q</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/Q/quotes.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_Q_quotes.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_Q_quotes.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_Q_quotes.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_Q_quotes.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_Q_quotes.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_CSS_Properties_Q_quotes.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_CSS_Properties_Q_quotes.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>


