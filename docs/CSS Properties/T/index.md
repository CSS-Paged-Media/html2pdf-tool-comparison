---
layout: details
title: T
permalink: /CSS-Properties/T/
description: Test Section 'T' to compare different html2pdf tools.
---



## 🔬 TAB-SIZE

### Input HTML & CSS

<details>
    <summary>
        View TAB-SIZE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/tab-size/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span><span class="hljs-selector-class">.fourtabs</span> {
	<span class="hljs-attribute">tab-size</span>:<span class="hljs-number">4</span>;
	<span class="hljs-attribute">-moz-tab-size</span>: <span class="hljs-number">4</span>;
	<span class="hljs-attribute">-o-tab-size</span>:  <span class="hljs-number">4</span>;
  <span class="hljs-attribute">white-space</span>: pre-wrap;
}


<span class="hljs-selector-tag">pre</span><span class="hljs-selector-class">.twelvetabs</span> {
	<span class="hljs-attribute">tab-size</span>: <span class="hljs-number">12</span>;
	<span class="hljs-attribute">-moz-tab-size</span>: <span class="hljs-number">12</span>;
	<span class="hljs-attribute">-o-tab-size</span>:  <span class="hljs-number">12</span>;
}


<span class="hljs-selector-tag">h4</span> {
 <span class="hljs-attribute">color</span>:<span class="hljs-number">#e08628</span>;
 <span class="hljs-attribute">margin-bottom</span>: <span class="hljs-number">0px</span>;
}

<span class="hljs-selector-tag">body</span> {
 <span class="hljs-attribute">background-color</span>:<span class="hljs-number">#efefef</span>;
 <span class="hljs-attribute">color</span>:<span class="hljs-number">#3c3c3c</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Example 1<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>pre<span class="hljs-symbol">&amp;gt;</span> with default tab-size of 8 space characters<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span>
without tab
	with 1 tab
		with 2 tabs
<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Example 2<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>p<span class="hljs-symbol">&amp;gt;</span> with tab-size customized to 4 space characters and 'white-space: pre-wrap'<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fourtabs"</span>&gt;</span>without tab
	with 1 tab
		with 2 tabs		
<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>p<span class="hljs-symbol">&amp;gt;</span> with tab-size customized to 4 space characters, but without 'white-space: prewrap'<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>without tab
	with 1 tab
		with 2 tabs		
<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Example 3<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>pre<span class="hljs-symbol">&amp;gt;</span> with tab-size set to 12 space characters<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">pre</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"twelvetabs"</span>&gt;</span>without tab
	with 1 tab
		with 2 tabs	
<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/tab-size.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_tab-size.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_tab-size.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_tab-size.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_tab-size.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_tab-size.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_tab-size.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_tab-size.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_tab-size.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_tab-size.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_tab-size.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TABLE-LAYOUT

### Input HTML & CSS

<details>
    <summary>
        View TABLE-LAYOUT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/table-layout/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">14px</span>;
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-tag">table</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">20px</span> auto;
  <span class="hljs-attribute">table-layout</span>: fixed;
}

<span class="hljs-selector-class">.fixed</span> {
  <span class="hljs-attribute">table-layout</span>: fixed;
}

<span class="hljs-selector-tag">table</span>,
<span class="hljs-selector-tag">td</span>,
<span class="hljs-selector-tag">th</span> {
  <span class="hljs-attribute">border-collapse</span>: collapse;
}

<span class="hljs-selector-tag">th</span>,
<span class="hljs-selector-tag">td</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: solid <span class="hljs-number">1px</span>;
  <span class="hljs-attribute">text-align</span>: center;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Using the <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>table-layout<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> property<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"t"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>A much longer piece of content for demo purposes. More goes here.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">tfoot</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Example text<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">tfoot</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tl"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">b</span>&gt;</span>Toggle table-layout: fixed<span class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/table-layout.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_table-layout.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_table-layout.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_table-layout.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_table-layout.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_table-layout.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_table-layout.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_table-layout.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_table-layout.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_table-layout.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_table-layout.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-ALIGN-LAST

### Input HTML & CSS

<details>
    <summary>
        View TEXT-ALIGN-LAST Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-align-last/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-id">#left</span> { 
  <span class="hljs-attribute">-ms-text-align-last</span>: left;
  <span class="hljs-attribute">-moz-text-align-last</span>: left;
  <span class="hljs-attribute">text-align-last</span>: left; 
}

<span class="hljs-selector-id">#right</span> { 
  <span class="hljs-attribute">-ms-text-align-last</span>: right;
  <span class="hljs-attribute">-moz-text-align-last</span>: right;
  <span class="hljs-attribute">text-align-last</span>: right; 
}

<span class="hljs-selector-id">#center</span> { 
  <span class="hljs-attribute">-ms-text-align-last</span>: center;
  <span class="hljs-attribute">-moz-text-align-last</span>: center;
  <span class="hljs-attribute">text-align-last</span>: center;
}

