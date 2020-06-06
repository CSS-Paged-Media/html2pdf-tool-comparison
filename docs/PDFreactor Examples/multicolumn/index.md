---
layout: details
title: multicolumn
permalink: /PDFreactor-Examples/multicolumn/
description: 
---



## 🔬 MULTICOLUMN

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/multicolumn/multicolumn.html)

<details>
    <summary>
        View MULTICOLUMN Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
    &lt;head&gt;
        &lt;meta content=&quot;text/html; charset=UTF-8&quot; http-equiv=&quot;Content-Type&quot;/&gt;
        &lt;title&gt;Multi-column Sample&lt;/title&gt;
        
        &lt;style&gt;
            /***************************************************
             * Page
             ***************************************************/
            
            @page {
                margin: 1.5cm;
                
                @bottom-right {
                    content: counter(page);
                    vertical-align: top;
                    font-size: 12pt;
                    color: black;
                }
            }
            
            /* Styles that should specifically not affect browsers */
            @media print {
                .pageBreak + * {
                    break-before: page;
                    margin-top: 0;
                }
            
                .pageBreakBefore {
                    break-before: page;
                    margin-top: 0;
                }
                
                h1 {
                    break-before: page;
                    margin-top: 0 !important;
                }
            }
            
            /* Some basic style for browsers */
            @media screen {
                
                html {
                    background-color: lightgray;
                }
                
                body {
                    max-width: 1200px;
                    margin: 8px auto;
                    
                    padding: 32px;
                    padding-top: 0;
                    border: 1px solid darkgray;
                    background-color: white;
                }
                
                img {
                    max-width: 18cm;
                }
                
                h1 {
                    margin-top: 1cm !important;
                }
            }
            
            /***************************************************
             * General
             ***************************************************/
            
            html {
                font-family: arial, sans-serif;
                font-size: 10pt;
                color: #222222;
            }
            
            div, div p, blockquote {
                color: #222222;
            }
            
            h1, h2, h3, h4, h5, h6 {
                font-weight: normal;
                margin-top: 0.6cm;
                break-after: avoid;
            }
            
            h1 {
                font-size: 24pt;
                margin-bottom: 0.5cm;
            }
            
            h2 {
                font-size: 18pt;
                margin: 0.4cm 0;
            }
            
            h3 {
                font-size: 14pt;
                margin: 0.4cm 0;
            }
            
            h4 {
                font-size: 12pt;
                text-decoration: underline;
                margin-bottom: 0.25cm;
            }
            
            p, td, th, li {
                font-size: 10pt;
                line-height: 1.25;
                color: #666666;
            }
            
            p {
                text-align: justify;
            }
            
            a {
                color: #e41d03;
                text-decoration: underline;
            }
            
            barcode, math {
                color: black;
            }
            
            blockquote {
                font-family: 'times new roman', serif;
                font-style: italic;
                margin: 2mm;
                padding: 0;
            }
            
            table {
                margin-left: auto;
                margin-right: auto;
                border-collapse: collapse;
                background-color: transparent;
            }
            
            table, td, th {
                border: thin solid #e1e1e1;
            }
            
            td, th {
                padding: 0.2cm;
            }
            
            th {
                text-align: center;
                background-color: #f5f5f5;
            }
            
            
            
            
            table.code, td.code, div.code, img.sample {
                background-color: #f5f5f5;
                break-before: avoid;
            }
            
            ul, ol {
                break-inside: avoid;
            }
            
            
            
            
            /***************************************************
             * Box Classes
             ***************************************************/
            
            div.code, div.result, div.experimentalNote, img.sample {
                margin-bottom: 0.25cm;
                border: 1pt solid #e1e1e1;
                padding: 2.5mm;
                break-before: avoid;
                break-inside: avoid;
            }
            
            div.code p {
                text-align: inherit;
            }
            
            :-ro-matches(div.code, div.result) p:first-of-type {
                margin-top: 0;
            }
            
            :-ro-matches(div.code, div.result) p:last-of-type {
                margin-bottom: 0;
            }
            
            code, .code {
                font-family: 'courier new', monospace;
                font-size: 8pt;
                line-height: 1.2;
            }
            
            code {
                white-space: pre;
            }
            
            code .comment {
                color: #3f7f5f;
            }
            
            div.result {
                font-family: 'times new roman', serif;
                border: 1pt solid #222222;
                background-color: white;
            }
            
            div.result p {
                color: #222222;
            }
            
            div.result p:first-child {
                margin-top: 0;
            }
            
            div.result p:last-child {
                margin-bottom: 0;
            }
            
            div.experimentalNote {
                border-color: yellow;
                background-color: lightyellow;
                margin: 1cm 0;
                text-align: justify;
            }
            
            /***************************************************
             * Break Classes
             ***************************************************/
            
            .columnBreak {
                break-after: column;
            }
            
            /******************************************
             * Preferences
             *******************************************/
            
            @-ro-preferences {
                page-layout: 1 column;
                initial-zoom: fit-page;
            }
            &lt;/style&gt;
        &lt;style&gt;/* Fonts */

