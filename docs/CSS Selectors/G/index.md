---
layout: details
title: G
permalink: /CSS-Selectors/G/
description: 
---



## 🔬 GENERAL-SIBLING

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/G/general-sibling.html){:target="_blank"}

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
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_G_general-sibling.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_G_general-sibling.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_G_general-sibling.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Selectors_G_general-sibling.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_G_general-sibling.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Selectors_G_general-sibling.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_G_general-sibling.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Selectors_G_general-sibling.html.pdf){:target="_blank"} |