<span class="hljs-selector-id">#justify</span> { 
  <span class="hljs-attribute">-ms-text-align-last</span>: justify;
  <span class="hljs-attribute">-moz-text-align-last</span>: justify;
  <span class="hljs-attribute">text-align-last</span>: justify; 
}

<span class="hljs-selector-id">#start</span> { 
  <span class="hljs-comment">/* IE does not recognize text-align-last: start; */</span>
  <span class="hljs-attribute">-moz-text-align-last</span>: start;
  <span class="hljs-attribute">text-align-last</span>: start; 
}

<span class="hljs-selector-id">#end</span> { 
  <span class="hljs-comment">/* IE does not recognize text-align-last: end; */</span>
  <span class="hljs-attribute">-moz-text-align-last</span>: end;
  <span class="hljs-attribute">text-align-last</span>: end; 
}


<span class="hljs-comment">/* styling for Pen, unrelated to text-align-last */</span>

<span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-family</span>: sans-serif; }

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">40%</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2%</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.2</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">5px</span> solid <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">text-align</span>: justify;
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">1%</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"left"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: left; <span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"right"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: right; <span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"center"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: center;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"justify"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: justify;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"start"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: start;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"end"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-align-last: end;<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus mauris, blandit vitae auctor id, rhoncus id eros. Nullam sit amet nulla ac sapien eleifend ultrices. Curabitur ac dictum metus. Pellentesque ullamcorper dolor sit amet mi imperdiet egestas. Nam eu tellus sed nibh tincidunt rutrum eu sed augue. Cras vestibulum elementum tortor in gravida. Sed augue risus, tempor in justo non, fermentum faucibus nibh.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-align-last.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-align-last.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-align-last.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-align-last.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-align-last.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-align-last.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-align-last.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-align-last.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-align-last.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-align-last.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-align-last.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-ALIGN

### Input HTML & CSS

<details>
    <summary>
        View TEXT-ALIGN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/css/tryit.asp?filename=trycss_text-align --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-align</span>: center;
}

<span class="hljs-selector-tag">h2</span> {
  <span class="hljs-attribute">text-align</span>: left;
}