@font-face {
    font-family: Handwriting;
    src: url(&quot;JOURNAL.TTF&quot;) format(&quot;truetype&quot;);
}

@page landscape {
    size: A4 landscape;
}



/* General */

h2:not(:first-of-type) {
    break-before: page;
    margin-top: 0;
}

div.sample {
    border: thin solid black;
    hyphens: auto;
}


/* Sample: Dictionary */

div.dictionary {
    line-height: 1.2;
    hyphenate-before: 3;
    hyphenate-after: 4;
    
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    
    -webkit-column-gap: 0.25in;
    -moz-column-gap: 0.25in;
    column-gap: 0.25in;
    
    padding: 0.25in;
    
    width: 5in;
    margin: auto;
    
    font-family: 'times new roman', serif;
    font-size: 10pt;
    
    background-color: rgb(250,250,250);
}

div.dictionary dl {
    margin: 0;
}

div.dictionary dt, 
div.dictionary dd {
    margin-left: 0.1in;
    break-before: avoid;
}

div.dictionary dt {
    text-indent: -0.1in;
    float: left;
    padding-right: 0.1in;
}

div.dictionary dd + div.dictionary dt {
    break-before: auto;
}

div.dictionary .smcap {
    font-variant: small-caps;
}

div.dictionary .lowercase {
    text-transform: lowercase;
}


/* Sample: Journal */

div.script {
    width: 5.5in;
    height: 6in;
    
    -webkit-column-width: 2.5in;
    -moz-column-width: 2.5in;
    column-width: 2.5in;
    
    -webkit-column-gap: 0.5in;
    -moz-column-gap: 0.5in;
    column-gap: 0.5in;
    
    -webkit-column-fill: auto;
    -moz-column-fill: auto;
    column-fill: auto;
    
    margin: auto;
    
    padding: 0.25in;
    padding-left: 0.5in;
    padding-right: 0.75in;
    
    font-family: Handwriting;
    
    background-image: -webkit-linear-gradient(0deg, burlywood -20%, beige 7%, beige 93%, burlywood 120%);
    background-image: -moz-linear-gradient(0deg, burlywood -20%, beige 7%, beige 93%, burlywood 120%);
    background-image: linear-gradient(90deg, burlywood -20%, beige 7%, beige 93%, burlywood 120%);
    
    hyphens: none;
}

div.script p {
    font-size: 14pt;
    line-height: 1.6;
    color: black;
}

div.script p:first-child {
    margin-top: 0;
}


/* Sample: Restaurant Menu */

div.menu {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    
    -webkit-column-gap: 0.25in;
    -moz-column-gap: 0.25in;
    column-gap: 0.25in;
    
    -webkit-column-rule: thin solid gray;
    -moz-column-rule: thin solid gray;
    column-rule: thin solid gray;
    
    padding: 0.1in 0.25in 0.2in;
    
    counter-reset: nr 16;
}

div.menu h1,
div.menu h2,
div.menu p,
div.menu li {
    font-family: 'times new roman', serif;
}

