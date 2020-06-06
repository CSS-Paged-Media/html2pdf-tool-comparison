---
layout: details
title: O
permalink: /CSS-Properties/O/
description: 
---



## 🔬 OBJECT-FIT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/object-fit.html)

<details>
    <summary>
        View OBJECT-FIT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/object-fit/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.object-fit_fill</span> {
  <span class="hljs-attribute">-o-object-fit</span>: fill;
     <span class="hljs-attribute">object-fit</span>: fill;
}

<span class="hljs-selector-class">.object-fit_contain</span> {
  <span class="hljs-attribute">-o-object-fit</span>: contain;
     <span class="hljs-attribute">object-fit</span>: contain;
}

<span class="hljs-selector-class">.object-fit_cover</span> {
  <span class="hljs-attribute">-o-object-fit</span>: cover;
     <span class="hljs-attribute">object-fit</span>: cover;
}

<span class="hljs-selector-class">.object-fit_none</span> {
  <span class="hljs-attribute">-o-object-fit</span>: none;
     <span class="hljs-attribute">object-fit</span>: none;
}

<span class="hljs-selector-class">.object-fit_scale-down</span> {
  <span class="hljs-attribute">-o-object-fit</span>: scale-down;
     <span class="hljs-attribute">object-fit</span>: scale-down;
}

<span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#eee</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">30px</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Source Code Pro'</span>, Monaco;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#333</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">200</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">13px</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">120px</span>;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#444</span>;
}

<span class="hljs-selector-tag">img</span><span class="hljs-selector-attr">[class]</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-class">.original-image</span> {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.image</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">40%</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">30px</span> <span class="hljs-number">20px</span> <span class="hljs-number">0</span>;
}
<span class="hljs-selector-class">.image</span><span class="hljs-selector-pseudo">:nth-child(2n)</span> {
  <span class="hljs-attribute">clear</span>: left;
}
<span class="hljs-selector-class">.image</span><span class="hljs-selector-pseudo">:nth-child(2n+1)</span> {
  <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">0</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"original-image"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>original image<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span> 
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-fit: fill<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"object-fit_fill"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-fit: contain<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"object-fit_contain"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-fit: cover<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"object-fit_cover"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-fit: none<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"object-fit_none"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-fit: scale-down<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"object-fit_scale-down"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png"</span>&gt;</span>
             <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_object-fit.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_object-fit.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_object-fit.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_object-fit.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_object-fit.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_object-fit.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_object-fit.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_object-fit.html.pdf) |

## 🔬 OBJECT-POSITION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/object-position.html)

<details>
    <summary>
        View OBJECT-POSITION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/object-position/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">img</span> {
  <span class="hljs-attribute">background-color</span>: yellow;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">180px</span>;
}

<span class="hljs-selector-class">.image</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">170px</span>;
  <span class="hljs-attribute">object-fit</span>: none;
  <span class="hljs-comment">/*  background-color: yellow;*/</span>
}

<span class="hljs-selector-class">.image--center</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">50%</span> <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.image--bottom-right</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">100%</span> <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-class">.image--bottom-left</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">0</span>  <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-class">.image--top-left</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">0</span>  <span class="hljs-number">0</span>;
}

<span class="hljs-selector-class">.image--up</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">50%</span>  <span class="hljs-number">120%</span>;
}

<span class="hljs-selector-class">.image--down</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">50%</span>  -<span class="hljs-number">20%</span>;
}

<span class="hljs-selector-class">.image--left</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">120%</span>  <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.image--right</span> {
  <span class="hljs-attribute">object-position</span>: -<span class="hljs-number">20%</span>  <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.image--background-image</span> {
  <span class="hljs-attribute">object-position</span>: <span class="hljs-number">140%</span>  <span class="hljs-number">90%</span>;
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">"http://fillmurray.com/g/50/50"</span>);
}

<span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#eee</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">30px</span>;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">'Source Code Pro'</span>, Monaco;
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#333</span>;
}

<span class="hljs-selector-class">.container</span> {
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-number">20px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">45%</span>;
}
<span class="hljs-selector-class">.container</span><span class="hljs-selector-pseudo">:nth-child(2n</span> + 1) {
  <span class="hljs-attribute">margin-right</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">600</span>;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">13px</span>;
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">margin-top</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">img</span><span class="hljs-selector-attr">[class]</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-class">.original-image</span> {
  <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">50px</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"original-image"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>original image <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span> (with a yellow background)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 50% 50%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--center"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 100% 150%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--bottom-right"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 0 150%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--bottom-left"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 0 0<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--top-left"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 50% 120%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--up"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 50% -20%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--down"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 120% 50%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--left"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: -20% 50%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--right"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>object-position: 140% 90% <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>(with background image)<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"image image--background-image"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/image.png"</span>&gt;</span> 
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_object-position.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_object-position.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_object-position.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_object-position.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_object-position.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_object-position.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_object-position.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_object-position.html.pdf) |