<span class="hljs-selector-tag">h3</span> {
  <span class="hljs-attribute">text-align</span>: right;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Heading 1 (center)<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Heading 2 (left)<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Heading 3 (right)<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The three headings above are aligned center, left and right.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-align.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-align.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-align.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-align.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-align.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-align.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-align.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-align.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-align.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-align.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-align.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION-COLOR

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION-COLOR Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-decoration-color/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
         <span class="hljs-selector-tag">p</span>, <span class="hljs-selector-tag">a</span> {
  <span class="hljs-attribute">text-decoration</span>: underline;
  <span class="hljs-attribute">-webkit-text-decoration-color</span>: <span class="hljs-number">#E18728</span>;
  <span class="hljs-attribute">text-decoration-color</span>: <span class="hljs-number">#E18728</span>; 
 }

<span class="hljs-selector-tag">a</span><span class="hljs-selector-pseudo">:visited</span> {
  <span class="hljs-attribute">-webkit-text-decoration-color</span>: <span class="hljs-number">#94530D</span>;
  <span class="hljs-attribute">text-decoration-color</span>: <span class="hljs-number">#94530D</span>; 
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-pseudo">:hover</span> { 
  <span class="hljs-attribute">-webkit-text-decoration-color</span>: <span class="hljs-number">#28B1E1</span>;
  <span class="hljs-attribute">text-decoration-color</span>: <span class="hljs-number">#28B1E1</span>; 
}

<span class="hljs-selector-tag">a</span><span class="hljs-selector-pseudo">:active</span> {
  <span class="hljs-attribute">-webkit-text-decoration-color</span>: <span class="hljs-number">#006E94</span>;
  <span class="hljs-attribute">text-decoration-color</span>: <span class="hljs-number">#006E94</span>; 
}

<span class="hljs-comment">/* styling for Pen, unrelated to text-decoration-color */</span>
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: sans-serif; 
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2.5em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Check out my cool underline.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>I'm a link with a cool underline. Hover me!<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration-color.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-color.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-color.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-color.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-color.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-color.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-color.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-color.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-color.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-color.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-color.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION-LINE

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION-LINE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-decoration-line/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.underline</span> {
  <span class="hljs-attribute">-webkit-text-decoration-line</span>: underline;
  <span class="hljs-attribute">text-decoration-line</span>: underline; 
}

<span class="hljs-selector-class">.overline</span> { 
  <span class="hljs-attribute">-webkit-text-decoration-line</span>: overline;
  <span class="hljs-attribute">text-decoration-line</span>: overline;
}

<span class="hljs-selector-class">.line-through</span> {
  <span class="hljs-attribute">-webkit-text-decoration-line</span>: line-through;
  <span class="hljs-attribute">text-decoration-line</span>: line-through;
}

<span class="hljs-selector-class">.blink</span> { 
  <span class="hljs-attribute">-webkit-text-decoration-line</span>: blink;
  <span class="hljs-attribute">text-decoration-line</span>: blink;
}

<span class="hljs-selector-class">.multilines</span> {
  <span class="hljs-attribute">-webkit-text-decoration-line</span>: underline overline line-through;
  <span class="hljs-attribute">text-decoration-line</span>: underline overline line-through;
}


<span class="hljs-comment">/* Styling for Pen, unrelated to text-decoration-line */</span>

<span class="hljs-selector-tag">body</span> { 
  <span class="hljs-attribute">font-family</span>: sans-serif;
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"underline"</span>&gt;</span>text-decoration-line: underline;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overline"</span>&gt;</span>text-decoration-line: overline;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"line-through"</span>&gt;</span>text-decoration-line: line-through;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"multilines"</span>&gt;</span> text-decoration-line: underline overline line-through;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration-line.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-line.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-line.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-line.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-line.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-line.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-line.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-line.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-line.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-line.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-line.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION-SKIP-INK

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION-SKIP-INK Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-decoration-skip-ink/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        .no-support {
  text-align: center;
  padding: 10px;
  width: 450px;
  margin-left: auto;
  margin-right: auto;
  background: #ee6620;
  color: #fff;
  font-size: 14px;
  font-family: sans-serif;
}

@supports(text-decoration-skip-ink: none) {
  .no-support {
    display: none;
  }
}

.example-wrapper {
  font-family: serif;
  width: 300px;
  margin-left: auto;
  margin-right: auto;
}

.underline {
  text-decoration: underline blue;
  font-size: 26px;
}

.skip-ink-auto {
  text-decoration-skip-ink: auto;
}

.skip-ink-none {
  text-decoration-skip-ink: none;
}
        <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"no-support"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Heads up: It doesn't look like your browser supports <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>text-decoration-skip-ink<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>! Check <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://caniuse.com/#feat=text-decoration"</span>&gt;</span>Can I use<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> for current browser support. Maybe try opening this CodePen in a different browser that supports <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>text-decoration-skip-ink<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>?<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"example-wrapper"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>text-decoration-skip-ink: auto;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"underline skip-ink-auto"</span>&gt;</span>Great green gobs of greasy, grimy gopher guts<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"example-wrapper"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>text-decoration-skip-ink: none;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"underline skip-ink-none"</span>&gt;</span>Great green gobs of greasy, grimy gopher guts<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration-skip-ink.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-skip-ink.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-skip-ink.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-skip-ink.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-skip-ink.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-skip-ink.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-skip-ink.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-skip-ink.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-skip-ink.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-skip-ink.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-skip-ink.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION-SKIP

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION-SKIP Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-decoration-skip/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">23px</span>;
  <span class="hljs-attribute">font-family</span>: Georgia;
}

<span class="hljs-selector-tag">a</span> {
  <span class="hljs-attribute">color</span>: blue;
}

<span class="hljs-selector-class">.ink</span> {
  <span class="hljs-attribute">text-decoration-skip</span>: ink;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>An example of the default <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'https://css-tricks.com/almanac/properties/t/text-decoration-skip/'</span>&gt;</span>text-decoration style to compare<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'ink'</span>&gt;</span>An example of the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'https://css-tricks.com/almanac/properties/t/text-decoration-skip/'</span>&gt;</span>very cool text-decoration-skip property<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration-skip.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-skip.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-skip.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-skip.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-skip.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-skip.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-skip.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-skip.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-skip.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-skip.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-skip.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION-STYLE

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION-STYLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_text-decoration-style --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.a</span> {
  <span class="hljs-attribute">text-decoration-line</span>: underline;
  <span class="hljs-attribute">text-decoration-style</span>: solid;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.b</span> {
  <span class="hljs-attribute">text-decoration-line</span>: underline;
  <span class="hljs-attribute">text-decoration-style</span>: wavy;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.c</span> {
  <span class="hljs-attribute">text-decoration-line</span>: underline;
  <span class="hljs-attribute">text-decoration-style</span>: double;
}

<span class="hljs-selector-tag">div</span><span class="hljs-selector-class">.d</span> {
  <span class="hljs-attribute">text-decoration-line</span>: overline underline;
  <span class="hljs-attribute">text-decoration-style</span>: wavy;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The text-decoration-style Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"a"</span>&gt;</span>This is some text with a solid underline.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"b"</span>&gt;</span>This is some text with a wavy underline.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"c"</span>&gt;</span>This is some text with a double underline.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d"</span>&gt;</span>This is some text with a wavy over- and underline.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration-style.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-style.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration-style.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-style.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration-style.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-style.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration-style.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-style.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration-style.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-style.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration-style.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-DECORATION

### Input HTML & CSS

<details>
    <summary>
        View TEXT-DECORATION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-decoration/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.underline</span> {
  <span class="hljs-attribute">text-decoration</span>: underline;
}
<span class="hljs-selector-class">.overline</span> {
  <span class="hljs-attribute">text-decoration</span>: overline;
}
<span class="hljs-selector-class">.strikethrough</span> {
  <span class="hljs-attribute">text-decoration</span>: line-through;
}
<span class="hljs-selector-class">.multiple</span> {
  <span class="hljs-attribute">text-decoration</span>: underline overline line-through;
}
<span class="hljs-selector-class">.blink</span> {
  <span class="hljs-attribute">text-decoration</span>: blink;
}
<span class="hljs-selector-class">.wavy</span> {
  <span class="hljs-attribute">text-decoration</span>: red underline overline wavy;
}


<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">2em</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"underline"</span>&gt;</span>text-decoration: underline;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overline"</span>&gt;</span>text-decoration: overline;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"strikethrough"</span>&gt;</span>text-decoration: line-through;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"multiple"</span>&gt;</span>text-decoration: underline overline line-through;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"blink"</span>&gt;</span>text-decoration: blink;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wavy"</span>&gt;</span>text-decoration: red underline overline wavy;<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-decoration.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-decoration.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-decoration.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-decoration.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-decoration.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-decoration.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-INDENT

### Input HTML & CSS

<details>
    <summary>
        View TEXT-INDENT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-indent/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">article</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
}

<span class="hljs-selector-class">.first</span> {
  <span class="hljs-attribute">text-indent</span>: <span class="hljs-number">2em</span>;
}

<span class="hljs-selector-class">.second</span> {
  <span class="hljs-attribute">text-indent</span>: -<span class="hljs-number">2em</span>;
}

<span class="hljs-selector-class">.third</span> {
  <span class="hljs-attribute">text-indent</span>: <span class="hljs-number">50%</span>;
}

<span class="hljs-selector-class">.fourth</span> {
  <span class="hljs-attribute">text-indent</span>: <span class="hljs-number">100%</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-indent: 2em<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"first"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-indent: -2em<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"second"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-indent: 50%<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"third"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>text-indent: 100%<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fourth"</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-indent.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-indent.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-indent.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-indent.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-indent.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-indent.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-indent.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-indent.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-indent.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-indent.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-indent.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-JUSTIFY

### Input HTML & CSS

<details>
    <summary>
        View TEXT-JUSTIFY Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_text-justify --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">text-align</span>: justify;
  <span class="hljs-attribute">text-justify</span>: inter-word;
  <span class="hljs-attribute">width</span>:<span class="hljs-number">200px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The text-justify Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-justify.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-justify.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-justify.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-justify.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-justify.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-justify.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-justify.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-justify.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-justify.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-justify.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-justify.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-OVERFLOW

### Input HTML & CSS

<details>
    <summary>
        View TEXT-OVERFLOW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-overflow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.overflow</span> {
  	<span class="hljs-attribute">width</span>: <span class="hljs-number">10em</span>;
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#000</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">2em</span> <span class="hljs-number">0</span>;
  
  <span class="hljs-comment">/**
   * Required properties to achieve text-overflow
   */</span>
	  <span class="hljs-attribute">white-space</span>: nowrap;
  	<span class="hljs-attribute">overflow</span>: hidden;
}

<span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">style</span> {
  <span class="hljs-attribute">display</span>: block;
  <span class="hljs-attribute">font</span>: <span class="hljs-number">14px</span> monospace;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">3px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span>;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-selector-class">.clip</span> { <span class="hljs-attribute">text-overflow</span>: clip; }</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overflow clip"</span>&gt;</span>This is an example text showing nothing interesting but the truncated content via text-overflow shorthand property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-selector-class">.ellipsis</span> { <span class="hljs-attribute">text-overflow</span>: ellipsis; }</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overflow ellipsis"</span>&gt;</span>This is an example text showing nothing interesting but the truncated content via text-overflow shorthand property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-selector-class">.word</span> { <span class="hljs-attribute">text-overflow</span>: ellipsis-word; }</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overflow word"</span>&gt;</span>This is an example text showing nothing interesting but the truncated content via text-overflow shorthand property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-selector-class">.text</span> { <span class="hljs-attribute">text-overflow</span>: <span class="hljs-string">"---"</span>; }</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overflow text"</span>&gt;</span>This is an example text showing nothing interesting but the truncated content via text-overflow shorthand property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css"><span class="hljs-selector-class">.double</span> { <span class="hljs-attribute">text-overflow</span>: ellipsis ellipsis; <span class="hljs-attribute">text-align</span>: center; }</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"overflow double"</span>&gt;</span>This is an example text showing nothing interesting but the truncated content via text-overflow shorthand property.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-overflow.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-overflow.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-overflow.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-overflow.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-overflow.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-overflow.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-overflow.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-overflow.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-overflow.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-overflow.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-overflow.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-SHADOW

### Input HTML & CSS

<details>
    <summary>
        View TEXT-SHADOW Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-shadow/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">font</span>: bold <span class="hljs-number">80px</span> Sans-Serif;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-class">.simple</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#91877b</span>;
  <span class="hljs-attribute">text-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">255</span>, <span class="hljs-number">0.4</span>);
}

<span class="hljs-selector-class">.otto</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#0e8dbc</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">text-shadow</span>: <span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-number">#ccc</span>,
               <span class="hljs-number">0</span> <span class="hljs-number">2px</span> <span class="hljs-number">0</span> <span class="hljs-number">#c9c9c9</span>,
               <span class="hljs-number">0</span> <span class="hljs-number">3px</span> <span class="hljs-number">0</span> <span class="hljs-number">#bbb</span>,
               <span class="hljs-number">0</span> <span class="hljs-number">4px</span> <span class="hljs-number">0</span> <span class="hljs-number">#b9b9b9</span>,
               <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span> <span class="hljs-number">#aaa</span>,
               <span class="hljs-number">0</span> <span class="hljs-number">6px</span> <span class="hljs-number">1px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">1</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">1</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">3px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">3</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">3px</span> <span class="hljs-number">5px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">2</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">10px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">25</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">10px</span> <span class="hljs-number">10px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">2</span>),
               <span class="hljs-number">0</span> <span class="hljs-number">20px</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">15</span>);
}

<span class="hljs-selector-class">.relief</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#3a50d9</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#e0eff2</span>;
  <span class="hljs-attribute">font</span>: italic bold <span class="hljs-number">100px</span> Georgia, Serif;
  <span class="hljs-attribute">text-shadow</span>: -<span class="hljs-number">4px</span> <span class="hljs-number">3px</span> <span class="hljs-number">0</span> <span class="hljs-number">#3a50d9</span>, -<span class="hljs-number">14px</span> <span class="hljs-number">7px</span> <span class="hljs-number">0</span> <span class="hljs-number">#0a0e27</span>;
}

<span class="hljs-selector-class">.close</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#fff</span>;	
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#202c2d</span>;
  <span class="hljs-attribute">text-shadow</span>:
    <span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">1px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">2px</span> <span class="hljs-number">3px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">3px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">3px</span> <span class="hljs-number">4px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">4px</span> <span class="hljs-number">3px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">4px</span> <span class="hljs-number">5px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">5px</span> <span class="hljs-number">4px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">5px</span> <span class="hljs-number">6px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">6px</span> <span class="hljs-number">5px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">6px</span> <span class="hljs-number">7px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">7px</span> <span class="hljs-number">6px</span> <span class="hljs-number">#cdd2d5</span>,
    -<span class="hljs-number">7px</span> <span class="hljs-number">8px</span> <span class="hljs-number">#808d93</span>,
    -<span class="hljs-number">8px</span> <span class="hljs-number">7px</span> <span class="hljs-number">#cdd2d5</span>;
}

