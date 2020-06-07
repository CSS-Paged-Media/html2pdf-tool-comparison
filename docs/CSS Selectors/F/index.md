---
layout: details
title: F
permalink: /CSS-Selectors/F/
description: Test Section "F" to compare different html2pdf tools.
---



## 🔬 FIRST-CHILD

### Input HTML & CSS

<details>
    <summary>
        View FIRST-CHILD Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-child/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: Palatino, Georgia, serif;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">32em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.4</span>;
}

<span class="hljs-comment">/* by formatting the selector this way, we are less specific than `article p:first-child`
 this means ANY element that is the first child of `article` can be styled */</span>
<span class="hljs-selector-tag">article</span> <span class="hljs-selector-pseudo">:first-child</span> {
<span class="hljs-attribute">color</span>: red;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:last-child</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.75em</span>;
  <span class="hljs-attribute">font-style</span>: italic;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>"Very well, Sir Francis," replied Mr. Fogg; "if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master."<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-child.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-child.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-child.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-child.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-child.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-child.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-child.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-child.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-child.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FIRST-LETTER

### Input HTML & CSS

<details>
    <summary>
        View FIRST-LETTER Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-letter/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">::first-letter</span> {
  <span class="hljs-attribute">font-weight</span>: bold;
  <span class="hljs-attribute">color</span>: red;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
            The first letter is bold and red
           <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-letter.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-letter.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-letter.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-letter.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-letter.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-letter.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-letter.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-letter.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-letter.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FIRST-LINE

### Input HTML & CSS

<details>
    <summary>
        View FIRST-LINE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-line/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">article</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span>;
}

<span class="hljs-selector-tag">p</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#444</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:first-line</span> {
  <span class="hljs-attribute">color</span>: deepskyblue;
}

<span class="hljs-selector-class">.p2</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#444</span>;
}

<span class="hljs-selector-class">.p2</span><span class="hljs-selector-pseudo">:first-line</span> {
  <span class="hljs-attribute">color</span>: tomato;
}

<span class="hljs-selector-id">#p3</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#444</span>;
}

<span class="hljs-selector-id">#p3</span><span class="hljs-selector-pseudo">:first-line</span> {
  <span class="hljs-attribute">color</span>: firebrick;
}

<span class="hljs-selector-id">#p4</span> {
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#444</span> <span class="hljs-meta">!important</span>;
}

<span class="hljs-selector-id">#p4</span><span class="hljs-selector-pseudo">:first-line</span> {
  <span class="hljs-attribute">color</span>: hotpink;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">article</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>::first-line vs. tag selector<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This paragraph color is set to <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#444<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> with <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>p { color: #444; }<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>  
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>::first-line vs class selector<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"p2"</span>&gt;</span>This paragraph color is set to <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#444<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> with <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>.p2 { color: #444; }<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>  
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>::first-line vs ID selector<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"p3"</span>&gt;</span>This paragraph color is set to <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#444<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> with <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#p3 { color: #444; }<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>  
            
            <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>::first-line vs !important<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"p4"</span>&gt;</span>This paragraph color is set to <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#444<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> with <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>#p4 { color: #444 !important; }<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>  
            <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-line.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-line.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-line.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-line.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-line.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-line.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-line.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-line.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-line.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FIRST-OF-TYPE

### Input HTML & CSS

<details>
    <summary>
        View FIRST-OF-TYPE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/first-of-type/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">font-family</span>: Palatino, Georgia, serif;
  <span class="hljs-attribute">max-width</span>: <span class="hljs-number">32em</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">1em</span> <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">1em</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.4</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:first-of-type</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">1.25em</span>;
}

<span class="hljs-selector-tag">p</span><span class="hljs-selector-pseudo">:last-of-type</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">0.75em</span>;
  <span class="hljs-attribute">font-style</span>: italic;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Around the World in Eighty Days<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>"Very well, Sir Francis," replied Mr. Fogg; "if he had been caught he would have been condemned and punished, and then would have quietly returned to Europe.  I don't see how this affair could have delayed his master."<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The conversation fell again.  During the night the train left the mountains behind, and passed Nassik, and the next day proceeded over the flat, well-cultivated country of the Khandeish, with its straggling villages, above which rose the minarets of the pagodas.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Jules Verne was a French author who pioneered the genre of science fiction in the late nineteenth and early twentieth century. Follow him on Twitter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         
         
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/first-of-type.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-of-type.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_first-of-type.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-of-type.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_first-of-type.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-of-type.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_first-of-type.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-of-type.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_first-of-type.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FOCUS-VISIBLE

### Input HTML & CSS

<details>
    <summary>
        View FOCUS-VISIBLE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-tag">input</span>, <span class="hljs-selector-tag">button</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">10px</span>;
}

<span class="hljs-selector-class">.focus-only</span><span class="hljs-selector-pseudo">:focus</span> {
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">2px</span> solid black;  
}

