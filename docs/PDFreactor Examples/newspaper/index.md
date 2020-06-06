---
layout: details
title: newspaper
permalink: /PDFreactor-Examples/newspaper/
description: 
---

## Index
<div class="boxes">
                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/newspaper/fnt/">
                                fnt
                            </a>
</div>

## 🔬 NEWSPAPER

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/newspaper/newspaper.html)

<details>
    <summary>
        View NEWSPAPER Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;html lang=&quot;la&quot;&gt;
    &lt;head&gt;
        &lt;meta content=&quot;text/html; charset=UTF-8&quot; http-equiv=&quot;Content-Type&quot;/&gt;
        &lt;title&gt;Daily Newspaper&lt;/title&gt;
        &lt;style&gt;/* fonts */

            @font-face {
                font-family: Title;
                src: url(&quot;fnt/kingthings/Kingthings_Calligraphica_2.ttf&quot;) format(&quot;truetype&quot;);
            }
            
            @font-face {
                font-family: Text;
                font-weight: 300;
                src: url(&quot;fnt/neuton/Neuton-Light.ttf&quot;) format(&quot;truetype&quot;);
            }
            @font-face {
                font-family: Text;
                font-weight: 400;
                src: url(&quot;fnt/neuton/Neuton-Regular.ttf&quot;) format(&quot;truetype&quot;);
            }
            
            @font-face {
                font-family: Text;
                font-style: italic;
                src: url(&quot;fnt/neuton/Neuton-Italic.ttf&quot;) format(&quot;truetype&quot;);
            }
            
            /* page */
            
            @page { 
                size: 325mm 480mm; 
                margin: 10mm 
            }
            
            @-ro-preferences {
                page-layout: 1 page;
                initial-zoom: fit-page;
            }
            
            @media screen {
                html {
                    outline: 1px solid gray;
                    margin: auto;
                    margin-top: 5mm;
                    margin-bottom: 5mm;
                    width: 305mm;
                    height: 460mm;
                    padding: 10mm;
                }
            }
            
            
            /* general style */
            
            body { 
                margin: 0; 
                padding: 0; 
                
                font-family: Text;
                font-size: 5mm;
                font-weight: 300;
                text-align: justify;
                color: black;
                line-height: 1;
                
                hyphens: auto;
                hyphenate-before: 3;
                hyphenate-after: 3;
            }
            
            article.bordered {
                margin-top: 5mm;
                border: 0.5mm solid gray;
                padding: 2.5mm;
            }
            
            article {
                -webkit-column-gap: 5mm;
                -moz-column-gap: 5mm;
                column-gap: 5mm;
                
                margin-top: 2.5mm;
                margin-bottom: 2.5mm;
            }
            
            article::first-child {
                margin-top: 0;
            }
            
            article &gt; hgroup {
                font-family: Text;
                font-weight: normal;
                
                -webkit-column-span: all;
                -moz-column-span: all;
                column-span: all;
            }
            
            h1, h2 {
                font-weight: normal;
            }
            
            article &gt; hgroup &gt; h1,
            article &gt; hgroup.topstory &gt; h1 {
                margin-top: 0;
                margin-bottom: 2mm;
                text-align: left;
            }
            
            article &gt; hgroup &gt; h1 {
                font-size: 14mm;
            }
            
            article &gt; hgroup.topstory &gt; h1 {
                font-size: 20mm;
            }
            
            article &gt; hgroup &gt; h2 {
                margin-top: 2mm;
                margin-bottom: 3mm;
                font-size: 6mm;
            }
            
            article &gt; p {
                margin-top: 0;
                margin-bottom: 0;
                text-indent: 2.5mm;
            }
            
            figure {
                margin: 0mm;
                margin-top: 2.5mm;
                margin-bottom: 2.5mm;
                
                -webkit-column-span: all;
                -moz-column-span: all;
                column-span: all;
            }
            
            figure &gt; img {
                display: block;
                width: 100%;
            }
            
            figure &gt; figcaption,
            article &gt; p.intro,
            article &gt; p.further {
                font-weight: normal;
                margin-bottom: 2.5mm;
            }
            
            p.further {
                margin-top: 2.5mm;
                margin-bottom: 0;
                text-align: right;
            }
            
            p.further::before {
                content: &quot;\203A  &quot;;
                padding-left: 2.5mm;
            }
            
            p.further a {
                font-style: italic;
                font-weight: normal;
                font-size: 4.5mm;
                color: inherit;
                text-decoration: none;
            }
            
            *.singleColumn {
                -webkit-column-span: none;
                -moz-column-span: none;
                column-span: none;
            }
            
            figure.singleColumn {
                break-after: column;
                margin-top: 0;
            }
            
            hgroup.singleColumn &gt; h1 {
                font-size: 10mm;
            }
            
            /* header */
            
            header.title { 
                width: 305mm;
                height: 47mm;
                
                border-bottom: 2mm solid navy;
                
                margin-bottom: 5mm;
            }
            
            header.title &gt; hgroup &gt; h1 {
                margin: 0;
                margin-bottom: 5mm;
                padding: 0;
                
                font-family: Title;
                font-weight: normal;
                font-size: 30mm;
                
                text-align: center;
            }
            
            header.title &gt; hgroup &gt; h2 {
                margin: 0;
                padding: 0;
                
                font-family: Text;
                font-weight: normal;
                font-size: 5mm;
                
                text-transform: uppercase;
                text-align: center;
            }
            
            header.title &gt; h2,
            header.title &gt; *.date,
            header.title &gt; *.volume {
                margin: 0;
                padding: 0;
                
                font-family: Text;
                font-weight: normal;
                font-size: 5mm;
                
                text-transform: uppercase;
                text-align: center;
            }
            
            header.title &gt; *.date,
            header.title &gt; *.volume {
                font-size: 4mm;
                font-style: italic;
                text-transform: inherit;
            }
            
            header.title &gt; *.date {
                float: left;
            }
            
            header.title &gt; *.volume {
                float: right;
            }
            
            /* footer */
            
            footer { 
                width: 305mm;
                height: 8mm;
                
                margin: 0;
                
                clear: both;
                
                font-size: 5.8mm;
                font-weight: normal;
                
                text-transform: uppercase;
                text-align: center;
                
                background-color: lightgrey;
            }
            
            footer span::after {
                content: &quot; +++ &quot;;
            }
            
            footer span:first-child::before,
            footer span:last-child::after {
                content: &quot; ++ &quot;;
            }
            
            /* content layout */
            
            section.overview { 
                width: 80mm;
                height: 390mm;
                
                margin-bottom: 5mm;
                margin-right: 5mm;
                
                float: left;
            }
            
            section.middle {
                width: 125mm;
                height: 330mm;
                
                margin: 0;
                margin-right: 5mm;
                margin-bottom: 2.5mm;
                
                padding: 2.5mm;
                padding-top: 0mm;
                
                outline: 0.5mm solid gray;
                
                float: left;
            }
            
            section.middle &gt; article {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
            }
            
            section.right {
                width: 85mm;
                height: 332.5mm;
                
                margin: 0;
                margin-bottom: 2.5mm;
                
                padding: 0;
                
                float: left;
            }
            
            section.right &gt; article {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;
            }
            
            section.middleRight {
                width: 220mm;
                height: 55mm;
                
                margin: 0;
                margin-bottom: 5mm;
                
                float: left;
            }
            
            section.middleRight &gt; article {
                -webkit-column-count: 5;
                -moz-column-count: 5;
                column-count: 5;
            }
            
            /* overview */
            
            section.overview &gt; div {
                border: 1mm solid var(--box-color);
                margin-bottom: 2.5mm;
                padding: 0;
            }
            
            section.overview header {
                margin-bottom: 0;
                padding: 1mm;
                padding-bottom: 3mm;
                background-color: var(--box-color);
                color: white;
            }
            
            section.overview &gt; div &gt; :not(:first-child) {
                margin-left: 2.5mm;
                margin-right: 2.5mm;
            }
            
            section.overview &gt; div &gt; :last-child {
                margin-bottom: 2.5mm;
            }
            
            section.overview h1 {
                margin-top: 0;
                margin-bottom: 0.5mm;
                font-size: 8mm;
            }
            
            section.overview &gt; div &gt; p {
                margin-top: 0;
                margin-bottom: 1mm;
            }
            
            
            ol.line {
                display: block;
                clear: both;
            }
            
            ol.line &gt; li {
                display: inline-block;
                width: 5mm;
                height: 5mm;
            }
            
            .cyan {
                background-color: cmyk(100%, 0%, 0%, 0%);
            }
            
            .cyan-lighter {
                background-color: cmyk(50%, 0%, 0%, 0%);
            }
            
            .magenta {
                background-color: cmyk(0%, 100%, 0%, 0%);
            }
            
            .magenta-lighter {
                background-color: cmyk(0%, 50%, 0%, 0%);
            }
            
            .yellow {
                background-color: cmyk(0%, 0%, 100%, 0%);
            }
            
            .yellow-lighter {
                background-color: cmyk(0%, 0%, 50%, 0%);
            }
            
            .black {
                background-color: cmyk(0%, 0%, 0%, 100%);
            }
            
            .black-lighter {
                background-color: cmyk(0%, 0%, 0%, 50%);
            }
            
            section.overview &gt; div.world {
                --box-color: steelblue;
            }
            
            section.overview &gt; div.national {
                --box-color: firebrick;
            }
            
            section.overview &gt; div.business {
                --box-color: seagreen;
            }
            
            section.overview &gt; div.sports {
                --box-color: goldenrod;
            }
            
            section.overview &gt; div.poll {
                --box-color: darkslateblue;
            }
            
            section.overview &gt; div.poll &gt; figure &gt; canvas {
                width: 100%;
                height: 33mm;
                
                background-color: lavender;
                background-image: -webkit-linear-gradient(-75deg, lavender, lightsteelblue);
                background-image: -moz-linear-gradient(-75deg, lavender, lightsteelblue);
                background-image: linear-gradient(165deg, lavender, lightsteelblue);
            }
            
            section.overview &gt; div.print {
                --box-color: slategray;
            }
            
            section.overview &gt; div.print &gt; div.grid {
                width: 38mm;
                height: 15mm;
                float: left;
            }
            
            section.overview &gt; div.print &gt; div.grid &gt; div {
                padding-top: 2mm;
            }
            
            section.overview &gt; div.print &gt; div.grid &gt; div:nth-child(odd) {
                float: left;
                font-weight: normal;
            }
            section.overview &gt; div.print &gt; div.grid &gt; div:nth-child(even) {
                float: right;
            }
            
            section.overview &gt; div.print &gt; div {
                width: 30mm;
                height: 15mm;
                margin-bottom: 1em;
                float: right;
            }
            
            section.overview &gt; div.print &gt; div &gt; barcode {
                margin-top: 2mm;
                width: 100%;
            }
            &lt;/style&gt;
        &lt;script type=&quot;text/javascript&quot; language=&quot;JavaScript&quot; src=&quot;script.js&quot;&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body onload=&quot;drawGraph()&quot;&gt;
        
        &lt;!-- Title Page Header --&gt;
        
        &lt;header class=&quot;title&quot;&gt;
            &lt;hgroup&gt;
                &lt;h1&gt;The Real News&lt;/h1&gt;
                &lt;h2&gt;Demonstrating PDFreactor Capabilities&lt;/h2&gt;
            &lt;/hgroup&gt;
            &lt;div class=&quot;date&quot;&gt;Monday, May 14th 2012&lt;/div&gt;
            &lt;div class=&quot;volume&quot;&gt;Vol. 1&lt;/div&gt;
        &lt;/header&gt;
        
        &lt;!-- Overview Section (left) --&gt;
        
        &lt;section class=&quot;overview&quot;&gt;
            &lt;div class=&quot;world&quot;&gt;
                &lt;header&gt;World&lt;/header&gt;
                
                &lt;h1&gt;Nonumy eirmod&lt;/h1&gt;
                &lt;p&gt;Sed diam nonumy eirmod tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 2&lt;/a&gt;&lt;/p&gt;
                
                &lt;h1&gt;Accusam et justo&lt;/h1&gt;
                &lt;p&gt;Diam voluptua at vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 2&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;national&quot;&gt;
                &lt;header&gt;National&lt;/header&gt;
                
                &lt;h1&gt;Takimata sanctus&lt;/h1&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 3&lt;/a&gt;&lt;/p&gt;
                
                &lt;h1&gt;Duo dolores&lt;/h1&gt;
                &lt;p&gt;Duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 4&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;business&quot;&gt;
                &lt;header&gt;Business&lt;/header&gt;
                
                &lt;h1&gt;Accusam et justo&lt;/h1&gt;
                &lt;p&gt;Diam voluptua at vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 5&lt;/a&gt;&lt;/p&gt;
                
                &lt;h1&gt;Nonumy eirmod&lt;/h1&gt;
                &lt;p&gt;Sed diam nonumy eirmod tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 6&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;sports&quot;&gt;
                &lt;header&gt;Sports&lt;/header&gt;
                
                &lt;h1&gt;Duo dolores&lt;/h1&gt;
                &lt;p&gt;Duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 7&lt;/a&gt;&lt;/p&gt;
                
                &lt;h1&gt;Takimata sanctus&lt;/h1&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 7&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;poll&quot;&gt;
                &lt;header&gt;Poll&lt;/header&gt;
                
                &lt;figure&gt;
                    &lt;canvas id=&quot;graph&quot;&gt;&lt;/canvas&gt;
                    &lt;figcaption&gt;Sed diam nonumy eirmod tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/figcaption&gt;
                &lt;/figure&gt;
            &lt;/div&gt;
            &lt;div class=&quot;print&quot;&gt;
                &lt;header&gt;Other&lt;/header&gt;
                
                &lt;div&gt;
                    &lt;barcode:barcode xmlns:barcode=&quot;http://barcode4j.krysalis.org/ns&quot; message=&quot;Lorem Ipsum&quot;&gt;
                        &lt;barcode:code128 /&gt;
                    &lt;/barcode:barcode&gt;
                &lt;/div&gt;
                
                &lt;div class=&quot;grid&quot;&gt;
                    &lt;div&gt;Subscribe:&lt;/div&gt;
                    &lt;div&gt;555-0142&lt;/div&gt;
                    &lt;div&gt;Advertize:&lt;/div&gt;
                    &lt;div&gt;555-0143&lt;/div&gt;
                &lt;/div&gt;
                
                &lt;ol class=&quot;line&quot;&gt;
                    &lt;li class=&quot;cyan-lighter&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;magenta-lighter&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;yellow-lighter&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;black-lighter&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;cyan&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;magenta&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;yellow&quot;&gt;&amp;nbsp;&lt;/li&gt;
                    &lt;li class=&quot;black&quot;&gt;&amp;nbsp;&lt;/li&gt;
                &lt;/ol&gt;
            &lt;/div&gt;
        &lt;/section&gt;
        
        &lt;!-- Main Articles Section (middle) --&gt;
        
        &lt;section class=&quot;middle&quot;&gt;
            &lt;article&gt;
                &lt;hgroup class=&quot;topstory&quot;&gt;
                    &lt;h1&gt;Lorem ipsum dolor sit amet&lt;/h1&gt;
                    &lt;h2&gt;Consetetur sadipscing elitr, sed diam nonumy eirmod tempor Invidunt&lt;/h2&gt;
                &lt;/hgroup&gt;
                
                &lt;figure&gt;
                    &lt;img src=&quot;whitehouse.jpg&quot; alt=&quot;Ut labore et dolore magna aliquyam erat, sed diam voluptua.&quot;/&gt;
                    &lt;figcaption&gt;Ut labore et dolore magna aliquyam erat, sed diam voluptua.&lt;/figcaption&gt;
                &lt;/figure&gt;
                
                &lt;p class=&quot;intro&quot;&gt;At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                
                &lt;p&gt;Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.&lt;/p&gt;
                &lt;p&gt;Sed diam nonumy eirmod tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                &lt;p&gt;Diam voluptua at vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                &lt;p&gt;Invidunt ut labore et dolore magna aliquyam erat. Sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;At vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.&lt;/p&gt;
                &lt;p&gt;Sed diam nonumy eirmod tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 3&lt;/a&gt;&lt;/p&gt;
            &lt;/article&gt;
            
            &lt;article&gt;
                &lt;hgroup&gt;
                    &lt;h1&gt;Consetetur sadipscing&lt;/h1&gt;
                    &lt;h2&gt;Elitr sed diam nonumy eirmod tempor&lt;/h2&gt;
                &lt;/hgroup&gt;
                
                &lt;p&gt;Invidunt ut labore et dolore magna aliquyam erat. Sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;At vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p&gt;Tempor Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;Diam voluptua at vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;
                
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 3&lt;/a&gt;&lt;/p&gt;
            &lt;/article&gt;
        &lt;/section&gt;
        
        &lt;!-- Other Articles Section (right) --&gt;
        
        &lt;section class=&quot;right&quot;&gt;
            &lt;article&gt;
                &lt;hgroup&gt;
                    &lt;h1&gt;Tempor invidu&lt;/h1&gt;
                    &lt;h2&gt;Ut labore et dolore magna aliquyam&lt;/h2&gt;
                &lt;/hgroup&gt;
                
                &lt;p&gt;Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p&gt;Tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.&lt;/p&gt;
                &lt;p&gt;Invidunt ut labore et dolore magna aliquyam erat. Sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.&lt;/p&gt;
                &lt;p&gt;Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p&gt;Tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
            &lt;/article&gt;
            
            &lt;article&gt;
                &lt;hgroup&gt;
                    &lt;h1&gt;Magna Aliquam&lt;/h1&gt;
                    &lt;h2&gt;Accusam et justo duo dolores rebum&lt;/h2&gt;
                &lt;/hgroup&gt;
                
                &lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/p&gt;
                &lt;p&gt;Tempor Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                   no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.&lt;/p&gt;
                &lt;p&gt;Consetetur sadipscing elitr, sed diam nonumy eirmod tempor Invidunt ut labore et.&lt;/p&gt;
                &lt;p&gt;Invidunt ut labore et dolore magna aliquyam erat. Sed diam voluptua.&lt;/p&gt;
                
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 4&lt;/a&gt;&lt;/p&gt;
            &lt;/article&gt;
            &lt;article class=&quot;bordered&quot;&gt;
                &lt;figure class=&quot;singleColumn&quot;&gt;
                    &lt;img src=&quot;capitol.jpg&quot; alt=&quot;Lorem ipsum dolor sit amet.&quot;/&gt;
                    &lt;figcaption&gt;Lorem ipsum dolor sit amet.&lt;/figcaption&gt;
                &lt;/figure&gt;
                
                &lt;hgroup class=&quot;singleColumn&quot;&gt;
                    &lt;h1&gt;Sed diam voluptua&lt;/h1&gt;
                &lt;/hgroup&gt;
                
                &lt;p&gt;Tempor Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&lt;/p&gt;
                &lt;p&gt;At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                   no sea takimata sanctus est.&lt;/p&gt;
                   
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 5&lt;/a&gt;&lt;/p&gt;
            &lt;/article&gt;
        &lt;/section&gt;
        
        &lt;!-- Other Articles Section (bottom)  --&gt;
        
        &lt;section class=&quot;middleRight&quot;&gt;
            &lt;article&gt;
                &lt;hgroup&gt;
                    &lt;h1&gt;Labore et dolore magna aliquyam erat eos&lt;/h1&gt;
                    &lt;h2&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.&lt;/h2&gt;
                &lt;/hgroup&gt;
                
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, sed diam nonumy eirmod.
                   Tempor Invidunt ut labore et dolore magna aliquyam erat.&lt;/p&gt;
                &lt;p&gt;Invidunt ut labore et dolore magna aliquyam erat. Sed diam voluptua.
                   Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                   Stet clita kasd gubergren, no sea takimata sanctus est.&lt;/p&gt;
                &lt;p&gt;Lorem ipsum dolor sit amet. consetetur sadipscing elitr, 
                   sed diam nonumy eirmod. Tempor Invidunt ut labore et dolore magna 
                   aliquyam erat. Sed diam voluptua.&lt;/p&gt;
                
                &lt;p class=&quot;further&quot;&gt;&lt;a href=&quot;&quot;&gt;more on page 6&lt;/a&gt;&lt;/p&gt;
            &lt;/article&gt;
        &lt;/section&gt;
        
        &lt;!-- Breaking News Footer (bottom)  --&gt;
        
        &lt;footer&gt;
            &lt;span&gt;Breaking&lt;/span&gt;
            &lt;span&gt;Lorem ipsum&lt;/span&gt;
            &lt;span&gt;Dolor sit Amet&lt;/span&gt;
            &lt;span&gt;Consectetur Sadipscing&lt;/span&gt;
            &lt;span&gt;elitr, set diam&lt;/span&gt;
            &lt;span&gt;eirmod tempor&lt;/span&gt;
        &lt;/footer&gt;
    &lt;/body&gt;
&lt;/html&gt;

        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_newspaper_newspaper.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_newspaper_newspaper.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_newspaper_newspaper.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_newspaper_newspaper.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_newspaper_newspaper.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_newspaper_newspaper.html.pdf) |


