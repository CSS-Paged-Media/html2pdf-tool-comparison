---
layout: details
title: G
permalink: /CSS-Selectors/G/
description: 
---



## 🔬 GENERAL-SIBLING

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/CSS%20Selectors/G/general-sibling.html)

<details>
    <summary>
        View GENERAL-SIBLING Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;!-- Sample from https://css-tricks.com/almanac/selectors/g/general-sibling/ --&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;style&gt;
        img ~ p {
  background-color: #FEF0B6;
  padding: 5px;
}

        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;&lt;strong&gt;This paragraph will not be selected.&lt;/strong&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias beatae blanditiis inventore, ducimus atque dolores vitae accusamus quas deleniti illum ab natus similique distinctio optio. Sed fugit harum, sequi ducimus?&lt;/p&gt;

        &lt;img src=&quot;https://placeimg.com/200/200/arch&quot; alt=&quot;&quot; /&gt;
        
        &lt;p&gt;&lt;strong&gt;This paragraph will be selected.&lt;/strong&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio consequatur debitis eveniet iste ratione quibusdam hic accusamus! Eveniet dignissimos ad, nihil molestiae aspernatur consequuntur officia voluptatum tenetur velit voluptate. Temporibus! &lt;/p&gt;
        
        &lt;p&gt;&lt;strong&gt;And this paragraph will also be selected.&lt;/strong&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas temporibus facere, porro et. Sed corrupti iusto reprehenderit ratione est deleniti molestias inventore consequuntur dicta tenetur! Animi excepturi quae blanditiis cum.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_CSS_Selectors_G_general-sibling.html.png) | ![typeset Preview](typeset__html_CSS_Selectors_G_general-sibling.html.png) | ![PDFreactor Preview](pdfreactor__html_CSS_Selectors_G_general-sibling.html.png) |
| [📕 mPDF Output](mpdf__html_CSS_Selectors_G_general-sibling.html.pdf) | [📕 typeset Output](typeset__html_CSS_Selectors_G_general-sibling.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_CSS_Selectors_G_general-sibling.html.pdf) |


