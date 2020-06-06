---
layout: details
title: A
permalink: /CSS-Selectors/A/
description: 
---



## 🔬 ACTIVE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/active.html)

<details>
    <summary>
        View ACTIVE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/active/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        h2:active {
  background: yellow;   
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;click anywhere&lt;/h2&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_active.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_active.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_active.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_active.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_active.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_active.html.pdf) |

## 🔬 ADJACENT-SIBLING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/adjacent-sibling.html)

<details>
    <summary>
        View ADJACENT-SIBLING Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/adjacent-sibling/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  font-family: 'Source Sans Pro', Arial, sans-serif;
  line-height: 1.45;
  color: #333;
  padding: 1em;
  font-size: 18px;
}

img + p { 
  font-style: italic;
  margin: 0;
  font-size: 14px;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;This example demonstrates the use of CSS &lt;a href=&quot;https://css-tricks.com/almanac/selectors/a/adjacent-sibling/&quot;&gt;Adjacent Sibling&lt;/a&gt; selectors. Here, we want to add some additional styling to the caption text only. We'll use the adjacent sibling combinator to only select the paragraph tags that directly follow an image.&lt;/p&gt;

        &lt;img src=&quot;http://images.nga.gov/?service=asset&amp;action=show_preview&amp;asset=135937&quot; /&gt;
        &lt;p&gt;Vincent van Gogh Green Wheat Fields, Auvers 1890 Painting&lt;/p&gt;
        
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&lt;/p&gt;
        
        &lt;img src=&quot;http://images.nga.gov/?service=asset&amp;action=show_preview&amp;asset=120079&quot; /&gt;
        &lt;p&gt;Claude Monet The Japanese Footbridge 1899 Painting&lt;/p&gt;
        
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_adjacent-sibling.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_adjacent-sibling.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_adjacent-sibling.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_adjacent-sibling.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_adjacent-sibling.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_adjacent-sibling.html.pdf) |

## 🔬 AFTER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/after.html)

<details>
    <summary>
        View AFTER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/after-and-before/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        div::after {
  content: &quot;after&quot;;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;h1&gt;Hello World&lt;/h1&gt;    
            &lt;p&gt;Test for after.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_after.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_after.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_after.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_after.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_after.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_after.html.pdf) |

## 🔬 ANY-LINK

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/any-link.html)

<details>
    <summary>
        View ANY-LINK Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/any-link/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        body {
  background-color: #eaeaea;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

:any-link {
  color: red;
  font-weight: 900;
  text-decoration: none;
}

/* [href] {
  color: blue;
} */
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &amp;lt;a&gt; elements with...
            &lt;br&gt;&lt;br&gt;
            &lt;a href=&quot;https://google.com&quot;&gt;valid href&lt;/a&gt;
            &lt;br&gt;
            &lt;a&gt;no href&lt;/a&gt;
            &lt;br&gt;
            &lt;a href&gt;href but no value&lt;/a&gt;
            &lt;br&gt;
            &lt;a href=&quot;&quot;&gt;empty string href&lt;/a&gt;
          &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_any-link.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_any-link.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_any-link.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_any-link.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_any-link.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_any-link.html.pdf) |

## 🔬 ATTRIBUTE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/A/attribute.html)

<details>
    <summary>
        View ATTRIBUTE Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/a/attribute/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        a[href=&quot;https://www.css-tricks.com&quot;] { /*select only the link with the exact href value https://www.css-tricks.com */
  color: #E18728;
  font-size: 1.5em;
}

.gallery img[alt*=&quot;art&quot;] { /* alt attribute contains the word art, as whole or partial word */
  outline: 5px solid #E18728;
  outline-offset: 2px;
}

.gallery2 img[alt~=&quot;art&quot;] { /* alt attribute contains art as only value or in space-separated list */
  outline: 5px solid #E18728;
  outline-offset: 2px;
}

.gallery3 img[alt^=&quot;art&quot;] { /* alt attribute starts with the value &quot;art&quot; */
  outline: 5px solid #E18728;
  outline-offset: 2px;
}

li[data-years|=&quot;1900&quot;] { /* data-years attribute starts with 1900 as the only value or first in a dash-separated list */
  color: red;
}

a[href$=&quot;pdf&quot;]:after { /* href attribute ends with pdf */
  content: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/pdficon_small.png);
  padding-left: .3em;
}



/* styling for Pen, unrelated to attribute selectors */

body { 
  font-family: sans-serif;
  width: 90%;
  margin: 0 auto;
  line-height: 1.5;
}

img { margin-right: .5em; }

