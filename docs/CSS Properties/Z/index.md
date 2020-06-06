---
layout: details
title: Z
permalink: /CSS-Properties/Z/
description: 
---



## 🔬 Z-INDEX

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/Z/z-index.html){:target="_blank"}

<details>
    <summary>
        View Z-INDEX Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/pr_pos_z-index.asp --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">left</span>: <span class="hljs-number">0px</span>;
  <span class="hljs-attribute">top</span>: <span class="hljs-number">0px</span>;
  <span class="hljs-attribute">z-index</span>: -<span class="hljs-number">1</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The z-index Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://www.w3schools.com/cssref/w3css.gif"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"100"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"140"</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Because the image has a z-index of -1, it will be placed behind the heading.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_Z_z-index.html.png) | ![typeset Preview](typeset__html_CSS_Properties_Z_z-index.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_Z_z-index.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_Z_z-index.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_Z_z-index.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Properties_Z_z-index.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_Z_z-index.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_Z_z-index.html.pdf){:target="_blank"} |

## 🔬 ZOOM

### Input HTML & CSS

[📄 View Input HTML on GitHub](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/Z/zoom.html){:target="_blank"}

<details>
    <summary>
        View ZOOM Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/z/zoom/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">img</span><span class="hljs-selector-pseudo">:nth-child(2)</span> {
  <span class="hljs-attribute">zoom</span>: <span class="hljs-number">150%</span>;
}
<span class="hljs-selector-tag">img</span><span class="hljs-selector-pseudo">:nth-child(3)</span> {
  <span class="hljs-attribute">zoom</span>: <span class="hljs-number">1.8</span>;
}
<span class="hljs-selector-tag">img</span><span class="hljs-selector-pseudo">:nth-child(4)</span> {
  <span class="hljs-attribute">zoom</span>: <span class="hljs-number">0.2</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wisconsin.svg"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wisconsin.svg"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wisconsin.svg"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wisconsin.svg"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_Z_zoom.html.png) | ![typeset Preview](typeset__html_CSS_Properties_Z_zoom.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_Z_zoom.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_Z_zoom.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_Z_zoom.html.pdf){:target="_blank"} | [📕 typeset Output](typeset__html_CSS_Properties_Z_zoom.html.pdf){:target="_blank"} | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_Z_zoom.html.pdf){:target="_blank"} | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_Z_zoom.html.pdf){:target="_blank"} |