<span class="hljs-selector-class">.focus-visible-only</span><span class="hljs-selector-pseudo">:focus-visible</span> {
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">4px</span> dashed darkorange;
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Default styles"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span>Default styles<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"focus-only"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">":focus only"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"focus-only"</span>&gt;</span>:focus only<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"focus-visible-only"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">":focus-visible only"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"focus-visible-only"</span>&gt;</span>:focus-visible only<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus-visible.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus-visible.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus-visible.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus-visible.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus-visible.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus-visible.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus-visible.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus-visible.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus-visible.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FOCUS-WITHIN

### Input HTML & CSS

<details>
    <summary>
        View FOCUS-WITHIN Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/focus-within/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        * {
  <span class="hljs-attribute">-webkit-box-sizing</span>: border-box;
  <span class="hljs-attribute">-moz-box-sizing</span>: border-box;
  <span class="hljs-attribute">box-sizing</span>: border-box;
}
<span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">font-family</span>: -apple-system, BlinkMacSystemFont, <span class="hljs-string">"Segoe UI"</span>, Roboto, Helvetica, Arial, sans-serif, <span class="hljs-string">"Apple Color Emoji"</span>, <span class="hljs-string">"Segoe UI Emoji"</span>, <span class="hljs-string">"Segoe UI Symbol"</span>;
  <span class="hljs-attribute">line-height</span>: <span class="hljs-number">1.4</span>;
}
<span class="hljs-selector-tag">body</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">20px</span> <span class="hljs-number">15%</span>;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#3c889b</span>;
}

<span class="hljs-selector-tag">form</span> {
  <span class="hljs-attribute">background</span>: white;
}
<span class="hljs-selector-tag">form</span><span class="hljs-selector-pseudo">:focus-within</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#f9f98b</span>;
}
<span class="hljs-selector-tag">form</span> <span class="hljs-selector-tag">header</span> {
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">2rem</span>;
}
<span class="hljs-selector-tag">form</span> <span class="hljs-selector-tag">header</span> <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">font-size</span>: <span class="hljs-number">90%</span>;
  <span class="hljs-attribute">color</span>: <span class="hljs-number">#999</span>;
}
<span class="hljs-selector-tag">form</span> <span class="hljs-selector-tag">header</span> <span class="hljs-selector-tag">h2</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">clear</span>: both;
  <span class="hljs-attribute">overflow</span>: hidden;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.5rem</span> <span class="hljs-number">2rem</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:last-child</span> {
  <span class="hljs-attribute">padding-bottom</span>: <span class="hljs-number">2rem</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span><span class="hljs-selector-pseudo">:focus-within</span> {
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#a1c084</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">fieldset</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">label</span>,
<span class="hljs-selector-tag">legend</span> {
	<span class="hljs-attribute">width</span>: <span class="hljs-number">25%</span>;
  <span class="hljs-attribute">float</span>: left;
  <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">10px</span>;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">div</span>,
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">fieldset</span> &gt; <span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">75%</span>;
  <span class="hljs-attribute">float</span>: right;
}
<span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">fieldset</span> <span class="hljs-selector-tag">label</span> {
	<span class="hljs-attribute">font-size</span>: <span class="hljs-number">90%</span>;
}
<span class="hljs-selector-tag">fieldset</span> {
	<span class="hljs-attribute">border</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=email]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=url]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=password]</span>,
<span class="hljs-selector-tag">textarea</span> {
	<span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">border-top</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">border-left</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#ccc</span>;
  <span class="hljs-attribute">border-right</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#eee</span>;
  <span class="hljs-attribute">border-bottom</span>: <span class="hljs-number">1px</span> solid <span class="hljs-number">#eee</span>;
}
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=email]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=url]</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=password]</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">50%</span>;
}
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span><span class="hljs-selector-pseudo">:focus</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=email]</span><span class="hljs-selector-pseudo">:focus</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=url]</span><span class="hljs-selector-pseudo">:focus</span>,
<span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=password]</span><span class="hljs-selector-pseudo">:focus</span>,
<span class="hljs-selector-tag">textarea</span><span class="hljs-selector-pseudo">:focus</span> {
  <span class="hljs-attribute">outline</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">border-color</span>: <span class="hljs-number">#4697e4</span>;
}