## 🔬 OFFSET-ANCHOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-anchor.html)

<details>
    <summary>
        View OFFSET-ANCHOR Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        
        <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-anchor.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-anchor.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-anchor.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_offset-anchor.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-anchor.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-anchor.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-anchor.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_offset-anchor.html.pdf) |

## 🔬 OFFSET-DISTANCE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-distance.html)

<details>
    <summary>
        View OFFSET-DISTANCE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        
        <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-distance.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-distance.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-distance.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_offset-distance.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-distance.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-distance.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-distance.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_offset-distance.html.pdf) |

## 🔬 OFFSET-PATH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-path.html)

<details>
    <summary>
        View OFFSET-PATH Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        
        <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-path.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-path.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-path.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_offset-path.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-path.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-path.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-path.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_offset-path.html.pdf) |

## 🔬 OFFSET-ROTATE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/offset-rotate.html)

<details>
    <summary>
        View OFFSET-ROTATE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from  --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        
        <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_offset-rotate.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_offset-rotate.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_offset-rotate.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_offset-rotate.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_offset-rotate.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_offset-rotate.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_offset-rotate.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_offset-rotate.html.pdf) |

## 🔬 OPACITY

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/opacity.html)

<details>
    <summary>
        View OPACITY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/opacity/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-comment">/* General Box Styling */</span>
<span class="hljs-comment">/*===========================*/</span>
<span class="hljs-selector-class">.container</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">display</span>: inline-block;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#d58a3c</span>;
}

<span class="hljs-comment">/* Begin Opacity Demo Styles */</span>
<span class="hljs-comment">/*===========================*/</span>
<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity100</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">1</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity90</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.9</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity80</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.8</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity70</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.7</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity60</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.6</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity50</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.5</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity40</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.4</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity30</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.3</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity20</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.2</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity10</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0.1</span>;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.opacity0</span> {
  <span class="hljs-attribute">opacity</span>: <span class="hljs-number">0</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Opacity without child elements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity100"</span>&gt;</span>opacity: 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity90"</span>&gt;</span>opacity: 0.9<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity80"</span>&gt;</span>opacity: 0.8<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity70"</span>&gt;</span>opacity: 0.7<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity60"</span>&gt;</span>opacity: 0.6<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity50"</span>&gt;</span>opacity: 0.5<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity40"</span>&gt;</span>opacity: 0.4<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity30"</span>&gt;</span>opacity: 0.3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity20"</span>&gt;</span>opacity: 0.2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity10"</span>&gt;</span>opacity: 0.1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity0"</span>&gt;</span>opacity: 0<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Opacity with child elements<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity100"</span>&gt;</span>
              opacity: 1
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity90"</span>&gt;</span>
              opacity: 0.9
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity80"</span>&gt;</span>
              opacity: 0.8
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity70"</span>&gt;</span>
              opacity: 0.7
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity60"</span>&gt;</span>
              opacity: 0.6
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity50"</span>&gt;</span>
              opacity: 0.5
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity40"</span>&gt;</span>
              opacity: 0.4
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity30"</span>&gt;</span>
              opacity: 0.3
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity20"</span>&gt;</span>
              opacity: 0.2
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity10"</span>&gt;</span>
              opacity: 0.1
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"opacity0"</span>&gt;</span>
              opacity: 0
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Paragraph Element<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">small</span>&gt;</span>Elements with an <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>opacity<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> value of '0' are invisible<span class="hljs-tag">&lt;/<span class="hljs-name">small</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_opacity.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_opacity.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_opacity.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_opacity.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_opacity.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_opacity.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_opacity.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_opacity.html.pdf) |

## 🔬 ORDER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/order.html)

<details>
    <summary>
        View ORDER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/order/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.flex-container</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">list-style</span>: none;
  
  <span class="hljs-attribute">-ms-box-orient</span>: horizontal;
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: -moz-box;
  <span class="hljs-attribute">display</span>: -ms-flexbox;
  <span class="hljs-attribute">display</span>: -moz-flex;
  <span class="hljs-attribute">display</span>: -webkit-flex;
  <span class="hljs-attribute">display</span>: flex;
  
  <span class="hljs-attribute">-webkit-flex-flow</span>: row wrap;
  <span class="hljs-attribute">flex-flow</span>: row wrap;
}

