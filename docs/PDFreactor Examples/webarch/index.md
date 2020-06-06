---
layout: details
title: webarch
permalink: /PDFreactor-Examples/webarch/
description: 
---



## 🔬 WEBARCH

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/webarch/webarch.html)

<details>
    <summary>
        View WEBARCH Code
    </summary>
    <pre>
        <code>
            ﻿&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
&lt;meta name=&quot;generator&quot; content=
&quot;HTML Tidy for Linux/x86 (vers 1st August 2004), see www.w3.org&quot; /&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=
&quot;text/html; charset=utf-8&quot; /&gt;
&lt;title&gt;Technical Documentation&lt;/title&gt;
&lt;style&gt;@media all { a:link img, a:visited img { border: none } }

    a img { color: white; background: white }
    
    dfn { font-style: italic; font-weight: bold }
    
    blockquote { font-style: italic }
    
    ul.toc {
      list-style: none
    }
    li.tocline1 {font-weight: bold}
    li.tocline2 {font-weight: normal}
    li.tocline3 {font-weight: normal}
    li.tocline4 {font-weight: normal}
    a.tocprinciple { background: #f7ebd7 }
    
    span.note { background: #aeefef; color: black }
    
    dl#all-properties { margin-left: 2em }
    dl#all-properties dt { margin-top: .25em}
    
    .glossary-entry { font-weight: bold }
    
    .ednote {
       background: #fee;
       padding: 1pt 2pt 0 1pt;
       border: 1pt solid #fcc;
       font-style: italic 
    }
    
    .icon { 
       float:left;  
       padding-right: .3em;
    }
    
    .figure {
        text-align: center;
    }
    
    .boxedtext {
       border: solid #bebebe 1pt;
       margin: 2em 1em 1em 2em;
     }
    
    .principle, .practice, .constraint, .property, div.story {
       margin: 1.5em 0.5em 1.5em 1em;
     }
    
    .principlelab, .constraintlab,
    .propertylab, .practicelab,
    .storylab {
       margin: 1.5em 0.5em 1em 1em;
       font-weight: bold;
       font-style: italic;
     }
    
    .principlelab  { background: #f7ebd7 }
    .constraintlab { background: #becece }
    .propertylab   { background: #f7ebd7 }
    .practicelab   { background: #dfffff }
    .storylab      { background: #005a9c; color: #fff; }
    
    .principle, .practice, .constraint, .property, div.story {
       position: relative;
       top: -2em;
       padding: 0;
       margin: 1.3em 0.5em -1em 1em;
    }
        
    .principlelab, .constraintlab,
    .propertylab, .practicelab,
    .storylab {
       position: relative;
       padding: 0 0.5em;
       top: -1.5em;
     }
    
    div.story {
       margin-bottom: -2em;
    }
/* Style for a &quot;Recommendation&quot; */

/*
   Copyright 1997-2003 W3C (MIT, ERCIM, Keio). All Rights Reserved.
   The following software licensing rules apply:
   http://www.w3.org/Consortium/Legal/copyright-software */

html {
    height: 100%;
    background-image: url(logo-REC.png);
    background-position: top left;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

body {
  height: 100%;
  padding: 2em 1em 2em 52pt;
  margin: 0;
  font-family: arial, sans-serif;
  line-height: 1.17;
  color: black;
}

:link { color: #00C; background: transparent }
:visited { color: #609; background: transparent }
a:active { color: #C00; background: transparent }

a:link img, a:visited img { border-style: none } /* no border on img links */

h1, h2, h3, h4, h5, h6 { text-align: left }
h1, h2, h3 { color: #005A9C;}
h1 { font: 170% arial, sans-serif }
h2 { font: 140% arial, sans-serif }
h3 { font: 120% arial, sans-serif }
h4 { font: bold 100% arial, sans-serif }
h5 { font: italic 100% arial, sans-serif }
h6 { font: small-caps 100% arial, sans-serif }

.hide { display: none }

div.head { margin-bottom: 1em }
div.head h1 { margin-top: 2em; clear: both }
div.head table { margin-left: 2em; margin-top: 2em }

p.copyright { font-size: small }
p.copyright small { font-size: small }

a[href]:hover { background: #ffa }

pre { margin-left: 2em }

dt, dd { margin-top: 0; margin-bottom: 0 }
dt { font-weight: bold }
dd + dt { margin-top: 5pt }

ul.toc {
  list-style: none;
}
/* Additional print style sheet made by RealObjects */

@media print {

@page {
  margin: 1.5cm;
  padding-top: 12pt;
  /* Initialize the page counter */
  counter-increment: page 1;
 
 /* The following lines are styles for page margin boxes
    which are described in the CSS 3 paged media module draft. 
    The @xyz selector indicates the location of the box 
 */
    @top-left { 
     font: 12pt arial, sans-serif;
     text-align:left;
     content: &quot;Architecture of the World Wide Web, Volume One&quot;;
     margin-top: 5mm;
     margin-bottom: 2mm;
     border-bottom: 0.2mm solid #006DAB;
    }

    @bottom-left { 
     font: 7pt arial, sans-serif;
     text-align: left;
     margin-bottom: 5mm;
     margin-top: 2mm;
     border-top: 0.2mm solid #006DAB;
     vertical-align: top;
     padding-top: 0.1cm;
     content: &quot;Copyright (C) 2002-2004 W3C (R) (MIT, ERCIM, Keio), All Rights Reserved.&quot;;
    }    
    
    @bottom-right { 
     font: 9pt arial, sans-serif;
     text-align: right;
     margin-bottom: 5mm;
     margin-top: 2mm;
     border-top: 0.2mm solid #006DAB;
     vertical-align: top;
     padding-top: 0.1cm;
     content: &quot;Page &quot; counter(page) &quot; / &quot; counter(pages);
    }    
}

/* repeating page background image */
html {
    background-attachment: scroll;
    box-decoration-break: clone;
    background-position: 0 -12pt;
}

/* Cross-references */
a.int::after {
    content: ' (see page ' target-counter(-ro-attr(href url),page) ')';
}
}

@-ro-preferences {
page-layout: 1 column;
initial-zoom: 125%;
}

/* 
The following lines avoids page breaks inside bordered boxes to improve 
the layout in page mode.
*/
div.boxedtext {
break-inside: avoid;
}

/*
The following lines tweak line breaks around certain elements.
*/
dt, .figure {
break-after: avoid;
}
dt, dd, .figure {
break-inside: avoid;
}
.figure {
break-before: avoid;
}
h2:not(.notoc) {
break-before: page;
margin-top: 0;
}

div + hr {
display: none;
}

    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class=&quot;head&quot;&gt;
&lt;p&gt;&lt;a href=&quot;http://www.w3.org/&quot; shape=&quot;rect&quot;&gt;&lt;img height=&quot;48&quot;
width=&quot;72&quot; alt=&quot;W3C&quot; src=
&quot;w3c_home&quot; /&gt;&lt;/a&gt;&lt;/p&gt;
&lt;h1&gt;&lt;a name=&quot;title&quot; id=&quot;title&quot; shape=&quot;rect&quot;&gt;Architecture of the
World Wide Web, Volume One&lt;/a&gt;&lt;/h1&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h2 class=&quot;notoc&quot;&gt;&lt;a id=&quot;date&quot; name=&quot;date&quot; shape=
&quot;rect&quot;&gt;&lt;span class=&quot;trcopy&quot;&gt;W3C Recommendation&lt;/span&gt; 15 December
2004&lt;/a&gt;&lt;/h2&gt;
&lt;dl&gt;
&lt;dt&gt;This version:&lt;/dt&gt;
&lt;dd&gt;&lt;a class=&quot;trcopy&quot; href=
&quot;http://www.w3.org/TR/2004/REC-webarch-20041215/&quot; shape=
&quot;rect&quot;&gt;http://www.w3.org/TR/2004/REC-webarch-20041215/&lt;/a&gt;&lt;/dd&gt;
&lt;dt class=&quot;trcopy&quot;&gt;Latest version:&lt;/dt&gt;
&lt;dd class=&quot;trcopy&quot;&gt;&lt;a href=&quot;http://www.w3.org/TR/webarch/&quot; 
shape=&quot;rect&quot;&gt;http://www.w3.org/TR/webarch/&lt;/a&gt;&lt;/dd&gt;
&lt;dt&gt;Previous version:&lt;/dt&gt;
&lt;dd&gt;&lt;a class=&quot;trcopy&quot; 
href=&quot;http://www.w3.org/TR/2004/PR-webarch-20041105/&quot; 
shape=&quot;rect&quot;&gt;http://www.w3.org/TR/2004/PR-webarch-20041105/&lt;/a&gt;&lt;/dd&gt;

&lt;/dl&gt;
&lt;dl&gt;
&lt;dt&gt;Editors:&lt;/dt&gt;
&lt;dd&gt;&lt;a href=&quot;http://www.w3.org/People/Jacobs&quot; shape=&quot;rect&quot;&gt;Ian Jacobs&lt;/a&gt;, W3C&lt;/dd&gt;
&lt;dd&gt;Norman Walsh, Sun Microsystems, Inc.&lt;/dd&gt;
&lt;dt&gt;Authors:&lt;/dt&gt;
&lt;dd&gt;See &lt;a class=&quot;int&quot; href=&quot;#acks&quot; shape=&quot;rect&quot;&gt;acknowledgments (&sect;8)&lt;/a&gt;.&lt;/dd&gt;
&lt;/dl&gt;
&lt;p&gt;Please refer to the &lt;a href=
&quot;http://www.w3.org/2001/tag/webarch/errata.html&quot; shape=
&quot;rect&quot;&gt;&lt;strong&gt;errata&lt;/strong&gt;&lt;/a&gt; for this document, which may
include some normative corrections.&lt;/p&gt;

&lt;p&gt;See also &lt;a href=
&quot;http://www.w3.org/2003/03/Translations/byTechnology?technology=webarch&quot;
shape=&quot;rect&quot;&gt;&lt;strong&gt;translations&lt;/strong&gt;&lt;/a&gt;.&lt;/p&gt;
&lt;p class=&quot;copyright&quot;&gt;&lt;a href=
&quot;http://www.w3.org/Consortium/Legal/ipr-notice#Copyright&quot; shape=
&quot;rect&quot;&gt;Copyright&lt;/a&gt; &copy; 2002-2004 &lt;a href=&quot;http://www.w3.org/&quot; shape=
&quot;rect&quot;&gt;&lt;acronym title=&quot;World Wide Web Consortium&quot;&gt;W3C&lt;/acronym&gt;&lt;/a&gt;
&lt;sup&gt;&reg;&lt;/sup&gt; (&lt;a href=&quot;http://www.lcs.mit.edu/&quot; shape=
&quot;rect&quot;&gt;&lt;acronym title=
&quot;Massachusetts Institute of Technology&quot;&gt;MIT&lt;/acronym&gt;&lt;/a&gt;, &lt;a href=
&quot;http://www.ercim.org/&quot; shape=&quot;rect&quot;&gt;&lt;acronym title=
&quot;European Research Consortium for Informatics and Mathematics&quot;&gt;ERCIM&lt;/acronym&gt;&lt;/a&gt;,
&lt;a href=&quot;http://www.keio.ac.jp/&quot; shape=&quot;rect&quot;&gt;Keio&lt;/a&gt;), All Rights
Reserved. W3C &lt;a href=
&quot;http://www.w3.org/Consortium/Legal/ipr-notice#Legal_Disclaimer&quot; shape=
&quot;rect&quot;&gt;liability&lt;/a&gt;, &lt;a href=
&quot;http://www.w3.org/Consortium/Legal/ipr-notice#W3C_Trademarks&quot; shape=
&quot;rect&quot;&gt;trademark&lt;/a&gt;, &lt;a rel=&quot;Copyright&quot; href=
&quot;http://www.w3.org/Consortium/Legal/copyright-documents&quot; shape=&quot;rect&quot;&gt;document
use&lt;/a&gt; and &lt;a rel=&quot;Copyright&quot; href=
&quot;http://www.w3.org/Consortium/Legal/copyright-software&quot; shape=&quot;rect&quot;&gt;software
licensing&lt;/a&gt; rules apply. Your interactions with this site are in
accordance with our &lt;a href=
&quot;http://www.w3.org/Consortium/Legal/privacy-statement#Public&quot; shape=
&quot;rect&quot;&gt;public&lt;/a&gt; and &lt;a href=
&quot;http://www.w3.org/Consortium/Legal/privacy-statement#Members&quot; shape=
&quot;rect&quot;&gt;Member&lt;/a&gt; privacy statements.&lt;/p&gt;

&lt;hr /&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2 class=&quot;notoc&quot;&gt;&lt;a name=&quot;abstract&quot; id=&quot;abstract&quot; shape=
&quot;rect&quot;&gt;Abstract&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p5&quot; id=&quot;p5&quot;&gt;&lt;/a&gt;The World Wide Web uses relatively
simple technologies with sufficient scalability, efficiency and
utility that they have resulted in a remarkable information space
of interrelated resources, growing across languages, cultures, and
media. In an effort to preserve these properties of the information
space as the technologies evolve, this architecture document
discusses the core design components of the Web. They are
identification of resources, representation of resource state, and
the protocols that support the interaction between agents and
resources in the space. We relate core design components,
constraints, and good practices to the principles and properties
they support.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2 class=&quot;notoc&quot;&gt;&lt;a name=&quot;status&quot; id=&quot;status&quot; shape=&quot;rect&quot;&gt;Status
of this document&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p6&quot; id=&quot;p6&quot;&gt;&lt;/a&gt;&lt;em&gt;This section describes the status
of this document at the time of its publication. Other documents
may supersede this document. A list of current W3C publications and
the latest revision of this technical report can be found in the
&lt;a href=&quot;http://www.w3.org/TR/&quot; shape=&quot;rect&quot;&gt;W3C technical reports
index&lt;/a&gt; at http://www.w3.org/TR/.&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p7&quot; id=&quot;p7&quot;&gt;&lt;/a&gt;This is the 15 December 2004
Recommendation of &ldquo;Architecture of the World Wide Web, Volume One.&rdquo;
This document has been reviewed by W3C Members, by software
developers, and by other W3C groups and interested parties, and is
endorsed by the Director as a W3C Recommendation. It is a stable
document and may be used as reference material or cited from
another document. W3C's role in making the Recommendation is to
draw attention to the specification and to promote its widespread
deployment. This enhances the functionality and interoperability of
the Web.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p8&quot; id=&quot;p8&quot;&gt;&lt;/a&gt;This document was developed by W3C's
&lt;a href=&quot;http://www.w3.org/2001/tag/&quot; shape=&quot;rect&quot;&gt;Technical
Architecture Group (TAG)&lt;/a&gt;, which, by &lt;a href=
&quot;http://www.w3.org/2001/07/19-tag&quot; shape=&quot;rect&quot;&gt;charter&lt;/a&gt;
maintains a &lt;a href=&quot;http://www.w3.org/2001/tag/issues.html&quot; shape=
&quot;rect&quot;&gt;list of architectural issues&lt;/a&gt;. The scope of this document
is a useful subset of those issues; it is not intended to address
all of them. The TAG intends to address the remaining (and future)
issues now that Volume One is published as a W3C Recommendation. A
complete &lt;a href=&quot;http://www.w3.org/2001/tag/webarch/changes.html&quot;
shape=&quot;rect&quot;&gt;history of changes&lt;/a&gt; so this document is available.
Please send comments on this document to
public-webarch-comments@w3.org (&lt;a href=
&quot;http://lists.w3.org/Archives/Public/public-webarch-comments/&quot;
shape=&quot;rect&quot;&gt;public archive of public-webarch-comments&lt;/a&gt;). TAG
technical discussion takes place on www-tag@w3.org (&lt;a href=
&quot;http://lists.w3.org/Archives/Public/public-webarch-comments/&quot;
shape=&quot;rect&quot;&gt;public archive of www-tag&lt;/a&gt;).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p9&quot; id=&quot;p9&quot;&gt;&lt;/a&gt;This document was produced under the

&lt;a href=
&quot;http://www.w3.org/Consortium/Process-20010719/policies#ipr&quot; shape=
&quot;rect&quot;&gt;W3C IPR policy of the July 2001 Process Document&lt;/a&gt;. The
TAG maintains a &lt;a rel=&quot;disclosure&quot; href=
&quot;http://www.w3.org/2001/tag/disclosures&quot; shape=&quot;rect&quot;&gt;public list
of patent disclosures&lt;/a&gt; relevant to this document; that page also
includes instructions for disclosing a patent. An individual who
has actual knowledge of a patent which the individual believes
contains Essential Claim(s) with respect to this specification
should disclose the information in accordance with &lt;a href=
&quot;http://www.w3.org/Consortium/Patent-Policy-20040205/#sec-Disclosure&quot;
shape=&quot;rect&quot;&gt;section 6 of the W3C Patent Policy&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2 class=&quot;notoc&quot;&gt;&lt;a id=&quot;contents&quot; name=&quot;contents&quot; shape=
&quot;rect&quot;&gt;Table of Contents&lt;/a&gt;&lt;/h2&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#intro&quot;&gt;1. Introduction&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#about&quot;&gt;1.1. About this Document&lt;/a&gt;

&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#doc-audience&quot;&gt;1.1.1. Audience of
this Document&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#doc-scope&quot;&gt;1.1.2. Scope of this
Document&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#app-principles&quot;&gt;1.1.3. Principles,
Constraints, and Good Practice Notes&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#identification&quot;&gt;2.
Identification&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-benefits&quot;&gt;2.1. Benefits of
URIs&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#id-resources&quot;&gt;2.2. URI/Resource
Relationships&lt;/a&gt;

&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#URI-collision&quot;&gt;2.2.1. URI
collision&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-assignment&quot;&gt;2.2.2. URI
allocation&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#indirect-identification&quot;&gt;2.2.3.
Indirect Identification&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#identifiers-comparison&quot;&gt;2.3. URI
Comparisons&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-aliases&quot;&gt;2.3.1. URI
aliases&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#representation-reuse&quot;&gt;2.3.2.
Representation reuse&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#URI-scheme&quot;&gt;2.4. URI Schemes&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#URI-registration&quot;&gt;2.4.1. URI Scheme
Registration&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-opacity&quot;&gt;2.5. URI
Opacity&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#fragid&quot;&gt;2.6. Fragment
Identifiers&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#identifiers-future&quot;&gt;2.7. Future
Directions for Identifiers&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#i18n-id&quot;&gt;2.7.1. Internationalized
identifiers&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#future-comparison&quot;&gt;2.7.2. Assertion
that two URIs identify the same resource&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#interaction&quot;&gt;3. Interaction&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#dereference-uri&quot;&gt;3.1. Using a URI to
Access a Resource&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#dereference-details&quot;&gt;3.1.1. Details
of retrieving a representation&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#internet-media-type&quot;&gt;3.2.
Representation Types and Internet Media Types&lt;/a&gt;

&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#media-type-fragid&quot;&gt;3.2.1.
Representation types and fragment identifier semantics&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a href=&quot;#frag-coneg&quot;&gt;3.2.2. Fragment
identifiers and content negotiation&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#metadata-inconsistencies&quot;&gt;3.3.
Inconsistencies between Representation Data and Metadata&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#safe-interaction&quot;&gt;3.4. Safe
Interactions&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#unsafe-accountability&quot;&gt;3.4.1. Unsafe
interactions and accountability&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#representation-management&quot;&gt;3.5.
Representation Management&lt;/a&gt;

&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#URI-persistence&quot;&gt;3.5.1. URI
persistence&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#id-access&quot;&gt;3.5.2. Linking and access
control&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#supporting-navigation&quot;&gt;3.5.3.
Supporting Navigation&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#interaction-future&quot;&gt;3.6. Future
Directions for Interaction&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#formats&quot;&gt;4. Data Formats&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#binary&quot;&gt;4.1. Binary and Textual Data
Formats&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#ext-version&quot;&gt;4.2. Versioning and
Extensibility&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#versioning&quot;&gt;4.2.1.
Versioning&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#versioning-xmlns&quot;&gt;4.2.2. Versioning
and XML namespace policy&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#extensibility&quot;&gt;4.2.3.
Extensibility&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#composition&quot;&gt;4.2.4. Composition of
data formats&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#pci&quot;&gt;4.3. Separation of Content,
Presentation, and Interaction&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#hypertext&quot;&gt;4.4. Hypertext&lt;/a&gt;

&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-refs&quot;&gt;4.4.1. URI
references&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-formats&quot;&gt;4.5. XML-Based Data
Formats&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-when&quot;&gt;4.5.1. When to use an
XML-based format&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-links&quot;&gt;4.5.2. Links in
XML&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-namespaces&quot;&gt;4.5.3. XML
namespaces&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#namespace-document&quot;&gt;4.5.4. Namespace
documents&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-qnames&quot;&gt;4.5.5. QNames in
XML&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-id-semantics&quot;&gt;4.5.6. XML ID
semantics&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-media-types&quot;&gt;4.5.7. Media types
for XML&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline3&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-fragids&quot;&gt;4.5.8. Fragment
identifiers in XML&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#media-types-infospace&quot;&gt;4.6. Future
Directions for Data Formats&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#general&quot;&gt;5. General Architecture
Principles&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot;&gt;5.1. Orthogonal
Specifications&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#language-extensibility&quot;&gt;5.2.
Extensibility&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#error-handling&quot;&gt;5.3. Error
Handling&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#protocol-interop&quot;&gt;5.4.
Protocol-based Interoperability&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#index&quot;&gt;6. Glossary&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#refs&quot;&gt;7. References&lt;/a&gt;
&lt;ul class=&quot;toc&quot;&gt;
&lt;li class=&quot;tocline2&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#archspecs&quot;&gt;7.1. Architectural
Specifications&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;

&lt;li class=&quot;tocline1&quot;&gt;&lt;a class=&quot;int&quot; href=&quot;#acks&quot;&gt;8. Acknowledgments&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3 class=&quot;notoc&quot;&gt;&lt;a id=&quot;principles&quot; name=&quot;principles&quot; shape=
&quot;rect&quot;&gt;List of Principles, Constraints, and Good Practice
Notes&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p10&quot; id=&quot;p10&quot;&gt;&lt;/a&gt;The following principles,
constraints, and good practice notes are discussed in this document
and listed here for convenience. There is also a &lt;a href=
&quot;http://www.w3.org/TR/webarch/summary.html&quot; shape=&quot;rect&quot;&gt;free-standing summary&lt;/a&gt;.&lt;/p&gt;
&lt;dl&gt;
&lt;dt&gt;Identification&lt;/dt&gt;
&lt;dd&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-global-id&quot;&gt;Global Identifiers&lt;/a&gt; (principle,
2)&lt;/li&gt;

&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-use-uris&quot;&gt;Identify with URIs&lt;/a&gt; (practice,
2.1)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-uri-collision&quot;&gt;URIs Identify a Single Resource&lt;/a&gt;
(constraint, 2.2)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#avoid-uri-aliases&quot;&gt;Avoiding URI aliases&lt;/a&gt;
(practice, 2.3.1)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#lc-uri-chars&quot;&gt;Consistent URI usage&lt;/a&gt; (practice,
2.3.1)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-reuse-uri-schemes&quot;&gt;Reuse URI schemes&lt;/a&gt;

(practice, 2.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-uri-opacity&quot;&gt;URI opacity&lt;/a&gt; (practice, 2.5)&lt;/li&gt;
&lt;/ul&gt;
&lt;/dd&gt;
&lt;dt&gt;Interaction&lt;/dt&gt;
&lt;dd&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-reuse-formats&quot;&gt;Reuse representation formats&lt;/a&gt;
(practice, 3.2)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-server-auth&quot;&gt;Data-metadata inconsistency&lt;/a&gt;

(constraint, 3.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-metadata-association&quot;&gt;Metadata association&lt;/a&gt;
(practice, 3.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-deref-safe&quot;&gt;Safe retrieval&lt;/a&gt; (principle,
3.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-describe-resource&quot;&gt;Available representation&lt;/a&gt;
(practice, 3.5)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#implied-dereference&quot;&gt;Reference does not imply
dereference&lt;/a&gt; (principle, 3.5)&lt;/li&gt;

&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-service-uri&quot;&gt;Consistent representation&lt;/a&gt;
(practice, 3.5.1)&lt;/li&gt;
&lt;/ul&gt;
&lt;/dd&gt;
&lt;dt&gt;Data Formats&lt;/dt&gt;
&lt;dd&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-version-info&quot;&gt;Version information&lt;/a&gt; (practice,
4.2.1)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-doc-ns-policy&quot;&gt;Namespace policy&lt;/a&gt; (practice,
4.2.2)&lt;/li&gt;

&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-allow-exts&quot;&gt;Extensibility mechanisms&lt;/a&gt;
(practice, 4.2.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-conform-exts&quot;&gt;Extensibility conformance&lt;/a&gt;
(practice, 4.2.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-unknown-extension&quot;&gt;Unknown extensions&lt;/a&gt;
(practice, 4.2.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#cpi&quot;&gt;Separation of content, presentation,
interaction&lt;/a&gt; (practice, 4.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#link-mechanism&quot;&gt;Link identification&lt;/a&gt; (practice,
4.4)&lt;/li&gt;

&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#web-linking&quot;&gt;Web linking&lt;/a&gt; (practice, 4.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#generic-uri&quot;&gt;Generic URIs&lt;/a&gt; (practice, 4.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#use-hypertext-links&quot;&gt;Hypertext links&lt;/a&gt; (practice,
4.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#use-namespaces&quot;&gt;Namespace adoption&lt;/a&gt; (practice,
4.5.3)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-namespace-documents&quot;&gt;Namespace documents&lt;/a&gt;

(practice, 4.5.4)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#qname-uri-syntax&quot;&gt;QNames Indistinguishable from
URIs&lt;/a&gt; (constraint, 4.5.5)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#qname-mapping&quot;&gt;QName Mapping&lt;/a&gt; (practice,
4.5.5)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#no-text-xml&quot;&gt;XML and &quot;text/*&quot;&lt;/a&gt; (practice,
4.5.7)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#no-charset&quot;&gt;XML and character encodings&lt;/a&gt;
(practice, 4.5.7)&lt;/li&gt;

&lt;/ul&gt;
&lt;/dd&gt;
&lt;dt&gt;General Architecture Principles&lt;/dt&gt;
&lt;dd&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#pr-orthogonality&quot;&gt;Orthogonality&lt;/a&gt; (principle,
5.1)&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;int&quot; href=&quot;#no-silent-recovery&quot;&gt;Error recovery&lt;/a&gt; (principle,
5.3)&lt;/li&gt;
&lt;/ul&gt;
&lt;/dd&gt;
&lt;/dl&gt;

&lt;/div&gt;
&lt;hr /&gt;&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;1. &lt;a id=&quot;intro&quot; name=&quot;intro&quot; shape=
&quot;rect&quot;&gt;Introduction&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p11&quot; id=&quot;p11&quot;&gt;&lt;/a&gt;The &lt;a name=&quot;def-world-wide-web&quot; id=
&quot;def-world-wide-web&quot;&gt;&lt;dfn&gt;World Wide Web&lt;/dfn&gt;&lt;/a&gt; (&lt;a name=
&quot;def-www&quot; id=&quot;def-www&quot;&gt;&lt;dfn&gt;&lt;acronym&gt;WWW&lt;/acronym&gt;&lt;/dfn&gt;&lt;/a&gt;, or
simply &lt;a name=&quot;def-web&quot; id=
&quot;def-web&quot;&gt;&lt;dfn&gt;&lt;acronym&gt;Web&lt;/acronym&gt;&lt;/dfn&gt;&lt;/a&gt;) is an information
space in which the items of interest, referred to as resources, are
identified by global identifiers called Uniform Resource
Identifiers (&lt;a name=&quot;def-uri-acronym&quot; id=
&quot;def-uri-acronym&quot;&gt;&lt;dfn&gt;&lt;acronym&gt;URI&lt;/acronym&gt;&lt;/dfn&gt;&lt;/a&gt;).&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p12&quot; id=&quot;p12&quot;&gt;&lt;/a&gt;Examples such as the following
&lt;a name=&quot;scenario&quot; id=&quot;scenario&quot; shape=&quot;rect&quot;&gt;travel scenario&lt;/a&gt;
are used throughout this document to illustrate typical behavior of
&lt;a name=&quot;def-web-agent&quot; id=&quot;def-web-agent&quot;&gt;&lt;dfn&gt;Web
agents&lt;/dfn&gt;&lt;/a&gt;&mdash;people or software acting on this information
space. A &lt;a name=&quot;def-user-agent&quot; id=&quot;def-user-agent&quot;&gt;&lt;dfn&gt;user
agent&lt;/dfn&gt;&lt;/a&gt; acts on behalf of a user. Software agents include
servers, proxies, spiders, browsers, and multimedia players.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p13&quot; id=&quot;p13&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p14&quot; id=&quot;p14&quot;&gt;&lt;/a&gt;While planning a trip to Mexico,
Nadia reads &ldquo;Oaxaca weather information:
'http://weather.example.com/oaxaca'&rdquo; in a glossy travel magazine.
Nadia has enough experience with the Web to recognize that
&quot;http://weather.example.com/oaxaca&quot; is a URI and that she is likely
to be able to retrieve associated information with her Web browser.
When Nadia enters the URI into her browser:&lt;/p&gt;

&lt;ol&gt;
&lt;li&gt;The browser recognizes that what Nadia typed is a URI.&lt;/li&gt;
&lt;li&gt;The browser performs an information retrieval action in
accordance with its configured behavior for resources identified
via the &quot;http&quot; URI scheme.&lt;/li&gt;
&lt;li&gt;The authority responsible for &quot;weather.example.com&quot; provides
information in a response to the retrieval request.&lt;/li&gt;
&lt;li&gt;The browser interprets the response, identified as XHTML by the
server, and performs additional retrieval actions for inline
graphics and other content as necessary.&lt;/li&gt;
&lt;li&gt;The browser displays the retrieved information, which includes
hypertext links to other information. Nadia can follow these
hypertext links to retrieve additional information.&lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p15&quot; id=&quot;p15&quot;&gt;&lt;/a&gt;This scenario illustrates the three
architectural bases of the Web that are discussed in this
document:&lt;/p&gt;
&lt;ol&gt;

&lt;li&gt;
&lt;p&gt;&lt;a name=&quot;p16&quot; id=&quot;p16&quot;&gt;&lt;/a&gt;&lt;a class=&quot;int&quot; href=&quot;#identification&quot; shape=
&quot;rect&quot;&gt;Identification (&sect;2)&lt;/a&gt;. URIs are used to identify
resources. In this travel scenario, the resource is a periodically
updated report on the weather in Oaxaca, and the URI is
&ldquo;http://weather.example.com/oaxaca&rdquo;.&lt;/p&gt;
&lt;/li&gt;
&lt;li&gt;
&lt;p&gt;&lt;a name=&quot;p17&quot; id=&quot;p17&quot;&gt;&lt;/a&gt;&lt;a class=&quot;int&quot; href=&quot;#interaction&quot; shape=
&quot;rect&quot;&gt;Interaction (&sect;3)&lt;/a&gt;. Web agents communicate using
standardized protocols that enable interaction through the exchange
of messages which adhere to a defined syntax and semantics. By
entering a URI into a retrieval dialog or selecting a hypertext
link, Nadia tells her browser to perform a retrieval action for the
resource identified by the URI. In this example, the browser sends
an HTTP GET request (part of the HTTP protocol) to the server at
&quot;weather.example.com&quot;, via TCP/IP port 80, and the server sends
back a message containing what it determines to be a representation
of the resource as of the time that representation was generated.
Note that this example is specific to hypertext browsing of
information&mdash;other kinds of interaction are possible, both within
browsers and through the use of other types of Web agent; our
example is intended to illustrate one common interaction, not
define the range of possible interactions or limit the ways in
which agents might use the Web.&lt;/p&gt;
&lt;/li&gt;
&lt;li&gt;
&lt;p&gt;&lt;a name=&quot;p18&quot; id=&quot;p18&quot;&gt;&lt;/a&gt;&lt;a class=&quot;int&quot; href=&quot;#formats&quot; shape=
&quot;rect&quot;&gt;Formats (&sect;4)&lt;/a&gt;. Most protocols used for representation
retrieval and/or submission make use of a sequence of one or more
messages, which taken together contain a payload of representation
data and metadata, to transfer the representation between agents.
The choice of interaction protocol places limits on the formats of
representation data and metadata that can be transmitted. HTTP, for
example, typically transmits a single octet stream plus metadata,
and uses the &quot;Content-Type&quot; and &quot;Content-Encoding&quot; header fields to
further identify the format of the representation. In this
scenario, the representation transferred is in XHTML, as identified
by the &quot;Content-type&quot; HTTP header field containing the registered
Internet media type name, &quot;application/xhtml+xml&quot;. That Internet
media type name indicates that the representation data can be
processed according to the XHTML specification.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p19&quot; id=&quot;p19&quot;&gt;&lt;/a&gt;Nadia's browser is configured and
programmed to interpret the receipt of an &quot;application/xhtml+xml&quot;
typed representation as an instruction to render the content of
that representation according to the XHTML rendering model,
including any subsidiary interactions (such as requests for
external style sheets or in-line images) called for by the
representation. In the scenario, the XHTML representation data
received from the initial request instructs Nadia's browser to also
retrieve and render in-line the weather maps, each identified by a
URI and thus causing an additional retrieval action, resulting in
additional representations that are processed by the browser
according to their own data formats (e.g., &quot;application/svg+xml&quot;
indicates the SVG data format), and this process continues until
all of the data formats have been rendered. The result of all of
this processing, once the browser has reached an application
steady-state that completes Nadia's initial requested action, is
commonly referred to as a &quot;Web page&quot;.&lt;/p&gt;
&lt;/li&gt;

&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p20&quot; id=&quot;p20&quot;&gt;&lt;/a&gt;The following illustration shows the
relationship between identifier, resource, and representation.&lt;/p&gt;
&lt;div class=&quot;figure&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p21&quot; id=&quot;p21&quot;&gt;&lt;/a&gt;&lt;img src=&quot;uri-res-rep.png&quot; alt=
&quot;A resource (Oaxaca Weather Info) is identified by a particular URI and is represented by pseudo-HTML content&quot; /&gt;
&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p22&quot; id=&quot;p22&quot;&gt;&lt;/a&gt;In the remainder of this document, we
highlight important architectural points regarding Web identifiers,
protocols, and formats. We also discuss some important &lt;a href=
&quot;#general&quot; shape=&quot;rect&quot;&gt;general architectural principles (&sect;5)&lt;/a&gt;
and how they apply to the Web.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;1.1. &lt;a name=&quot;about&quot; id=&quot;about&quot; shape=&quot;rect&quot;&gt;About this
Document&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p23&quot; id=&quot;p23&quot;&gt;&lt;/a&gt;This document describes the
properties we desire of the Web and the design choices that have
been made to achieve them. It promotes the reuse of existing
standards when suitable, and gives guidance on how to innovate in a
manner consistent with Web architecture.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p24&quot; id=&quot;p24&quot;&gt;&lt;/a&gt;The terms MUST, MUST NOT, SHOULD,
SHOULD NOT, and MAY are used in the principles, constraints, and
good practice notes in accordance with RFC 2119 [&lt;a class=&quot;int&quot; href=&quot;#RFC2119&quot;
shape=&quot;rect&quot;&gt;RFC2119&lt;/a&gt;].&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p25&quot; id=&quot;p25&quot;&gt;&lt;/a&gt;This document does not include
conformance provisions for these reasons:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Conforming software is expected to be so diverse that it would
not be useful to be able to refer to the class of conforming
software agents.&lt;/li&gt;
&lt;li&gt;Some of the good practice notes concern people; specifications
generally define conformance for software, not people.&lt;/li&gt;
&lt;li&gt;We do not believe that the addition of a conformance section is
likely to increase the utility of the document.&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;1.1.1. &lt;a name=&quot;doc-audience&quot; id=&quot;doc-audience&quot; shape=
&quot;rect&quot;&gt;Audience of this Document&lt;/a&gt;&lt;/h4&gt;

&lt;p&gt;&lt;a name=&quot;p26&quot; id=&quot;p26&quot;&gt;&lt;/a&gt;This document is intended to inform
discussions about issues of Web architecture. The intended audience
for this document includes:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Participants in W3C Activities&lt;/li&gt;
&lt;li&gt;Other groups and individuals designing technologies to be
integrated into the Web&lt;/li&gt;
&lt;li&gt;Implementers of W3C specifications&lt;/li&gt;
&lt;li&gt;Web content authors and publishers&lt;/li&gt;
&lt;/ol&gt;
&lt;!--
&lt;p&gt;Readers will benefit from familiarity with the &lt;a
href=&quot;http://www.ietf.org/rfc.html&quot;&gt;Requests for Comments&lt;/a&gt;
(&lt;acronym&gt;RFC&lt;/acronym&gt;) series from the &lt;a
href=&quot;http://www.ietf.org/&quot;&gt;IETF&lt;/a&gt;, some of which define pieces of the
architecture discussed in this document.&lt;/p&gt;
--&gt;
&lt;p&gt;&lt;a name=&quot;p27&quot; id=&quot;p27&quot;&gt;&lt;/a&gt;&lt;strong&gt;Note:&lt;/strong&gt; This document
does not distinguish in any formal way the terms &quot;language&quot; and
&quot;format.&quot; Context determines which term is used. The phrase
&quot;specification designer&quot; encompasses language, format, and protocol
designers.&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;1.1.2. &lt;a name=&quot;doc-scope&quot; id=&quot;doc-scope&quot; shape=&quot;rect&quot;&gt;Scope of
this Document&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p28&quot; id=&quot;p28&quot;&gt;&lt;/a&gt;This document presents the general
architecture of the Web. Other groups inside and outside W3C also
address specialized aspects of Web architecture, including
accessibility, quality assurance, internationalization, device
independence, and Web Services. The section on &lt;a class=&quot;int&quot; href=&quot;#archspecs&quot;
shape=&quot;rect&quot;&gt;Architectural Specifications (&sect;7.1)&lt;/a&gt; includes
references to these related specifications.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p29&quot; id=&quot;p29&quot;&gt;&lt;/a&gt;This document strives for a balance
between brevity and precision while including illustrative
examples. &lt;a href=&quot;http://www.w3.org/2001/tag/findings&quot; shape=
&quot;rect&quot;&gt;TAG findings&lt;/a&gt; are informational documents that complement
the current document by providing more detail about selected
topics. This document includes some excerpts from the findings.
Since the findings evolve independently, this document includes
references to approved TAG findings. For other TAG issues covered
by this document but without an approved finding, references are to
entries in the &lt;a href=&quot;http://www.w3.org/2001/tag/issues.html&quot;
shape=&quot;rect&quot;&gt;TAG issues list&lt;/a&gt;.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p30&quot; id=&quot;p30&quot;&gt;&lt;/a&gt;Many of the examples in this document
that involve human activity suppose the familiar Web interaction
model (illustrated at the beginning of the Introduction) where a
person follows a link via a user agent, the user agent retrieves
and presents data, the user follows another link, etc. This
document does not discuss in any detail other interaction models
such as voice browsing (see, for example, [&lt;a class=&quot;int&quot; href=&quot;#VOICEXML2&quot;
shape=&quot;rect&quot;&gt;VOICEXML2&lt;/a&gt;]). The choice of interaction model may
have an impact on expected agent behavior. For instance, when a
graphical user agent running on a laptop computer or hand-held
device encounters an error, the user agent can report errors
directly to the user through visual and audio cues, and present the
user with options for resolving the errors. On the other hand, when
someone is browsing the Web through voice input and audio-only
output, stopping the dialog to wait for user input may reduce
usability since it is so easy to &quot;lose one's place&quot; when browsing
with only audio-output. This document does not discuss how the
principles, constraints, and good practices identified here apply
in all interaction contexts.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;1.1.3. &lt;a id=&quot;app-principles&quot; name=&quot;app-principles&quot; shape=
&quot;rect&quot;&gt;Principles, Constraints, and Good Practice Notes&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p31&quot; id=&quot;p31&quot;&gt;&lt;/a&gt;The important points of this document
are categorized as follows:&lt;/p&gt;
&lt;dl&gt;
&lt;dt&gt;&lt;a name=&quot;cat-principle&quot; id=&quot;cat-principle&quot; shape=
&quot;rect&quot;&gt;Principle&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;An architectural principle is a fundamental rule that applies
to a large number of situations and variables. Architectural
principles include &quot;separation of concerns&quot;, &quot;generic interface&quot;,
&quot;self-descriptive syntax,&quot; &quot;visible semantics,&quot; &quot;network effect&quot;
(Metcalfe's Law), and Amdahl's Law: &quot;The speed of a system is
limited by its slowest component.&quot;&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;cat-constraint&quot; id=&quot;cat-constraint&quot; shape=
&quot;rect&quot;&gt;Constraint&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;In the design of the Web, some choices, like the names of the
&lt;code&gt;p&lt;/code&gt; and &lt;code&gt;li&lt;/code&gt; elements in HTML, the choice of
the colon (:) character in URIs, or grouping bits into eight-bit
units (octets), are somewhat arbitrary; if &lt;code&gt;paragraph&lt;/code&gt;
had been chosen instead of &lt;code&gt;p&lt;/code&gt; or asterisk (*) instead
of colon, the large-scale result would, most likely, have been the
same. This document focuses on more fundamental design choices:
design choices that lead to constraints, i.e., restrictions in
behavior or interaction within the system. Constraints may be
imposed for technical, policy, or other reasons to achieve
desirable properties in the system, such as accessibility, global
scope, relative ease of evolution, efficiency, and dynamic
extensibility.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;cat-practice&quot; id=&quot;cat-practice&quot; shape=&quot;rect&quot;&gt;Good
practice&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;Good practice&mdash;by software developers, content authors, site
managers, users, and specification designers&mdash;increases the value of
the Web.&lt;/dd&gt;

&lt;/dl&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;2. &lt;a name=&quot;identification&quot; id=&quot;identification&quot; shape=
&quot;rect&quot;&gt;Identification&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p32&quot; id=&quot;p32&quot;&gt;&lt;/a&gt;In order to communicate internally, a
community agrees (to a reasonable extent) on a set of terms and
their meanings. One goal of the Web, since its inception, has been
to build a global community in which any party can share
information with any other party. To achieve this goal, the Web
makes use of a single global identification system: the URI. URIs
are a cornerstone of Web architecture, providing identification
that is common across the Web. The global scope of URIs promotes
large-scale &quot;network effects&quot;: the value of an identifier increases
the more it is used consistently (for example, the more it is used
in &lt;a class=&quot;addrefnb&quot; href=&quot;#hypertext&quot; shape=&quot;rect&quot;&gt;hypertext
links (&sect;4.4)&lt;/a&gt;).&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p33&quot; id=&quot;p33&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;principlelab&quot;&gt;Principle: &lt;a name=&quot;pr-global-id&quot; id=&quot;pr-global-id&quot;
shape=&quot;rect&quot;&gt;Global Identifiers&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;principle&quot;&gt;&lt;a name=&quot;p34&quot; id=&quot;p34&quot;&gt;&lt;/a&gt; Global naming
leads to global network effects.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p35&quot; id=&quot;p35&quot;&gt;&lt;/a&gt;This principle dates back at least as
far as Douglas Engelbart's seminal work on open hypertext systems;
see section &lt;a href=
&quot;http://www.bootstrap.org/augdocs/augment-132082.htm#11K&quot; shape=
&quot;rect&quot;&gt;Every Object Addressable&lt;/a&gt; in [&lt;a class=&quot;int&quot; href=&quot;#Eng90&quot; shape=
&quot;rect&quot;&gt;Eng90&lt;/a&gt;].&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.1. &lt;a name=&quot;uri-benefits&quot; id=&quot;uri-benefits&quot; shape=
&quot;rect&quot;&gt;Benefits of URIs&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p36&quot; id=&quot;p36&quot;&gt;&lt;/a&gt;The choice of syntax for global
identifiers is somewhat arbitrary; it is their global scope that is
important. The &lt;a name=&quot;def-uri&quot; id=&quot;def-uri&quot;&gt;&lt;dfn&gt;Uniform Resource
Identifier&lt;/dfn&gt;&lt;/a&gt;, [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;], has
been successfully deployed since the creation of the Web. There are
substantial benefits to participating in the existing network of
URIs, including linking, bookmarking, caching, and indexing by
search engines, and there are substantial costs to creating a new
identification system that has the same properties as URIs.&lt;/p&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p37&quot; id=&quot;p37&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-use-uris&quot; id=&quot;pr-use-uris&quot; shape=
&quot;rect&quot;&gt;Identify with URIs&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p38&quot; id=&quot;p38&quot;&gt;&lt;/a&gt; To benefit from and
increase the value of the World Wide Web, agents should provide
URIs as identifiers for resources.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p39&quot; id=&quot;p39&quot;&gt;&lt;/a&gt;A resource should have an associated
URI if another party might reasonably want to create a hypertext
link to it, make or refute assertions about it, retrieve or cache a
representation of it, include all or part of it by reference into
another representation, annotate it, or perform other operations on
it. Software developers should expect that sharing URIs across
applications will be useful, even if that utility is not initially
evident. The TAG finding &lt;cite&gt;&quot;&lt;a href=
&quot;http://www.w3.org/2001/tag/doc/whenToUseGet.html&quot; shape=
&quot;rect&quot;&gt;URIs, Addressability, and the use of HTTP GET and
POST&lt;/a&gt;&quot;&lt;/cite&gt; discusses additional benefits and considerations
of URI addressability.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p40&quot; id=&quot;p40&quot;&gt;&lt;/a&gt;&lt;strong&gt;Note:&lt;/strong&gt; Some URI
schemes (such as the &quot;ftp&quot; URI scheme specification) use the term
&quot;designate&quot; where this document uses &quot;identify.&quot;&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.2. &lt;a name=&quot;id-resources&quot; id=&quot;id-resources&quot; shape=
&quot;rect&quot;&gt;URI/Resource Relationships&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p41&quot; id=&quot;p41&quot;&gt;&lt;/a&gt;By design a URI identifies one
resource. We do not limit the scope of what might be a &lt;a name=
&quot;def-resource&quot; id=&quot;def-resource&quot;&gt;&lt;dfn&gt;resource&lt;/dfn&gt;&lt;/a&gt;. The term
&quot;resource&quot; is used in a general sense for whatever might be
identified by a URI. It is conventional on the hypertext Web to
describe Web pages, images, product catalogs, etc. as &ldquo;resources&rdquo;.
The distinguishing characteristic of these resources is that all of
their essential characteristics can be conveyed in a message. We
identify this set as &ldquo;&lt;a name=&quot;def-information-resource&quot; id=
&quot;def-information-resource&quot;&gt;&lt;dfn&gt;information
resources&lt;/dfn&gt;&lt;/a&gt;.&rdquo;&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p42&quot; id=&quot;p42&quot;&gt;&lt;/a&gt;This document is an example of an
information resource. It consists of words and punctuation symbols
and graphics and other artifacts that can be encoded, with varying
degrees of fidelity, into a sequence of bits. There is nothing
about the essential information content of this document that
cannot in principle be transfered in a message. In the case of this
document, the message payload is the &lt;a class=&quot;int&quot; href=&quot;#def-representation&quot;
shape=&quot;rect&quot;&gt;representation&lt;/a&gt; of this document.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p43&quot; id=&quot;p43&quot;&gt;&lt;/a&gt;However, our use of the term resource
is intentionally more broad. Other things, such as cars and dogs
(and, if you've printed this document on physical sheets of paper,
the artifact that you are holding in your hand), are resources too.
They are not information resources, however, because their essence
is not information. Although it is possible to describe a great
many things about a car or a dog in a sequence of bits, the sum of
those things will invariably be an approximation of the essential
character of the resource.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p44&quot; id=&quot;p44&quot;&gt;&lt;/a&gt;We define the term &ldquo;information
resource&rdquo; because we observe that it is useful in discussions of
Web technology and may be useful in constructing specifications for
facilities built for use on the Web.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p45&quot; id=&quot;p45&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;constraintlab&quot;&gt;Constraint: &lt;a name=&quot;pr-uri-collision&quot; id=
&quot;pr-uri-collision&quot; shape=&quot;rect&quot;&gt;URIs Identify a Single
Resource&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;constraint&quot;&gt;&lt;a name=&quot;p46&quot; id=&quot;p46&quot;&gt;&lt;/a&gt; Assign distinct
URIs to distinct resources.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p47&quot; id=&quot;p47&quot;&gt;&lt;/a&gt;Since the scope of a URI is global,
the resource identified by a URI does not depend on the context in
which the URI appears (see also the section about &lt;a class=
&quot;section&quot; href=&quot;#indirect-identification&quot; shape=&quot;rect&quot;&gt;indirect
identification (&sect;2.2.3)&lt;/a&gt;).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p48&quot; id=&quot;p48&quot;&gt;&lt;/a&gt;[&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;]
is an agreement about how the Internet community allocates names
and associates them with the resources they identify. URIs are
divided into &lt;a class=&quot;int&quot; href=&quot;#URI-scheme&quot; shape=&quot;rect&quot;&gt;schemes (&sect;2.4)&lt;/a&gt;

that define, via their scheme specification, the mechanism by which
scheme-specific identifiers are associated with resources. For
example, the &quot;http&quot; URI scheme ([&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=
&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]) uses DNS and TCP-based HTTP servers for the
purpose of identifier allocation and resolution. As a result,
identifiers such as &quot;http://example.com/somepath#someFrag&quot; often
take on meaning through the community experience of performing an
HTTP GET request on the identifier and, if given a successful
response, interpreting the response as a representation of the
identified resource. (See also &lt;a class=&quot;int&quot; href=&quot;#fragid&quot; shape=
&quot;rect&quot;&gt;Fragment Identifiers (&sect;2.6)&lt;/a&gt;.) Of course, a retrieval
action like GET is not the only way to obtain information about a
resource. One might also publish a document that purports to define
the meaning of a particular URI. These other sources of information
may suggest meanings for such identifiers, but it's a local policy
decision whether those suggestions should be heeded.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p49&quot; id=&quot;p49&quot;&gt;&lt;/a&gt;Just as one might wish to refer to a
person by different names (by full name, first name only, sports
nickname, romantic nickname, and so forth), Web architecture allows
the association of more than one URI with a resource. URIs that
identify the same resource are called &lt;a name=&quot;def-uri-aliases&quot; id=
&quot;def-uri-aliases&quot;&gt;&lt;dfn&gt;URI aliases&lt;/dfn&gt;&lt;/a&gt;. The section on
&lt;a class=&quot;int&quot; href=&quot;#uri-aliases&quot; shape=&quot;rect&quot;&gt;URI aliases (&sect;2.3.1)&lt;/a&gt;
discusses some of the potential costs of creating multiple URIs for
the same resource.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p50&quot; id=&quot;p50&quot;&gt;&lt;/a&gt;Several sections of this document
address questions about the relationship between URIs and
resources, including:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;How much can I tell about a resource by inspection of a URI
that identifies it? See the sections on &lt;a class=&quot;int&quot; href=&quot;#URI-scheme&quot;
shape=&quot;rect&quot;&gt;URI schemes (&sect;2.4)&lt;/a&gt; and &lt;a class=&quot;int&quot; href=&quot;#uri-opacity&quot;
shape=&quot;rect&quot;&gt;URI opacity (&sect;2.5)&lt;/a&gt;.&lt;/li&gt;

&lt;li&gt;Who determines what resource a URI identifies? See the section
on &lt;a class=&quot;int&quot; href=&quot;#uri-assignment&quot; shape=&quot;rect&quot;&gt;URI allocation
(&sect;2.2.2)&lt;/a&gt;.&lt;/li&gt;
&lt;li&gt;Can the resource identified by a URI change over time? See the
sections on &lt;a class=&quot;int&quot; href=&quot;#URI-persistence&quot; shape=&quot;rect&quot;&gt;URI persistence
(&sect;3.5.1)&lt;/a&gt; and &lt;a class=&quot;int&quot; href=&quot;#representation-management&quot; shape=
&quot;rect&quot;&gt;representation management (&sect;3.5)&lt;/a&gt;.&lt;/li&gt;
&lt;li&gt;Since more than one URI can identify the same resource, how do
I know which URIs identify the same resource? See the sections on
&lt;a class=&quot;int&quot; href=&quot;#identifiers-comparison&quot; shape=&quot;rect&quot;&gt;URI comparison
(&sect;2.3)&lt;/a&gt; and &lt;a class=&quot;int&quot; href=&quot;#future-comparison&quot; shape=&quot;rect&quot;&gt;assertions
that two URIs identify the same resource (&sect;2.7.2)&lt;/a&gt;.&lt;/li&gt;

&lt;/ul&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.2.1. &lt;a name=&quot;URI-collision&quot; id=&quot;URI-collision&quot; shape=
&quot;rect&quot;&gt;URI collision&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p51&quot; id=&quot;p51&quot;&gt;&lt;/a&gt;By design, a URI identifies one
resource. Using the same URI to directly identify different
resources produces a &lt;a name=&quot;def-uri-collision&quot; id=
&quot;def-uri-collision&quot;&gt;&lt;dfn&gt;URI collision&lt;/dfn&gt;&lt;/a&gt;. Collision often
imposes a cost in communication due to the effort required to
resolve ambiguities.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p52&quot; id=&quot;p52&quot;&gt;&lt;/a&gt;Suppose, for example, that one
organization makes use of a URI to refer to the movie &lt;cite&gt;The
Sting&lt;/cite&gt;, and another organization uses the same URI to refer
to a discussion forum about &lt;cite&gt;The Sting&lt;/cite&gt;. To a third
party, aware of both organizations, this collision creates
confusion about what the URI identifies, undermining the value of
the URI. If one wanted to talk about the creation date of the
resource identified by the URI, for instance, it would not be clear
whether this meant &quot;when the movie was created&quot; or &quot;when the
discussion forum about the movie was created.&quot;&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p53&quot; id=&quot;p53&quot;&gt;&lt;/a&gt;Social and technical solutions have
been devised to help avoid URI collision. However, the success or
failure of these different approaches depends on the extent to
which there is consensus in the Internet community on abiding by
the defining specifications.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p54&quot; id=&quot;p54&quot;&gt;&lt;/a&gt;The section on &lt;a class=&quot;addrefnb&quot;
href=&quot;#uri-assignment&quot; shape=&quot;rect&quot;&gt;URI allocation (&sect;2.2.2)&lt;/a&gt;
examines approaches for establishing the authoritative source of
information about what resource a URI identifies.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p55&quot; id=&quot;p55&quot;&gt;&lt;/a&gt;URIs are sometimes used for &lt;a href=
&quot;#indirect-identification&quot; shape=&quot;rect&quot;&gt;indirect identification
(&sect;2.2.3)&lt;/a&gt;. This does not necessarily lead to collisions.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.2.2. &lt;a name=&quot;uri-assignment&quot; id=&quot;uri-assignment&quot; shape=
&quot;rect&quot;&gt;URI allocation&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p56&quot; id=&quot;p56&quot;&gt;&lt;/a&gt;URI allocation is the process of
associating a URI with a resource. Allocation can be performed both
by resource owners and by other parties. It is important to avoid
&lt;a class=&quot;int&quot; href=&quot;#URI-collision&quot; shape=&quot;rect&quot;&gt;URI collision
(&sect;2.2.1)&lt;/a&gt;.&lt;/p&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h5&gt;2.2.2.1. &lt;a name=&quot;uri-ownership&quot; id=&quot;uri-ownership&quot; shape=
&quot;rect&quot;&gt;URI ownership&lt;/a&gt;&lt;/h5&gt;
&lt;p&gt;&lt;a name=&quot;p57&quot; id=&quot;p57&quot;&gt;&lt;/a&gt;&lt;a name=&quot;def-uri-ownership&quot; id=
&quot;def-uri-ownership&quot;&gt;&lt;dfn&gt;URI ownership&lt;/dfn&gt;&lt;/a&gt; is a relation
between a URI and a social entity, such as a person, organization,
or specification. URI ownership gives the relevant social entity
certain rights, including:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;to pass on ownership of some or all owned URIs to another
owner&mdash;delegation; and&lt;/li&gt;
&lt;li&gt;to associate a resource with an owned URI&mdash;URI allocation.&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p58&quot; id=&quot;p58&quot;&gt;&lt;/a&gt;By social convention, URI ownership
is delegated from the IANA URI scheme registry [&lt;a href=
&quot;#IANASchemes&quot; shape=&quot;rect&quot;&gt;IANASchemes&lt;/a&gt;], itself a social
entity, to IANA-registered URI scheme specifications. Some URI
scheme specifications further delegate ownership to subordinate
registries or to other nominated owners, who may further delegate
ownership. In the case of a specification, ownership ultimately
lies with the community that maintains the specification.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p59&quot; id=&quot;p59&quot;&gt;&lt;/a&gt;The approach taken for the &quot;http&quot; URI
scheme, for example, follows the pattern whereby the Internet
community delegates authority, via the IANA URI scheme registry and
the DNS, over a set of URIs with a common prefix to one particular
owner. One consequence of this approach is the Web's heavy reliance
on the central DNS registry. A different approach is taken by the
URN Syntax scheme [&lt;a class=&quot;int&quot; href=&quot;#RFC2141&quot; shape=&quot;rect&quot;&gt;RFC2141&lt;/a&gt;]
which delegates ownership of portions of URN space to URN Namespace
specifications which themselves are registered in an
IANA-maintained registry of URN Namespace Identifiers.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p60&quot; id=&quot;p60&quot;&gt;&lt;/a&gt;URI owners are responsible for
avoiding the assignment of equivalent URIs to multiple resources.
Thus, if a URI scheme specification does provide for the delegation
of individual or organized sets of URIs, it should take pains to
ensure that ownership ultimately resides in the hands of a single
social entity. Allowing multiple owners increases the likelihood of
URI collisions.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p61&quot; id=&quot;p61&quot;&gt;&lt;/a&gt;URI owners may organize or deploy
infrastruture to ensure that representations of associated
resources are available and, where appropriate, interaction with
the resource is possible through the exchange of representations.
There are social expectations for responsible &lt;a class=&quot;addrefnb&quot;
href=&quot;#representation-management&quot; shape=&quot;rect&quot;&gt;representation
management (&sect;3.5)&lt;/a&gt; by URI owners. Additional social implications
of URI ownership are not discussed here.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p62&quot; id=&quot;p62&quot;&gt;&lt;/a&gt;See TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#siteData-36&quot; shape=
&quot;rect&quot;&gt;siteData-36&lt;/a&gt;, which concerns the expropriation of naming
authority.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;

&lt;h5&gt;2.2.2.2. &lt;a name=&quot;assign-other-schemes&quot; id=
&quot;assign-other-schemes&quot; shape=&quot;rect&quot;&gt;Other allocation
schemes&lt;/a&gt;&lt;/h5&gt;
&lt;p&gt;&lt;a name=&quot;p63&quot; id=&quot;p63&quot;&gt;&lt;/a&gt;Some schemes use techniques other
than delegated ownership to avoid collision. For example, the
specification for the data URL (sic) scheme [&lt;a class=&quot;int&quot; href=&quot;#RFC2397&quot;
shape=&quot;rect&quot;&gt;RFC2397&lt;/a&gt;] specifies that the resource identified by
a data scheme URI has only one possible representation. The
representation data makes up the URI that identifies that resource.
Thus, the specification itself determines how data URIs are
allocated; no delegation is possible.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p64&quot; id=&quot;p64&quot;&gt;&lt;/a&gt;Other schemes (such as
&quot;news:comp.text.xml&quot;) rely on a social process.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.2.3. &lt;a name=&quot;indirect-identification&quot; id=
&quot;indirect-identification&quot; shape=&quot;rect&quot;&gt;Indirect
Identification&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p65&quot; id=&quot;p65&quot;&gt;&lt;/a&gt;To say that the URI
&quot;mailto:nadia@example.com&quot; identifies both an Internet mailbox and
Nadia, the person, introduces a URI collision. However, we can use
the URI to indirectly identify Nadia. Identifiers are commonly used
in this way.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p66&quot; id=&quot;p66&quot;&gt;&lt;/a&gt;Listening to a news broadcast, one
might hear a report on Britain that begins, &quot;Today, 10 Downing
Street announced a series of new economic measures.&quot; Generally, &quot;10
Downing Street&quot; identifies the official residence of Britain's
Prime Minister. In this context, the news reporter is using it (as
English rhetoric allows) to indirectly identify the British
government. Similarly, URIs identify resources, but they can also
be used in many constructs to indirectly identify other resources.
Globally adopted assignment policies make some URIs appealing as
general-purpose identifiers. Local policy establishes what they
indirectly identify.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p67&quot; id=&quot;p67&quot;&gt;&lt;/a&gt;Suppose that
&lt;code&gt;nadia@example.com&lt;/code&gt; is Nadia's email address. The
organizers of a conference Nadia attends might use
&quot;mailto:nadia@example.com&quot; to refer indirectly to her (e.g., by
using the URI as a database key in their database of conference
participants). This does not introduce a URI collision.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.3. &lt;a name=&quot;identifiers-comparison&quot; id=
&quot;identifiers-comparison&quot; shape=&quot;rect&quot;&gt;URI Comparisons&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p68&quot; id=&quot;p68&quot;&gt;&lt;/a&gt;URIs that are identical,
character-by-character, refer to the same resource. Since Web
Architecture allows the association of multiple URIs with a given
resource, two URIs that are not character-by-character identical
may still refer to the same resource. Different URIs do not
necessarily refer to different resources but there is generally a
higher computational cost to determine that different URIs refer to
the same resource.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p69&quot; id=&quot;p69&quot;&gt;&lt;/a&gt;To reduce the risk of a false
negative (i.e., an incorrect conclusion that two URIs do not refer
to the same resource) or a false positive (i.e., an incorrect
conclusion that two URIs do refer to the same resource), some
specifications describe equivalence tests in addition to
character-by-character comparison. Agents that reach conclusions
based on comparisons that are not licensed by the relevant
specifications take responsibility for any problems that result;
see the section on &lt;a class=&quot;addrefnb&quot; href=&quot;#error-handling&quot;
shape=&quot;rect&quot;&gt;error handling (&sect;5.3)&lt;/a&gt; for more information about
responsible behavior when reaching unlicensed conclusions. Section
6 of [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;] provides more
information about comparing URIs and reducing the risk of false
negatives and positives.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p70&quot; id=&quot;p70&quot;&gt;&lt;/a&gt;See also the &lt;a href=
&quot;#future-comparison&quot; shape=&quot;rect&quot;&gt;assertion that two URIs identify
the same resource (&sect;2.7.2)&lt;/a&gt;.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.3.1. &lt;a name=&quot;uri-aliases&quot; id=&quot;uri-aliases&quot; shape=&quot;rect&quot;&gt;URI
aliases&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p71&quot; id=&quot;p71&quot;&gt;&lt;/a&gt;Although there are benefits (such as
naming flexibility) to URI aliases, there are also costs. URI
aliases are harmful when they divide the Web of related resources.
A corollary of Metcalfe's Principle (the &quot;network effect&quot;) is that
the value of a given resource can be measured by the number and
value of other resources in its network neighborhood, that is, the
resources that link to it.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p72&quot; id=&quot;p72&quot;&gt;&lt;/a&gt;The problem with aliases is that if
half of the neighborhood points to one URI for a given resource,
and the other half points to a second, different URI for that same
resource, the neighborhood is divided. Not only is the aliased
resource undervalued because of this split, the entire neighborhood
of resources loses value because of the missing second-order
relationships that should have existed among the referring
resources by virtue of their references to the aliased
resource.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p73&quot; id=&quot;p73&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;avoid-uri-aliases&quot; id=&quot;avoid-uri-aliases&quot; shape=
&quot;rect&quot;&gt;Avoiding URI aliases&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p74&quot; id=&quot;p74&quot;&gt;&lt;/a&gt; A URI owner SHOULD
NOT associate arbitrarily different URIs with the same
resource.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p75&quot; id=&quot;p75&quot;&gt;&lt;/a&gt;URI consumers also have a role in
ensuring URI consistency. For instance, when transcribing a URI,
agents should not gratuitously percent-encode characters. The term
&quot;character&quot; refers to URI characters as defined in section 2 of
[&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;]; percent-encoding is
discussed in section 2.1 of that specification.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p76&quot; id=&quot;p76&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;lc-uri-chars&quot; id=&quot;lc-uri-chars&quot; shape=
&quot;rect&quot;&gt;Consistent URI usage&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p77&quot; id=&quot;p77&quot;&gt;&lt;/a&gt; An agent that
receives a URI SHOULD refer to the associated resource using the
same URI, character-by-character.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p78&quot; id=&quot;p78&quot;&gt;&lt;/a&gt;When a URI alias does become common
currency, the &lt;a class=&quot;int&quot; href=&quot;#uri-ownership&quot; shape=&quot;rect&quot;&gt;URI owner&lt;/a&gt;
should use protocol techniques such as server-side redirects to
relate the two resources. The community benefits when the URI owner
supports redirection of an aliased URI to the corresponding
&quot;official&quot; URI. For more information on redirection, see section
10.3, Redirection, in [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=
&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]. See also [&lt;a class=&quot;int&quot; href=&quot;#CHIPS&quot; shape=
&quot;rect&quot;&gt;CHIPS&lt;/a&gt;] for a discussion of some best practices for
server administrators.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.3.2. &lt;a name=&quot;representation-reuse&quot; id=&quot;representation-reuse&quot;
shape=&quot;rect&quot;&gt;Representation reuse&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p79&quot; id=&quot;p79&quot;&gt;&lt;/a&gt;URI aliasing only occurs when more
than one URI is used to identify the same resource. The fact that
different resources sometimes have the same representation does not
make the URIs for those resources aliases.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;

&lt;p&gt;&lt;a name=&quot;p80&quot; id=&quot;p80&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p81&quot; id=&quot;p81&quot;&gt;&lt;/a&gt;Dirk would like to add a link from
his Web site to the Oaxaca weather site. He uses the URI
http://weather.example.com/oaxaca and labels his link &ldquo;report on
weather in Oaxaca on 1&amp;#160;August&amp;#160;2004&rdquo;. Nadia points out to
Dirk that he is setting misleading expectations for the URI he has
used. The Oaxaca weather site policy is that the URI in question
identifies a report on the current weather in Oaxaca&mdash;on any given
day&mdash;and not the weather on 1 August. Of course, on the first of
August in 2004, Dirk's link will be correct, but the rest of the
time he will be misleading readers. Nadia points out to Dirk that
the managers of the Oaxaca weather site do make available a
different URI permanently assigned to a resource reporting on the
weather on 1 August 2004.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p82&quot; id=&quot;p82&quot;&gt;&lt;/a&gt;In this story, there are two
resources: &ldquo;a report on the current weather in Oaxaca&rdquo; and &ldquo;a
report on the weather in Oaxaca on 1&amp;#160;August&amp;#160;2004&rdquo;. The
managers of the Oaxaca weather site assign two URIs to these two
different resources. On 1&amp;#160;August&amp;#160;2004, the
representations for these resources are identical. That fact that
dereferencing two different URIs produces identical representations
does not imply that the two URIs are aliases.&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.4. &lt;a name=&quot;URI-scheme&quot; id=&quot;URI-scheme&quot; shape=&quot;rect&quot;&gt;URI
Schemes&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p83&quot; id=&quot;p83&quot;&gt;&lt;/a&gt;In the URI
&quot;http://weather.example.com/&quot;, the &quot;http&quot; that appears before the
colon (&quot;:&quot;) names a URI scheme. Each URI scheme has a specification
that explains the scheme-specific details of how scheme identifiers
are allocated and become associated with a resource. The URI syntax
is thus a federated and extensible naming system wherein each
scheme's specification may further restrict the syntax and
semantics of identifiers within that scheme.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p84&quot; id=&quot;p84&quot;&gt;&lt;/a&gt;Examples of URIs from various schemes
include:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;mailto:joe@example.org&lt;/li&gt;
&lt;li&gt;ftp://example.org/aDirectory/aFile&lt;/li&gt;
&lt;li&gt;news:comp.infosystems.www&lt;/li&gt;
&lt;li&gt;tel:+1-816-555-1212&lt;/li&gt;

&lt;li&gt;ldap://ldap.example.org/c=GB?objectClass?one&lt;/li&gt;
&lt;li&gt;urn:oasis:names:tc:entity:xmlns:xml:catalog&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p85&quot; id=&quot;p85&quot;&gt;&lt;/a&gt;While Web architecture allows the
definition of new schemes, introducing a new scheme is costly. Many
aspects of URI processing are scheme-dependent, and a large amount
of deployed software already processes URIs of well-known schemes.
Introducing a new URI scheme requires the development and
deployment not only of client software to handle the scheme, but
also of ancillary agents such as gateways, proxies, and caches. See
[&lt;a class=&quot;int&quot; href=&quot;#RFC2718&quot; shape=&quot;rect&quot;&gt;RFC2718&lt;/a&gt;] for other
considerations and costs related to URI scheme design.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p86&quot; id=&quot;p86&quot;&gt;&lt;/a&gt;Because of these costs, if a URI
scheme exists that meets the needs of an application, designers
should use it rather than invent one.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p87&quot; id=&quot;p87&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-reuse-uri-schemes&quot; id=&quot;pr-reuse-uri-schemes&quot;
shape=&quot;rect&quot;&gt;Reuse URI schemes&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p88&quot; id=&quot;p88&quot;&gt;&lt;/a&gt; A specification
SHOULD reuse an existing URI scheme (rather than create a new one)
when it provides the desired properties of identifiers and their
relation to resources.&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p89&quot; id=&quot;p89&quot;&gt;&lt;/a&gt; Consider our &lt;a class=&quot;int&quot; href=&quot;#scenario&quot;
shape=&quot;rect&quot;&gt;travel scenario&lt;/a&gt;: should the agent providing
information about the weather in Oaxaca register a new URI scheme
&quot;weather&quot; for the identification of resources related to the
weather? They might then publish URIs such as
&quot;weather://travel.example.com/oaxaca&quot;. When a software agent
dereferences such a URI, if what really happens is that HTTP GET is
invoked to retrieve a representation of the resource, then an
&quot;http&quot; URI would have sufficed.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.4.1. &lt;a name=&quot;URI-registration&quot; id=&quot;URI-registration&quot; shape=
&quot;rect&quot;&gt;URI Scheme Registration&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p90&quot; id=&quot;p90&quot;&gt;&lt;/a&gt;The Internet Assigned Numbers
Authority (&lt;acronym&gt;IANA&lt;/acronym&gt;) maintains a registry [&lt;a href=
&quot;#IANASchemes&quot; shape=&quot;rect&quot;&gt;IANASchemes&lt;/a&gt;] of mappings between
URI scheme names and scheme specifications. For instance, the IANA
registry indicates that the &quot;http&quot; scheme is defined in [&lt;a href=
&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]. The process for registering a
new URI scheme is defined in [&lt;a class=&quot;int&quot; href=&quot;#RFC2717&quot; shape=
&quot;rect&quot;&gt;RFC2717&lt;/a&gt;].&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p91&quot; id=&quot;p91&quot;&gt;&lt;/a&gt;Unregistered URI schemes SHOULD NOT
be used for a number of reasons:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;There is no generally accepted way to locate the scheme
specification.&lt;/li&gt;
&lt;li&gt;Someone else may be using the scheme for other purposes.&lt;/li&gt;
&lt;li&gt;One should not expect that general-purpose software will do
anything useful with URIs of this scheme beyond URI
comparison.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p92&quot; id=&quot;p92&quot;&gt;&lt;/a&gt;One misguided motivation for
registering a new URI scheme is to allow a software agent to launch
a particular application when retrieving a representation. The same
thing can be accomplished at lower expense by dispatching instead
on the type of the representation, thereby allowing use of existing
transfer protocols and implementations.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p93&quot; id=&quot;p93&quot;&gt;&lt;/a&gt;Even if an agent cannot process
representation data in an unknown format, it can at least retrieve
it. The data may contain enough information to allow a user or user
agent to make some use of it. When an agent does not handle a new
URI scheme, it cannot retrieve a representation.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p94&quot; id=&quot;p94&quot;&gt;&lt;/a&gt;When designing a new data format, the
preferred mechanism to promote its deployment on the Web is the
Internet media type (see &lt;a class=&quot;int&quot; href=&quot;#internet-media-type&quot; shape=
&quot;rect&quot;&gt;Representation Types and Internet Media Types (&sect;3.2)&lt;/a&gt;).
Media types also provide a means for building new information
applications, as described in &lt;a class=&quot;int&quot; href=&quot;#media-types-infospace&quot;
shape=&quot;rect&quot;&gt;future directions for data formats (&sect;4.6)&lt;/a&gt;.&lt;/p&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.5. &lt;a name=&quot;uri-opacity&quot; id=&quot;uri-opacity&quot; shape=&quot;rect&quot;&gt;URI
Opacity&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p95&quot; id=&quot;p95&quot;&gt;&lt;/a&gt;It is tempting to guess the nature of
a resource by inspection of a URI that identifies it. However, the
Web is designed so that agents communicate resource information
state through &lt;a class=&quot;int&quot; href=&quot;#def-representation&quot; shape=
&quot;rect&quot;&gt;representations&lt;/a&gt;, not identifiers. In general, one cannot
determine the type of a resource representation by inspecting a URI
for that resource. For example, the &quot;.html&quot; at the end of
&quot;http://example.com/page.html&quot; provides no guarantee that
representations of the identified resource will be served with the
Internet media type &quot;text/html&quot;. The publisher is free to allocate
identifiers and define how they are served. The HTTP protocol does
not constrain the Internet media type based on the path component
of the URI; the URI owner is free to configure the server to return
a representation using PNG or any other data format.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p96&quot; id=&quot;p96&quot;&gt;&lt;/a&gt;Resource state may evolve over time.
Requiring a URI owner to publish a new URI for each change in
resource state would lead to a significant number of broken
references. For robustness, Web architecture promotes independence
between an identifier and the state of the identified resource.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p97&quot; id=&quot;p97&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-uri-opacity&quot; id=&quot;pr-uri-opacity&quot; shape=
&quot;rect&quot;&gt;URI opacity&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p98&quot; id=&quot;p98&quot;&gt;&lt;/a&gt; Agents making use
of URIs SHOULD NOT attempt to infer properties of the referenced
resource.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p99&quot; id=&quot;p99&quot;&gt;&lt;/a&gt;In practice, a small number of
inferences can be made because they are explicitly licensed by the
relevant specifications. Some of these inferences are discussed in
the &lt;a class=&quot;int&quot; href=&quot;#dereference-details&quot; shape=&quot;rect&quot;&gt;details of
retrieving a representation (&sect;3.1.1)&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p100&quot; id=&quot;p100&quot;&gt;&lt;/a&gt;The example URI used in the
&lt;a class=&quot;int&quot; href=&quot;#scenario&quot; shape=&quot;rect&quot;&gt;travel scenario&lt;/a&gt;
(&quot;http://weather.example.com/oaxaca&quot;) suggests to a human reader
that the identified resource has something to do with the weather
in Oaxaca. A site reporting the weather in Oaxaca could just as
easily be identified by the URI &quot;http://vjc.example.com/315&quot;. And
the URI &quot;http://weather.example.com/vancouver&quot; might identify the
resource &quot;my photo album.&quot;&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p101&quot; id=&quot;p101&quot;&gt;&lt;/a&gt;On the other hand, the URI
&quot;mailto:joe@example.com&quot; indicates that the URI refers to a
mailbox. The &quot;mailto&quot; URI scheme specification authorizes agents to
infer that URIs of this form identify Internet mailboxes.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p102&quot; id=&quot;p102&quot;&gt;&lt;/a&gt;Some URI assignment authorities
document and publish their URI assignment policies. For more
information about URI opacity, see TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#metadataInURI-31&quot; shape=
&quot;rect&quot;&gt;metaDataInURI-31&lt;/a&gt; and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#siteData-36&quot; shape=
&quot;rect&quot;&gt;siteData-36&lt;/a&gt;.&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.6. &lt;a name=&quot;fragid&quot; id=&quot;fragid&quot; shape=&quot;rect&quot;&gt;Fragment
Identifiers&lt;/a&gt;&lt;/h3&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p103&quot; id=&quot;p103&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p104&quot; id=&quot;p104&quot;&gt;&lt;/a&gt;When browsing the XHTML document
that Nadia receives as a representation of the resource identified
by &quot;http://weather.example.com/oaxaca&quot;, she finds that the URI
&quot;http://weather.example.com/oaxaca#weekend&quot; refers to the part of
the representation that conveys information about the weekend
outlook. This URI includes the fragment identifier &quot;weekend&quot; (the
string after the &quot;#&quot;).&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p105&quot; id=&quot;p105&quot;&gt;&lt;/a&gt;The &lt;a name=&quot;def-fragid&quot; id=
&quot;def-fragid&quot;&gt;&lt;dfn&gt;fragment identifier&lt;/dfn&gt;&lt;/a&gt; component of a URI
allows indirect identification of a &lt;a name=
&quot;def-secondary-resource&quot; id=&quot;def-secondary-resource&quot;&gt;&lt;dfn&gt;secondary
resource&lt;/dfn&gt;&lt;/a&gt; by reference to a primary resource and
additional identifying information. The secondary resource may be
some portion or subset of the primary resource, some view on
representations of the primary resource, or some other resource
defined or described by those representations. The terms &quot;primary
resource&quot; and &quot;secondary resource&quot; are defined in section 3.5 of
[&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;].&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p106&quot; id=&quot;p106&quot;&gt;&lt;/a&gt;The terms &ldquo;primary&rdquo; and &ldquo;secondary&rdquo;
in this context do not limit the nature of the resource&mdash;they are
not classes. In this context, primary and secondary simply indicate
that there is a relationship between the resources for the purposes
of one URI: the URI with a fragment identifier. Any resource can be
identified as a secondary resource. It might also be identified
using a URI without a fragment identifier, and a resource may be
identified as a secondary resource via multiple URIs. The purpose
of these terms is to enable discussion of the relationship between
such resources, not to limit the nature of a resource.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p107&quot; id=&quot;p107&quot;&gt;&lt;/a&gt;The interpretation of fragment
identifiers is discussed in the section on &lt;a href=
&quot;#media-type-fragid&quot; shape=&quot;rect&quot;&gt;media types and fragment
identifier semantics (&sect;3.2.1)&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p108&quot; id=&quot;p108&quot;&gt;&lt;/a&gt;See TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#abstractComponentRefs-37&quot;
shape=&quot;rect&quot;&gt;abstractComponentRefs-37&lt;/a&gt;, which concerns the use
of fragment identifiers with namespace names to identify abstract
components.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;2.7. &lt;a name=&quot;identifiers-future&quot; id=&quot;identifiers-future&quot;
shape=&quot;rect&quot;&gt;Future Directions for Identifiers&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p109&quot; id=&quot;p109&quot;&gt;&lt;/a&gt;There remain open questions
regarding identifiers on the Web.&lt;/p&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.7.1. &lt;a name=&quot;i18n-id&quot; shape=&quot;rect&quot; id=
&quot;i18n-id&quot;&gt;Internationalized identifiers&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p110&quot; id=&quot;p110&quot;&gt;&lt;/a&gt;The integration of
internationalized identifiers (i.e., composed of characters beyond
those allowed by [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;]) into the
Web architecture is an important and open issue. See TAG issue
&lt;a href=&quot;http://www.w3.org/2001/tag/issues.html#IRIEverywhere-27&quot;
shape=&quot;rect&quot;&gt;IRIEverywhere-27&lt;/a&gt; for discussion about work going
on in this area.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;2.7.2. &lt;a name=&quot;future-comparison&quot; id=&quot;future-comparison&quot;
shape=&quot;rect&quot;&gt;Assertion that two URIs identify the same
resource&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p111&quot; id=&quot;p111&quot;&gt;&lt;/a&gt;Emerging Semantic Web technologies,
including the &quot;Web Ontology Language (OWL)&quot; [&lt;a class=&quot;int&quot; href=&quot;#OWL10&quot;
shape=&quot;rect&quot;&gt;OWL10&lt;/a&gt;], define RDF properties such as

&lt;code&gt;sameAs&lt;/code&gt; to assert that two URIs identify the same
resource or &lt;code&gt;inverseFunctionalProperty&lt;/code&gt; to imply it.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;3. &lt;a name=&quot;interaction&quot; id=&quot;interaction&quot; shape=
&quot;rect&quot;&gt;Interaction&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p112&quot; id=&quot;p112&quot;&gt;&lt;/a&gt;Communication between agents over a
network about resources involves URIs, messages, and data. The
Web's protocols (including HTTP, FTP, SOAP, NNTP, and SMTP) are
based on the exchange of messages. A &lt;a name=&quot;def-message&quot; id=
&quot;def-message&quot;&gt;&lt;dfn&gt;message&lt;/dfn&gt;&lt;/a&gt; may include data as well as
metadata about a resource (such as the &quot;Alternates&quot; and &quot;Vary&quot; HTTP
headers), the message data, and the message itself (such as the
&quot;Transfer-encoding&quot; HTTP header). A message may even include
metadata about the message metadata (for message-integrity checks,
for instance).&lt;/p&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p113&quot; id=&quot;p113&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p114&quot; id=&quot;p114&quot;&gt;&lt;/a&gt;Nadia follows a hypertext link
labeled &quot;satellite image&quot; expecting to retrieve a satellite photo
of the Oaxaca region. The link to the satellite image is an XHTML
link encoded as &lt;code&gt;&amp;lt;a
href=&quot;http://example.com/satimage/oaxaca&quot;&amp;gt;satellite
image&amp;lt;/a&amp;gt;&lt;/code&gt;. Nadia's browser analyzes the URI and
determines that its &lt;a class=&quot;int&quot; href=&quot;#URI-scheme&quot; shape=&quot;rect&quot;&gt;scheme&lt;/a&gt;
is &quot;http&quot;. The browser configuration determines how it locates the
identified information, which might be via a cache of prior
retrieval actions, by contacting an intermediary (such as a proxy
server), or by direct access to the server identified by a portion
of the URI. In this example, the browser opens a network connection
to port 80 on the server at &quot;example.com&quot; and sends a &quot;GET&quot; message
as specified by the HTTP protocol, requesting a representation of
the resource.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p115&quot; id=&quot;p115&quot;&gt;&lt;/a&gt;The server sends a response message
to the browser, once again according to the HTTP protocol. The
message consists of several headers and a JPEG image. The browser
reads the headers, learns from the &quot;Content-Type&quot; field that the
Internet media type of the representation is &quot;image/jpeg&quot;, reads
the sequence of octets that make up the representation data, and
renders the image.&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p116&quot; id=&quot;p116&quot;&gt;&lt;/a&gt;This section describes the
architectural principles and constraints regarding interactions
between agents, including such topics as network protocols and
interaction styles, along with interactions between the Web as a
system and the people that make use of it. The fact that the Web is
a highly distributed system affects architectural constraints and
assumptions about interactions.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.1. &lt;a name=&quot;dereference-uri&quot; id=&quot;dereference-uri&quot; shape=
&quot;rect&quot;&gt;Using a URI to Access a Resource&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p117&quot; id=&quot;p117&quot;&gt;&lt;/a&gt;Agents may use a URI to access the
referenced resource; this is called &lt;a name=&quot;uri-dereference&quot; id=
&quot;uri-dereference&quot;&gt;&lt;dfn&gt;dereferencing the URI&lt;/dfn&gt;&lt;/a&gt;. Access may
take many forms, including retrieving a representation of the
resource (for instance, by using HTTP GET or HEAD), adding or
modifying a representation of the resource (for instance, by using
HTTP POST or PUT, which in some cases may change the actual state
of the resource if the submitted representations are interpreted as
instructions to that end), and deleting some or all representations
of the resource (for instance, by using HTTP DELETE, which in some
cases may result in the deletion of the resource itself).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p118&quot; id=&quot;p118&quot;&gt;&lt;/a&gt;There may be more than one way to
access a resource for a given URI; application context determines
which access method an agent uses. For instance, a browser might
use HTTP GET to retrieve a representation of a resource, whereas a
hypertext link checker might use HTTP HEAD on the same URI simply
to establish whether a representation is available. Some URI
schemes set expectations about available access methods, others
(such as the URN scheme [&lt;a class=&quot;int&quot; href=&quot;#RFC2141&quot; shape=&quot;rect&quot;&gt;RFC
2141&lt;/a&gt;]) do not. Section 1.2.2 of [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=
&quot;rect&quot;&gt;URI&lt;/a&gt;] discusses the separation of identification and
interaction in more detail. For more information about
relationships between multiple access methods and URI
addressability, see the TAG finding &lt;cite&gt;&quot;&lt;a href=
&quot;http://www.w3.org/2001/tag/doc/whenToUseGet.html&quot; shape=
&quot;rect&quot;&gt;URIs, Addressability, and the use of HTTP GET and
POST&lt;/a&gt;&quot;&lt;/cite&gt;.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p119&quot; id=&quot;p119&quot;&gt;&lt;/a&gt;Although many &lt;a class=&quot;int&quot; href=&quot;#URI-scheme&quot;
shape=&quot;rect&quot;&gt;URI schemes (&sect;2.4)&lt;/a&gt; are named after protocols, this
does not imply that use of such a URI will necessarily result in
access to the resource via the named protocol. Even when an agent
uses a URI to retrieve a representation, that access might be
through gateways, proxies, caches, and name resolution services
that are independent of the protocol associated with the scheme
name.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p120&quot; id=&quot;p120&quot;&gt;&lt;/a&gt;Many URI schemes define a default
interaction protocol for attempting access to the identified
resource. That interaction protocol is often the basis for
allocating identifiers within that scheme, just as &quot;http&quot; URIs are
defined in terms of TCP-based HTTP servers. However, this does not
imply that all interaction with such resources is limited to the
default interaction protocol. For example, information retrieval
systems often make use of proxies to interact with a multitude of
URI schemes, such as HTTP proxies being used to access &quot;ftp&quot; and
&quot;wais&quot; resources. Proxies can also to provide enhanced services,
such as annotation proxies that combine normal information
retrieval with additional metadata retrieval to provide a seamless,
multidimensional view of resources using the same protocols and
user agents as the non-annotated Web. Likewise, future protocols
may be defined that encompass our current systems, using entirely
different interaction mechanisms, without changing the existing
identifier schemes. See also, &lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot; shape=
&quot;rect&quot;&gt;principle of orthogonal specifications (&sect;5.1)&lt;/a&gt;.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.1.1. &lt;a name=&quot;dereference-details&quot; id=&quot;dereference-details&quot;
shape=&quot;rect&quot;&gt;Details of retrieving a representation&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p121&quot; id=&quot;p121&quot;&gt;&lt;/a&gt;Dereferencing a URI generally
involves a succession of steps as described in multiple
specifications and implemented by the agent. The following example
illustrates the series of specifications that governs the process
when a user agent is instructed to follow a &lt;a class=&quot;int&quot; href=&quot;#hypertext&quot;
shape=&quot;rect&quot;&gt;hypertext link (&sect;4.4)&lt;/a&gt; that is part of an SVG
document. In this example, the URI is
&quot;http://weather.example.com/oaxaca&quot; and the application context
calls for the user agent to retrieve and render a representation of
the identified resource.&lt;/p&gt;

&lt;ol&gt;
&lt;li&gt;Since the URI is part of a hypertext link in an SVG document,
the first relevant specification is the SVG 1.1 Recommendation
[&lt;a class=&quot;int&quot; href=&quot;#SVG11&quot; shape=&quot;rect&quot;&gt;SVG11&lt;/a&gt;]. &lt;a href=
&quot;http://www.w3.org/TR/SVG11/linking.html#Links&quot; shape=&quot;rect&quot;&gt;Section 17.1&lt;/a&gt; of
this specification imports the link semantics defined in XLink 1.0
[&lt;a class=&quot;int&quot; href=&quot;#XLink10&quot; shape=&quot;rect&quot;&gt;XLink10&lt;/a&gt;]: &quot;The remote resource
(the destination for the link) is defined by a URI specified by the
XLink &lt;code&gt;href&lt;/code&gt; attribute on the '&lt;code&gt;a&lt;/code&gt;' element.&quot;
The SVG specification goes on to state that interpretation of an
&lt;code&gt;a&lt;/code&gt; element involves retrieving a representation of a
resource, identified by the &lt;code&gt;href&lt;/code&gt; attribute in the
XLink namespace: &quot;By activating these links (by clicking with the
mouse, through keyboard input, voice commands, etc.), users may
visit these resources.&quot;&lt;/li&gt;

&lt;li&gt;The XLink 1.0 [&lt;a class=&quot;int&quot; href=&quot;#XLink10&quot; shape=&quot;rect&quot;&gt;XLink10&lt;/a&gt;]
specification, which defines the &lt;code&gt;href&lt;/code&gt; attribute in
section 5.4, states that &quot;The value of the href attribute must be a
URI reference as defined in [IETF RFC 2396], or must result in a
URI reference after the escaping procedure described below is
applied.&quot;&lt;/li&gt;
&lt;li&gt;The URI specification [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;]
states that &quot;Each URI begins with a scheme name that refers to a
specification for assigning identifiers within that scheme.&quot; The
URI scheme name in this example is &quot;http&quot;.&lt;/li&gt;
&lt;li&gt;[&lt;a class=&quot;int&quot; href=&quot;#IANASchemes&quot; shape=&quot;rect&quot;&gt;IANASchemes&lt;/a&gt;] states
that the &quot;http&quot; scheme is defined by the HTTP/1.1 specification
(RFC 2616 [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;], section
3.2.2).&lt;/li&gt;

&lt;li&gt;In this SVG context, the agent constructs an HTTP GET request
(per section 9.3 of [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;])
to retrieve the representation.&lt;/li&gt;
&lt;li&gt;Section 6 of [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]
defines how the server constructs a corresponding response message,
including the 'Content-Type' field.&lt;/li&gt;
&lt;li&gt;Section 1.4 of [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]
states &quot;HTTP communication usually takes place over TCP/IP
connections.&quot; This example addresses neither that step in the
process nor other steps such as Domain Name System
(&lt;acronym&gt;DNS&lt;/acronym&gt;) resolution.&lt;/li&gt;
&lt;li&gt;The agent interprets the returned representation according to
the data format specification that corresponds to the
representation's &lt;a class=&quot;int&quot; href=&quot;#internet-media-type&quot; shape=
&quot;rect&quot;&gt;Internet Media Type (&sect;3.2)&lt;/a&gt; (the value of the HTTP
'Content-Type') in the relevant IANA registry [&lt;a href=
&quot;#MEDIATYPEREG&quot; shape=&quot;rect&quot;&gt;MEDIATYPEREG&lt;/a&gt;].&lt;/li&gt;

&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p122&quot; id=&quot;p122&quot;&gt;&lt;/a&gt;Precisely which representation(s)
are retrieved depends on a number of factors, including:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Whether the URI owner makes available any representations at
all;&lt;/li&gt;
&lt;li&gt;Whether the agent making the request has access privileges for
those representations (see the section on &lt;a class=&quot;int&quot; href=&quot;#id-access&quot;
shape=&quot;rect&quot;&gt;linking and access control (&sect;3.5.2)&lt;/a&gt;);&lt;/li&gt;
&lt;li&gt;If the URI owner has provided more than one representation (in
different formats such as HTML, PNG, or RDF; in different languages
such as English and Spanish; or transformed dynamically according
to the hardware or software capabilities of the recipient), the
resulting representation may depend on negotiation between the user
agent and server.&lt;/li&gt;
&lt;li&gt;The time of the request; the world changes over time, so
representations of resources are also likely to change over
time.&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p123&quot; id=&quot;p123&quot;&gt;&lt;/a&gt;Assuming that a representation has
been successfully retrieved, the expressive power of the
representation's format will affect how precisely the
representation provider communicates resource state. If the
representation communicates the state of the resource inaccurately,
this inaccuracy or ambiguity may lead to confusion among users
about what the resource is. If different users reach different
conclusions about what the resource is, they may interpret this as
a &lt;a class=&quot;int&quot; href=&quot;#URI-collision&quot; shape=&quot;rect&quot;&gt;URI collision (&sect;2.2.1)&lt;/a&gt;.
Some communities, such as the ones developing the Semantic Web,
seek to provide a framework for accurately communicating the
semantics of a resource in a machine readable way. Machine readable
semantics may alleviate some of the ambiguity associated with
natural language descriptions of resources.&lt;/p&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.2. &lt;a id=&quot;internet-media-type&quot; name=&quot;internet-media-type&quot;
shape=&quot;rect&quot;&gt;Representation Types and Internet Media Types&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p124&quot; id=&quot;p124&quot;&gt;&lt;/a&gt;A &lt;a name=&quot;def-representation&quot; id=
&quot;def-representation&quot;&gt;&lt;dfn&gt;representation&lt;/dfn&gt;&lt;/a&gt; is data that
encodes information about resource state. Representations do not
necessarily describe the resource, or portray a likeness of the
resource, or represent the resource in other senses of the word
&quot;represent&quot;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p125&quot; id=&quot;p125&quot;&gt;&lt;/a&gt;Representations of a resource may
be sent or received using interaction protocols. These protocols in
turn determine the form in which representations are conveyed on
the Web. HTTP, for example, provides for transmission of
representations as octet streams typed using Internet media types
[&lt;a class=&quot;int&quot; href=&quot;#RFC2046&quot; shape=&quot;rect&quot;&gt;RFC2046&lt;/a&gt;].&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p126&quot; id=&quot;p126&quot;&gt;&lt;/a&gt;Just as it is important to reuse
existing URI schemes whenever possible, there are significant
benefits to using media typed octet streams for representations
even in the unusual case where a new URI scheme and associated
protocol is to be defined. For example, if the Oaxaca weather were
conveyed to Nadia's browser using a protocol other than HTTP, then
software to render formats such as text/xhmtl+xml and image/png
would still be usable if the new protocol supported transmission of
those types. This is an example of the &lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot;
shape=&quot;rect&quot;&gt;principle of orthogonal specifications (&sect;5.1)&lt;/a&gt;.&lt;/p&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p127&quot; id=&quot;p127&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-reuse-formats&quot; id=&quot;pr-reuse-formats&quot; shape=
&quot;rect&quot;&gt;Reuse representation formats&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p128&quot; id=&quot;p128&quot;&gt;&lt;/a&gt; New protocols
created for the Web SHOULD transmit representations as octet
streams typed by Internet media types.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p129&quot; id=&quot;p129&quot;&gt;&lt;/a&gt;The Internet media type mechanism
does have some limitations. For instance, media type strings do not
support &lt;a class=&quot;int&quot; href=&quot;#versioning&quot; shape=&quot;rect&quot;&gt;versioning (&sect;4.2.1)&lt;/a&gt;
or other parameters. See TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#uriMediaType-9&quot; shape=
&quot;rect&quot;&gt;uriMediaType-9&lt;/a&gt; and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#mediaTypeManagement-45&quot;
shape=&quot;rect&quot;&gt;mediaTypeManagement-45&lt;/a&gt; which concern aspects of
the media type mechanism.&lt;/p&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.2.1. &lt;a id=&quot;media-type-fragid&quot; name=&quot;media-type-fragid&quot;
shape=&quot;rect&quot;&gt;Representation types and fragment identifier
semantics&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p130&quot; id=&quot;p130&quot;&gt;&lt;/a&gt;The Internet Media Type defines the
syntax and semantics of the fragment identifier (introduced in
&lt;a class=&quot;int&quot; href=&quot;#fragid&quot; shape=&quot;rect&quot;&gt;Fragment Identifiers (&sect;2.6)&lt;/a&gt;), if
any, that may be used in conjunction with a representation.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p131&quot; id=&quot;p131&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p132&quot; id=&quot;p132&quot;&gt;&lt;/a&gt;In one of his XHTML pages, Dirk
creates a hypertext link to an image that Nadia has published on
the Web. He creates a hypertext link with &lt;code&gt;&amp;lt;a
href=&quot;http://www.example.com/images/nadia#hat&quot;&amp;gt;Nadia's
hat&amp;lt;/a&amp;gt;&lt;/code&gt;. Emma views Dirk's XHTML page in her Web
browser and follows the link. The HTML implementation in her
browser removes the fragment from the URI and requests the image
&quot;http://www.example.com/images/nadia&quot;. Nadia serves an SVG
representation of the image (with Internet media type
&quot;image/svg+xml&quot;). Emma's Web browser starts up an SVG
implementation to view the image. It passes it the original URI
including the fragment, &quot;http://www.example.com/images/nadia#hat&quot;
to this implementation, causing a view of the hat to be displayed
rather than the complete image.&lt;/p&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p133&quot; id=&quot;p133&quot;&gt;&lt;/a&gt;Note that the HTML implementation
in Emma's browser did not need to &lt;em&gt;understand the syntax or
semantics&lt;/em&gt; of the SVG fragment (nor does the SVG implementation
have to understand HTML, WebCGM, RDF ... fragment syntax or
semantics; it merely had to recognize the # delimiter from the URI
syntax [URI] and remove the fragment when accessing the resource).
This &lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot; shape=&quot;rect&quot;&gt;orthogonality
(&sect;5.1)&lt;/a&gt; is an important feature of Web architecture; it is what
enabled Emma's browser to provide a useful service without
requiring an upgrade.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p134&quot; id=&quot;p134&quot;&gt;&lt;/a&gt;The semantics of a fragment
identifier are defined by the set of representations that might
result from a retrieval action on the primary resource. The
fragment's format and resolution are therefore dependent on the
type of a potentially retrieved representation, even though such a
retrieval is only performed if the URI is dereferenced. If no such
representation exists, then the semantics of the fragment are
considered unknown and, effectively, unconstrained. Fragment
identifier semantics are orthogonal to URI schemes and thus cannot
be redefined by URI scheme specifications.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p135&quot; id=&quot;p135&quot;&gt;&lt;/a&gt;Interpretation of the fragment
identifier is performed solely by the agent that dereferences a
URI; the fragment identifier is not passed to other systems during
the process of retrieval. This means that some intermediaries in
Web architecture (such as proxies) have no interaction with
fragment identifiers and that redirection (in HTTP [&lt;a href=
&quot;#RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;], for example) does not account
for fragments.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.2.2. &lt;a name=&quot;frag-coneg&quot; id=&quot;frag-coneg&quot; shape=
&quot;rect&quot;&gt;Fragment identifiers and content negotiation&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p136&quot; id=&quot;p136&quot;&gt;&lt;/a&gt;&lt;a name=&quot;def-coneg&quot; id=
&quot;def-coneg&quot;&gt;&lt;dfn&gt;Content negotiation&lt;/dfn&gt;&lt;/a&gt; refers to the
practice of making available multiple representations via the same
URI. Negotiation between the requesting agent and the server
determines which representation is served (usually with the goal of
serving the &quot;best&quot; representation a receiving agent can process).
HTTP is an example of a protocol that enables representation
providers to use content negotiation.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p137&quot; id=&quot;p137&quot;&gt;&lt;/a&gt;Individual data formats may define
their own rules for use of the fragment identifier syntax for
specifying different types of subsets, views, or external
references that are identifiable as secondary resources by that
media type. Therefore, representation providers must manage content
negotiation carefully when used with a URI that contains a fragment
identifier. Consider an example where the owner of the URI
&quot;http://weather.example.com/oaxaca/map#zicatela&quot; uses content
negotiation to serve two representations of the identified
resource. Three situations can arise:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;The interpretation of &quot;zicatela&quot; is defined consistently by
both data format specifications. The representation provider
decides when definitions of fragment identifier semantics are are
sufficiently consistent.&lt;/li&gt;
&lt;li&gt;The interpretation of &quot;zicatela&quot; is defined inconsistently by
the data format specifications.&lt;/li&gt;
&lt;li&gt;The interpretation of &quot;zicatela&quot; is defined in one data format
specification but not the other.&lt;/li&gt;

&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p138&quot; id=&quot;p138&quot;&gt;&lt;/a&gt;The first situation&mdash;consistent
semantics&mdash;poses no problem.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p139&quot; id=&quot;p139&quot;&gt;&lt;/a&gt;The second case is a server
management error: representation providers must not use content
negotiation to serve representation formats that have inconsistent
fragment identifier semantics. This situation also leads to
&lt;a class=&quot;int&quot; href=&quot;#URI-collision&quot; shape=&quot;rect&quot;&gt;URI collision
(&sect;2.2.1)&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p140&quot; id=&quot;p140&quot;&gt;&lt;/a&gt;The third case is not a server
management error. It is a means by which the Web can grow. Because
the Web is a distributed system in which formats and agents are
deployed in a non-uniform manner, Web architecture does not
constrain authors to only use &quot;lowest common denominator&quot; formats.
Content authors may take advantage of new data formats while still
ensuring reasonable backward-compatibility for agents that do not
yet implement them.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p141&quot; id=&quot;p141&quot;&gt;&lt;/a&gt;In case three, behavior by the
receiving agent should vary depending on whether the negotiated
format defines fragment identifier semantics. When a received data
format does not define fragment identifier semantics, the agent
should not perform &lt;a class=&quot;int&quot; href=&quot;#no-silent-recovery&quot; shape=
&quot;rect&quot;&gt;silent error recovery&lt;/a&gt; unless the user has given consent;
see [&lt;a class=&quot;int&quot; href=&quot;#CUAP&quot; shape=&quot;rect&quot;&gt;CUAP&lt;/a&gt;] for additional
suggested agent behavior in this case.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p142&quot; id=&quot;p142&quot;&gt;&lt;/a&gt;See related TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#RDFinXHTML-35&quot; shape=
&quot;rect&quot;&gt;RDFinXHTML-35&lt;/a&gt;.&lt;/p&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.3. &lt;a name=&quot;metadata-inconsistencies&quot; id=
&quot;metadata-inconsistencies&quot; shape=&quot;rect&quot;&gt;Inconsistencies between
Representation Data and Metadata&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p143&quot; id=&quot;p143&quot;&gt;&lt;/a&gt;Successful communication between
two parties depends on a reasonably shared understanding of the
semantics of exchanged messages, both data and metadata. At times,
there may be inconsistencies between a message sender's data and
metadata. Examples, observed in practice, of inconsistencies
between representation data and metadata include:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;The actual character encoding of a representation (e.g.,
&quot;iso-8859-1&quot;, specified by the &lt;code&gt;encoding&lt;/code&gt; attribute in
an XML declaration) is inconsistent with the charset parameter in
the representation metadata (e.g., &quot;utf-8&quot;, specified by the
'Content-Type' field in an HTTP header).&lt;/li&gt;
&lt;li&gt;The &lt;a class=&quot;int&quot; href=&quot;#xml-namespaces&quot; shape=&quot;rect&quot;&gt;namespace
(&sect;4.5.3)&lt;/a&gt; of the root element of XML representation data (e.g.,
as specified by the &quot;xmlns&quot; attribute) is inconsistent with the
value of the 'Content-Type' field in an HTTP header.&lt;/li&gt;

&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p144&quot; id=&quot;p144&quot;&gt;&lt;/a&gt;On the other hand, there is no
inconsistency in serving HTML content with the media type
&quot;text/plain&quot;, for example, as this combination is licensed by
specifications.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p145&quot; id=&quot;p145&quot;&gt;&lt;/a&gt;Receiving agents should detect
protocol inconsistencies and perform proper &lt;a href=
&quot;#def-error-recovery&quot; shape=&quot;rect&quot;&gt;error recovery&lt;/a&gt;.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p146&quot; id=&quot;p146&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;constraintlab&quot;&gt;Constraint: &lt;a name=&quot;pr-server-auth&quot; id=
&quot;pr-server-auth&quot; shape=&quot;rect&quot;&gt;Data-metadata
inconsistency&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;constraint&quot;&gt;&lt;a name=&quot;p147&quot; id=&quot;p147&quot;&gt;&lt;/a&gt; Agents MUST NOT
ignore message metadata without the consent of the user.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p148&quot; id=&quot;p148&quot;&gt;&lt;/a&gt;Thus, for example, if the parties
responsible for &quot;weather.example.com&quot; mistakenly label the
satellite photo of Oaxaca as &quot;image/gif&quot; instead of &quot;image/jpeg&quot;,
and if Nadia's browser detects a problem, Nadia's browser must not
ignore the problem (e.g., by simply rendering the JPEG image)
without Nadia's consent. Nadia's browser can notify Nadia of the
problem or notify Nadia and take corrective action.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p149&quot; id=&quot;p149&quot;&gt;&lt;/a&gt;Furthermore, representation
providers can help reduce the risk of inconsistencies through
careful assignment of representation metadata (especially that
which applies across representations). The section on &lt;a href=
&quot;#xml-media-types&quot; shape=&quot;rect&quot;&gt;media types for XML (&sect;4.5.7)&lt;/a&gt;
presents an example of reducing the risk of error by providing no
metadata about character encoding when serving XML.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p150&quot; id=&quot;p150&quot;&gt;&lt;/a&gt;The accuracy of metadata relies on
the server administrators, the authors of representations, and the
software that they use. Practically, the capabilities of the tools
and the social relationships may be the limiting factors.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p151&quot; id=&quot;p151&quot;&gt;&lt;/a&gt;The accuracy of these and other
metadata fields is just as important for dynamic Web resources,
where a little bit of thought and programming can often ensure
correct metadata for a huge number of resources.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p152&quot; id=&quot;p152&quot;&gt;&lt;/a&gt;Often there is a separation of
control between the users who create representations of resources
and the server managers who maintain the Web site software. Given
that it is generally the Web site software that provides the
metadata associated with a resource, it follows that coordination
between the server managers and content creators is required.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p153&quot; id=&quot;p153&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-metadata-association&quot; id=
&quot;pr-metadata-association&quot; shape=&quot;rect&quot;&gt;Metadata
association&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p154&quot; id=&quot;p154&quot;&gt;&lt;/a&gt; Server managers
SHOULD allow representation creators to control the metadata
associated with their representations.&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p155&quot; id=&quot;p155&quot;&gt;&lt;/a&gt;In particular, content creators
need to be able to control the content type (for extensibility) and
the character encoding (for proper internationalization).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p156&quot; id=&quot;p156&quot;&gt;&lt;/a&gt;The TAG finding &lt;cite&gt;&quot;&lt;a href=
&quot;http://www.w3.org/2001/tag/doc/mime-respect.html&quot; shape=
&quot;rect&quot;&gt;Authoritative Metadata&lt;/a&gt;&quot;&lt;/cite&gt; discusses in more detail
how to handle data/metadata inconsistency and how server
configuration can be used to avoid it.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.4. &lt;a name=&quot;safe-interaction&quot; id=&quot;safe-interaction&quot; shape=
&quot;rect&quot;&gt;Safe Interactions&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p157&quot; id=&quot;p157&quot;&gt;&lt;/a&gt;Nadia's retrieval of weather
information (an example of a read-only query or lookup) qualifies
as a &quot;safe&quot; interaction; a &lt;a name=&quot;def-safe-interaction&quot; id=
&quot;def-safe-interaction&quot;&gt;&lt;dfn&gt;safe interaction&lt;/dfn&gt;&lt;/a&gt; is one where
the agent does not incur any obligation beyond the interaction. An
agent may incur an obligation through other means (such as by
signing a contract). If an agent does not have an obligation before
a safe interaction, it does not have that obligation
afterwards.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p158&quot; id=&quot;p158&quot;&gt;&lt;/a&gt;Other Web interactions resemble
orders more than queries. These &lt;a name=&quot;def-unsafe-interaction&quot;
id=&quot;def-unsafe-interaction&quot;&gt;&lt;dfn&gt;unsafe interactions&lt;/dfn&gt;&lt;/a&gt; may
cause a change to the state of a resource and the user may be held
responsible for the consequences of these interactions. Unsafe
interactions include subscribing to a newsletter, posting to a
list, or modifying a database. &lt;strong&gt;Note:&lt;/strong&gt; In this
context, the word &quot;unsafe&quot; does not necessarily mean &quot;dangerous&quot;;
the term &quot;safe&quot; is used in section 9.1.1 of [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot;
shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;] and &quot;unsafe&quot; is the natural opposite.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p159&quot; id=&quot;p159&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p160&quot; id=&quot;p160&quot;&gt;&lt;/a&gt;Nadia decides to book a vacation to
Oaxaca at &quot;booking.example.com.&quot; She enters data into a series of
online forms and is ultimately asked for credit card information to
purchase the airline tickets. She provides this information in
another form. When she presses the &quot;Purchase&quot; button, her browser
opens another network connection to the server at
&quot;booking.example.com&quot; and sends a message composed of form data
using the POST method. This is an &lt;a class=&quot;int&quot; href=&quot;#def-unsafe-interaction&quot;
shape=&quot;rect&quot;&gt;unsafe interaction&lt;/a&gt;; Nadia wishes to change the
state of the system by exchanging money for airline tickets.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p161&quot; id=&quot;p161&quot;&gt;&lt;/a&gt;The server reads the POST request,
and after performing the booking transaction returns a message to
Nadia's browser that contains a representation of the results of
Nadia's request. The representation data is in XHTML so that it can
be saved or printed out for Nadia's records.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p162&quot; id=&quot;p162&quot;&gt;&lt;/a&gt;Note that neither the data
transmitted with the POST nor the data received in the response
necessarily correspond to any resource identified by a URI.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p163&quot; id=&quot;p163&quot;&gt;&lt;/a&gt;Safe interactions are important
because these are interactions where users can browse with
confidence and where agents (including search engines and browsers
that pre-cache data for the user) can follow hypertext links
safely. Users (or agents acting on their behalf) do not commit
themselves to anything by querying a resource or following a
hypertext link.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p164&quot; id=&quot;p164&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;principlelab&quot;&gt;Principle: &lt;a name=&quot;pr-deref-safe&quot; id=
&quot;pr-deref-safe&quot; shape=&quot;rect&quot;&gt;Safe retrieval&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;principle&quot;&gt;&lt;a name=&quot;p165&quot; id=&quot;p165&quot;&gt;&lt;/a&gt; Agents do not
incur obligations by retrieving a representation.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p166&quot; id=&quot;p166&quot;&gt;&lt;/a&gt;For instance, it is incorrect to
publish a URI that, when followed as part of a hypertext link,
subscribes a user to a mailing list. Remember that search engines
may follow such hypertext links.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p167&quot; id=&quot;p167&quot;&gt;&lt;/a&gt;The fact that HTTP GET, the access
method most often used when following a hypertext link, is safe
does not imply that all safe interactions must be done through HTTP
GET. At times, there may be good reasons (such as confidentiality
requirements or practical limits on URI length) to conduct an
otherwise safe operation using a mechanism generally reserved for
unsafe operations (e.g., HTTP POST).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p168&quot; id=&quot;p168&quot;&gt;&lt;/a&gt;For more information about safe and
unsafe operations using HTTP GET and POST, and handling security
concerns around the use of HTTP GET, see the TAG finding
&lt;cite&gt;&quot;&lt;a href=&quot;http://www.w3.org/2001/tag/doc/whenToUseGet.html&quot;
shape=&quot;rect&quot;&gt;URIs, Addressability, and the use of HTTP GET and
POST&lt;/a&gt;&quot;&lt;/cite&gt;.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.4.1. &lt;a name=&quot;unsafe-accountability&quot; id=
&quot;unsafe-accountability&quot; shape=&quot;rect&quot;&gt;Unsafe interactions and
accountability&lt;/a&gt;&lt;/h4&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p169&quot; id=&quot;p169&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;

&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p170&quot; id=&quot;p170&quot;&gt;&lt;/a&gt;Nadia pays for her airline tickets
online (through a POST interaction as described above). She
receives a Web page with confirmation information and wishes to
bookmark it so that she can refer to it when she calculates her
expenses. Although Nadia can print out the results, or save them to
a file, she would also like to bookmark them.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p171&quot; id=&quot;p171&quot;&gt;&lt;/a&gt;Transaction requests and results
are valuable resources, and like all valuable resources, it is
useful to be able to refer to them with a &lt;a href=
&quot;#URI-persistence&quot; shape=&quot;rect&quot;&gt;persistent URI (&sect;3.5.1)&lt;/a&gt;.
However, in practice, Nadia cannot bookmark her commitment to pay
(expressed via the POST request) or the airline company's
acknowledgment and commitment to provide her with a flight
(expressed via the response to the POST).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p172&quot; id=&quot;p172&quot;&gt;&lt;/a&gt;There are ways to provide
persistent URIs for transaction requests and their results. For
transaction requests, user agents can provide an interface for
managing transactions where the user agent has incurred an
obligation on behalf of the user. For transaction results, HTTP
allows representation providers to associate a URI with the results
of an HTTP POST request using the &quot;Content-Location&quot; header
(described in section 14.14 of [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=
&quot;rect&quot;&gt;RFC2616&lt;/a&gt;]).&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.5. &lt;a name=&quot;representation-management&quot; id=
&quot;representation-management&quot; shape=&quot;rect&quot;&gt;Representation
Management&lt;/a&gt;&lt;/h3&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p173&quot; id=&quot;p173&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p174&quot; id=&quot;p174&quot;&gt;&lt;/a&gt;Since Nadia finds the Oaxaca
weather site useful, she emails a review to her friend Dirk
recommending that he check out 'http://weather.example.com/oaxaca'.
Dirk clicks on the resulting hypertext link in the email he
receives and is frustrated by a 404 (not found). Dirk tries again
the next day and receives a representation with &quot;news&quot; that is
two-weeks old. He tries one more time the next day only to receive
a representation that claims that the weather in Oaxaca is sunny,
even though his friends in Oaxaca tell him by phone that in fact it
is raining. Dirk and Nadia conclude that the URI owners are
unreliable or unpredictable. Although the URI owner has chosen the
Web as a communication medium, the owner has lost two customers due
to ineffective representation management.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p175&quot; id=&quot;p175&quot;&gt;&lt;/a&gt;A URI owner may supply zero or more
authoritative representations of the resource identified by that
URI. There is a benefit to the community in providing
representations.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p176&quot; id=&quot;p176&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-describe-resource&quot; id=&quot;pr-describe-resource&quot;
shape=&quot;rect&quot;&gt;Available representation&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p177&quot; id=&quot;p177&quot;&gt;&lt;/a&gt; A URI owner
SHOULD provide representations of the resource it identifies&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p178&quot; id=&quot;p178&quot;&gt;&lt;/a&gt;For example, owners of XML
namespace URIs should use them to identify a &lt;a href=
&quot;#namespace-document&quot; shape=&quot;rect&quot;&gt;namespace document
(&sect;4.5.4)&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p179&quot; id=&quot;p179&quot;&gt;&lt;/a&gt;Just because representations are
available does not mean that it is always desirable to retrieve
them. In fact, in some cases the opposite is true.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p180&quot; id=&quot;p180&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;principlelab&quot;&gt;Principle: &lt;a name=&quot;pr-implied-dereference&quot; id=
&quot;pr-implied-dereference&quot; shape=&quot;rect&quot;&gt;Reference does not imply
dereference&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p id=&quot;implied-dereference&quot; class=&quot;principle&quot;&gt;An application
developer or specification author SHOULD NOT require networked
retrieval of representations each time they are referenced.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p182&quot; id=&quot;p182&quot;&gt;&lt;/a&gt;Dereferencing a URI has a
(potentially significant) cost in computing and bandwidth
resources, may have security implications, and may impose
significant latency on the dereferencing application. Dereferencing
URIs should be avoided except when necessary.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p183&quot; id=&quot;p183&quot;&gt;&lt;/a&gt;The following sections discuss some
aspects of representation management, including promoting &lt;a href=
&quot;#URI-persistence&quot; shape=&quot;rect&quot;&gt;URI persistence (&sect;3.5.1)&lt;/a&gt;,
managing &lt;a class=&quot;int&quot; href=&quot;#id-access&quot; shape=&quot;rect&quot;&gt;access to resources
(&sect;3.5.2)&lt;/a&gt;, and &lt;a class=&quot;int&quot; href=&quot;#supporting-navigation&quot; shape=
&quot;rect&quot;&gt;supporting navigation (&sect;3.5.3)&lt;/a&gt;.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.5.1. &lt;a name=&quot;URI-persistence&quot; id=&quot;URI-persistence&quot; shape=
&quot;rect&quot;&gt;URI persistence&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p184&quot; id=&quot;p184&quot;&gt;&lt;/a&gt;As is the case with many human
interactions, confidence in interactions via the Web depends on
stability and predictability. For an information resource,
persistence depends on the consistency of representations. The
representation provider decides when representations are
sufficiently consistent (although that determination generally
takes user expectations into account).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p185&quot; id=&quot;p185&quot;&gt;&lt;/a&gt;Although persistence in this case
is observable as a result of representation retrieval, the term
&lt;a name=&quot;def-URI-persistence&quot; id=&quot;def-URI-persistence&quot;&gt;&lt;dfn&gt;URI
persistence&lt;/dfn&gt;&lt;/a&gt; is used to describe the desirable property
that, once associated with a resource, a URI should continue
indefinitely to refer to that resource.&lt;/p&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p186&quot; id=&quot;p186&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-service-uri&quot; id=&quot;pr-service-uri&quot; shape=
&quot;rect&quot;&gt;Consistent representation&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p187&quot; id=&quot;p187&quot;&gt;&lt;/a&gt; A URI owner
SHOULD provide representations of the identified resource
consistently and predictably.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p188&quot; id=&quot;p188&quot;&gt;&lt;/a&gt;URI persistence is a matter of
policy and commitment on the part of the &lt;a class=&quot;int&quot; href=&quot;#uri-ownership&quot;
shape=&quot;rect&quot;&gt;URI owner&lt;/a&gt;. The choice of a particular URI scheme
provides no guarantee that those URIs will be persistent or that
they will not be persistent.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p189&quot; id=&quot;p189&quot;&gt;&lt;/a&gt;HTTP [&lt;a class=&quot;int&quot; href=&quot;#RFC2616&quot; shape=
&quot;rect&quot;&gt;RFC2616&lt;/a&gt;] has been designed to help manage URI
persistence. For example, HTTP redirection (using the 3xx response
codes) permits servers to tell an agent that further action needs
to be taken by the agent in order to fulfill the request (for
example, a new URI is associated with the resource).&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p190&quot; id=&quot;p190&quot;&gt;&lt;/a&gt; In addition, &lt;a class=&quot;int&quot; href=&quot;#def-coneg&quot;
shape=&quot;rect&quot;&gt;content negotiation&lt;/a&gt; also promotes consistency, as
a site manager is not required to define new URIs when adding
support for a new format specification. Protocols that do not
support content negotiation (such as FTP) require a new identifier
when a new data format is introduced. Improper use of content
negotiation can lead to inconsistent representations.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p191&quot; id=&quot;p191&quot;&gt;&lt;/a&gt;For more discussion about URI
persistence, see [&lt;a class=&quot;int&quot; href=&quot;#Cool&quot; shape=&quot;rect&quot;&gt;Cool&lt;/a&gt;].&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.5.2. &lt;a name=&quot;id-access&quot; id=&quot;id-access&quot; shape=&quot;rect&quot;&gt;Linking
and access control&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p192&quot; id=&quot;p192&quot;&gt;&lt;/a&gt;It is reasonable to limit access to
a resource (for commercial or security reasons, for example), but
merely identifying the resource is like referring to a book by
title. In exceptional circumstances, people may have agreed to keep
titles or URIs confidential (for example, a book author and a
publisher may agree to keep the URI of page containing additional
material secret until after the book is published), otherwise they
are free to exchange them.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p193&quot; id=&quot;p193&quot;&gt;&lt;/a&gt;As an analogy: The owners of a
building might have a policy that the public may only enter the
building via the main front door, and only during business hours.
People who work in the building and who make deliveries to it might
use other doors as appropriate. Such a policy would be enforced by
a combination of security personnel and mechanical devices such as
locks and pass-cards. One would not enforce this policy by hiding
some of the building entrances, nor by requesting legislation
requiring the use of the front door and forbidding anyone to reveal
the fact that there are other doors to the building.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p194&quot; id=&quot;p194&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p195&quot; id=&quot;p195&quot;&gt;&lt;/a&gt;Nadia sends to Dirk the URI of the
current article she is reading. With his browser, Dirk follows the
hypertext link and is asked to enter his subscriber username and
password. Since Dirk is also a subscriber to services provided by
&quot;weather.example.com,&quot; he can access the same information as Nadia.
Thus, the authority for &quot;weather.example.com&quot; can limit access to
authorized parties and still provide the benefits of URIs.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p196&quot; id=&quot;p196&quot;&gt;&lt;/a&gt;The Web provides several mechanisms
to control access to resources; these mechanisms do not rely on
hiding or suppressing URIs for those resources. For more
information, see the TAG finding &lt;cite&gt;&quot;&lt;a href=
&quot;http://www.w3.org/2001/tag/doc/deeplinking.html&quot; shape=
&quot;rect&quot;&gt;'Deep Linking' in the World Wide Web&lt;/a&gt;&quot;&lt;/cite&gt;.&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;3.5.3. &lt;a name=&quot;supporting-navigation&quot; id=
&quot;supporting-navigation&quot; shape=&quot;rect&quot;&gt;Supporting Navigation&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p197&quot; id=&quot;p197&quot;&gt;&lt;/a&gt;It is a strength of Web
Architecture that links can be made and shared; a user who has
found an interesting part of the Web can share this experience just
by republishing a URI.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p198&quot; id=&quot;p198&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p199&quot; id=&quot;p199&quot;&gt;&lt;/a&gt;Nadia and Dirk want to visit the
Museum of Weather Forecasting in Oaxaca. Nadia goes to
&quot;http://maps.example.com&quot;, locates the museum, and mails the URI
&quot;http://maps.example.com/oaxaca?lat=17.065;lon=-96.716;scale=6&quot; to
Dirk. Dirk goes to &quot;http://mymaps.example.com&quot;, locates the museum,
and mails the URI
&quot;http://mymaps.example.com/geo?sessionID=765345;userID=Dirk&quot; to
Nadia. Dirk reads Nadia's email and is able to follow the link to
the map. Nadia reads Dirk's email, follows the link, and receives
an error message 'No such session/user'. Nadia has to start again
from &quot;http://mymaps.example.com&quot; and find the museum location once
more.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p200&quot; id=&quot;p200&quot;&gt;&lt;/a&gt;For resources that are generated on
demand, machine generation of URIs is common. For resources that
might usefully be bookmarked for later perusal, or shared with
others, server managers should avoid needlessly restricting the
reusability of such URIs. If the intention is to restrict
information to a particular user, as might be the case in a home
banking application for example, designers should use appropriate

&lt;a class=&quot;int&quot; href=&quot;#id-access&quot; shape=&quot;rect&quot;&gt;access control (&sect;3.5.2)&lt;/a&gt;
mechanisms.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p201&quot; id=&quot;p201&quot;&gt;&lt;/a&gt;Interactions conducted with HTTP
POST (where HTTP GET could have been used) also limit navigation
possibilities. The user cannot create a bookmark or share the URI
because HTTP POST transactions do not typically result in a
different URI as the user interacts with the site.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;3.6. &lt;a name=&quot;interaction-future&quot; id=&quot;interaction-future&quot;
shape=&quot;rect&quot;&gt;Future Directions for Interaction&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p202&quot; id=&quot;p202&quot;&gt;&lt;/a&gt;There remain open questions
regarding Web interactions. The TAG expects future versions of this
document to address in more detail the relationship between the
architecture described herein, &lt;a href=&quot;http://www.w3.org/2002/ws/&quot;
shape=&quot;rect&quot;&gt;Web Services&lt;/a&gt;, peer-to-peer systems, instant
messaging systems (such as [&lt;a class=&quot;int&quot; href=&quot;#RFC3920&quot; shape=
&quot;rect&quot;&gt;RFC3920&lt;/a&gt;]), streaming audio (such as RTSP [&lt;a href=
&quot;#RFC2326&quot; shape=&quot;rect&quot;&gt;RFC2326&lt;/a&gt;]), and voice-over-IP (such as
SIP [&lt;a class=&quot;int&quot; href=&quot;#RFC3261&quot; shape=&quot;rect&quot;&gt;RFC3261&lt;/a&gt;]).&lt;/p&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;4. &lt;a id=&quot;formats&quot; name=&quot;formats&quot; shape=&quot;rect&quot;&gt;Data
Formats&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p203&quot; id=&quot;p203&quot;&gt;&lt;/a&gt;A data format specification (for
example, for XHTML, RDF/XML, SMIL, XLink, CSS, and PNG) embodies an
agreement on the correct interpretation of &lt;a href=
&quot;#def-representation&quot; shape=&quot;rect&quot;&gt;representation&lt;/a&gt; data. The
first data format used on the Web was HTML. Since then, data
formats have grown in number. Web architecture does not constrain
which data formats content providers can use. This flexibility is
important because there is constant evolution in applications,
resulting in new data formats and refinements of existing formats.
Although Web architecture allows for the deployment of new data
formats, the creation and deployment of new formats (and agents
able to handle them) is expensive. Thus, before inventing a new
data format (or &quot;meta&quot; format such as XML), designers should
carefully consider re-using one that is already available.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p204&quot; id=&quot;p204&quot;&gt;&lt;/a&gt;For a data format to be usefully
interoperable between two parties, the parties must agree (to a
reasonable extent) about its syntax and semantics. Shared
understanding of a data format promotes interoperability but does
not imply constraints on usage; for instance, a sender of data
cannot count on being able to constrain the behavior of a data
receiver.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p205&quot; id=&quot;p205&quot;&gt;&lt;/a&gt;Below we describe some
characteristics of a data format that facilitate integration into
Web architecture. This document does not address generally
beneficial characteristics of a specification such as readability,
simplicity, attention to programmer goals, attention to user needs,
accessibility, nor internationalization. The section on &lt;a href=
&quot;#archspecs&quot; shape=&quot;rect&quot;&gt;architectural specifications (&sect;7.1)&lt;/a&gt;
includes references to additional format specification
guidelines.&lt;/p&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.1. &lt;a name=&quot;binary&quot; id=&quot;binary&quot; shape=&quot;rect&quot;&gt;Binary and
Textual Data Formats&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p206&quot; id=&quot;p206&quot;&gt;&lt;/a&gt;Binary data formats are those in
which portions of the data are encoded for direct use by computer
processors, for example 32 bit little-endian two's-complement and
64 bit IEEE double-precision floating-point. The portions of data
so represented include numeric values, pointers, and compressed
data of all sorts.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p207&quot; id=&quot;p207&quot;&gt;&lt;/a&gt;A textual data format is one in
which the data is specified in a defined encoding as a sequence of
characters. HTML, Internet e-mail, and all &lt;a class=&quot;int&quot; href=&quot;#xml-formats&quot;
shape=&quot;rect&quot;&gt;XML-based formats (&sect;4.5)&lt;/a&gt; are textual.
Increasingly, internationalized textual data formats refer to the
Unicode repertoire [&lt;a class=&quot;int&quot; href=&quot;#UNICODE&quot; shape=&quot;rect&quot;&gt;UNICODE&lt;/a&gt;]
for character definitions.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p208&quot; id=&quot;p208&quot;&gt;&lt;/a&gt;If a data format is textual, as
defined in this section, that does not imply that it should be
served with a media type beginning with &quot;text/&quot;. Although XML-based
formats are textual, many XML-based formats do not consist
primarily of phrases in natural language. See the section on
&lt;a class=&quot;int&quot; href=&quot;#xml-media-types&quot; shape=&quot;rect&quot;&gt;media types for XML
(&sect;4.5.7)&lt;/a&gt; for issues that arise when &quot;text/&quot; is used in
conjunction with an XML-based format.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p209&quot; id=&quot;p209&quot;&gt;&lt;/a&gt;In principle, all data can be
represented using textual formats. In practice, some types of
content (e.g., audio and video) are generally represented using
binary formats.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p210&quot; id=&quot;p210&quot;&gt;&lt;/a&gt;The trade-offs between binary and
textual data formats are complex and application-dependent. Binary
formats can be substantially more compact, particularly for complex
pointer-rich data structures. Also, they can be consumed more
rapidly by agents in those cases where they can be loaded into
memory and used with little or no conversion. Note, however, that
such cases are relatively uncommon as such direct use may open the
door to security issues that can only practically be addressed by
examining every aspect of the data structure in detail.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p211&quot; id=&quot;p211&quot;&gt;&lt;/a&gt;Textual formats are usually more
portable and interoperable. Textual formats also have the
considerable advantage that they can be directly read by human
beings (and understood, given sufficient documentation). This can
simplify the tasks of creating and maintaining software, and allow
the direct intervention of humans in the processing chain without
recourse to tools more complex than the ubiquitous text editor.
Finally, it simplifies the necessary human task of learning about
new data formats; this is called the &quot;view source&quot; effect.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p212&quot; id=&quot;p212&quot;&gt;&lt;/a&gt;It is important to emphasize that
intuition as to such matters as data size and processing speed is
not a reliable guide in data format design; quantitative studies
are essential to a correct understanding of the trade-offs.
Therefore, designers of a data format specification should make a
considered choice between binary and textual format design.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p213&quot; id=&quot;p213&quot;&gt;&lt;/a&gt;See TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#binaryXML-30&quot; shape=
&quot;rect&quot;&gt;binaryXML-30&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.2. &lt;a name=&quot;ext-version&quot; id=&quot;ext-version&quot; shape=
&quot;rect&quot;&gt;Versioning and Extensibility&lt;/a&gt;&lt;/h3&gt;

&lt;p&gt;&lt;a name=&quot;p214&quot; id=&quot;p214&quot;&gt;&lt;/a&gt;In a perfect world, language
designers would invent languages that perfectly met the
requirements presented to them, the requirements would be a perfect
model of the world, they would never change over time, and all
implementations would be perfectly interoperable because the
specifications would have no variability.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p215&quot; id=&quot;p215&quot;&gt;&lt;/a&gt;In the real world, language
designers imperfectly address the requirements as they interpret
them, the requirements inaccurately model the world, conflicting
requirements are presented, and they change over time. As a result,
designers negotiate with users, make compromises, and often
introduce extensibility mechanisms so that it is possible to work
around problems in the short term. In the long term, they produce
multiple versions of their languages, as the problem, and their
understanding of it, evolve. The resulting variability in
specifications, languages, and implementations introduces
interoperability costs.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p216&quot; id=&quot;p216&quot;&gt;&lt;/a&gt;Extensibility and versioning are
strategies to help manage the natural evolution of information on
the Web and technologies used to represent that information. For
more information about how these strategies introduce variability
and how that variability impacts interoperability, see &lt;a href=
&quot;#SPECVAR&quot; shape=&quot;rect&quot;&gt;Variability in Specifications&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p217&quot; id=&quot;p217&quot;&gt;&lt;/a&gt;See TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#XMLVersioning-41&quot; shape=
&quot;rect&quot;&gt;XMLVersioning-41&lt;/a&gt;, which concerns good practices for
designing extensible XML languages and for handling versioning. See
also &quot;Web Architecture: Extensible Languages&quot; [&lt;a class=&quot;int&quot; href=&quot;#EXTLANG&quot;
shape=&quot;rect&quot;&gt;EXTLANG&lt;/a&gt;].&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.2.1. &lt;a name=&quot;versioning&quot; id=&quot;versioning&quot; shape=
&quot;rect&quot;&gt;Versioning&lt;/a&gt;&lt;/h4&gt;

&lt;p&gt;&lt;a name=&quot;p218&quot; id=&quot;p218&quot;&gt;&lt;/a&gt;There is typically a (long)
transition period during which multiple versions of a format,
protocol, or agent are simultaneously in use.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p219&quot; id=&quot;p219&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-version-info&quot; id=&quot;pr-version-info&quot; shape=
&quot;rect&quot;&gt;Version information&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p220&quot; id=&quot;p220&quot;&gt;&lt;/a&gt; A data format
specification SHOULD provide for version information.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.2.2. &lt;a name=&quot;versioning-xmlns&quot; id=&quot;versioning-xmlns&quot; shape=
&quot;rect&quot;&gt;Versioning and XML namespace policy&lt;/a&gt;&lt;/h4&gt;
&lt;div class=&quot;boxedtext&quot;&gt;

&lt;p&gt;&lt;a name=&quot;p221&quot; id=&quot;p221&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p222&quot; id=&quot;p222&quot;&gt;&lt;/a&gt;Nadia and Dirk are designing an XML
data format to encode data about the film industry. They provide
for extensibility by using XML namespaces and creating a schema
that allows the inclusion, in certain places, of elements from any
namespace. When they revise their format, Nadia proposes a new
optional &lt;code&gt;lang&lt;/code&gt; attribute on the &lt;code&gt;film&lt;/code&gt;
element. Dirk feels that such a change requires them to assign a
new namespace name, which might require changes to deployed
software. Nadia explains to Dirk that their choice of extensibility
strategy in conjunction with their namespace policy allows certain
changes that do not affect conformance of existing content and
software, and thus no change to the namespace identifier is
required. They chose this policy to help them meet their goals of
reducing the cost of change.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p223&quot; id=&quot;p223&quot;&gt;&lt;/a&gt;Dirk and Nadia have chosen a
particular namespace change policy that allows them to avoid
changing the namespace name whenever they make changes that do not
affect conformance of deployed content and software. They might
have chosen a different policy, for example that any new element or
attribute has to belong to a namespace other than the original one.
Whatever the chosen policy, it should set clear expectations for
users of the format.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p224&quot; id=&quot;p224&quot;&gt;&lt;/a&gt;In general, changing the namespace
name of an element completely changes the element name. If &quot;a&quot; and
&quot;b&quot; are bound to two different URIs, &lt;code&gt;a:element&lt;/code&gt; and

&lt;code&gt;b:element&lt;/code&gt; are as distinct as &lt;code&gt;a:eieio&lt;/code&gt; and
&lt;code&gt;a:xyzzy&lt;/code&gt;. Practically speaking, this means that
deployed applications will have to be upgraded in order to
recognize the new language; the cost of this upgrade may be very
high.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p225&quot; id=&quot;p225&quot;&gt;&lt;/a&gt;It follows that there are
significant tradeoffs to be considered when deciding on a namespace
change policy. If a vocabulary has no extensibility points (that
is, if it does not allow elements or attributes from foreign
namespaces or have a mechanism for dealing with unrecognized names
from the same namespace), it may be absolutely necessary to change
the namespace name. Languages that allow some form of extensibility
without requiring a change to the namespace name are more likely to
evolve gracefully.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p226&quot; id=&quot;p226&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-doc-ns-policy&quot; id=&quot;pr-doc-ns-policy&quot; shape=
&quot;rect&quot;&gt;Namespace policy&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p227&quot; id=&quot;p227&quot;&gt;&lt;/a&gt; An XML format
specification SHOULD include information about change policies for
XML namespaces.&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p228&quot; id=&quot;p228&quot;&gt;&lt;/a&gt;As an example of a change policy
designed to reflect the variable stability of a namespace, consider
the &lt;a href=&quot;http://www.w3.org/1999/10/nsuri&quot; shape=&quot;rect&quot;&gt;W3C
namespace policy&lt;/a&gt; for documents on the W3C Recommendation track.
The policy sets expectations that the Working Group responsible for
the namespace may modify it in any way until a certain point in the
process (&quot;Candidate Recommendation&quot;) at which point W3C constrains
the set of possible changes to the namespace in order to promote
stable implementations.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p229&quot; id=&quot;p229&quot;&gt;&lt;/a&gt;Note that since namespace names are
URIs, the owner of a namespace URI has the authority to decide the
namespace change policy.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.2.3. &lt;a name=&quot;extensibility&quot; id=&quot;extensibility&quot; shape=
&quot;rect&quot;&gt;Extensibility&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p230&quot; id=&quot;p230&quot;&gt;&lt;/a&gt;Requirements change over time.
Successful technologies are adopted and adapted by new users.
Designers can facilitate the transition process by making careful
choices about extensibility during the design of a language or
protocol specification.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p231&quot; id=&quot;p231&quot;&gt;&lt;/a&gt;In making these choices, the
designers must weigh the trade-offs between extensibility,
simplicity, and variability. A language without extensibility
mechanisms may be simpler and less variable, improving initial
interoperability. However, it's likely that changes to that
language will be more difficult, possibly more complex and more
variable, than if the initial design had provided such mechanisms.
This may decrease interoperability over the long term.&lt;/p&gt;

&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p232&quot; id=&quot;p232&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-allow-exts&quot; id=&quot;pr-allow-exts&quot; shape=
&quot;rect&quot;&gt;Extensibility mechanisms&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p233&quot; id=&quot;p233&quot;&gt;&lt;/a&gt; A specification
SHOULD provide mechanisms that allow any party to create
extensions.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p234&quot; id=&quot;p234&quot;&gt;&lt;/a&gt;Extensibility introduces
variability which has an impact on interoperability. However,
languages that have no extensibility mechanisms may be extended in
ad hoc ways that impact interoperability as well. One key criterion
of the mechanisms provided by language designers is that they allow
the extended languages to remain in conformance with the original
specification, increasing the likelihood of interoperability.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p235&quot; id=&quot;p235&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-conform-exts&quot; id=&quot;pr-conform-exts&quot; shape=
&quot;rect&quot;&gt;Extensibility conformance&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p236&quot; id=&quot;p236&quot;&gt;&lt;/a&gt; Extensibility
MUST NOT interfere with conformance to the original
specification.&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p237&quot; id=&quot;p237&quot;&gt;&lt;/a&gt;Application needs determine the
most appropriate extension strategy for a specification. For
example, applications designed to operate in closed environments
may allow specification designers to define a versioning strategy
that would be impractical at the scale of the Web.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p238&quot; id=&quot;p238&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-unknown-extension&quot; id=&quot;pr-unknown-extension&quot;
shape=&quot;rect&quot;&gt;Unknown extensions&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p239&quot; id=&quot;p239&quot;&gt;&lt;/a&gt; A specification
SHOULD specify agent behavior in the face of unrecognized
extensions.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p240&quot; id=&quot;p240&quot;&gt;&lt;/a&gt;Two strategies have emerged as
being particularly useful:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;&quot;Must ignore&quot;: The agent ignores any content it does not
recognize.&lt;/li&gt;

&lt;li&gt;&quot;Must understand&quot;: The agent treats unrecognized markup as an
error condition.&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p241&quot; id=&quot;p241&quot;&gt;&lt;/a&gt;A powerful design approach is for
the language to allow either form of extension, but to distinguish
explicitly between them in the syntax.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p242&quot; id=&quot;p242&quot;&gt;&lt;/a&gt;Additional strategies include
prompting the user for more input and automatically retrieving data
from available hypertext links. More complex strategies are also
possible, including mixing strategies. For instance, a language can
include mechanisms for overriding standard behavior. Thus, a data
format can specify &quot;must ignore&quot; semantics but also allow for
extensions that override that semantics in light of application
needs (for instance, with &quot;must understand&quot; semantics for a
particular extension).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p243&quot; id=&quot;p243&quot;&gt;&lt;/a&gt;Extensibility is not free.
Providing hooks for extensibility is one of many requirements to be
factored into the costs of language design. Experience suggests
that the long term benefits of a well-designed extensibility
mechanism generally outweigh the costs.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p244&quot; id=&quot;p244&quot;&gt;&lt;/a&gt;See &ldquo;&lt;a href=
&quot;http://www.w3.org/TR/qaframe-spec/#extensions&quot; shape=&quot;rect&quot;&gt;D.3
Extensibility and Extensions&lt;/a&gt;&rdquo; in [&lt;a class=&quot;int&quot; href=&quot;#QA&quot; shape=
&quot;rect&quot;&gt;QA&lt;/a&gt;].&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;

&lt;h4&gt;4.2.4. &lt;a name=&quot;composition&quot; id=&quot;composition&quot; shape=
&quot;rect&quot;&gt;Composition of data formats&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p245&quot; id=&quot;p245&quot;&gt;&lt;/a&gt;Many modern data format include
mechanisms for composition. For example:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;It is possible to embed text comments in some image formats,
such as JPEG/JFIF. Although these comments are embedded in the
containing data, they are not intended to affect the display of the
image.&lt;/li&gt;
&lt;li&gt;There are container formats such as SOAP which fully expect
content from multiple namespaces but which provide an overall
semantic relationship of message envelope and payload.&lt;/li&gt;
&lt;li&gt;The semantics of combining RDF documents containing multiple
vocabularies are well-defined.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p246&quot; id=&quot;p246&quot;&gt;&lt;/a&gt;In principle, these relationships
can be mixed and nested arbitrarily. A SOAP message, for example,
can contain an SVG image that contains an RDF comment which refers
to a vocabulary of terms for describing the image.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p247&quot; id=&quot;p247&quot;&gt;&lt;/a&gt;Note however, that for general XML
there is no semantic model that defines the interactions within XML
documents with elements and/or attributes from a variety of
namespaces. Each application must define how namespaces interact
and what effect the namespace of an element has on the element's
ancestors, siblings, and descendants.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p248&quot; id=&quot;p248&quot;&gt;&lt;/a&gt;See TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#mixedUIXMLNamespace-33&quot;
shape=&quot;rect&quot;&gt;mixedUIXMLNamespace-33&lt;/a&gt; (concerning the meaning of
a document composed of content in multiple namespaces), &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#xmlFunctions-34&quot; shape=
&quot;rect&quot;&gt;xmlFunctions-34&lt;/a&gt; (concerning one approach for managing
XML transformation and composability), and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#RDFinXHTML-35&quot; shape=
&quot;rect&quot;&gt;RDFinXHTML-35&lt;/a&gt; (concerning the interpretation of RDF when
embedded in an XHTML document).&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.3. &lt;a name=&quot;pci&quot; id=&quot;pci&quot; shape=&quot;rect&quot;&gt;Separation of Content,
Presentation, and Interaction&lt;/a&gt;&lt;/h3&gt;

&lt;p&gt;&lt;a name=&quot;p249&quot; id=&quot;p249&quot;&gt;&lt;/a&gt;The Web is a heterogeneous
environment where a wide variety of agents provide access to
content to users with a wide variety of capabilities. It is good
practice for authors to create content that can reach the widest
possible audience, including users with graphical desktop
computers, hand-held devices and mobile phones, users with
disabilities who may require speech synthesizers, and devices not
yet imagined. Furthermore, authors cannot predict in some cases how
an agent will display or process their content. Experience shows
that the separation of content, presentation, and interaction
promotes the reuse and device-independence of content; this follows
from the &lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot; shape=&quot;rect&quot;&gt;principle of
orthogonal specifications (&sect;5.1)&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p250&quot; id=&quot;p250&quot;&gt;&lt;/a&gt;This separation also facilitates
reuse of authored source content across multiple delivery contexts.
Sometimes, functional user experiences suited to any delivery
context can be generated by using an adaptation process applied to
a representation that does not depend on the access mechanism. For
more information about principles of device-independence, see
[&lt;a class=&quot;int&quot; href=&quot;#DIPRINCIPLES&quot; shape=&quot;rect&quot;&gt;DIPRINCIPLES&lt;/a&gt;].&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p251&quot; id=&quot;p251&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;cpi&quot; id=&quot;cpi&quot; shape=&quot;rect&quot;&gt;Separation of
content, presentation, interaction&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p252&quot; id=&quot;p252&quot;&gt;&lt;/a&gt; A specification
SHOULD allow authors to separate content from both presentation and
interaction concerns.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p253&quot; id=&quot;p253&quot;&gt;&lt;/a&gt;Note that when content,
presentation, and interaction are separated by design, agents need
to recombine them. There is a recombination spectrum, with &quot;client
does all&quot; at one end and &quot;server does all&quot; at the other.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p254&quot; id=&quot;p254&quot;&gt;&lt;/a&gt;There are advantages to each
approach. For instance when a client (such as a mobile phone)
communicates device capabilities to the server (for example, using
CC/PP), the server can tailor the delivered content to fit that
client. The server can, for example, enable faster downloads by
adjusting links to refer to lower resolution images, smaller video
or no video at all. Similarly, if the content has been authored
with multiple branches, the server can remove unused branches
before delivery. In addition, by tailoring the content to match the
characteristics of a target client, the server can help reduce
client side computation. However, specializing content in this
manner reduces caching efficiency.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p255&quot; id=&quot;p255&quot;&gt;&lt;/a&gt;On the other hand, designing
content that that can be recombined on the client also tends to
make that content applicable to a wider range of devices. This
design also improves caching efficiency and offers users more
presentation options. Media-dependent style sheets can be used to
tailor the content on the client side to particular groups of
target devices. For textual content with a regular and repeating
structure, the combined size of the text content plus the style
sheet is typically less than that of fully recombined content; the
savings improve further if the style sheet is reused by other
pages.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p256&quot; id=&quot;p256&quot;&gt;&lt;/a&gt;In practice a combination of both
approaches is often used. The design decision about where on this
spectrum an application should be placed depends on the power on
the client, the power and the load on the server, and the bandwidth
of the medium that connects them. If the number of possible clients
is unbounded, the application will scale better if more computation
is pushed to the client.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p257&quot; id=&quot;p257&quot;&gt;&lt;/a&gt;Of course, it may not be desirable
to reach the widest possible audience. Designers should consider
appropriate technologies, such as encryption and &lt;a href=
&quot;#id-access&quot; shape=&quot;rect&quot;&gt;access control (&sect;3.5.2)&lt;/a&gt;, for limiting
the audience.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p258&quot; id=&quot;p258&quot;&gt;&lt;/a&gt;Some data formats are designed to
describe presentation (including SVG and XSL Formatting Objects).
Data formats such as these demonstrate that one can only separate
content from presentation (or interaction) so far; at some point it
becomes necessary to talk about presentation. Per the principle of
&lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot; shape=&quot;rect&quot;&gt;orthogonal specifications
(&sect;5.1)&lt;/a&gt; these data formats should &lt;em&gt;only&lt;/em&gt; address
presentation issues.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p259&quot; id=&quot;p259&quot;&gt;&lt;/a&gt;See the TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#formattingProperties-19&quot;
shape=&quot;rect&quot;&gt;formattingProperties-19&lt;/a&gt; (concerning
interoperability in the case of formatting properties and names)
and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#contentPresentation-26&quot;
shape=&quot;rect&quot;&gt;contentPresentation-26&lt;/a&gt; (concerning the separation
of semantic and presentational markup).&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.4. &lt;a name=&quot;hypertext&quot; id=&quot;hypertext&quot; shape=
&quot;rect&quot;&gt;Hypertext&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p260&quot; id=&quot;p260&quot;&gt;&lt;/a&gt;A defining characteristic of the
Web is that it allows embedded references to other resources via
URIs. The simplicity of creating hypertext links using absolute
URIs (&lt;code&gt;&amp;lt;a href=&quot;http://www.example.com/foo&quot;&amp;gt;&lt;/code&gt;) and
relative URI references (&lt;code&gt;&amp;lt;a href=&quot;foo&quot;&amp;gt;&lt;/code&gt; and

&lt;code&gt;&amp;lt;a href=&quot;foo#anchor&quot;&amp;gt;&lt;/code&gt;) is partly (perhaps
largely) responsible for the success of the hypertext Web as we
know it today.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p261&quot; id=&quot;p261&quot;&gt;&lt;/a&gt;When a representation of one
resource contains a reference to another resource, expressed with a
URI identifying that other resource, this constitutes a &lt;a name=
&quot;def-link&quot; id=&quot;def-link&quot;&gt;&lt;dfn&gt;link&lt;/dfn&gt;&lt;/a&gt; between the two
resources. Additional metadata may also form part of the link (see
[&lt;a class=&quot;int&quot; href=&quot;#XLink10&quot; shape=&quot;rect&quot;&gt;XLink10&lt;/a&gt;], for example).
&lt;strong&gt;Note:&lt;/strong&gt; In this document, the term &quot;link&quot; generally
means &quot;relationship&quot;, not &quot;physical connection&quot;.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p262&quot; id=&quot;p262&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;link-mechanism&quot; id=&quot;link-mechanism&quot; shape=
&quot;rect&quot;&gt;Link identification&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p263&quot; id=&quot;p263&quot;&gt;&lt;/a&gt; A specification
SHOULD provide ways to identify links to other resources, including
to secondary resources (via fragment identifiers).&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p264&quot; id=&quot;p264&quot;&gt;&lt;/a&gt;Formats that allow content authors
to use URIs instead of local identifiers promote the network
effect: the value of these formats grows with the size of the
deployed Web.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p265&quot; id=&quot;p265&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;web-linking&quot; id=&quot;web-linking&quot; shape=&quot;rect&quot;&gt;Web
linking&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p266&quot; id=&quot;p266&quot;&gt;&lt;/a&gt; A specification
SHOULD allow Web-wide linking, not just internal document
linking.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p267&quot; id=&quot;p267&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;generic-uri&quot; id=&quot;generic-uri&quot; shape=
&quot;rect&quot;&gt;Generic URIs&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p268&quot; id=&quot;p268&quot;&gt;&lt;/a&gt; A specification
SHOULD allow content authors to use URIs without constraining them
to a limited set of URI schemes.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p269&quot; id=&quot;p269&quot;&gt;&lt;/a&gt;What agents do with a hypertext
link is not constrained by Web architecture and may depend on
application context. Users of hypertext links expect to be able to
navigate among representations by following links.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p270&quot; id=&quot;p270&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;use-hypertext-links&quot; id=&quot;use-hypertext-links&quot;
shape=&quot;rect&quot;&gt;Hypertext links&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p271&quot; id=&quot;p271&quot;&gt;&lt;/a&gt; A data format
SHOULD incorporate hypertext links if hypertext is the expected
user interface paradigm.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p272&quot; id=&quot;p272&quot;&gt;&lt;/a&gt;Data formats that do not allow
content authors to create hypertext links lead to the creation of
&quot;terminal nodes&quot; on the Web.&lt;/p&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.4.1. &lt;a name=&quot;uri-refs&quot; id=&quot;uri-refs&quot; shape=&quot;rect&quot;&gt;URI
references&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p273&quot; id=&quot;p273&quot;&gt;&lt;/a&gt;Links are commonly expressed using
&lt;a name=&quot;uriref&quot; id=&quot;uriref&quot;&gt;&lt;dfn&gt;URI references&lt;/dfn&gt;&lt;/a&gt; (defined
in section 4.2 of [&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;]), which may
be combined with a base URI to yield a usable URI. Section 5.1 of
[&lt;a class=&quot;int&quot; href=&quot;#URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;] explains different ways to
establish a base URI for a resource and establishes a precedence
among them. For instance, the base URI may be a URI for the
resource, or specified in a representation (see the
&lt;code&gt;base&lt;/code&gt; elements provided by HTML and XML, and the HTTP
'Content-Location' header). See also the section on &lt;a class=
&quot;addrefnb&quot; href=&quot;#xml-links&quot; shape=&quot;rect&quot;&gt;links in XML
(&sect;4.5.2)&lt;/a&gt;.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p274&quot; id=&quot;p274&quot;&gt;&lt;/a&gt;Agents resolve a URI reference
before using the resulting URI to interact with another agent. URI
references help in content management by allowing content authors
to design a representation locally, i.e., without concern for which
global identifier may later be used to refer to the associated
resource.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.5. &lt;a id=&quot;xml-formats&quot; name=&quot;xml-formats&quot; shape=
&quot;rect&quot;&gt;XML-Based Data Formats&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p275&quot; id=&quot;p275&quot;&gt;&lt;/a&gt;Many data formats are &lt;a name=
&quot;xml-based&quot; id=&quot;xml-based&quot;&gt;&lt;dfn&gt;XML-based&lt;/dfn&gt;&lt;/a&gt;, that is to say
they conform to the syntax rules defined in the XML specification
[&lt;a class=&quot;int&quot; href=&quot;#XML10&quot; shape=&quot;rect&quot;&gt;XML10&lt;/a&gt;] or [&lt;a class=&quot;int&quot; href=&quot;#XML11&quot;
shape=&quot;rect&quot;&gt;XML11&lt;/a&gt;]. This section discusses issues that are
specific to such formats. Anyone seeking guidance in this area is
urged to consult the &quot;Guidelines For the Use of XML in IETF
Protocols&quot; &lt;a class=&quot;int&quot; href=&quot;#IETFXML&quot; shape=&quot;rect&quot;&gt;[IETFXML]&lt;/a&gt;, which
contains a thorough discussion of the considerations that govern
whether or not XML ought to be used, as well as specific guidelines
on how it ought to be used. While it is directed at Internet
applications with specific reference to protocols, the discussion
is generally applicable to Web scenarios as well.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p276&quot; id=&quot;p276&quot;&gt;&lt;/a&gt;The discussion here should be seen
as ancillary to the content of &lt;a class=&quot;int&quot; href=&quot;#IETFXML&quot; shape=
&quot;rect&quot;&gt;[IETFXML]&lt;/a&gt;. Refer also to &quot;XML Accessibility Guidelines&quot;
&lt;a class=&quot;int&quot; href=&quot;#XAG&quot; shape=&quot;rect&quot;&gt;[XAG]&lt;/a&gt; for help designing XML
formats that lower barriers to Web accessibility for people with
disabilities.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.1. &lt;a name=&quot;xml-when&quot; id=&quot;xml-when&quot; shape=&quot;rect&quot;&gt;When to
use an XML-based format&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p277&quot; id=&quot;p277&quot;&gt;&lt;/a&gt;XML defines textual data formats
that are naturally suited to describing data objects which are
hierarchical and processed in a chosen sequence. It is widely, but
not universally, applicable for data formats; an audio or video
format, for example, is unlikely to be well suited to expression in
XML. Design constraints that would suggest the use of XML
include:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Requirement for a hierarchical structure.&lt;/li&gt;
&lt;li&gt;Need for a wide range of tools on a variety of platforms.&lt;/li&gt;

&lt;li&gt;Need for data that can outlive the applications that currently
process it.&lt;/li&gt;
&lt;li&gt;Ability to support internationalization in a self-describing
way that makes confusion over coding options unlikely.&lt;/li&gt;
&lt;li&gt;Early detection of encoding errors with no requirement to &quot;work
around&quot; such errors.&lt;/li&gt;
&lt;li&gt;A high proportion of human-readable textual content.&lt;/li&gt;
&lt;li&gt;Potential composition of the data format with other XML-encoded
formats.&lt;/li&gt;
&lt;li&gt;Desire for data easily parsed by both humans and machines.&lt;/li&gt;
&lt;li&gt;Desire for vocabularies that can be invented in a distributed
manner and combined flexibly.&lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;

&lt;h4&gt;4.5.2. &lt;a name=&quot;xml-links&quot; id=&quot;xml-links&quot; shape=&quot;rect&quot;&gt;Links in
XML&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p278&quot; id=&quot;p278&quot;&gt;&lt;/a&gt;Sophisticated linking mechanisms
have been invented for XML formats. XPointer allows links to
address content that does not have an explicit, named anchor.
[&lt;a class=&quot;int&quot; href=&quot;#XLink10&quot; shape=&quot;rect&quot;&gt;XLink&lt;/a&gt;] is an appropriate
specification for representing links in &lt;a class=&quot;int&quot; href=&quot;#hypertext&quot; shape=
&quot;rect&quot;&gt;hypertext (&sect;4.4)&lt;/a&gt; XML applications. XLink allows links to
have multiple ends and to be expressed either inline or in &quot;link
bases&quot; stored external to any or all of the resources identified by
the links it contains.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p279&quot; id=&quot;p279&quot;&gt;&lt;/a&gt;Designers of XML-based formats may
consider using XLink and, for defining fragment identifier syntax,
using the XPointer framework and XPointer element() Schemes.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p280&quot; id=&quot;p280&quot;&gt;&lt;/a&gt;XLink is not the only linking
design that has been proposed for XML, nor is it universally
accepted as a good design. See also TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#xlinkScope-23&quot; shape=
&quot;rect&quot;&gt;xlinkScope-23&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.3. &lt;a name=&quot;xml-namespaces&quot; id=&quot;xml-namespaces&quot; shape=
&quot;rect&quot;&gt;XML namespaces&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p281&quot; id=&quot;p281&quot;&gt;&lt;/a&gt;The purpose of an XML namespace
(defined in [&lt;a class=&quot;int&quot; href=&quot;#XMLNS&quot; shape=&quot;rect&quot;&gt;XMLNS&lt;/a&gt;]) is to allow
the deployment of XML vocabularies (in which element and attribute
names are defined) in a global environment and to reduce the risk
of name collisions in a given document when vocabularies are
combined. For example, the MathML and SVG specifications both
define the &lt;code&gt;set&lt;/code&gt; element. Although XML data from
different formats such as MathML and SVG can be combined in a
single document, in this case there could be ambiguity about which
&lt;code&gt;set&lt;/code&gt; element was intended. XML namespaces reduce the
risk of name collisions by taking advantage of existing systems for
allocating globally scoped names: the URI system (see also the
section on &lt;a class=&quot;addrefnb&quot; href=&quot;#uri-assignment&quot; shape=
&quot;rect&quot;&gt;URI allocation (&sect;2.2.2)&lt;/a&gt;). When using XML namespaces,
each local name in an XML vocabulary is paired with a URI (called
the namespace URI) to distinguish the local name from local names
in other vocabularies.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p282&quot; id=&quot;p282&quot;&gt;&lt;/a&gt; The use of URIs confers additional
benefits. First, each URI/local name pair can be mapped to another
URI, grounding the terms of the vocabulary in the Web. These terms
may be important resources and thus it is appropriate to be able to
associate URIs with them.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p283&quot; id=&quot;p283&quot;&gt;&lt;/a&gt;[&lt;a class=&quot;int&quot; href=&quot;#RDFXML&quot; shape=
&quot;rect&quot;&gt;RDFXML&lt;/a&gt;] uses simple concatenation of the namespace URI
and the local name to create a URI for the identified term. Other
mappings are likely to be more suitable for hierarchical
namespaces; see the related TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#abstractComponentRefs-37&quot;
shape=&quot;rect&quot;&gt;abstractComponentRefs-37&lt;/a&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p284&quot; id=&quot;p284&quot;&gt;&lt;/a&gt;Designers of XML-based data formats
who declare namespaces thus make it possible to reuse those data
formats and combine them in novel ways not yet imagined. Failure to
declare namespaces makes such reuse more difficult, even
impractical in some cases.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p285&quot; id=&quot;p285&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;use-namespaces&quot; id=&quot;use-namespaces&quot; shape=
&quot;rect&quot;&gt;Namespace adoption&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p286&quot; id=&quot;p286&quot;&gt;&lt;/a&gt; A specification
that establishes an XML vocabulary SHOULD place all element names
and global attribute names in a namespace.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p287&quot; id=&quot;p287&quot;&gt;&lt;/a&gt;Attributes are always scoped by the
element on which they appear. An attribute that is &quot;global,&quot; that
is, one that might meaningfully appear on elements of many types,
including elements in other namespaces, should be explicitly placed
in a namespace. Local attributes, ones associated with only a
particular element type, need not be included in a namespace since
their meaning will always be clear from the context provided by
that element.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p288&quot; id=&quot;p288&quot;&gt;&lt;/a&gt;The &lt;code&gt;type&lt;/code&gt; attribute
from the W3C XML Schema Instance namespace
&quot;http://www.w3.org/2001/XMLSchema-instance&quot; ([&lt;a class=&quot;int&quot; href=&quot;#XMLSCHEMA&quot;
shape=&quot;rect&quot;&gt;XMLSCHEMA&lt;/a&gt;], section 4.3.2) is an example of a
global attribute. It can be used by authors of any vocabulary to
make an assertion in instance data about the type of the element on
which it appears. As a global attribute, it must always be
qualified. The &lt;code&gt;frame&lt;/code&gt; attribute on an HTML table is an
example of a local attribute. There is no value in placing that
attribute in a namespace since the attribute is unlikely to be
useful on an element other than an HTML table.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p289&quot; id=&quot;p289&quot;&gt;&lt;/a&gt;Applications that rely on DTD
processing must impose additional constraints on the use of
namespaces. DTDs perform validation based on the lexical form of
the element and attribute names in the document. This makes
prefixes syntactically significant in ways that are not anticipated
by [&lt;a class=&quot;int&quot; href=&quot;#XMLNS&quot; shape=&quot;rect&quot;&gt;XMLNS&lt;/a&gt;].&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.4. &lt;a name=&quot;namespace-document&quot; id=&quot;namespace-document&quot;
shape=&quot;rect&quot;&gt;Namespace documents&lt;/a&gt;&lt;/h4&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p290&quot; id=&quot;p290&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;storylab&quot;&gt;Story&lt;/span&gt;&lt;/p&gt;
&lt;div class=&quot;story&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p291&quot; id=&quot;p291&quot;&gt;&lt;/a&gt; Nadia receives representation data
from &quot;weather.example.com&quot; in an unfamiliar data format. She knows
enough about XML to recognize which XML namespace the elements
belong to. Since the namespace is identified by the URI
&quot;http://weather.example.com/2003/format&quot;, she asks her browser to
retrieve a representation of the identified resource. She gets back
some useful data that allows her to learn more about the data
format. Nadia's browser may also be able to perform some operations
automatically (i.e., unattended by a human overseer) given data
that has been optimized for software agents. For example, her
browser might, on Nadia's behalf, download additional agents to
process and render the format.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p292&quot; id=&quot;p292&quot;&gt;&lt;/a&gt;Another benefit of using URIs to
build XML namespaces is that the namespace URI can be used to
identify an information resource that contains useful information,
machine-usable and/or human-usable, about terms in the namespace.
This type of information resource is called a &lt;a name=&quot;def-ns-doc&quot;
id=&quot;def-ns-doc&quot;&gt;&lt;dfn&gt;namespace document&lt;/dfn&gt;&lt;/a&gt;. When a namespace
URI owner provides a namespace document, it is authoritative for
the namespace.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p293&quot; id=&quot;p293&quot;&gt;&lt;/a&gt;There are many reasons to provide a
namespace document. A person might want to:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;understand the purpose of the namespace,&lt;/li&gt;
&lt;li&gt;learn how to use the markup vocabulary in the namespace,&lt;/li&gt;
&lt;li&gt;find out who controls it and associated policies,&lt;/li&gt;
&lt;li&gt;request authority to access schemas or collateral material
about it, or&lt;/li&gt;
&lt;li&gt;report a bug or situation that could be considered an error in
some collateral material.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p294&quot; id=&quot;p294&quot;&gt;&lt;/a&gt;A processor might want to:&lt;/p&gt;
&lt;ul&gt;

&lt;li&gt;retrieve a schema, for validation,&lt;/li&gt;
&lt;li&gt;retrieve a style sheet, for presentation, or&lt;/li&gt;
&lt;li&gt;retrieve ontologies, for making inferences.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p295&quot; id=&quot;p295&quot;&gt;&lt;/a&gt;In general, there is no established
best practice for creating representations of a namespace document;
application expectations will influence what data format or formats
are used. Application expectations will also influence whether
relevant information appears directly in a representation or is
referenced from it.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p296&quot; id=&quot;p296&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;pr-namespace-documents&quot; id=
&quot;pr-namespace-documents&quot; shape=&quot;rect&quot;&gt;Namespace
documents&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p297&quot; id=&quot;p297&quot;&gt;&lt;/a&gt; The owner of an
XML namespace name SHOULD make available material intended for
people to read and material optimized for software agents in order
to meet the needs of those who will use the namespace
vocabulary.&lt;/p&gt;

&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p298&quot; id=&quot;p298&quot;&gt;&lt;/a&gt;For example, the following are
examples of data formats for namespace documents: [&lt;a class=&quot;int&quot; href=&quot;#OWL10&quot;
shape=&quot;rect&quot;&gt;OWL10&lt;/a&gt;], [&lt;a class=&quot;int&quot; href=&quot;#RDDL&quot; shape=&quot;rect&quot;&gt;RDDL&lt;/a&gt;],
[&lt;a class=&quot;int&quot; href=&quot;#XMLSCHEMA&quot; shape=&quot;rect&quot;&gt;XMLSCHEMA&lt;/a&gt;], and [&lt;a href=
&quot;#XHTML11&quot; shape=&quot;rect&quot;&gt;XHTML11&lt;/a&gt;]. Each of these formats meets
different requirements described above for satisfying the needs of
an agent that wants more information about the namespace. Note,
however, issues related to &lt;a class=&quot;int&quot; href=&quot;#frag-coneg&quot; shape=
&quot;rect&quot;&gt;fragment identifiers and content negotiation (&sect;3.2.2)&lt;/a&gt; if
content negotiation is used.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p299&quot; id=&quot;p299&quot;&gt;&lt;/a&gt;See TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#namespaceDocument-8&quot; shape=
&quot;rect&quot;&gt;namespaceDocument-8&lt;/a&gt; (concerning desired characteristics
of namespace documents) and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#abstractComponentRefs-37&quot;
shape=&quot;rect&quot;&gt;abstractComponentRefs-37&lt;/a&gt; (concerning the use of
fragment identifiers with namespace names to identify abstract
components).&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.5. &lt;a name=&quot;xml-qnames&quot; id=&quot;xml-qnames&quot; shape=&quot;rect&quot;&gt;QNames
in XML&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p300&quot; id=&quot;p300&quot;&gt;&lt;/a&gt;Section 3 of &quot;Namespaces in XML&quot;
[&lt;a class=&quot;int&quot; href=&quot;#XMLNS&quot; shape=&quot;rect&quot;&gt;XMLNS&lt;/a&gt;] provides a syntactic
construct known as a QName for the compact expression of qualified
names in XML documents. A qualified name is a pair consisting of a
URI, which names a namespace, and a local name placed within that
namespace. &quot;Namespaces in XML&quot; provides for the use of QNames as
names for XML elements and attributes.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p301&quot; id=&quot;p301&quot;&gt;&lt;/a&gt;Other specifications, starting with
[&lt;a class=&quot;int&quot; href=&quot;#XSLT10&quot; shape=&quot;rect&quot;&gt;XSLT10&lt;/a&gt;], have employed the idea
of using QNames in contexts other than element and attribute names,
for example in attribute values and in element content. However,
general XML processors cannot reliably recognize QNames as such
when they are used in attribute values and in element content; for
example, the syntax of QNames overlaps with that of URIs.
Experience has also revealed other limitations to QNames, such as
losing namespace bindings after XML canonicalization.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p302&quot; id=&quot;p302&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;constraintlab&quot;&gt;Constraint: &lt;a name=&quot;qname-uri-syntax&quot; id=
&quot;qname-uri-syntax&quot; shape=&quot;rect&quot;&gt;QNames Indistinguishable from
URIs&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;constraint&quot;&gt;&lt;a name=&quot;p303&quot; id=&quot;p303&quot;&gt;&lt;/a&gt; Do not allow
both QNames and URIs in attribute values or element content where
they are indistinguishable.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p304&quot; id=&quot;p304&quot;&gt;&lt;/a&gt;For more information, see the TAG
finding &lt;cite&gt;&quot;&lt;a href=
&quot;http://www.w3.org/2001/tag/doc/qnameids.html&quot; shape=&quot;rect&quot;&gt;Using
QNames as Identifiers in Content&lt;/a&gt;&quot;&lt;/cite&gt;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p305&quot; id=&quot;p305&quot;&gt;&lt;/a&gt;Because QNames are compact, some
specification designers have adopted the same syntax as a means of
identifying resources. Though convenient as a shorthand notation,
this usage has a cost. There is no single, accepted way to convert
a QName into a URI or vice versa. Although QNames are convenient,
they do not replace the URI as the identification system of the
Web. The use of QNames to identify Web resources without providing
a mapping to URIs is inconsistent with Web architecture.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p306&quot; id=&quot;p306&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;qname-mapping&quot; id=&quot;qname-mapping&quot; shape=
&quot;rect&quot;&gt;QName Mapping&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p307&quot; id=&quot;p307&quot;&gt;&lt;/a&gt; A specification
in which QNames serve as resource identifiers MUST provide a
mapping to URIs.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p308&quot; id=&quot;p308&quot;&gt;&lt;/a&gt;See &lt;a class=&quot;int&quot; href=&quot;#xml-namespaces&quot;
shape=&quot;rect&quot;&gt;XML namespaces (&sect;4.5.3)&lt;/a&gt; for examples of some
mapping strategies.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p309&quot; id=&quot;p309&quot;&gt;&lt;/a&gt;See also TAG issues &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#rdfmsQnameUriMapping-6&quot;
shape=&quot;rect&quot;&gt;rdfmsQnameUriMapping-6&lt;/a&gt; (concerning the mapping of
QNames to URIs), &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#qnameAsId-18&quot; shape=
&quot;rect&quot;&gt;qnameAsId-18&lt;/a&gt; (concerning the use of QNames as
identifiers in XML content), and &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#abstractComponentRefs-37&quot;
shape=&quot;rect&quot;&gt;abstractComponentRefs-37&lt;/a&gt; (concerning the use of
fragment identifiers with namespace names to identify abstract
components).&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.6. &lt;a name=&quot;xml-id-semantics&quot; id=&quot;xml-id-semantics&quot; shape=
&quot;rect&quot;&gt;XML ID semantics&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p310&quot; id=&quot;p310&quot;&gt;&lt;/a&gt;Consider the following fragment of
XML: &lt;code&gt;&amp;lt;section name=&quot;foo&quot;&amp;gt;&lt;/code&gt;. Does the
&lt;code&gt;section&lt;/code&gt; element have what the XML Recommendation
refers to as the ID &lt;code&gt;foo&lt;/code&gt; (i.e., &quot;foo&quot; must not appear
in the surrounding XML document more than once)? One cannot answer
this question by examining the element and its attributes alone. In
XML, the quality of &quot;being an ID&quot; is associated with the type of an
attribute, not its name. Finding the IDs in a document requires
additional processing.&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Processing the document with a processor that recognizes DTD
attribute list declarations (in the external or internal subset)
might reveal a declaration that identifies the &lt;code&gt;name&lt;/code&gt;

attribute as an ID. &lt;strong&gt;Note:&lt;/strong&gt; This processing is not
necessarily part of validation. A non-validating, DTD-aware
processor can recognize IDs.&lt;/li&gt;
&lt;li&gt;Processing the document with a W3C XML schema might reveal an
element declaration that identifies the &lt;code&gt;name&lt;/code&gt; attribute
as an W3C XML Schema &lt;code&gt;ID&lt;/code&gt;.&lt;/li&gt;
&lt;li&gt;In practice, processing the document with another schema
language, such as RELAX NG [&lt;a class=&quot;int&quot; href=&quot;#RELAXNG&quot; shape=
&quot;rect&quot;&gt;RELAXNG&lt;/a&gt;], might reveal the attributes declared to be of
ID in the XML Schema sense. Many modern specifications begin
processing XML at the Infoset [&lt;a class=&quot;int&quot; href=&quot;#INFOSET&quot; shape=
&quot;rect&quot;&gt;INFOSET&lt;/a&gt;] level and do not specify normatively how an
Infoset is constructed. For those specifications, any process that
establishes the ID type in the Infoset (and Post Schema Validation
Infoset (&lt;acronym&gt;PSVI&lt;/acronym&gt;) defined in [&lt;a class=&quot;int&quot; href=&quot;#XMLSCHEMA&quot;
shape=&quot;rect&quot;&gt;XMLSCHEMA&lt;/a&gt;]) may usefully identify the attributes
of type ID.&lt;/li&gt;

&lt;li&gt;In practice, applications may have independent means (such as
those defined in the XPointer specification, [&lt;a class=&quot;int&quot; href=&quot;#XPTRFR&quot;
shape=&quot;rect&quot;&gt;XPTRFR&lt;/a&gt;] &lt;a href=
&quot;http://www.w3.org/TR/2003/REC-xptr-framework-20030325/#shorthand&quot;
shape=&quot;rect&quot;&gt;section 3.2&lt;/a&gt;) of locating identifiers inside a
document.&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;&lt;a name=&quot;p311&quot; id=&quot;p311&quot;&gt;&lt;/a&gt;To further complicate matters, DTDs
establish the ID type in the Infoset whereas W3C XML Schema
produces a PSVI but does not modify the original Infoset. This
leaves open the possibility that a processor might only look in the
Infoset and consequently would fail to recognize schema-assigned
IDs.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p312&quot; id=&quot;p312&quot;&gt;&lt;/a&gt;See the TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#xmlIDSemantics-32&quot; shape=
&quot;rect&quot;&gt;xmlIDSemantics-32&lt;/a&gt; for additional background information
and [&lt;a class=&quot;int&quot; href=&quot;#XML-ID&quot; shape=&quot;rect&quot;&gt;XML-ID&lt;/a&gt;] for a solution
under development.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.7. &lt;a name=&quot;xml-media-types&quot; id=&quot;xml-media-types&quot; shape=
&quot;rect&quot;&gt;Media types for XML&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p313&quot; id=&quot;p313&quot;&gt;&lt;/a&gt;RFC 3023 defines the Internet media
types &quot;application/xml&quot; and &quot;text/xml&quot;, and describes a convention
whereby XML-based data formats use Internet media types with a
&quot;+xml&quot; suffix, for example &quot;image/svg+xml&quot;.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p314&quot; id=&quot;p314&quot;&gt;&lt;/a&gt;There are two problems associated
with the &ldquo;text&rdquo; media types: First, for data identified as
&quot;text/*&quot;, Web intermediaries are allowed to &quot;transcode&quot;, i.e.,
convert one character encoding to another. Transcoding may make the
self-description false or may cause the document to be not
well-formed.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p315&quot; id=&quot;p315&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;no-text-xml&quot; id=&quot;no-text-xml&quot; shape=&quot;rect&quot;&gt;XML
and &quot;text/*&quot;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p316&quot; id=&quot;p316&quot;&gt;&lt;/a&gt; In general, a
representation provider SHOULD NOT assign Internet media types
beginning with &quot;text/&quot; to XML representations.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p317&quot; id=&quot;p317&quot;&gt;&lt;/a&gt;Second, representations whose
Internet media types begin with &quot;text/&quot; are required, unless the
&lt;code&gt;charset&lt;/code&gt; parameter is specified, to be considered to be
encoded in US-ASCII. Since the syntax of XML is designed to make
documents self-describing, it is good practice to omit the
&lt;code&gt;charset&lt;/code&gt; parameter, and since XML is very often not
encoded in US-ASCII, the use of &quot;text/&quot; Internet media types
effectively precludes this good practice.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p318&quot; id=&quot;p318&quot;&gt;&lt;/a&gt; &lt;span class=&quot;practicelab&quot;&gt;Good
practice: &lt;a name=&quot;no-charset&quot; id=&quot;no-charset&quot; shape=&quot;rect&quot;&gt;XML and
character encodings&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;practice&quot;&gt;&lt;a name=&quot;p319&quot; id=&quot;p319&quot;&gt;&lt;/a&gt; In general, a
representation provider SHOULD NOT specify the character encoding
for XML data in protocol headers since the data is
self-describing.&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h4&gt;4.5.8. &lt;a name=&quot;xml-fragids&quot; id=&quot;xml-fragids&quot; shape=
&quot;rect&quot;&gt;Fragment identifiers in XML&lt;/a&gt;&lt;/h4&gt;
&lt;p&gt;&lt;a name=&quot;p320&quot; id=&quot;p320&quot;&gt;&lt;/a&gt;The section on &lt;a href=
&quot;#media-type-fragid&quot; shape=&quot;rect&quot;&gt;media types and fragment
identifier semantics (&sect;3.2.1)&lt;/a&gt; discusses the interpretation of
fragment identifiers. Designers of an XML-based data format
specification should define the semantics of fragment identifiers
in that format. The XPointer Framework [&lt;a class=&quot;int&quot; href=&quot;#XPTRFR&quot; shape=
&quot;rect&quot;&gt;XPTRFR&lt;/a&gt;] provides an interoperable starting point.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p321&quot; id=&quot;p321&quot;&gt;&lt;/a&gt;When the media type assigned to
representation data is &quot;application/xml&quot;, there are no semantics
defined for fragment identifiers, and authors should not make use
of fragment identifiers in such data. The same is true if the
assigned media type has the suffix &quot;+xml&quot; (defined in &quot;XML Media
Types&quot; [&lt;a class=&quot;int&quot; href=&quot;#RFC3023&quot; shape=&quot;rect&quot;&gt;RFC3023&lt;/a&gt;]), and the data
format specification does not specify fragment identifier
semantics. In short, just knowing that content is XML does not
provide information about fragment identifier semantics.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p322&quot; id=&quot;p322&quot;&gt;&lt;/a&gt;Many people assume that the
fragment identifier &lt;code&gt;#abc&lt;/code&gt;, when referring to XML data,
identifies the element in the document with the ID &quot;abc&quot;. However,
there is no normative support for this assumption. A revision of
RFC 3023 is expected to address this.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p323&quot; id=&quot;p323&quot;&gt;&lt;/a&gt;See TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#fragmentInXML-28&quot; shape=
&quot;rect&quot;&gt;fragmentInXML-28&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;4.6. &lt;a name=&quot;media-types-infospace&quot; id=&quot;media-types-infospace&quot;
shape=&quot;rect&quot;&gt;&lt;/a&gt;Future Directions for Data Formats&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p324&quot; id=&quot;p324&quot;&gt;&lt;/a&gt;Data formats enable the creation of
new applications to make use of the information space
infrastructure. The Semantic Web is one such application, built on
top of RDF [&lt;a class=&quot;int&quot; href=&quot;#RDFXML&quot; shape=&quot;rect&quot;&gt;RDFXML&lt;/a&gt;]. This
document does not discuss the Semantic Web in detail; the TAG
expects that future volumes of this document will. See the related
TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#httpRange-14&quot; shape=
&quot;rect&quot;&gt;httpRange-14&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;5. &lt;a name=&quot;general&quot; id=&quot;general&quot; shape=&quot;rect&quot;&gt;General
Architecture Principles&lt;/a&gt;&lt;/h2&gt;
&lt;p&gt;&lt;a name=&quot;p325&quot; id=&quot;p325&quot;&gt;&lt;/a&gt;A number of general architecture
principles apply to all three bases of Web architecture.&lt;/p&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;5.1. &lt;a id=&quot;orthogonal-specs&quot; name=&quot;orthogonal-specs&quot; shape=
&quot;rect&quot;&gt;Orthogonal Specifications&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p326&quot; id=&quot;p326&quot;&gt;&lt;/a&gt;Identification, interaction, and
representation are orthogonal concepts, meaning that technologies
used for identification, interaction, and representation may evolve
independently. For instance:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Resources are identified with URIs. URIs can be published
without building any representations of the resource or determining
whether any representations are available.&lt;/li&gt;
&lt;li&gt;A generic URI syntax allows agents to function in many cases
without knowing specifics of URI schemes.&lt;/li&gt;

&lt;li&gt;In many cases one may change the representation of a resource
without disrupting references to the resource (for example, by
using &lt;a class=&quot;int&quot; href=&quot;#def-coneg&quot; shape=&quot;rect&quot;&gt;content
negotiation&lt;/a&gt;).&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p327&quot; id=&quot;p327&quot;&gt;&lt;/a&gt;When two specifications are
orthogonal, one may change one without requiring changes to the
other, even if one has dependencies on the other. For example,
although the HTTP specification depends on the URI specification,
the two may evolve independently. This orthogonality increases the
flexibility and robustness of the Web. For example, one may refer
by URI to an image without knowing anything about the format chosen
to represent the image. This has facilitated the introduction of
image formats such as PNG and SVG without disrupting existing
references to image resources.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p328&quot; id=&quot;p328&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;principlelab&quot;&gt;Principle: &lt;a name=&quot;pr-orthogonality&quot; id=
&quot;pr-orthogonality&quot; shape=&quot;rect&quot;&gt;Orthogonality&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;principle&quot;&gt;&lt;a name=&quot;p329&quot; id=&quot;p329&quot;&gt;&lt;/a&gt; Orthogonal
abstractions benefit from orthogonal specifications.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a name=&quot;p330&quot; id=&quot;p330&quot;&gt;&lt;/a&gt;Experience demonstrates that
problems arise where orthogonal concepts occur in a single
specification. Consider, for example, the HTML specification which
includes the orthogonal x-www-form-urlencoded specification.
Software developers (for example, of [&lt;a class=&quot;int&quot; href=&quot;#CGI&quot; shape=
&quot;rect&quot;&gt;CGI&lt;/a&gt;] applications) might have an easier time finding the
specification if it were published separately and then cited from
the HTTP, URI, and HTML specifications.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p331&quot; id=&quot;p331&quot;&gt;&lt;/a&gt;Problems also arise when
specifications attempt to modify orthogonal abstractions described
elsewhere. An &lt;a href=
&quot;http://www.w3.org/TR/1998/REC-html40-19980424/struct/global.html&quot;
shape=&quot;rect&quot;&gt;historical version&lt;/a&gt; of the HTML specification added
a &quot;&lt;code&gt;Refresh&lt;/code&gt;&quot; value to the &lt;code&gt;http-equiv&lt;/code&gt;
attribute of the &lt;code&gt;meta&lt;/code&gt; element. It was defined to be
equivalent to the HTTP header of the same name. The authors of the
HTTP specification ultimately decided not to provide this header
and that made the two specifications awkwardly at odds with each
other. The W3C HTML Working Group eventually removed the
&quot;&lt;code&gt;Refresh&lt;/code&gt;&quot; value.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p332&quot; id=&quot;p332&quot;&gt;&lt;/a&gt;A specification should clearly
indicate which features overlap with those governed by another
specification.&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;5.2. &lt;a id=&quot;language-extensibility&quot; name=
&quot;language-extensibility&quot; shape=&quot;rect&quot;&gt;Extensibility&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p333&quot; id=&quot;p333&quot;&gt;&lt;/a&gt;The information in the Web and the
technologies used to represent that information change over time.
Extensibility is the property of a technology that promotes
evolution without sacrificing interoperability. Some examples of
successful technologies designed to allow change while minimizing
disruption include:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;the fact that URI schemes are orthogonally specified;&lt;/li&gt;
&lt;li&gt;the use of an open set of Internet media types in mail and HTTP
to specify document interpretation;&lt;/li&gt;
&lt;li&gt;the separation of the generic XML grammar and the open set of
XML namespaces for element and attribute names;&lt;/li&gt;
&lt;li&gt;extensibility models in Cascading Style Sheets (CSS), XSLT 1.0,
and SOAP;&lt;/li&gt;
&lt;li&gt;user agent plug-ins.&lt;/li&gt;

&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p334&quot; id=&quot;p334&quot;&gt;&lt;/a&gt;An example of an unsuccessful
extension mechanism is HTTP mandatory extensions [&lt;a href=
&quot;#HTTPEXT&quot; shape=&quot;rect&quot;&gt;HTTPEXT&lt;/a&gt;]. The community has sought
mechanisms to extend HTTP, but apparently the costs of the
mandatory extension proposal (notably in complexity) outweighed the
benefits and thus hampered adoption.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p335&quot; id=&quot;p335&quot;&gt;&lt;/a&gt;Below we discuss the property of
&quot;extensibility,&quot; exhibited by URIs, some data formats, and some
protocols (through the incorporation of new messages).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p336&quot; id=&quot;p336&quot;&gt;&lt;/a&gt;&lt;a name=&quot;def-lang-subset&quot; id=
&quot;def-lang-subset&quot;&gt;&lt;dfn&gt;Subset language&lt;/dfn&gt;&lt;/a&gt;: one language is a
subset (or &quot;profile&quot;) of a second language if any document in the
first language is also a valid document in the second language and
has the same interpretation in the second language.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p337&quot; id=&quot;p337&quot;&gt;&lt;/a&gt;&lt;a name=&quot;def-lang-extended&quot; id=
&quot;def-lang-extended&quot;&gt;&lt;dfn&gt;Extended language&lt;/dfn&gt;&lt;/a&gt;: If one
language is a subset of another, the latter superset is called an
extended language; the difference between the languages is called
the extension. Clearly, extending a language is better for
interoperability than creating an incompatible language.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p338&quot; id=&quot;p338&quot;&gt;&lt;/a&gt;Ideally, many instances of a
superset language can be safely and usefully processed as though
they were in the subset language. Languages that can evolve this
way, allowing applications to provide new information when
necessary while still interoperating with applications that only
understand a subset of the current language, are said to be
&quot;extensible.&quot; Language designers can facilitate extensibility by
defining the default behavior of unknown extensions&mdash;for example,
that they be ignored (in some defined way) or should be considered
errors.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p339&quot; id=&quot;p339&quot;&gt;&lt;/a&gt;For example, from early on in the
Web, HTML agents followed the convention of ignoring unknown tags.
This choice left room for innovation (i.e., non-standard elements)
and encouraged the deployment of HTML. However, interoperability
problems arose as well. In this type of environment, there is an
inevitable tension between interoperability in the short term and
the desire for extensibility. Experience shows that designs that
strike the right balance between allowing change and preserving
interoperability are more likely to thrive and are less likely to
disrupt the Web community. &lt;a class=&quot;int&quot; href=&quot;#orthogonal-specs&quot; shape=
&quot;rect&quot;&gt;Orthogonal specifications (&sect;5.1)&lt;/a&gt; help reduce the risk of
disruption.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p340&quot; id=&quot;p340&quot;&gt;&lt;/a&gt;For further discussion, see the
section on &lt;a class=&quot;int&quot; href=&quot;#ext-version&quot; shape=&quot;rect&quot;&gt;versioning and
extensibility (&sect;4.2)&lt;/a&gt;. See also TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#xmlProfiles-29&quot; shape=
&quot;rect&quot;&gt;xmlProfiles-29&lt;/a&gt; and &lt;a href=
&quot;http://www.w3.org/TR/WD-doctypes&quot; shape=&quot;rect&quot;&gt;HTML
Dialects&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;5.3. &lt;a id=&quot;error-handling&quot; name=&quot;error-handling&quot; shape=
&quot;rect&quot;&gt;Error Handling&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p341&quot; id=&quot;p341&quot;&gt;&lt;/a&gt;Errors occur in networked
information systems. An error condition can be well-characterized
(e.g., well-formedness errors in XML or 4xx client errors in HTTP)
or arise unpredictably. &lt;a name=&quot;def-error-correction&quot; id=
&quot;def-error-correction&quot;&gt;&lt;dfn&gt;Error correction&lt;/dfn&gt;&lt;/a&gt; means that
an agent repairs a condition so that within the system, it is as
though the error never occurred. One example of error correction
involves data retransmission in response to a temporary network
failure. &lt;a name=&quot;def-error-recovery&quot; id=
&quot;def-error-recovery&quot;&gt;&lt;dfn&gt;Error recovery&lt;/dfn&gt;&lt;/a&gt; means that an
agent does not repair an error condition but continues processing
by addressing the fact that the error has occurred.&lt;/p&gt;

&lt;p&gt;&lt;a name=&quot;p342&quot; id=&quot;p342&quot;&gt;&lt;/a&gt;Agents frequently &lt;em&gt;correct&lt;/em&gt;
errors without user awareness, sparing users the details of complex
network communications. On the other hand, it is important that
agents &lt;em&gt;recover&lt;/em&gt; from error in a way that is evident to
users, since the agents are acting on their behalf.&lt;/p&gt;
&lt;div class=&quot;boxedtext&quot;&gt;
&lt;p&gt;&lt;a name=&quot;p343&quot; id=&quot;p343&quot;&gt;&lt;/a&gt; &lt;span class=
&quot;principlelab&quot;&gt;Principle: &lt;a name=&quot;no-silent-recovery&quot; id=
&quot;no-silent-recovery&quot; shape=&quot;rect&quot;&gt;Error recovery&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;principle&quot;&gt;&lt;a name=&quot;p344&quot; id=&quot;p344&quot;&gt;&lt;/a&gt; Agents that
recover from error by making a choice without the user's consent
are not acting on the user's behalf.&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;&lt;a name=&quot;p345&quot; id=&quot;p345&quot;&gt;&lt;/a&gt;An agent is not required to
interrupt the user (e.g., by popping up a confirmation box) to
obtain consent. The user may indicate consent through pre-selected
configuration options, modes, or selectable user interface toggles,
with appropriate reporting to the user when the agent detects an
error. Agent developers should not ignore usability issues when
designing error recovery behavior.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p346&quot; id=&quot;p346&quot;&gt;&lt;/a&gt;To promote interoperability,
specification designers should identify predictable error
conditions. Experience has led to the following observations about
error-handling approaches.&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Protocol designers should provide enough information about an
error condition so that an agent can address the error condition.
For instance, an HTTP 404 status code (not found) is useful because
it allows user agents to present relevant information to users,
enabling them to contact the representation provider in case of
problems.&lt;/li&gt;
&lt;li&gt;Experience with the cost of building a user agent to handle the
diverse forms of ill-formed HTML content convinced the designers of
the XML specification to require that agents fail upon encountering
ill-formed content. Because users are unlikely to tolerate such
failures, this design choice has pressured all parties into
respecting XML's constraints, to the benefit of all.&lt;/li&gt;
&lt;li&gt;An agent that encounters unrecognized content may handle it in
a number of ways, including by considering it an error; see also
the section on &lt;a class=&quot;addrefnb&quot; href=&quot;#ext-version&quot; shape=
&quot;rect&quot;&gt;extensibility and versioning (&sect;4.2)&lt;/a&gt;.&lt;/li&gt;
&lt;li&gt;Error behavior that is appropriate for a person may not be
appropriate for software. People are capable of exercising
judgement in ways that software applications generally cannot. An
informal error response may suffice for a person but not for a
processor.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;a name=&quot;p347&quot; id=&quot;p347&quot;&gt;&lt;/a&gt;See the TAG issue &lt;a href=
&quot;http://www.w3.org/2001/tag/issues.html#contentTypeOverride-24&quot;
shape=&quot;rect&quot;&gt;contentTypeOverride-24&lt;/a&gt;, which concerns the source
of authoritative metadata.&lt;/p&gt;

&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;5.4. &lt;a id=&quot;protocol-interop&quot; name=&quot;protocol-interop&quot; shape=
&quot;rect&quot;&gt;Protocol-based Interoperability&lt;/a&gt;&lt;/h3&gt;
&lt;p&gt;&lt;a name=&quot;p348&quot; id=&quot;p348&quot;&gt;&lt;/a&gt;The Web follows Internet tradition
in that its important interfaces are defined in terms of protocols,
by specifying the syntax, semantics, and sequencing constraints of
the messages interchanged. Protocols designed to be resilient in
the face of widely varying environments have helped the Web scale
and have facilitated communication across multiple trust
boundaries. Traditional application programming interfaces
(&lt;acronym&gt;APIs&lt;/acronym&gt;) do not always take these constraints into
account, nor should they be required to. One effect of
protocol-based design is that the technology shared among agents
often lasts longer than the agents themselves.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p349&quot; id=&quot;p349&quot;&gt;&lt;/a&gt;It is common for programmers
working with the Web to write code that generates and parses these
messages directly. It is less common, but not unusual, for end
users to have direct exposure to these messages. It is often
desirable to provide users with access to format and protocol
details: allowing them to &ldquo;view source,&rdquo; whereby they may gain
expertise in the workings of the underlying system.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;6. &lt;a id=&quot;index&quot; name=&quot;index&quot; shape=&quot;rect&quot;&gt;Glossary&lt;/a&gt;&lt;/h2&gt;

&lt;dl class=&quot;glossary&quot;&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-coneg&quot;&gt;Content negotiation&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;The practice of providing multiple
representations available via the same URI. Which representation is
served depends on negotiation between the requesting agent and the
agent serving the representations.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#uri-dereference&quot;&gt;Dereference a URI&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Access a representation of the resource
identified by the URI.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-error-correction&quot;&gt;Error correction&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;An agent repairs an error so that within
the system, it is as though the error never occurred.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-error-recovery&quot;&gt;Error recovery&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;An agent invokes exceptional behavior
because it does not correct the error.&lt;/span&gt;&lt;/dd&gt;

&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-lang-extended&quot;&gt;Extended language&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;If one language is a subset of another,
the latter is called an extended language.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-fragid&quot;&gt;Fragment identifier&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;The part of a URI that allows
identification of a secondary resource.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-information-resource&quot;&gt;Information
resource&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A resource which has the property that
all of its essential characteristics can be conveyed in a
message.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-link&quot;&gt;Link&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A relationship between two resources when
one resource (representation) refers to the other resource by means
of a URI.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-message&quot;&gt;Message&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A unit of communication between
agents.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-ns-doc&quot;&gt;Namespace document&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;An information resource identified by an
XML Namespace URI that contains useful information, machine-usable
and/or human-usable, about terms in a particular XML namespace. It
is useful, though not manditory, that the URI employed as a
namespace name identifies a namespace document.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-representation&quot;&gt;Representation&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Data that encodes information about
resource state.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-resource&quot;&gt;Resource&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Anything that might be identified by a
URI.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-safe-interaction&quot;&gt;Safe interaction&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Interaction with a resource where an
agent does not incur any obligation beyond the
interaction.&lt;/span&gt;&lt;/dd&gt;

&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-secondary-resource&quot;&gt;Secondary resource&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A resource related to another resource
through the primary resource with additional identifying
information (the fragment identifier).&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-lang-subset&quot;&gt;Subset language&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;One language is a subset of a second
language if any document in the first language is also a valid
document in the second language and has the same interpretation in
the second language.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-uri-acronym&quot;&gt;URI&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Acronym for Uniform Resource
Identifier.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-uri-aliases&quot;&gt;URI aliases&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Two or more different URIs that that
identify the same resource.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-uri-collision&quot;&gt;URI collision&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;The use of the same URI to refer to more
than one resource in the context of Web protocols and
formats.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-uri-ownership&quot;&gt;URI ownership&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A relationship between a URI and a social
entity, such as a person, organization, or
specification.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-URI-persistence&quot;&gt;URI persistence&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;The social expectation that once a URI
identifies a particular resource, it should continue indefinitely
to refer to that resource.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#uriref&quot;&gt;URI reference&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;An operational shorthand for a
URI.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-uri&quot;&gt;Uniform Resource Identifier (URI)&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A global identifier in the context of the
World Wide Web.&lt;/span&gt;&lt;/dd&gt;

&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-unsafe-interaction&quot;&gt;Unsafe interaction&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Interaction with a resource that is not
safe interaction.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-user-agent&quot;&gt;User agent&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;One type of Web agent; a piece of
software acting on behalf of a person.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-www&quot;&gt;WWW&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Acronym for World Wide Web.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-web&quot;&gt;Web&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;Shortened form of World Wide
Web.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-web-agent&quot;&gt;Web agent&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;A person or a piece of software acting on
the information space on behalf of a person, entity, or
process.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#def-world-wide-web&quot;&gt;World Wide Web&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;An information space in which items of
interest are identified by Uniform Resource
Identifiers.&lt;/span&gt;&lt;/dd&gt;
&lt;dt&gt;&lt;a class=&quot;int&quot; href=&quot;#xml-based&quot;&gt;XML-based format&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;span class=&quot;content&quot;&gt;One that conforms to the syntax rules
defined in the XML specification.&lt;/span&gt;&lt;/dd&gt;
&lt;/dl&gt;
&lt;!-- Generated --&gt;&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;7. &lt;a id=&quot;refs&quot; name=&quot;refs&quot;&gt;References&lt;/a&gt;&lt;/h2&gt;

&lt;dl&gt;
&lt;dt&gt;&lt;a name=&quot;CGI&quot; id=&quot;CGI&quot; shape=&quot;rect&quot;&gt;CGI&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://hoohoo.ncsa.uiuc.edu/cgi/interface.html&quot;
shape=&quot;rect&quot;&gt;Common Gateway Interface/1.1 Specification&lt;/a&gt;&lt;/cite&gt;.
Available at http://hoohoo.ncsa.uiuc.edu/cgi/interface.html.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;CHIPS&quot; id=&quot;CHIPS&quot; shape=&quot;rect&quot;&gt;CHIPS&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/chips/&quot; shape=&quot;rect&quot;&gt;Common
HTTP Implementation Problems&lt;/a&gt;&lt;/cite&gt;, O. Th&eacute;reaux, January 2003.
This W3C Team Submission is available at
http://www.w3.org/TR/chips/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;CUAP&quot; id=&quot;CUAP&quot; shape=&quot;rect&quot;&gt;CUAP&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/cuap&quot; shape=&quot;rect&quot;&gt;Common
User Agent Problems&lt;/a&gt;&lt;/cite&gt;, K. Dubost, January 2003. This W3C
Team Submission is available at http://www.w3.org/TR/cuap.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;Cool&quot; id=&quot;Cool&quot; shape=&quot;rect&quot;&gt;Cool&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/Provider/Style/URI.html&quot;
shape=&quot;rect&quot;&gt;Cool URIs don't change&lt;/a&gt;&lt;/cite&gt; T. Berners-Lee, W3C,
1998 Available at http://www.w3.org/Provider/Style/URI. Note that
the title is somewhat misleading. It is not the URIs that change,
it is what they identify.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;Eng90&quot; id=&quot;Eng90&quot; shape=&quot;rect&quot;&gt;Eng90&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.bootstrap.org/augment/AUGMENT/132082.html&quot; shape=
&quot;rect&quot;&gt;Knowledge-Domain Interoperability and an Open Hyperdocument
System&lt;/a&gt;&lt;/cite&gt;, D. C. Engelbart, June 1990.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;HTTPEXT&quot; id=&quot;HTTPEXT&quot; shape=&quot;rect&quot;&gt;HTTPEXT&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.w3.org/Protocols/HTTP/ietf-http-ext/draft-frystyk-http-mandatory&quot;
shape=&quot;rect&quot;&gt;Mandatory Extensions in HTTP&lt;/a&gt;&lt;/cite&gt;, H. Frystyk
Nielsen, P. Leach, S. Lawrence, 20 January 1998. This expired
Internet Draft is available at
http://www.w3.org/Protocols/HTTP/ietf-http-ext/draft-frystyk-http-mandatory.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;IANASchemes&quot; id=&quot;IANASchemes&quot; shape=
&quot;rect&quot;&gt;IANASchemes&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IANA's &lt;a href=&quot;http://www.iana.org/assignments/uri-schemes&quot;
shape=&quot;rect&quot;&gt;online registry of URI Schemes&lt;/a&gt; is available at
http://www.iana.org/assignments/uri-schemes.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;IETFXML&quot; id=&quot;IETFXML&quot; shape=&quot;rect&quot;&gt;IETFXML&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=
&quot;http://www.imc.org/ietf-xml-use/xml-guidelines-07.txt&quot; shape=
&quot;rect&quot;&gt;Guidelines For The Use of XML in IETF Protocols&lt;/a&gt;&lt;/cite&gt;,
S. Hollenbeck, M. Rose, L. Masinter, eds., 2 November 2002. This
Internet Draft is available at
http://www.imc.org/ietf-xml-use/xml-guidelines-07.txt. If this
document is no longer available, refer to the &lt;a href=
&quot;http://www.imc.org/ietf-xml-use/index.html&quot; shape=
&quot;rect&quot;&gt;ietf-xml-use mailing list&lt;/a&gt;.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;INFOSET&quot; id=&quot;INFOSET&quot;&gt;INFOSET&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xml-infoset&quot;&gt;XML
Information Set (Second Edition)&lt;/a&gt;&lt;/cite&gt;, R. Tobin, J. Cowan,
Editors, W3C Recommendation, 04&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-xml-infoset-20040204. &lt;a href=
&quot;http://www.w3.org/TR/xml-infoset&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xml-infoset.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;IRI&quot; id=&quot;IRI&quot; shape=&quot;rect&quot;&gt;IRI&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=
&quot;http://www.w3.org/International/iri-edit/draft-duerst-iri-11.txt&quot;
shape=&quot;rect&quot;&gt;Internationalized Resource Identifiers
(IRIs)&lt;/a&gt;&lt;/cite&gt;, M. D&uuml;rst, M. Suignard, Eds., November 2004. In
an &lt;a href=
&quot;http://www1.ietf.org/mail-archive/web/ietf-announce/current/msg00752.html&quot;
shape=&quot;rect&quot;&gt;8 December 2004 announcement&lt;/a&gt;, the IESG approved
&lt;a href=
&quot;http://www.w3.org/International/iri-edit/draft-duerst-iri-11.txt&quot;
shape=&quot;rect&quot;&gt;draft-duerst-iri-11&lt;/a&gt; as a Proposed Standard of the
IETF. References to the IRI specification in Volume One of
&lt;cite&gt;Architecture of the World Wide Web&lt;/cite&gt; are to that
Proposed Standard. Once the IETF issues a Request For Comments
(&lt;acronym&gt;RFC&lt;/acronym&gt;) number for the specification, this W3C
Recommendation may be updated to refer to that RFC. See also the
&lt;a href=
&quot;http://www.w3.org/International/iri-edit/draft-duerst-iri.html&quot;
shape=&quot;rect&quot;&gt;latest information about the IRI
specification&lt;/a&gt;.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;MEDIATYPEREG&quot; id=&quot;MEDIATYPEREG&quot; shape=
&quot;rect&quot;&gt;MEDIATYPEREG&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IANA's &lt;a href=
&quot;http://www.iana.org/assignments/media-types/index.html&quot; shape=
&quot;rect&quot;&gt;online registry of Internet Media Types&lt;/a&gt; is available at
http://www.iana.org/assignments/media-types/index.html.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;OWL10&quot; id=&quot;OWL10&quot;&gt;OWL10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/owl-ref/&quot;&gt;OWL Web Ontology
Language Reference&lt;/a&gt;&lt;/cite&gt;, M. Dean, G. Schreiber, Editors, W3C
Recommendation, 10&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-owl-ref-20040210/. &lt;a href=
&quot;http://www.w3.org/TR/owl-ref/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/owl-ref/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;P3P10&quot; id=&quot;P3P10&quot;&gt;P3P10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/P3P/&quot;&gt;The Platform for
Privacy Preferences 1.0 (P3P1.0) Specification&lt;/a&gt;&lt;/cite&gt;, M.
Marchiori, Editor, W3C Recommendation, 16&amp;#160;April&amp;#160;2002,
http://www.w3.org/TR/2002/REC-P3P-20020416/. &lt;a href=
&quot;http://www.w3.org/TR/P3P/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/P3P/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RDDL&quot; id=&quot;RDDL&quot; shape=&quot;rect&quot;&gt;RDDL&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.tbray.org/tag/rddl/rddl3.html&quot; shape=
&quot;rect&quot;&gt;Resource Directory Description Language (RDDL)&lt;/a&gt;&lt;/cite&gt;,
J. Borden, T. Bray, eds., 1 June 2003. This document is available
at http://www.tbray.org/tag/rddl/rddl3.html.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RDFXML&quot; id=&quot;RDFXML&quot;&gt;RDFXML&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/rdf-syntax-grammar&quot;&gt;RDF/XML
Syntax Specification (Revised)&lt;/a&gt;&lt;/cite&gt;, D. Beckett, Editor, W3C
Recommendation, 10&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-rdf-syntax-grammar-20040210/.
&lt;a href=&quot;http://www.w3.org/TR/rdf-syntax-grammar&quot;&gt;Latest
version&lt;/a&gt; available at
http://www.w3.org/TR/rdf-syntax-grammar.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RELAXNG&quot; id=&quot;RELAXNG&quot; shape=&quot;rect&quot;&gt;RELAXNG&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;The &lt;a href=&quot;http://www.relaxng.org/&quot; shape=&quot;rect&quot;&gt;RELAX NG&lt;/a&gt;
schema language project.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;REST&quot; id=&quot;REST&quot; shape=&quot;rect&quot;&gt;REST&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm&quot;
shape=&quot;rect&quot;&gt;Representational State Transfer (REST)&lt;/a&gt;&lt;/cite&gt;,
Chapter 5 of &quot;Architectural Styles and the Design of Network-based
Software Architectures&quot;, Doctoral Thesis of R. T. Fielding, 2000.
Designers of protocol specifications in particular should invest
time in understanding the REST model and the relevance of its
principles to a given design. These principles include
statelessness, clear assignment of roles to parties, uniform
address space, and a limited, uniform set of verbs. Available at
http://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2045&quot; id=&quot;RFC2045&quot; shape=&quot;rect&quot;&gt;RFC2045&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2045.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2045: Multipurpose Internet Mail Extensions (MIME) Part
One: Format of Internet Message Bodies&lt;/a&gt;&lt;/cite&gt;, N. Freed, N.
Borenstein, November 1996. Available at
http://www.ietf.org/rfc/rfc2045.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2046&quot; id=&quot;RFC2046&quot; shape=&quot;rect&quot;&gt;RFC2046&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2046.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2046: Multipurpose Internet Mail Extensions (MIME) Part
Two: Media Types&lt;/a&gt;&lt;/cite&gt;, N. Freed, N. Borenstein, November
1996. Available at http://www.ietf.org/rfc/rfc2046.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2119&quot; id=&quot;RFC2119&quot; shape=&quot;rect&quot;&gt;RFC2119&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2119.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2119: Key words for use in RFCs to Indicate Requirement
Levels&lt;/a&gt;&lt;/cite&gt;, S. Bradner, March 1997. Available at
http://www.ietf.org/rfc/rfc2119.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2141&quot; id=&quot;RFC2141&quot; shape=&quot;rect&quot;&gt;RFC2141&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2141.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2141: URN Syntax&lt;/a&gt;&lt;/cite&gt;, R. Moats, May 1997.
Available at http://www.ietf.org/rfc/rfc2141.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2326&quot; id=&quot;RFC2326&quot; shape=&quot;rect&quot;&gt;RFC2326&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2326.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2326: Real Time Streaming Protocol (RTSP)&lt;/a&gt;&lt;/cite&gt;, H.
Schulzrinne, A. Rao, R. Lanphier, April 1998. Available at:
http://www.ietf.org/rfc/rfc2326.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2397&quot; id=&quot;RFC2397&quot; shape=&quot;rect&quot;&gt;RFC2397&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2397.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2397: The &ldquo;data&rdquo; URL scheme&lt;/a&gt;&lt;/cite&gt;, L. Masinter,
August 1998. Available at:
http://www.ietf.org/rfc/rfc2397.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2616&quot; id=&quot;RFC2616&quot; shape=&quot;rect&quot;&gt;RFC2616&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2616.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2616: Hypertext Transfer Protocol - HTTP/1.1&lt;/a&gt;&lt;/cite&gt;,
J. Gettys, J. Mogul, H. Frystyk, L. Masinter, P. Leach, T.
Berners-Lee, June 1999. Available at
http://www.ietf.org/rfc/rfc2616.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2717&quot; id=&quot;RFC2717&quot; shape=&quot;rect&quot;&gt;RFC2717&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2717.txt&quot; shape=
&quot;rect&quot;&gt;Registration Procedures for URL Scheme Names&lt;/a&gt;&lt;/cite&gt;, R.
Petke, I. King, November 1999. Available at
http://www.ietf.org/rfc/rfc2717.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2718&quot; id=&quot;RFC2718&quot; shape=&quot;rect&quot;&gt;RFC2718&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2718.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2718: Guidelines for new URL Schemes&lt;/a&gt;&lt;/cite&gt;, L.
Masinter, H. Alvestrand, D. Zigmond, R. Petke, November 1999.
Available at: http://www.ietf.org/rfc/rfc2718.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC2818&quot; id=&quot;RFC2818&quot; shape=&quot;rect&quot;&gt;RFC2818&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc2818.txt&quot; shape=
&quot;rect&quot;&gt;RFC 2818: HTTP Over TLS&lt;/a&gt;&lt;/cite&gt;, E. Rescorla, May 2000.
Available at: http://www.ietf.org/rfc/rfc2818.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC3023&quot; id=&quot;RFC3023&quot; shape=&quot;rect&quot;&gt;RFC3023&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc3023.txt&quot; shape=
&quot;rect&quot;&gt;RFC 3023: XML Media Types&lt;/a&gt;&lt;/cite&gt;, M. Murata, S. St.
Laurent, D. Kohn, January 2001. Available at:
http://www.ietf.org/rfc/rfc3023.txt&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC3236&quot; id=&quot;RFC3236&quot; shape=&quot;rect&quot;&gt;RFC3236&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc3236.txt&quot; shape=
&quot;rect&quot;&gt;RFC 3236: The 'application/xhtml+xml' Media Type&lt;/a&gt;&lt;/cite&gt;,
M. Baker, P. Stark, January 2002. Available at:
http://www.ietf.org/rfc/rfc3236.txt&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC3261&quot; id=&quot;RFC3261&quot; shape=&quot;rect&quot;&gt;RFC3261&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc3261.txt&quot; shape=
&quot;rect&quot;&gt;RFC 3261: SIP: Session Initiation Protocol&lt;/a&gt;&lt;/cite&gt;, J.
Rosenberg, H. Schulzrinne, G. Camarillo, et. al., June 2002.
Available at: http://www.ietf.org/rfc/rfc3261.txt&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC3920&quot; id=&quot;RFC3920&quot; shape=&quot;rect&quot;&gt;RFC3920&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc3920.txt&quot; shape=
&quot;rect&quot;&gt;RFC 3920: Extensible Messaging and Presence Protocol (XMPP):
Core&lt;/a&gt;&lt;/cite&gt;, P. Saint-Andre, Ed., October 2004. Available at:
http://www.ietf.org/rfc/rfc3920.txt&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC977&quot; id=&quot;RFC977&quot; shape=&quot;rect&quot;&gt;RFC977&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc977.txt&quot; shape=
&quot;rect&quot;&gt;RFC 977: Network News Transfer Protocol&lt;/a&gt;&lt;/cite&gt;, B.
Kantor, P. Lapsley, February 1986. Available at
http://www.ietf.org/rfc/rfc977.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;SOAP12&quot; id=&quot;SOAP12&quot;&gt;SOAP12&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/soap12-part1/&quot;&gt;SOAP Version
1.2 Part 1: Messaging Framework&lt;/a&gt;&lt;/cite&gt;, J. Moreau, N.
Mendelsohn, H. Frystyk Nielsen, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C
Recommendation, 24&amp;#160;June&amp;#160;2003,
http://www.w3.org/TR/2003/REC-soap12-part1-20030624/. &lt;a href=
&quot;http://www.w3.org/TR/soap12-part1/&quot;&gt;Latest version&lt;/a&gt; available
at http://www.w3.org/TR/soap12-part1/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;SVG11&quot; id=&quot;SVG11&quot;&gt;SVG11&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/SVG11/&quot;&gt;Scalable Vector
Graphics (SVG) 1.1 Specification&lt;/a&gt;&lt;/cite&gt;, 藤沢 淳, J. Ferraiolo, D.
Jackson, Editors, W3C Recommendation, 14&amp;#160;January&amp;#160;2003,
http://www.w3.org/TR/2003/REC-SVG11-20030114/. &lt;a href=
&quot;http://www.w3.org/TR/SVG11/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/SVG11/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;UNICODE&quot; id=&quot;UNICODE&quot; shape=&quot;rect&quot;&gt;UNICODE&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;a href=&quot;http://www.unicode.org/&quot; shape=&quot;rect&quot;&gt;The Unicode
Consortium&lt;/a&gt;, The Unicode Standard, Version 4, ISBN
0-321-18578-1, as updated from time to time by the publication of
new versions. See http://www.unicode.org/unicode/standard/versions
for the &lt;a href=&quot;http://www.unicode.org/unicode/standard/versions&quot;
shape=&quot;rect&quot;&gt;latest Unicode version&lt;/a&gt; and additional information
on versions of the standard and of the Unicode Character
Database.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;URI&quot; id=&quot;URI&quot; shape=&quot;rect&quot;&gt;URI&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=
&quot;http://gbiv.com/protocols/uri/rev-2002/draft-fielding-uri-rfc2396bis-07.html&quot;
shape=&quot;rect&quot;&gt;Uniform Resource Identifiers (URI): Generic
Syntax&lt;/a&gt;&lt;/cite&gt;, T. Berners-Lee, R. Fielding, L. Masinter, Eds.,
September 2004. In an &lt;a href=
&quot;http://www1.ietf.org/mail-archive/web/ietf-announce/current/msg00602.html&quot;
shape=&quot;rect&quot;&gt;18 October 2004 announcement&lt;/a&gt;, the IESG approved
&lt;a href=
&quot;http://gbiv.com/protocols/uri/rev-2002/draft-fielding-uri-rfc2396bis-07.html&quot;
shape=&quot;rect&quot;&gt;draft-fielding-uri-rfc2396bis-07&lt;/a&gt; as a Full
Standard of the IETF. References to the URI specification in Volume
One of &lt;cite&gt;Architecture of the World Wide Web&lt;/cite&gt; are to that
Full Standard. Once the IETF issues a Request For Comments
(&lt;acronym&gt;RFC&lt;/acronym&gt;) number for the specification, this W3C
Recommendation may be updated to refer to that RFC. See also the
&lt;a href=&quot;http://gbiv.com/protocols/uri/rev-2002/rfc2396bis.html&quot;
shape=&quot;rect&quot;&gt;latest information about the URI
specification&lt;/a&gt;.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;UniqueDNS&quot; id=&quot;UniqueDNS&quot; shape=
&quot;rect&quot;&gt;UniqueDNS&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.icann.org/correspondence/iab-tech-comment-27sept99.htm&quot;
shape=&quot;rect&quot;&gt;IAB Technical Comment on the Unique DNS
Root&lt;/a&gt;&lt;/cite&gt;, B. Carpenter, 27 September 1999. Available at
http://www.icann.org/correspondence/iab-tech-comment-27sept99.htm.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;VOICEXML2&quot; id=&quot;VOICEXML2&quot;&gt;VOICEXML2&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/voicexml20&quot;&gt;Voice
Extensible Markup Language (VoiceXML) Version 2.0&lt;/a&gt;&lt;/cite&gt;, B.
Porter, A. Hunt, K. Rehor, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C
Recommendation, 16&amp;#160;March&amp;#160;2004,
http://www.w3.org/TR/2004/REC-voicexml20-20040316/. &lt;a href=
&quot;http://www.w3.org/TR/voicexml20&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/voicexml20.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XHTML11&quot; id=&quot;XHTML11&quot;&gt;XHTML11&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xhtml11/&quot;&gt;XHTML&trade; 1.1 -
Module-based XHTML&lt;/a&gt;&lt;/cite&gt;, S. McCarron, M. Altheim, Editors,
W3C Recommendation, 31&amp;#160;May&amp;#160;2001,
http://www.w3.org/TR/2001/REC-xhtml11-20010531. &lt;a href=
&quot;http://www.w3.org/TR/xhtml11/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xhtml11/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;XLink10&quot; id=&quot;XLink10&quot;&gt;XLink10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xlink/&quot;&gt;XML Linking
Language (XLink) Version 1.0&lt;/a&gt;&lt;/cite&gt;, E. Maler, S. DeRose, D.
Orchard, Editors, W3C Recommendation, 27&amp;#160;June&amp;#160;2001,
http://www.w3.org/TR/2001/REC-xlink-20010627/. &lt;a href=
&quot;http://www.w3.org/TR/xlink/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xlink/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XML-ID&quot; id=&quot;XML-ID&quot;&gt;XML-ID&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xml-id/&quot;&gt;xml:id Version
1.0&lt;/a&gt;&lt;/cite&gt;, D. Veillard, J. Marsh, Editors, W3C Working Draft
(work in progress), 07&amp;#160;April&amp;#160;2004,
http://www.w3.org/TR/2004/WD-xml-id-20040407. &lt;a href=
&quot;http://www.w3.org/TR/xml-id/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xml-id/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;XML10&quot; id=&quot;XML10&quot;&gt;XML10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/REC-xml&quot;&gt;Extensible Markup
Language (XML) 1.0 (Third Edition)&lt;/a&gt;&lt;/cite&gt;, F. Yergeau, J.
Paoli, C. M. Sperberg-McQueen, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C
Recommendation, 04&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-xml-20040204. &lt;a href=
&quot;http://www.w3.org/TR/REC-xml&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/REC-xml.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XML11&quot; id=&quot;XML11&quot;&gt;XML11&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xml11/&quot;&gt;Extensible Markup
Language (XML) 1.1&lt;/a&gt;&lt;/cite&gt;, J. Paoli, C. M. Sperberg-McQueen, J.
Cowan, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C Recommendation,
04&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-xml11-20040204/. &lt;a href=
&quot;http://www.w3.org/TR/xml11/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xml11/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;XMLNS&quot; id=&quot;XMLNS&quot;&gt;XMLNS&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xml-names11/&quot;&gt;Namespaces in
XML 1.1&lt;/a&gt;&lt;/cite&gt;, R. Tobin, D. Hollander, A. Layman, &lt;em&gt;et.
al.,&lt;/em&gt; Editors, W3C Recommendation, 04&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/REC-xml-names11-20040204. &lt;a href=
&quot;http://www.w3.org/TR/xml-names11/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xml-names11/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XMLSCHEMA&quot; id=&quot;XMLSCHEMA&quot;&gt;XMLSCHEMA&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xmlschema-1/&quot;&gt;XML Schema
Part 1: Structures&lt;/a&gt;&lt;/cite&gt;, D. Beech, M. Maloney, H. S.
Thompson, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C Recommendation,
02&amp;#160;May&amp;#160;2001,
http://www.w3.org/TR/2001/REC-xmlschema-1-20010502/. &lt;a href=
&quot;http://www.w3.org/TR/xmlschema-1/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xmlschema-1/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;XPTRFR&quot; id=&quot;XPTRFR&quot;&gt;XPTRFR&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xptr-framework/&quot;&gt;XPointer
Framework&lt;/a&gt;&lt;/cite&gt;, E. Maler, N. Walsh, P. Grosso, &lt;em&gt;et.
al.,&lt;/em&gt; Editors, W3C Recommendation, 25&amp;#160;March&amp;#160;2003,
http://www.w3.org/TR/2003/REC-xptr-framework-20030325/. &lt;a href=
&quot;http://www.w3.org/TR/xptr-framework/&quot;&gt;Latest version&lt;/a&gt; available
at http://www.w3.org/TR/xptr-framework/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XSLT10&quot; id=&quot;XSLT10&quot;&gt;XSLT10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xslt&quot;&gt;XSL Transformations
(XSLT) Version 1.0&lt;/a&gt;&lt;/cite&gt;, J. Clark, Editor, W3C
Recommendation, 16&amp;#160;November&amp;#160;1999,
http://www.w3.org/TR/1999/REC-xslt-19991116. &lt;a href=
&quot;http://www.w3.org/TR/xslt&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xslt.&lt;/dd&gt;
&lt;/dl&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h3&gt;7.1. &lt;a name=&quot;archspecs&quot; id=&quot;archspecs&quot; shape=
&quot;rect&quot;&gt;Architectural Specifications&lt;/a&gt;&lt;/h3&gt;
&lt;dl&gt;
&lt;dt&gt;&lt;a name=&quot;ATAG10&quot; id=&quot;ATAG10&quot;&gt;ATAG10&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/ATAG10&quot;&gt;Authoring Tool
Accessibility Guidelines 1.0&lt;/a&gt;&lt;/cite&gt;, C. McCathieNevile, I.
Jacobs, J. Treviranus, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C
Recommendation, 03&amp;#160;February&amp;#160;2000,
http://www.w3.org/TR/2000/REC-ATAG10-20000203. &lt;a href=
&quot;http://www.w3.org/TR/ATAG10&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/ATAG10.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;CHARMOD&quot; id=&quot;CHARMOD&quot;&gt;CHARMOD&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/charmod/&quot;&gt;Character Model
for the World Wide Web 1.0: Fundamentals&lt;/a&gt;&lt;/cite&gt;, R. Ishida, M.
J. D&uuml;rst, M. Wolf, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C Working Draft
(work in progress), 25&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/WD-charmod-20040225/. &lt;a href=
&quot;http://www.w3.org/TR/charmod/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/charmod/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;DIPRINCIPLES&quot; id=&quot;DIPRINCIPLES&quot;&gt;DIPRINCIPLES&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/di-princ/&quot;&gt;Device
Independence Principles&lt;/a&gt;&lt;/cite&gt;, R. Gimson, Editor, W3C Note,
01&amp;#160;September&amp;#160;2003,
http://www.w3.org/TR/2003/NOTE-di-princ-20030901/. &lt;a href=
&quot;http://www.w3.org/TR/di-princ/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/di-princ/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;EXTLANG&quot; id=&quot;EXTLANG&quot; shape=&quot;rect&quot;&gt;EXTLANG&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.w3.org/TR/1998/NOTE-webarch-extlang-19980210&quot; shape=
&quot;rect&quot;&gt;Web Architecture: Extensible Languages&lt;/a&gt;&lt;/cite&gt;, T.
Berners-Lee, D. Connolly, 10 February 1998. This W3C Note is
available at
http://www.w3.org/TR/1998/NOTE-webarch-extlang-19980210.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;Fielding&quot; id=&quot;Fielding&quot; shape=&quot;rect&quot;&gt;Fielding&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.ics.uci.edu/~fielding/pubs/webarch_icse2000.pdf&quot; shape=
&quot;rect&quot;&gt;Principled Design of the Modern Web Architecture&lt;/a&gt;&lt;/cite&gt;,
R.T. Fielding and R.N. Taylor, UC Irvine. In Proceedings of the
2000 International Conference on Software Engineering (ICSE 2000),
Limerick, Ireland, June 2000, pp. 407-416. This document is
available at
http://www.ics.uci.edu/~fielding/pubs/webarch_icse2000.pdf.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;QA&quot; id=&quot;QA&quot;&gt;QA&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/qaframe-spec/&quot;&gt;QA
Framework: Specification Guidelines&lt;/a&gt;&lt;/cite&gt;, D. Haza&euml;l-Massieux,
L. Rosenthal, L. Henderson, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C Working
Draft (work in progress), 30&amp;#160;August&amp;#160;2004,
http://www.w3.org/TR/2004/WD-qaframe-spec-20040830/. &lt;a href=
&quot;http://www.w3.org/TR/qaframe-spec/&quot;&gt;Latest version&lt;/a&gt; available
at http://www.w3.org/TR/qaframe-spec/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;RFC1958&quot; id=&quot;RFC1958&quot; shape=&quot;rect&quot;&gt;RFC1958&lt;/a&gt;&lt;/dt&gt;

&lt;dd&gt;IETF &lt;cite&gt;&lt;a href=&quot;http://www.ietf.org/rfc/rfc1958.txt&quot; shape=
&quot;rect&quot;&gt;RFC 1958: Architectural Principles of the
Internet&lt;/a&gt;&lt;/cite&gt;, B. Carpenter, June 1996. Available at
http://www.ietf.org/rfc/rfc1958.txt.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;SPECVAR&quot; id=&quot;SPECVAR&quot;&gt;SPECVAR&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=
&quot;http://www.w3.org/TR/spec-variability/&quot;&gt;Variability in
Specifications&lt;/a&gt;&lt;/cite&gt;, L. Rosenthal, D. Haza&euml;l-Massieux,
Editors, W3C Working Draft (work in progress),
30&amp;#160;August&amp;#160;2004,
http://www.w3.org/TR/2004/WD-spec-variability-20040830/. &lt;a href=
&quot;http://www.w3.org/TR/spec-variability/&quot;&gt;Latest version&lt;/a&gt;
available at http://www.w3.org/TR/spec-variability/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;UAAG10&quot; id=&quot;UAAG10&quot;&gt;UAAG10&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/UAAG10/&quot;&gt;User Agent
Accessibility Guidelines 1.0&lt;/a&gt;&lt;/cite&gt;, J. Gunderson, I. Jacobs,
E. Hansen, Editors, W3C Recommendation, 17&amp;#160;December&amp;#160;2002,
http://www.w3.org/TR/2002/REC-UAAG10-20021217/. &lt;a href=
&quot;http://www.w3.org/TR/UAAG10/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/UAAG10/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;WCAG20&quot; id=&quot;WCAG20&quot;&gt;WCAG20&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/WCAG20/&quot;&gt;Web Content
Accessibility Guidelines 2.0&lt;/a&gt;&lt;/cite&gt;, W. Chisholm, J. White, B.
Caldwell, &lt;em&gt;et. al.,&lt;/em&gt; Editors, W3C Working Draft (work in
progress), 30&amp;#160;July&amp;#160;2004,
http://www.w3.org/TR/2004/WD-WCAG20-20040730/. &lt;a href=
&quot;http://www.w3.org/TR/WCAG20/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/WCAG20/.&lt;/dd&gt;
&lt;dt&gt;&lt;a name=&quot;WSA&quot; id=&quot;WSA&quot;&gt;WSA&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/ws-arch/&quot;&gt;Web Services
Architecture&lt;/a&gt;&lt;/cite&gt;, D. Booth, F. McCabe, E. Newcomer, &lt;em&gt;et.
al.,&lt;/em&gt; Editors, W3C Note, 11&amp;#160;February&amp;#160;2004,
http://www.w3.org/TR/2004/NOTE-ws-arch-20040211/. &lt;a href=
&quot;http://www.w3.org/TR/ws-arch/&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/ws-arch/.&lt;/dd&gt;

&lt;dt&gt;&lt;a name=&quot;XAG&quot; id=&quot;XAG&quot;&gt;XAG&lt;/a&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;cite&gt;&lt;a href=&quot;http://www.w3.org/TR/xag&quot;&gt;XML Accessibility
Guidelines&lt;/a&gt;&lt;/cite&gt;, S. B. Palmer, C. McCathieNevile, D.
Dardailler, Editors, W3C Working Draft (work in progress),
03&amp;#160;October&amp;#160;2002,
http://www.w3.org/TR/2002/WD-xag-20021003. &lt;a href=
&quot;http://www.w3.org/TR/xag&quot;&gt;Latest version&lt;/a&gt; available at
http://www.w3.org/TR/xag.&lt;/dd&gt;
&lt;/dl&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Included; see Makefile --&gt;&lt;/div&gt;
&lt;div class=&quot;section&quot;&gt;
&lt;h2&gt;8. &lt;a name=&quot;acks&quot; id=&quot;acks&quot; shape=
&quot;rect&quot;&gt;Acknowledgments&lt;/a&gt;&lt;/h2&gt;

&lt;p&gt;&lt;a name=&quot;p350&quot; id=&quot;p350&quot;&gt;&lt;/a&gt;This document was authored by the
W3C Technical Architecture Group which included the following
participants: Tim Berners-Lee (co-Chair, W3C), Tim Bray (Antarctica
Systems), Dan Connolly (W3C), Paul Cotton (Microsoft Corporation),
Roy Fielding (Day Software), Mario Jeckle (Daimler Chrysler), Chris
Lilley (W3C), Noah Mendelsohn (IBM), David Orchard (BEA Systems),
Norman Walsh (Sun Microsystems), and Stuart Williams (co-Chair,
Hewlett-Packard).&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p351&quot; id=&quot;p351&quot;&gt;&lt;/a&gt;The TAG appreciates the many
contributions on the TAG's public mailing list, www-tag@w3.org
(&lt;a href=&quot;http://lists.w3.org/Archives/Public/www-tag/&quot; shape=
&quot;rect&quot;&gt;archive&lt;/a&gt;), which have helped to improve this
document.&lt;/p&gt;
&lt;p&gt;&lt;a name=&quot;p352&quot; id=&quot;p352&quot;&gt;&lt;/a&gt;In addition, contributions by David
Booth, Erik Bruchez, Kendall Clark, Karl Dubost, Bob DuCharme,
Martin Duerst, Olivier Fehr, Al Gilman, Tim Goodwin, Elliotte Rusty
Harold, Tony Hammond, Sandro Hawke, Ryan Hayes, Dominique
Haza&euml;l-Massieux, Masayasu Ishikawa, David M. Karr, Graham Klyne,
Jacek Kopecky, Ken Laskey, Susan Lesch, H&aring;kon Wium Lie, Frank
Manola, Mark Nottingham, Bijan Parsia, Peter F. Patel-Schneider,
David Pawson, Michael Sperberg-McQueen, Patrick Stickler, and
Yuxiao Zhao are gratefully acknowledged.&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_webarch_webarch.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_webarch_webarch.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_webarch_webarch.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_webarch_webarch.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_webarch_webarch.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_webarch_webarch.html.pdf) |


