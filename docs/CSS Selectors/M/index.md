---
layout: details
title: M
permalink: /CSS-Selectors/M/
description: Test Section "M" to compare different html2pdf tools.
---



## 🔬 MARKER

### Input HTML & CSS

<details>
    <summary>
        View MARKER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/m/marker/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.note</span> {
  <span class="hljs-attribute">display</span>: list-item;
  <span class="hljs-attribute">counter-increment</span>: note-counter;
  <span class="hljs-attribute">color</span>: red;
  <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">5em</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.note</span><span class="hljs-selector-pseudo">::marker</span> {
  <span class="hljs-attribute">content</span>: <span class="hljs-string">"Note "</span> <span class="hljs-built_in">counter</span>(note-counter) <span class="hljs-string">":"</span>;
  <span class="hljs-attribute">text-align</span>: left;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It was the best of times, it was the worst of times, it was the age of wisdom, it was the age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despair, we had everything before us, we had nothing before us, we were all going direct to Heaven, we were all going direct the other way--in short, the period was so far like the present period, that some of its noisiest authorities insisted on its being received, for good or for evil, in the superlative degree of comparison only.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"note"</span>&gt;</span>Holy smokes, that's an epic intro!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>There were a king with a large jaw and a queen with a plain face, on the throne of England; there were a king with a large jaw and a queen with a fair face, on the throne of France. In both countries it was clearer than crystal to the lords of the State preserves of loaves and fishes, that things in general were settled for ever.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"note"</span>&gt;</span>Those sound like lovely rulers.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/M/marker.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_M_marker.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_M_marker.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_M_marker.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_M_marker.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_M_marker.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_M_marker.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_M_marker.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_M_marker.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 MATCHES

### Input HTML & CSS

<details>
    <summary>
        View MATCHES Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/m/matches/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">a</span><span class="hljs-selector-pseudo">:matches(</span><span class="hljs-selector-pseudo">:hover</span>, <span class="hljs-selector-pseudo">:focus</span>, <span class="hljs-selector-pseudo">:active)</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#BADA55</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://css-tricks.com"</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">""</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>&gt;</span>CSS-Tricks<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/M/matches.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_M_matches.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_M_matches.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_M_matches.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_M_matches.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_M_matches.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_M_matches.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_M_matches.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_M_matches.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