<span class="hljs-keyword">@media</span> (<span class="hljs-attribute">max-width:</span> <span class="hljs-number">600px</span>) {
  <span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">label</span>,
  <span class="hljs-selector-tag">legend</span> {
	  <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">float</span>: none;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0</span> <span class="hljs-number">5px</span> <span class="hljs-number">0</span>;
  }
  <span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">div</span>,
  <span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">fieldset</span> &gt; <span class="hljs-selector-tag">div</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>;
    <span class="hljs-attribute">float</span>: none;
  }
  <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=text]</span>,
  <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=email]</span>,
  <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=url]</span>,
  <span class="hljs-selector-tag">input</span><span class="hljs-selector-attr">[type=password]</span>,
  <span class="hljs-selector-tag">textarea</span>,
  <span class="hljs-selector-tag">select</span> {
    <span class="hljs-attribute">width</span>: <span class="hljs-number">100%</span>; 
  }
}
<span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width:</span> <span class="hljs-number">1200px</span>) {
  <span class="hljs-selector-tag">form</span> &gt; <span class="hljs-selector-tag">div</span> &gt; <span class="hljs-selector-tag">label</span>,
	<span class="hljs-selector-tag">legend</span> {
  	<span class="hljs-attribute">text-align</span>: right;
  }
}
        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">"#"</span>&gt;</span>

            <span class="hljs-tag">&lt;<span class="hljs-name">header</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>This is a form.<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>This form breaks at 600px and goes from a left-label form to a top-label form. At above 1200px, the labels align right. It also indicates focused fields with :focus-within.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">header</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title1"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field1"</span>&gt;</span>Full Name<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field1"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field1"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"field text fn"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">""</span> <span class="hljs-attr">size</span>=<span class="hljs-string">"8"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title3"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field3"</span>&gt;</span>
                Email
              <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field3"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">spellcheck</span>=<span class="hljs-string">"false"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">""</span> <span class="hljs-attr">maxlength</span>=<span class="hljs-string">"255"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"3"</span>&gt;</span> 
             <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title4"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field4"</span>&gt;</span>
                Message
              <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field4"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field4"</span> <span class="hljs-attr">spellcheck</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">rows</span>=<span class="hljs-string">"10"</span> <span class="hljs-attr">cols</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"4"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span>&gt;</span>
              
                <span class="hljs-tag">&lt;<span class="hljs-name">legend</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title5"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span>&gt;</span>
                  Select a Choice
                <span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
                
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"radioDefault_5"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field5"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">""</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field5_0"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field5"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"First Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"5"</span> <span class="hljs-attr">checked</span>=<span class="hljs-string">"checked"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field5_0"</span>&gt;</span>First Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field5_1"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field5"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Second Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"6"</span>&gt;</span>
                      <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field5_1"</span>&gt;</span>Second Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field5_2"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field5"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Third Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"7"</span>&gt;</span>
                      <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field5_2"</span>&gt;</span>Third Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">legend</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title6"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span>&gt;</span>
                  Check All That Apply
                <span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field6"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field6"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"First Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"8"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field6"</span>&gt;</span>First Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field7"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field7"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Second Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"9"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field7"</span>&gt;</span>Second Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field8"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field8"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Third Choice"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"10"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"choice"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field8"</span>&gt;</span>Third Choice<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"desc"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"title106"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Field106"</span>&gt;</span>
                  Select a Choice
              <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Field106"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Field106"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"field select medium"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"11"</span>&gt;</span> 
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"First Choice"</span>&gt;</span>First Choice<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Second Choice"</span>&gt;</span>Second Choice<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Third Choice"</span>&gt;</span>Third Choice<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"saveForm"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"saveForm"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Submit"</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
              <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            
          <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus-within.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus-within.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus-within.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus-within.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus-within.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus-within.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus-within.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus-within.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus-within.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>

## 🔬 FOCUS

### Input HTML & CSS

<details>
    <summary>
        View FOCUS Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample from https://css-tricks.com/almanac/selectors/f/focus/ --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-selector-pseudo">:focus</span> {
  <span class="hljs-attribute">background</span>: pink;
}

<span class="hljs-selector-tag">div</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">16px</span> <span class="hljs-number">0</span>;
}

<span class="hljs-selector-tag">textarea</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">500px</span>;
}

<span class="hljs-selector-tag">button</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">16px</span> <span class="hljs-number">0</span>;
  <span class="hljs-attribute">display</span>: block;
}

        </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>HTML5 Methods for Making Things Tab-able<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>All of the items below are tabbable. The text area and button are tabbable by default, and the divs use two different methods.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        
        <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span>A textarea. Focus states work by default.<span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"2"</span>&gt;</span>And I'm a button. Again, works by default.<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">contenteditable</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"3"</span>&gt;</span>Divs don't usually have a focus state. But I'm special, because I'm <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>contenteditable<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"4"</span>&gt;</span>I'm another div, and I have a <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>tabindex<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. You can't edit me like the div above, but you can tab to me.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"-1"</span>&gt;</span>I can't be tabbed to. This is a terrible idea, generally, but it can be done using tabindex="-1". Notice that (if you click) I still have a focus state, even though you can't tab to me.<span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/F/focus.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_CSS_Selectors_F_focus.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_CSS_Selectors_F_focus.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_CSS_Selectors_F_focus.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_CSS_Selectors_F_focus.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
</div>