hr { 
  margin: 1em 0;
  clear: both;
}

.story {
  text-indent: 1em;
  font-family: serif;
  font-size: 1.2em;
}

.story:first-letter { font-size: 1.5em; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Exact Match &amp;mdash; [attribute=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;Here we select the link with the exact href value &quot;https://www.css-tricks.com&quot;, and change its color and font size. Notice that the link to the almanac is not styled.&lt;/p&gt;
        &lt;p&gt;&lt;a href=&quot;https://www.css-tricks.com&quot;&gt;CSS-Tricks&lt;/a&gt;&lt;/p&gt;
        &lt;p&gt;&lt;a href=&quot;https://www.css-tricks.com/almanac&quot;&gt;CSS-Tricks Almanac&lt;/a&gt;&lt;/p&gt;
        &lt;hr&gt;
        
        &lt;h2&gt;Attribute Value Contains &amp;mdash; [attribute*=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;Here we select the images with the full word or word fragment &quot;art&quot; in the alt text and give them an outline. Notice that the images with the alt text &quot;abstract &lt;i&gt;art&lt;/i&gt;&quot; and &quot;athlete &lt;i&gt;starting&lt;/i&gt; a new sport&quot; both get outlined. &lt;/p&gt;
        
        &lt;div class=&quot;gallery&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150/abstract&quot; alt=&quot;abstract art&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150/food&quot; alt=&quot;something to eat&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150/sports&quot; alt=&quot;athlete starting a new sport&quot;&gt;
        &lt;/div&gt;
        &lt;hr&gt;
        
        &lt;h2&gt;Attribute Value is in Space-Separated List &amp;mdash; [attribute~=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;In the list below, we select images with the word &quot;art&quot; in their alt attribute, either as the only value or as a whole word in a space separated list. Notice that the image with the alt text &quot;athlete starting a new sport&quot; is not outlined like it was in the &quot;Attribute Contains&quot; example.&lt;/p&gt;
        &lt;div class=&quot;gallery2&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150&quot; alt=&quot;abstract art&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150&quot; alt=&quot;something to eat&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/150&quot; alt=&quot;athlete starting a new sport&quot;&gt;
        &lt;/div&gt;
        &lt;hr&gt;
        
        &lt;h2&gt;Attribute Value Starts With &amp;mdash; [attribute^=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;Here we select the images with alt text that starts with &quot;art&quot;. Notice that the image with the alt text &quot;artistic pattern&quot; is selected, but the image with the alt text &quot;Arthur Miller&quot; is not because attribute selectors are case-sensitive. &lt;/p&gt;
        &lt;div class=&quot;gallery3&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/184/abstract&quot; alt=&quot;artistic pattern&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/184/food&quot; alt=&quot;a healthy meal&quot;&gt;
          &lt;img src=&quot;//placehold.it/150/184/sports&quot; alt=&quot;Arthur Miller&quot;&gt;
        &lt;/div&gt;
        &lt;hr&gt;
        
        &lt;h2&gt;Attribute Value is First in Dash-Separated List &amp;mdash; [attribute|=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;Selecting the list item with a data-decade attribute that has &quot;1900&quot; as the only value or the first in a dash separated list. Notice that only the 2nd list item is selected. The first list item has &quot;1900&quot; in its data attribute value, but it's after the dash.&lt;/p&gt;
        &lt;ul&gt;  
          &lt;li data-years=&quot;1800-1900&quot;&gt;The 19th Century&lt;/li&gt;
          &lt;li data-years=&quot;1900-2000&quot;&gt;The 20th Century&lt;/li&gt;
          &lt;li data-years=&quot;2000-2100&quot;&gt;The 21st Century&lt;/li&gt;
        &lt;/ul&gt;
        &lt;hr&gt;
        
        &lt;h2&gt;Attribute Value Ends With &amp;mdash; [attribute$=&quot;value&quot;]&lt;/h2&gt;
        &lt;p&gt;In the paragraph below we select the link with the href that ends with &quot;pdf&quot; and apply an icon as :after content.&lt;/p&gt;
        &lt;p class=&quot;story&quot;&gt;A humble digital file becomes self-aware and starts conversations with web developers. &lt;i&gt;Read the fascinating account in &lt;a href=&quot;//s3-us-west-2.amazonaws.com/s.cdpn.io/652/example.pdf&quot;&gt;example.pdf&lt;/a&gt;&lt;/i&gt;&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_A_attribute.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_A_attribute.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_A_attribute.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_A_attribute.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_A_attribute.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_A_attribute.html.pdf) |