<span class="hljs-selector-class">.printers</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#edde9c</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#bc2e1e</span>;
  <span class="hljs-attribute">text-shadow</span>:
    <span class="hljs-number">0</span> <span class="hljs-number">1px</span> <span class="hljs-number">0px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-number">0px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">1px</span> <span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">2px</span> <span class="hljs-number">3px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">3px</span> <span class="hljs-number">2px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">3px</span> <span class="hljs-number">4px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">4px</span> <span class="hljs-number">3px</span> <span class="hljs-number">3px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">4px</span> <span class="hljs-number">5px</span> <span class="hljs-number">3px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">5px</span> <span class="hljs-number">4px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">5px</span> <span class="hljs-number">6px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">6px</span> <span class="hljs-number">5px</span> <span class="hljs-number">2px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">6px</span> <span class="hljs-number">7px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">7px</span> <span class="hljs-number">6px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#5dabcd</span>,
    <span class="hljs-number">7px</span> <span class="hljs-number">8px</span> <span class="hljs-number">0px</span> <span class="hljs-number">#378ab4</span>,
    <span class="hljs-number">8px</span> <span class="hljs-number">7px</span> <span class="hljs-number">0px</span> <span class="hljs-number">#5dabcd</span>;
}

<span class="hljs-selector-class">.glow</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#444</span>;
  <span class="hljs-attribute">text-shadow</span>: 
    <span class="hljs-number">1px</span> <span class="hljs-number">0px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">0px</span> <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>, 
    <span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">1px</span> <span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>,
    <span class="hljs-number">3px</span> <span class="hljs-number">2px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">2px</span> <span class="hljs-number">3px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>,
    <span class="hljs-number">4px</span> <span class="hljs-number">3px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">3px</span> <span class="hljs-number">4px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>,
    <span class="hljs-number">5px</span> <span class="hljs-number">4px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">4px</span> <span class="hljs-number">5px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>,
    <span class="hljs-number">6px</span> <span class="hljs-number">5px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>, <span class="hljs-number">5px</span> <span class="hljs-number">6px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#eee</span>,
    <span class="hljs-number">7px</span> <span class="hljs-number">6px</span> <span class="hljs-number">1px</span> <span class="hljs-number">#ccc</span>;
}

