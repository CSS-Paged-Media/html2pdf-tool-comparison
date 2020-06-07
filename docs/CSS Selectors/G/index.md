---
layout: details
title: G
permalink: /CSS-Selectors/G/
description: Test Section 'G' to compare different html2pdf tools.
---



## 🔬 GENERAL-SIBLING

### Input HTML & CSS

<details>
    <summary>
        View GENERAL-SIBLING Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/g/general-sibling/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">img</span> ~ <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#FEF0B6</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>This paragraph will not be selected.<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias beatae blanditiis inventore, ducimus atque dolores vitae accusamus quas deleniti illum ab natus similique distinctio optio. Sed fugit harum, sequi ducimus?<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://placeimg.com/200/200/arch"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> /&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>This paragraph will be selected.<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio consequatur debitis eveniet iste ratione quibusdam hic accusamus! Eveniet dignissimos ad, nihil molestiae aspernatur consequuntur officia voluptatum tenetur velit voluptate. Temporibus! <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>And this paragraph will also be selected.<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas temporibus facere, porro et. Sed corrupti iusto reprehenderit ratione est deleniti molestias inventore consequuntur dicta tenetur! Animi excepturi quae blanditiis cum.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/G/general-sibling.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_G_general-sibling.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_G_general-sibling.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_G_general-sibling.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_G_general-sibling.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_G_general-sibling.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_G_general-sibling.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_G_general-sibling.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_G_general-sibling.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Selectors_G_general-sibling.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Selectors_G_general-sibling.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>