<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(1)</span> { <span class="hljs-attribute">order</span>: <span class="hljs-number">3</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(2)</span> { <span class="hljs-attribute">order</span>: <span class="hljs-number">4</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(3)</span> { <span class="hljs-attribute">order</span>: <span class="hljs-number">1</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(4)</span> { <span class="hljs-attribute">order</span>: <span class="hljs-number">5</span>; }
<span class="hljs-selector-class">.flex-item</span><span class="hljs-selector-pseudo">:nth-of-type(5)</span> { <span class="hljs-attribute">order</span>: <span class="hljs-number">2</span>; }

<span class="hljs-selector-class">.flex-item</span> {
  <span class="hljs-attribute">background</span>: tomato;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">5px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">5px</span>;
  
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-container"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-item"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_order.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_order.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_order.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_order.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_order.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_order.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_order.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_order.html.pdf) |

## 🔬 ORPHANS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/orphans.html)

<details>
    <summary>
        View ORPHANS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/jsref/prop_style_orphans.asp --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.othercontent</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">400px</span>;
  <span class="hljs-attribute">border-top</span>: <span class="hljs-number">19cm</span> solid <span class="hljs-number">#c3c3c3</span>;
}

<span class="hljs-keyword">@page</span> {
  <span class="hljs-comment">/* set size of printed page */</span>
  <span class="hljs-attribute">size</span>:<span class="hljs-number">21cm</span> <span class="hljs-number">27cm</span>;
  <span class="hljs-attribute">margin-top</span>:<span class="hljs-number">2cm</span>;
}

  <span class="hljs-selector-class">.orphans</span> {
    <span class="hljs-attribute">orphans</span>:<span class="hljs-number">2</span>;
  }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"othercontent"</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"font-size:120%"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"p1"</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
                orphans <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 2<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 3<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 4<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 5<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 6<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 7<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            Line 8<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> 
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_orphans.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_orphans.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_orphans.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_orphans.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_orphans.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_orphans.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_orphans.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_orphans.html.pdf) |

## 🔬 OUTLINE-OFFSET

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/outline-offset.html)

<details>
    <summary>
        View OUTLINE-OFFSET Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/outline-offset/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span>;
}

<span class="hljs-selector-tag">h2</span> {
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span>;
}

<span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">margin</span>: auto;
  <span class="hljs-attribute">border</span>: solid <span class="hljs-number">8px</span> yellow;
  <span class="hljs-attribute">outline</span>: solid <span class="hljs-number">8px</span> orange;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Dual border effect with outline and border<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_outline-offset.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_outline-offset.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_outline-offset.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_outline-offset.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_outline-offset.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_outline-offset.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_outline-offset.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_outline-offset.html.pdf) |

## 🔬 OUTLINE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/outline.html)

<details>
    <summary>
        View OUTLINE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/outline-offset/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span>;
}

<span class="hljs-selector-tag">h2</span> {
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span>;
}

<span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">margin</span>: auto;
  <span class="hljs-attribute">outline</span>: solid <span class="hljs-number">8px</span> orange;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>outline<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_outline.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_outline.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_outline.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_outline.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_outline.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_outline.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_outline.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_outline.html.pdf) |

## 🔬 OVERFLOW

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/overflow.html)

<details>
    <summary>
        View OVERFLOW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/overflow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#222</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">300px</span>;
  <span class="hljs-attribute">overflow-y</span>: hidden;
  <span class="hljs-attribute">overflow-x</span>: scroll;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://placehold.it/450x150"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae suscipit, autem magnam ab. Possimus perferendis officiis doloremque impedit quia quos labore optio quas cum incidunt. Blanditiis dicta, sunt numquam quos.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae suscipit, autem magnam ab. Possimus perferendis officiis doloremque impedit quia quos labore optio quas cum incidunt. Blanditiis dicta, sunt numquam quos.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_overflow.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_overflow.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_overflow.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_overflow.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_overflow.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_overflow.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_overflow.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_overflow.html.pdf) |

## 🔬 OVERSCROLL-BEHAVIOR

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/O/overscroll-behavior.html)

<details>
    <summary>
        View OVERSCROLL-BEHAVIOR Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/o/overscroll-behavior/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">overflow</span>: scroll;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:nth-child(2)</span> {
  <span class="hljs-attribute">overscroll-behavior</span>: contain;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">200vh</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Default!<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat placeat qui praesentium. Earum itaque architecto laboriosam voluptates beatae dolore molestiae quas magni quo non vel doloribus, accusamus repellendus quaerat aut!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>Contain!<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span> Perspiciatis dolorum corporis minus soluta! Culpa aspernatur non facilis porro. Magni qui cumque eligendi ducimus neque dolor minima, provident quod nihil? Nostrum deleniti laudantium illum corporis iure quasi error earum?<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_O_overscroll-behavior.html.png) | ![typeset Preview](typeset__html_CSS_Properties_O_overscroll-behavior.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_O_overscroll-behavior.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_CSS_Properties_O_overscroll-behavior.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_O_overscroll-behavior.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_O_overscroll-behavior.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_O_overscroll-behavior.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_CSS_Properties_O_overscroll-behavior.html.pdf) |