<span class="hljs-selector-class">.vamp</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#92a5de</span>;
  <span class="hljs-attribute">background</span>: red;
  <span class="hljs-attribute">text-shadow</span>:<span class="hljs-number">0px</span> <span class="hljs-number">0px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">137</span>,<span class="hljs-number">156</span>,<span class="hljs-number">213</span>),<span class="hljs-number">1px</span> <span class="hljs-number">1px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">129</span>,<span class="hljs-number">148</span>,<span class="hljs-number">205</span>),<span class="hljs-number">2px</span> <span class="hljs-number">2px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">120</span>,<span class="hljs-number">139</span>,<span class="hljs-number">196</span>),<span class="hljs-number">3px</span> <span class="hljs-number">3px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">111</span>,<span class="hljs-number">130</span>,<span class="hljs-number">187</span>),<span class="hljs-number">4px</span> <span class="hljs-number">4px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">103</span>,<span class="hljs-number">122</span>,<span class="hljs-number">179</span>),<span class="hljs-number">5px</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">94</span>,<span class="hljs-number">113</span>,<span class="hljs-number">170</span>),<span class="hljs-number">6px</span> <span class="hljs-number">6px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">85</span>,<span class="hljs-number">104</span>,<span class="hljs-number">161</span>),<span class="hljs-number">7px</span> <span class="hljs-number">7px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">76</span>,<span class="hljs-number">95</span>,<span class="hljs-number">152</span>),<span class="hljs-number">8px</span> <span class="hljs-number">8px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">68</span>,<span class="hljs-number">87</span>,<span class="hljs-number">144</span>),<span class="hljs-number">9px</span> <span class="hljs-number">9px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">59</span>,<span class="hljs-number">78</span>,<span class="hljs-number">135</span>),<span class="hljs-number">10px</span> <span class="hljs-number">10px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">50</span>,<span class="hljs-number">69</span>,<span class="hljs-number">126</span>),<span class="hljs-number">11px</span> <span class="hljs-number">11px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">42</span>,<span class="hljs-number">61</span>,<span class="hljs-number">118</span>),<span class="hljs-number">12px</span> <span class="hljs-number">12px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">33</span>,<span class="hljs-number">52</span>,<span class="hljs-number">109</span>),<span class="hljs-number">13px</span> <span class="hljs-number">13px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">24</span>,<span class="hljs-number">43</span>,<span class="hljs-number">100</span>),<span class="hljs-number">14px</span> <span class="hljs-number">14px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">15</span>,<span class="hljs-number">34</span>,<span class="hljs-number">91</span>),<span class="hljs-number">15px</span> <span class="hljs-number">15px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(<span class="hljs-number">7</span>,<span class="hljs-number">26</span>,<span class="hljs-number">83</span>),<span class="hljs-number">16px</span> <span class="hljs-number">16px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(-<span class="hljs-number">2</span>,<span class="hljs-number">17</span>,<span class="hljs-number">74</span>),<span class="hljs-number">17px</span> <span class="hljs-number">17px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(-<span class="hljs-number">11</span>,<span class="hljs-number">8</span>,<span class="hljs-number">65</span>),<span class="hljs-number">18px</span> <span class="hljs-number">18px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(-<span class="hljs-number">19</span>,<span class="hljs-number">0</span>,<span class="hljs-number">57</span>),<span class="hljs-number">19px</span> <span class="hljs-number">19px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(-<span class="hljs-number">28</span>,-<span class="hljs-number">9</span>,<span class="hljs-number">48</span>), <span class="hljs-number">20px</span> <span class="hljs-number">20px</span> <span class="hljs-number">0</span> <span class="hljs-built_in">rgb</span>(-<span class="hljs-number">37</span>,-<span class="hljs-number">18</span>,<span class="hljs-number">39</span>),<span class="hljs-number">21px</span> <span class="hljs-number">21px</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">1</span>),<span class="hljs-number">21px</span> <span class="hljs-number">21px</span> <span class="hljs-number">1px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.5</span>),<span class="hljs-number">0px</span> <span class="hljs-number">0px</span> <span class="hljs-number">20px</span> <span class="hljs-built_in">rgba</span>(<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0</span>,.<span class="hljs-number">2</span>);
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"simple"</span>&gt;</span>
            Monster Mash
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"otto"</span>&gt;</span>
            Slippery Slime
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"relief"</span>&gt;</span>
            Mummy Mommy
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"close"</span>&gt;</span>
            Graveyard Smash
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"printers"</span>&gt;</span>
            Skeleton Crew
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"glow"</span>&gt;</span>
            Smooth Zombie
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vamp"</span>&gt;</span>
            Vampire Diaries
          <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-shadow.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-shadow.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-shadow.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-shadow.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-shadow.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-shadow.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-shadow.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-shadow.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-shadow.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-shadow.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-shadow.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-STROKE