div.menu h1 {
    -webkit-column-span: all;
    -moz-column-span: all;
    column-span: all;
    
    margin-top: 0;
    padding-top: 3.5pt;
    padding-bottom: 4pt;
    
    text-align: center;
    
    color: black;
    
    font-variant: small-caps;
    font-weight: bold;
    font-size: 20pt;
    
    break-before: auto;
}

div.menu h1 + * {
    margin-top: 0;
}

div.menu h2 {
    margin-top: 0;
    
    text-align: left;
    
    color: black;
    
    font-variant: small-caps;
    font-weight: normal;
    font-size: 14pt;
    
    break-before: auto;
}

div.menu p,
div.menu li {
    color: black;
    font-size: 12pt;
}

div.menu img {
    display: block;
    
    width: 100%; 
    
    -webkit-column-span: all;
    -moz-column-span: all;
    column-span: all;
    
    margin-top: 0.25in;
    margin-bottom: 0.25in;
}

div.menu li {
    list-style-type: none;
    line-height: 1;
    
    margin-top: 0.1in;
    
    text-indent: -0.1in;
    
    counter-increment: nr;
}

div.menu li::before {
    content: counter(nr) &quot;.&quot;;
    
    float: left;
    
    width: 0.25in;
    margin-left: -0.35in;
    margin-right: 0.2in;
    
    text-align: right;
}


/* Sample: Article */

div.article {
    height: 2.5in;
    
    -webkit-column-count: 5;
    -moz-column-count: 5;
    column-count: 5;
    
    padding: 0.1in;
    
    background-image: -webkit-linear-gradient(3deg, indianred 15px, white 16px);
    background-image: -moz-linear-gradient(3deg, indianred 15px, white 16px);
    background-image: linear-gradient(87deg, indianred 15px, white 16px);
}

div.article h1 {
    text-align: right;
    
    color: black;
    
    font-family: 'times new roman', serif;
    font-size: 20pt;
    font-weight: bold;
    
    break-before: auto;
    
    break-after: column;
    
    margin-top: 0;
}

div.article p {
    font-family: 'times new roman', serif;
    font-size: 10.25pt;
    line-height: 1.3;
    
    margin-top: 0;
    margin-bottom: 0;
    text-indent: 0.25in;
    
    color: black;
}

div.article p:first-of-type,
div.article img + p {
    text-indent: 0in;
}

div.article img {
    display: block;
    
    margin: auto;
    
    break-before: column;
    
    break-after: column;
    
    height: 100%;
}

/* Sample: Base-line */

div.grid {
    page: landscape; 
}

div.surround h2 {
    margin: 0;
    break-before: avoid;
}

div.container &gt; h2 {
    margin-bottom: 5pt;
    font-family: 'courier new', monospace;
    font-size: 14pt;
    text-align: center;
}

div.gridlayout {
    -ro-line-grid: create;
    padding: 3pt; 
    line-height: 1.2;
    height: 5.2in;
    width: 3.28in;
    
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    
    -webkit-column-fill: auto;
    -moz-column-fill: auto;
    column-fill: auto;
}

div.container {
    float: left;
    margin-right: 6px;
}

div.gridlayout h2 {
    margin: 12pt 0 6pt;
}

div.gridlayout h2:first-child {
    margin-top: 0;
}

div.gridlayout p {
    line-height: inherit;
    margin: 0;
}

div.none {
    -ro-line-snap: none;
}

div.baseline {
    -ro-line-snap: baseline;
}

div.contain {
    -ro-line-snap: contain;
}

p.source {
    text-align: left;
}

