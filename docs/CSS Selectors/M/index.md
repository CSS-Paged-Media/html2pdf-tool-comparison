---
layout: details
title: M
permalink: /CSS-Selectors/M/
description: 
---



## 🔬 MARKER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/M/marker.html)

<details>
    <summary>
        View MARKER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/m/marker/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        p.note {
  display: list-item;
  counter-increment: note-counter;
  color: red;
  margin-left: 5em;
}

p.note::marker {
  content: &quot;Note &quot; counter(note-counter) &quot;:&quot;;
  text-align: left;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;It was the best of times, it was the worst of times, it was the age of wisdom, it was the age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despair, we had everything before us, we had nothing before us, we were all going direct to Heaven, we were all going direct the other way--in short, the period was so far like the present period, that some of its noisiest authorities insisted on its being received, for good or for evil, in the superlative degree of comparison only.&lt;/p&gt;
        &lt;p class=&quot;note&quot;&gt;Holy smokes, that's an epic intro!&lt;/p&gt;
        &lt;p&gt;There were a king with a large jaw and a queen with a plain face, on the throne of England; there were a king with a large jaw and a queen with a fair face, on the throne of France. In both countries it was clearer than crystal to the lords of the State preserves of loaves and fishes, that things in general were settled for ever.&lt;/p&gt;
        &lt;p class=&quot;note&quot;&gt;Those sound like lovely rulers.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_M_marker.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_M_marker.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_M_marker.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_M_marker.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_M_marker.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_M_marker.html.pdf) |

## 🔬 MATCHES

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/M/matches.html)

<details>
    <summary>
        View MATCHES Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/m/matches/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        a:matches(:hover, :focus, :active) {
  color: #BADA55;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;a href=&quot;https://css-tricks.com&quot;&gt;CSS-Tricks&lt;/a&gt;

        &lt;a href=&quot;&quot;&gt;CSS-Tricks&lt;/a&gt;
        
        &lt;a href&gt;CSS-Tricks&lt;/a&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_M_matches.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_M_matches.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_M_matches.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_M_matches.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_M_matches.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_M_matches.html.pdf) |