### Input HTML & CSS

<details>
    <summary>
        View TEXT-STROKE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-stroke/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">3em</span>;
  <span class="hljs-attribute">background</span>: whitesmoke;
}

<span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">4em</span>;
  <span class="hljs-attribute">-webkit-text-stroke</span>: <span class="hljs-number">3px</span> darkgrey;
  <span class="hljs-attribute">-webkit-text-fill-color</span>: white;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>A header with attitude.<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-stroke.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-stroke.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-stroke.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-stroke.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-stroke.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-stroke.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-stroke.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-stroke.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-stroke.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-stroke.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-stroke.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-TRANSFORM

### Input HTML & CSS

<details>
    <summary>
        View TEXT-TRANSFORM Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-transform/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.lowercase</span> {<span class="hljs-attribute">text-transform</span>: lowercase; }
<span class="hljs-selector-class">.uppercase</span> { <span class="hljs-attribute">text-transform</span>: uppercase; }
<span class="hljs-selector-class">.capitalize</span> { <span class="hljs-attribute">text-transform</span>: capitalize; }



<span class="hljs-selector-tag">hr</span> { <span class="hljs-attribute">margin</span>: <span class="hljs-number">2.5em</span> <span class="hljs-number">0</span>; }
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>text-transform: lowercase;<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"lowercase"</span>&gt;</span>THIS WILL BE TRANSFORMED TO LOWERCASE.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>text-transform: uppercase;<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uppercase"</span>&gt;</span>this will be transformed to uppercase.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">hr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>text-transform: capitalize; <span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"capitalize"</span>&gt;</span>This will be transformed to capitalize all words, including both parts of this hyphenated word: double-parked.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"capitalize"</span>&gt;</span>"These words are in 'quotes'."<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"capitalize"</span>&gt;</span>This text includes a date: February 4th, 2015.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"capitalize"</span>&gt;</span>This text includes an acronym: CSS.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-transform.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-transform.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-transform.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-transform.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-transform.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-transform.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-transform.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-transform.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-transform.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-transform.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-transform.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-UNDERLINE-OFFSET

