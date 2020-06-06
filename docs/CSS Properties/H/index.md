---
layout: details
title: H
permalink: /CSS-Properties/H/
description: 
---



## 🔬 HANGING-PUNCTUATION

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/hanging-punctuation.html)

<details>
    <summary>
        View HANGING-PUNCTUATION Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/hanging-punctuation/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        blockquote {
  font-style: italic;
  font-size: 2rem;
  width: 20em;
  border-left: 1px solid #ddd;
  padding: 3rem 0;
  
  hanging-punctuation: first;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;blockquote&gt;
            &ldquo;Let your tears flow, but let them also cease. Let deepest sighs be drawn from your breast, but let them also find an end.&rdquo;&thinsp;&mdash;&thinsp;Seneca
          &lt;/blockquote&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_hanging-punctuation.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_hanging-punctuation.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_hanging-punctuation.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_hanging-punctuation.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_hanging-punctuation.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_hanging-punctuation.html.pdf) |

## 🔬 HEIGHT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/height.html)

<details>
    <summary>
        View HEIGHT Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/height/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        html {
  background: #e78629;
}

p {
  background: #212121;
  color: #FFF;
}

p.heightpx {
  height: 100px;
}

p.heightem {
  height: 8em;
}

p.heightpercent {
  height: 100%;
  /* height value determined by content */
}

.nesting {
  background: white;
}

.nesting.example1 {
  height: 100px;
}
.nesting.example1 .heightnested {
  height: 100%;
  /* fills the available space of the containing parent element*/
}

.nesting.example2 {
  height: 100%;
}
.nesting.example2 .heightnested {
  height: auto;
  /* fills the available space of the containing parent element*/
}

table {
  float: left;
  margin-right: .5em;
  background: white;
}

.table-example1 {
  height: 100px;
}

.table-example2 {
  height: 100%;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Height Property&lt;/h1&gt;
        &lt;h3&gt;Block Level Elements&lt;/h3&gt;
        &lt;p class=&quot;heightpx&quot;&gt;Content in a paragraph : &lt;code&gt;height: 100px&lt;/code&gt;&lt;/p&gt;
        
        &lt;p class=&quot;heightem&quot;&gt;Content in a paragraph : &lt;code&gt;height: 8em&lt;/code&gt;&lt;/p&gt;
        
        &lt;p class=&quot;heightpercent&quot;&gt;Content in a paragraph : &lt;code&gt;height: 100%&lt;/code&gt;&lt;/p&gt;
        
        &lt;h3&gt;Elements Contained&lt;/h3&gt;
        &lt;div class=&quot;nesting example1&quot;&gt;
          &lt;p class=&quot;heightnested&quot;&gt;Containing element : &lt;code&gt;height: 100px&lt;/code&gt;.  Content in a paragraph : &lt;code&gt;height: 100%&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;nesting example2&quot;&gt;
          &lt;p class=&quot;heightnested&quot;&gt;Containing element : &lt;code&gt;height: 100%&lt;/code&gt;.  Content in a paragraph : &lt;code&gt;height: auto&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        
        &lt;h3&gt;Table Height&lt;/h3&gt;
        &lt;table class=&quot;browser-support-table table-example1&quot;&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                &lt;th&gt;Height&lt;/th&gt;
                        &lt;th class=&quot;chrome&quot;&gt;&lt;span&gt;Chrome&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;safari&quot;&gt;&lt;span&gt;Safari&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;firefox&quot;&gt;&lt;span&gt;Firefox&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;opera&quot;&gt;&lt;span&gt;Opera&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;ie&quot;&gt;&lt;span&gt;IE&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;android&quot;&gt;&lt;span&gt;Android&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;iOS&quot;&gt;&lt;span&gt;iOS&lt;/span&gt;&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                &lt;td&gt;100px&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        
        &lt;table class=&quot;browser-support-table table-example2&quot;&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                &lt;th&gt;Height&lt;/th&gt;
                        &lt;th class=&quot;chrome&quot;&gt;&lt;span&gt;Chrome&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;safari&quot;&gt;&lt;span&gt;Safari&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;firefox&quot;&gt;&lt;span&gt;Firefox&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;opera&quot;&gt;&lt;span&gt;Opera&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;ie&quot;&gt;&lt;span&gt;IE&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;android&quot;&gt;&lt;span&gt;Android&lt;/span&gt;&lt;/th&gt;
                        &lt;th class=&quot;iOS&quot;&gt;&lt;span&gt;iOS&lt;/span&gt;&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                &lt;td&gt;100%&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                        &lt;td class=&quot;yep-nope&quot;&gt;All&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_height.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_height.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_height.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_height.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_height.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_height.html.pdf) |

## 🔬 HYPHENS

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Properties/H/hyphens.html)

<details>
    <summary>
        View HYPHENS Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/properties/h/hyphenate/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        article {
  max-width: 500px;
  margin: 0 auto;
  width: 100%;
  text-align: justify;
}

article p {
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
  hyphens: auto;
}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;article lang=&quot;en&quot;&gt;
            &lt;p&gt;As designers attempting to creating functional work, oftentimes we are required to make our designs look as finished as possible.&lt;/p&gt;
            &lt;p&gt;For example, if you are designing a brand new website for someone, most times you will have to make sure the prototype looks finished by inserting text or photos or what have you. The purpose of this is so the person viewing the prototype has a chance to actually feel and understand the idea behind what you have created.&lt;/p&gt;
            &lt;p&gt;Now in some circumstances, designers may use squares and rectangles to help you visualize what should and could be in a specific location.&lt;/p&gt;
            &lt;p&gt;We all have our own techniques, but one of the most effective techniques is to actually put some text where text goes and some pictures where pictures go to make sure everyone can see the vision you&rsquo;ve created.&lt;/p&gt;
            &lt;p&gt;Coming up with filler text on the fly is not easy, but it is becoming more and more of a requirement. Fortunately, some designers and developers around the web know this and have put together a bunch of text generators to help you present your vision.&lt;/p&gt;
            &lt;p&gt;Some are standard (like the always popular &lsquo;Lorem Ipsum&rsquo; generators) and some are really fun. Either way, pick one of your favorites from below and start generating text and completing your vision.&lt;/p&gt;
            &lt;p&gt;&lt;em&gt;From &lt;a href=&quot;http://www.webdesignerdepot.com/2012/03/15-dummy-text-generators-you-should-know/&quot;&gt;this article&lt;/a&gt; on WebDesignerDepot.&lt;/em&gt;&lt;/p&gt;
          &lt;/article&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Properties_H_hyphens.html.png) | ![typeset Preview](typeset__html_CSS_Properties_H_hyphens.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Properties_H_hyphens.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Properties_H_hyphens.html.pdf) | [📕 typeset Output](typeset__html_CSS_Properties_H_hyphens.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Properties_H_hyphens.html.pdf) |