span.nobreak {
    white-space: pre;
}
&lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Multi-column Sample&lt;/h1&gt;
        
        &lt;h2&gt;Dictionary Layout&lt;/h2&gt;
        
        &lt;p&gt;The following example shows how to create a basic multi-column 
           document with two columns, balanced content and a small gap.
        &lt;/p&gt; 
        
        &lt;div class=&quot;sample dictionary&quot;&gt;
            &lt;dl&gt;
                
                &lt;dt&gt;&lt;b&gt;Peace&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Calm, repose, quiet, tranquillity, stillness, silence.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Amity, concord, harmony, truce, &lt;span class=&quot;smcap lowercase&quot;&gt;ARMISTICE&lt;/span&gt;.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peaceable&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Peaceful, pacific, free from war.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Gentle, mild, amicable, friendly, disposed to peace, not quarrelsome.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;3.&lt;/b&gt; Quiet, tranquil, placid, unmoved, undisturbed, serene.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peaceful&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Quiet, calm, still, undisturbed, placid, tranquil, serene.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Mild, gentle, kindly, friendly.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peace-maker&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Mediator, intercessor.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peace-making&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Conciliatory, mild, appeasing.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peace-offering&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Atonement, satisfaction, amends, reparation, atoning sacrifice.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Mediation, olive-branch, intercession.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peak&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Top (&lt;i&gt;of a mountain&lt;/i&gt;), summit, crest, crown, pinnacle.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peak&lt;/b&gt;, &lt;i&gt;v. n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Grow thin or lean, become emaciated.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Sneak, make a mean figure.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peaked&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Pointed.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peal&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Blast, burst, blare, clang.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peal&lt;/b&gt;, &lt;i&gt;v. n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Resound, echo, re-echo, boom, thunder, roar.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pea-nut&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Ground-nut, earth-nut (&lt;i&gt;Arachis hypog&amp;#230;a&lt;/i&gt;).&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pearlash&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Sub-carbonate of potassa (&lt;i&gt;impure&lt;/i&gt;), calcined potash.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pearl-powder&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;span class=&quot;smcap&quot;&gt;Pearl-white&lt;/span&gt;.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pearl-white&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Pearl-powder, sub-muriate of bismuth.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pearly&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Abounding in pearls.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Clear, pure, transparent, nacreous.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peasant&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Rustic, countryman, hind, swain.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pebble&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Stone (&lt;i&gt;of small size&lt;/i&gt;), pebble-stone.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pebble-stone&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Pebble.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peccability&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Frailty, infirmity, weakness, liability to sin.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peccable&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Frail, weak, imperfect, erring, sinning, liable to sin.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peccadillo&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Petty fault, slight offence.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peccant&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; Sinning, erring, guilty, criminal.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Morbid, malignant, corrupting, corroding.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peculation&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Embezzlement.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peculiar&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;&lt;b&gt;1.&lt;/b&gt; That specially pertains, that belongs exclusively.&lt;/dd&gt;
                &lt;dd&gt;&lt;b&gt;2.&lt;/b&gt; Singular, particular, characteristic, special, exceptional, rare, not common, not general.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Peculiarity&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Individuality, idiocrasy, idiosyncrasy, characteristic, speciality, singularity.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pecuniary&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Monetary, financial.&lt;/dd&gt;
               
                &lt;dt&gt;&lt;b&gt;Pedagogue&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;[&lt;i&gt;A contemptuous term.&lt;/i&gt;] Schoolmaster, teacher.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pedant&lt;/b&gt;, &lt;i&gt;n.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Pretender to learning.&lt;/dd&gt;
                
                &lt;dt&gt;&lt;b&gt;Pedantic&lt;/b&gt;, &lt;i&gt;a.&lt;/i&gt;&lt;/dt&gt;
                &lt;dd&gt;Conceited, pragmatical, vain of knowledge, ostentations of learning.&lt;/dd&gt;
                
            &lt;/dl&gt;
        &lt;/div&gt;
        
        &lt;p class=&quot;source&quot;&gt;Excerpt from &quot;Dictionary of English Synonymes&quot; by Richard Soule via Project Gutenberg:
            &lt;span class=&quot;nobreak&quot;&gt;http://www.gutenberg.org/files/38390/38390-h/38390-h.htm&lt;/span&gt;&lt;/p&gt;
        
        &lt;div class=&quot;code&quot;&gt;
            &lt;code&gt;div.dictionary {
    height 6in; /* if not set the box shrinks to the balanced column's height */
    column-count: 2; /* defines two columns */
    column-gap: 0.25in; /* defines the gap width */
    ...
}&lt;/code&gt;
        &lt;/div&gt;
        
        
        &lt;h2&gt;Journal Layout&lt;/h2&gt;
        
        &lt;p&gt;In this example the columns are defined by width and their content 
           is laid out to fully fill each column before beginning the next 
           rather than balancing all column heights equally. The gap is a 
           little bigger, to leave room for written side-notes.
        &lt;/p&gt;
        
        &lt;div class=&quot;sample script&quot;&gt;
            &lt;p&gt;Monday, 8th.&lt;br/&gt;Fresh Breezes and Cloudy weather the most part of these 24 hours. At 10 a.m. weighed and came to sail; at Noon the South Foreland bore North-East 1/2 North, distant 6 or 7 Miles. Wind West by North, North-West.&lt;/p&gt;
            
            &lt;p&gt;Tuesday, 9th.&lt;br/&gt;Gentle breezes and Cloudy weather. At 7 p.m. the Tide being against us, Anchored in 13 fathoms of Water; Dungeness South-West by West. At 11 a.m. Weighed and made Sail down Channel; at Noon, Beachy Head, North by East 1/2 East, distant 6 Leagues, Latitude observed 50 degrees 30 minutes North. Wind North-West to North.&lt;/p&gt;
            
            &lt;p&gt;Wednesday, 10th.&lt;br/&gt;Variable: light Airs and Clear weather. At 8 p.m. Beachy Head North-East by East, distant 4 Leagues, and at 8 a.m. it bore North-East by North, 9 Leagues. Found the Variation of the Compass to be 23 degrees West; at Noon the Isle of Wight North-West by North. Wind West by North, North-East by East.&lt;/p&gt;
            
            &lt;p&gt;Thursday, 11th.&lt;br/&gt;Light Airs and Clear weather. At 8 p.m. Dunnose North by West 5 Leagues, and at 4 a.m. it bore North-North-East 1/2 East, distant 5 Leagues. Wind Variable.&lt;/p&gt;
            
        &lt;/div&gt;
        
        &lt;p class=&quot;source&quot;&gt;Excerpt from &quot;Captain Cook's Journal, First Voyage&quot;, Chapter 1 &quot;England to Rio Janeiro&quot; by James Cook via Project Gutenberg:
            &lt;span class=&quot;nobreak&quot;&gt;http://www.gutenberg.org/files/8106/8106-h/8106-h.htm&lt;/span&gt;&lt;/p&gt;
        
        &lt;div class=&quot;code&quot;&gt;&lt;code&gt;div.script {
    width: 5.5in;
    height: 6in; /* if not set columns will use space until end of the page */
    column-width: 2.5in; /* define column width, makes two for this box */
    column-gap: 0.5in;
    column-fill: auto; /* disables balanced column layout */
}&lt;/code&gt;&lt;/div&gt;
        
        
        &lt;h2&gt;Restaurant Menu with Spanning Content&lt;/h2&gt;
        
        &lt;p&gt;The following example shows an advanced layout with rules between
           columns and a headline and an image spanning the columns.
        &lt;/p&gt;
        
        &lt;div class=&quot;sample menu&quot;&gt;
            &lt;h1&gt;Sushi&lt;/h1&gt;
            
            &lt;p&gt;&lt;b&gt;Sushi&lt;/b&gt; (&lt;span lang=&quot;ja&quot;&gt;すし, 寿司, 鮨, 鮓, 寿斗, 寿し, 壽司&lt;/span&gt;)
               is a Japanese food consisting of cooked vinegared rice 
               (&lt;i&gt;shari&lt;/i&gt;) combined with other ingredients (&lt;i&gt;neta&lt;/i&gt;). 
               Neta and forms of sushi presentation vary, but the ingredient 
               which all sushi have in common is &lt;i&gt;shari&lt;/i&gt;. The most common 
               &lt;i&gt;neta&lt;/i&gt; is seafood.
            &lt;/p&gt;
            
            &lt;div&gt;
                &lt;img src=&quot;sushi.jpg&quot; alt=&quot;Sushi&quot; /&gt;
            &lt;/div&gt;
            
            &lt;h2&gt;Maki Sushi&lt;/h2&gt;
            
            &lt;ol&gt;
                &lt;li&gt;&lt;b&gt;Avocado Maki&lt;/b&gt;&lt;br/&gt;&lt;i&gt;avocado, rice and nori (dried seaweed)&lt;/i&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;b&gt;Kappa Maki&lt;/b&gt;&lt;br/&gt;&lt;i&gt;cucumber, rice and nori (dried seaweed)&lt;/i&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;b&gt;Sake Maki&lt;/b&gt;&lt;br/&gt;&lt;i&gt;salmon, rice and nori (dried seaweed)&lt;/i&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;b&gt;Tekka Maki&lt;/b&gt;&lt;br/&gt;&lt;i&gt;tuna, rice and nori (dried seaweed)&lt;/i&gt;
                &lt;/li&gt;
                
            &lt;/ol&gt;
            
            &lt;h2&gt;Nigiri Sushi&lt;/h2&gt;
            
            &lt;ol&gt;
                &lt;li&gt;&lt;b&gt;Sake Nigiri&lt;/b&gt;&lt;br/&gt;&lt;i&gt;salmon, rice&lt;/i&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;b&gt;Ebi Nigiri&lt;/b&gt;&lt;br/&gt;&lt;i&gt;shrimp, rice&lt;/i&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;b&gt;Maguro Nigiri&lt;/b&gt;&lt;br/&gt;&lt;i&gt;tuna, rice&lt;/i&gt;
                &lt;/li&gt;
            &lt;/ol&gt;
            
        &lt;/div&gt;
        
        &lt;p class=&quot;source&quot;&gt;Excerpt &quot;Sushi&quot; from Wikipedia:
            &lt;span class=&quot;nobreak&quot;&gt;http://en.wikipedia.org/wiki/Sushi&lt;/span&gt;&lt;/p&gt;
        
        &lt;div class=&quot;code&quot;&gt;&lt;code&gt;div.menu {
    column-count: 2;
    column-gap: 0.25in;
    column-rule: thin solid gray; /* adds a thin gray line between columns*/
    ...
}
div.menu h1 {
    column-span: all; /* heading spans all the columns */
    ...
}
div.menu img {
    display: block;
    width: 100%;
    margin-top: 0.25in;
    margin-bottom: 0.25in;
    column-span: all; /* picture spans all the columns */
    ...
}&lt;/code&gt;&lt;/div&gt;
        
        
        
        &lt;h2&gt;Article with Single-Content Columns&lt;/h2&gt;
        
        &lt;p&gt;This simple example shows how content like a heading or image can
           be made sole content of a column using manual column breaks.
        &lt;/p&gt;
        
        &lt;div class=&quot;sample article&quot;&gt;
            &lt;h1&gt;United States Capitol&lt;/h1&gt;
            &lt;p&gt;The United States Capitol is the meeting place of the United 
               States Congress, the legislature of the federal government of 
               the United States.
            &lt;/p&gt;
            &lt;p&gt;Located in Wash&amp;shy;ing&amp;shy;ton, D.C., it sits atop Capitol Hill 
               at the eastern end of the National Mall. Though it has never 
               been the geographic center of the federal district, the Capitol 
               is the origin by which both the quadrants of the District are 
               divided and the city was planned. Officially, both the east and 
               west sides of the Capitol are referred to as &quot;fronts.&quot;
           &lt;/p&gt;
           &lt;img src=&quot;capitol.jpg&quot; alt=&quot;United States Capitol&quot;/&gt;
           &lt;p&gt;Historically, however, only the east front of the building was 
               intended for the arrival of visitors and dignitaries.
           &lt;/p&gt;
           &lt;p&gt;Like the federal buildings for the executive and judicial 
              branches, it is built in the distinctive neoclassical style and 
              has a white exterior.
           &lt;/p&gt;
        &lt;/div&gt;
        
        &lt;p class=&quot;source&quot;&gt;Excerpt &quot;United States Capitol&quot; from Wikipedia:
            &lt;span class=&quot;nobreak&quot;&gt;http://en.wikipedia.org/wiki/United_States_Capitol&lt;/span&gt;&lt;/p&gt;
        
        &lt;div class=&quot;code&quot;&gt;&lt;code&gt;div.article {
    height: 2.5in;
    column-count: 5;
    ...
}
div.article h1 {
    break-after: column; /* explicit break ensures heading has own column */
    ...
}
div.article img {
    display: block;
    height: 100%; /* makes the picture as high as the column it's in */
    margin: auto;
    break-before: column; /* explicit breaks ensure picture has own column */
    break-after: column;
}&lt;/code&gt;&lt;/div&gt;
        
        &lt;div class=&quot;grid&quot; lang=&quot;la&quot;&gt;
            
        &lt;h2&gt;Ensuring Vertical Rhythm for Improved Readability&lt;/h2&gt;
        
        &lt;p&gt;This sample shows how the different values of the property &lt;code&gt;-ro-line-snap&lt;/code&gt;
        are used to align the text vertically to a virtual grid, giving the content a more pleasant look.&lt;/p&gt;
            &lt;div class=&quot;surround&quot;&gt;
                &lt;div class=&quot;container&quot;&gt;
                    &lt;h2&gt;-ro-line-snap: none&lt;/h2&gt;
                    &lt;div class=&quot;sample gridlayout none&quot;&gt;
                        &lt;h2&gt;Lorem&lt;/h2&gt; 
                        &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;container&quot;&gt;
                    &lt;h2&gt;-ro-line-snap: baseline&lt;/h2&gt;
                    &lt;div class=&quot;sample gridlayout baseline&quot;&gt;
                        &lt;h2&gt;Lorem&lt;/h2&gt; 
                        &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no  sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et  accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;container&quot;&gt;
                    &lt;h2&gt;-ro-line-snap: contain&lt;/h2&gt;
                    &lt;div class=&quot;sample gridlayout contain&quot;&gt;
                        &lt;h2&gt;Lorem&lt;/h2&gt; 
                        &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At  vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no  sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt; &lt;h2&gt;Lorem&lt;/h2&gt; &lt;p&gt;ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et  accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;code&quot; style=&quot;clear: left;&quot;&gt;&lt;code&gt;div.gridlayout {
    column-count: 3;
    -ro-line-grid: create; /* create the virtual grid to which lines can snap */
    line-height: 1.2; /* sets the distance between the virtual grid lines */
    ...
}
div.none {
    -ro-line-snap: none; /* text is not vertically aligned to grid */
}
div.baseline {
    -ro-line-snap: baseline; /* text baseline is vertically aligned to grid */
}
div.contain {
    -ro-line-snap: contain; /* larger text is aligned in the middle of grid lines */
}
        &lt;/code&gt;&lt;/div&gt;
        
        &lt;p&gt;As seen in the first box, without a line grid differently sized elements 
        like the headers shift the lines. There is a noticeable deviation in the vertical postion 
        of lines in two adjacent columns. Also single lines at the bottom of a column may
        stand out.&lt;/p&gt;
        
        &lt;p&gt;To prevent this unaethestic positioning, the lines of all columns need to be aligned
        to a common, invisible grid. With the CSS property &lt;code&gt;-ro-line-grid&lt;/code&gt;,
        such a virtual grid is created. By setting the property &lt;code&gt;-ro-line-snap&lt;/code&gt;,
        lines can be aligned to this grid.&lt;/p&gt;
        
        &lt;p&gt;In the second box, the baselines of the text are aligned to said invisible grid.
        Adjacent lines now have the same vertical position, which improves the readability
        and gives the text a tidier look. Note that the distance between the headings
        and paragraphs has become larger, as the first line has to be moved further down in
        order to match its baseline with the grid.&lt;/p&gt;
        
        &lt;p&gt;In the third box, the property is set to &lt;code&gt;contain&lt;/code&gt;. 
        This has no different effect on the normal text, however for text with a different
        line-height or font, this yields a different result. While headings are no longer
        baseline aligned, the result can, depending on the specific scenario, be space-saving.
        Whether it visually fits the surrounding design has to be tried.&lt;/p&gt;
        
        &lt;p&gt;In all cases the top and bottom margins of paragraphs and headings may require 
        adjustments to produce the desired result.&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;

        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_multicolumn_multicolumn.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_multicolumn_multicolumn.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_multicolumn_multicolumn.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_multicolumn_multicolumn.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_multicolumn_multicolumn.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_multicolumn_multicolumn.html.pdf) |