### Input HTML & CSS

<details>
    <summary>
        View TEXT-UNDERLINE-OFFSET Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-underline-offset/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.fixed</span> <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-underline-offset</span>: <span class="hljs-number">8px</span>;
}

<span class="hljs-selector-class">.relative</span> <span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">text-underline-offset</span>: <span class="hljs-number">0.5em</span>;
}

<span class="hljs-selector-tag">h1</span><span class="hljs-selector-pseudo">:first-child</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">16px</span>; 
}

<span class="hljs-selector-tag">h1</span><span class="hljs-selector-pseudo">:last-child</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">60px</span>;
}

<span class="hljs-selector-tag">section</span> {
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">flex-wrap</span>: wrap;
  <span class="hljs-attribute">min-height</span>: <span class="hljs-number">100vh</span>;
}

<span class="hljs-selector-class">.demo</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2rem</span>;
  <span class="hljs-attribute">flex-grow</span>: <span class="hljs-number">1</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">flex-direction</span>: column;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">justify-content</span>: space-around;
}

<span class="hljs-selector-class">.fixed</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#FA5900</span>;
}

<span class="hljs-selector-class">.relative</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#0C5BB6</span>;
}

<span class="hljs-selector-tag">h1</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
  <span class="hljs-attribute">font-family</span>: cursive;
  <span class="hljs-attribute">text-align</span>: center;
  <span class="hljs-attribute">text-decoration</span>: underline;  
}

<span class="hljs-keyword">@supports</span> <span class="hljs-keyword">not</span> (<span class="hljs-attribute">text-underline-offset:</span> auto) {
  <span class="hljs-selector-tag">section</span><span class="hljs-selector-pseudo">::before</span> {    
    <span class="hljs-attribute">content</span>: <span class="hljs-string">"Your browser doesn't support text-underline-offset"</span>;
    <span class="hljs-attribute">display</span>: block;
    <span class="hljs-attribute">color</span>: <span class="hljs-number">#e43</span>;
    <span class="hljs-attribute">font-weight</span>: bold;
    <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#fff</span>;
    <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span>;
    <span class="hljs-attribute">position</span>: fixed;
    <span class="hljs-attribute">top</span>: <span class="hljs-number">20px</span>;
    <span class="hljs-attribute">left</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">right</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">text-align</span>: center;
  }
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo fixed"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>using offset<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>using px<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"demo relative"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>using offset<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>using em<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-underline-offset.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-underline-offset.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-underline-offset.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-underline-offset.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-underline-offset.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-underline-offset.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-underline-offset.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-underline-offset.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-underline-offset.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-underline-offset.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-underline-offset.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TEXT-UNDERLINE-POSITION

### Input HTML & CSS

<details>
    <summary>
        View TEXT-UNDERLINE-POSITION Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/text-underline-position/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span> { <span class="hljs-attribute">text-decoration</span>: underline; }

<span class="hljs-selector-class">.under-below</span> { 
  <span class="hljs-attribute">-webkit-text-underline-position</span>: under;
  <span class="hljs-attribute">-ms-text-underline-position</span>: below;
  <span class="hljs-attribute">text-underline-position</span>: under; 
}


<span class="hljs-comment">/* styling for Pen, unrelated to text-underline-position */</span>

<span class="hljs-selector-tag">body</span> { 
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">2em</span>; 
  <span class="hljs-attribute">font-family</span>: sans-serif;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"under-below"</span>&gt;</span>Hey, get some yellow spaghetti squash.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/text-underline-position.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-underline-position.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_text-underline-position.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-underline-position.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_text-underline-position.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-underline-position.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_text-underline-position.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-underline-position.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_text-underline-position.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-underline-position.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_text-underline-position.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TOP

### Input HTML & CSS

<details>
    <summary>
        View TOP Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/top-right-bottom-left/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-class">.box</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">10rem</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">10rem</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">background-color</span>: Silver;
  <span class="hljs-attribute">position</span>: relative;
}

<span class="hljs-selector-class">.box--positive</span> {
  <span class="hljs-attribute">top</span>: <span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.box--negative</span> {
  <span class="hljs-attribute">top</span>: -<span class="hljs-number">50px</span>;
}

<span class="hljs-selector-class">.outline</span> {
  <span class="hljs-attribute">display</span>: inline-block;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">2px</span> dashed black;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">40px</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">40px</span>;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"outline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box--positive"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span>positive<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"outline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box box--negative"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span>negative<span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/top.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_top.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_top.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_top.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_top.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_top.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_top.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_top.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_top.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_top.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_top.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TRANSFORM-ORIGIN

### Input HTML & CSS

<details>
    <summary>
        View TRANSFORM-ORIGIN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_transform-origin --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
      <span class="hljs-selector-id">#div1</span> {
  <span class="hljs-attribute">position</span>: relative;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
}

<span class="hljs-selector-id">#div2</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
  <span class="hljs-attribute">background-color</span>: red;
  <span class="hljs-attribute">-ms-transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">45deg</span>); <span class="hljs-comment">/* IE 9 */</span>
  <span class="hljs-attribute">-ms-transform-origin</span>: <span class="hljs-number">20%</span> <span class="hljs-number">40%</span>; <span class="hljs-comment">/* IE 9 */</span>
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotate</span>(<span class="hljs-number">45deg</span>);
  <span class="hljs-attribute">transform-origin</span>: <span class="hljs-number">20%</span> <span class="hljs-number">40%</span>;
}  
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The transform-origin Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div1"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div2"</span>&gt;</span>HELLO<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/transform-origin.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform-origin.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform-origin.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform-origin.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform-origin.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform-origin.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform-origin.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform-origin.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform-origin.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform-origin.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform-origin.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TRANSFORM-STYLE

### Input HTML & CSS

<details>
    <summary>
        View TRANSFORM-STYLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_transform-style --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-id">#div1</span> {
  <span class="hljs-attribute">position</span>: relative;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">10px</span>;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
}

<span class="hljs-selector-id">#div2</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">50px</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
  <span class="hljs-attribute">background-color</span>: red;
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(<span class="hljs-number">60deg</span>);
  <span class="hljs-attribute">transform-style</span>: preserve-<span class="hljs-number">3</span>d;
}

<span class="hljs-selector-id">#div3</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">40px</span>;
  <span class="hljs-attribute">position</span>: absolute;
  <span class="hljs-attribute">border</span>: <span class="hljs-number">1px</span> solid black;
  <span class="hljs-attribute">background-color</span>: yellow;
  <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">rotateY</span>(-<span class="hljs-number">60deg</span>);

}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>The transform-style Property<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div1"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div2"</span>&gt;</span>HELLO
          <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div3"</span>&gt;</span>YELLOW<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/transform-style.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform-style.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform-style.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform-style.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform-style.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform-style.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform-style.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform-style.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform-style.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform-style.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform-style.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TRANSFORM

### Input HTML & CSS

<details>
    <summary>
        View TRANSFORM Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/properties/t/transform/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-class">.element</span> {
  <span class="hljs-attribute">background-color</span>: <span class="hljs-number">#0074d9</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">width</span>: <span class="hljs-number">20px</span>;
  <span class="hljs-attribute">-webkit-transform</span>: <span class="hljs-built_in">scale</span>(<span class="hljs-number">20</span>);
          <span class="hljs-attribute">transform</span>: <span class="hljs-built_in">scale</span>(<span class="hljs-number">20</span>);
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1px</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1px</span>;
  <span class="hljs-attribute">color</span>: white;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">2px</span>;
}

<span class="hljs-selector-tag">body</span>, <span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
}

<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">display</span>: -webkit-box;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">-webkit-box-align</span>: center;
          <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">-webkit-box-pack</span>: center;
          <span class="hljs-attribute">justify-content</span>: center;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">font-family</span>: Helvetica, sans-serif;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"element"</span>&gt;</span>
            This element is 20px wide and 20px tall but, with the scale function set to 20, it is now 400px wide and 400px tall. Text, padding and margins are also effected by this property.
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/T/transform.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Properties_T_transform.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Properties_T_transform.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Properties_T_transform.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Properties_T_transform.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_CSS_Properties_T_transform.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>


