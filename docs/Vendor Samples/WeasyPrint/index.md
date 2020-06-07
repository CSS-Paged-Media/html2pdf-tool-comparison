---
layout: details
title: WeasyPrint
permalink: /Vendor-Samples/WeasyPrint/
description: Test Section 'WeasyPrint' to compare different html2pdf tools.
---



## 🔬 INVOICE

### Input HTML & CSS

<details>
    <summary>
        View INVOICE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!doctype <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample taken from https://github.com/Kozea/WeasyPrint/tree/gh-pages/samples/invoice --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
        @charset "UTF-8";
@import url("https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:400,700");
@page {
  margin: 3cm;
  @bottom-left {
    color: #1ee494;
    font-family: Pacifico;
    content: '♥ Thank you!'; }
  @bottom-right {
    color: #a9a;
    content: 'community@kozea.fr | +33 4 78 84 19 28 | community.kozea.fr';
    font-family: Pacifico;
    font-size: 9pt; } }

html {
  color: #14213d;
  font-family: Source Sans Pro;
  font-size: 11pt;
  line-height: 1.6; }
  html body {
    margin: 0; }
  html h1 {
    color: #1ee494;
    font-family: Pacifico;
    font-size: 40pt;
    margin: 0; }
  html aside {
    display: flex;
    margin: 2em 0 4em; }
    html aside address {
      font-style: normal;
      white-space: pre-line; }
      html aside address#from {
        color: #a9a;
        flex: 1; }
      html aside address#to {
        text-align: right; }
  html dl {
    text-align: right;
    position: absolute;
    right: 0;
    top: 0; }
    html dl dt, html dl dd {
      display: inline;
      margin: 0; }
    html dl dt {
      color: #a9a; }
      html dl dt::before {
        content: '';
        display: block; }
      html dl dt::after {
        content: ':'; }
  html table {
    border-collapse: collapse;
    width: 100%; }
    html table th {
      border-bottom: .2mm solid #a9a;
      color: #a9a;
      font-size: 10pt;
      font-weight: 400;
      padding-bottom: .25cm;
      text-transform: uppercase; }
    html table td {
      padding-top: 7mm; }
      html table td:last-of-type {
        color: #1ee494;
        font-weight: bold;
        text-align: right; }
    html table th, html table td {
      text-align: center; }
      html table th:first-of-type, html table td:first-of-type {
        text-align: left; }
      html table th:last-of-type, html table td:last-of-type {
        text-align: right; }
    html table#total {
      background: #f6f6f6;
      border-color: #f6f6f6;
      border-style: solid;
      border-width: 2cm 3cm;
      bottom: 0;
      font-size: 20pt;
      margin: 0 -3cm;
      position: absolute;
      width: 18cm; }
    <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Invoice<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"description"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"Invoice demo sample"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"author"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"Kozea"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>

  <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Invoice<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">aside</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">address</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"from"</span>&gt;</span>
        Weasyprint [ by Kozea ]
        107 boulevard de Stalingrad
        69100 Villeurbanne City
        France
      <span class="hljs-tag">&lt;/<span class="hljs-name">address</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">address</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"to"</span>&gt;</span>
        Our awesome developers
        From all around the world
        Earth
      <span class="hljs-tag">&lt;/<span class="hljs-name">address</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">aside</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">dl</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"informations"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Invoice number<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>12345<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Date<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>March 31, 2018<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">dl</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Description<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Price<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Quantity<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Subtotal<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Website design<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€34.20<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>100<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€3,420.00<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Website development<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€45.50<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>100<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€4,550.00<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Website integration<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€25.75<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>100<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€2,575.00<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"total"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Due by<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Account number<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Total due<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>May 10, 2018<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>132 456 789 012<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>€10,545.00<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/Vendor%20Samples/WeasyPrint/invoice.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_invoice.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_invoice.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_invoice.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_invoice.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_invoice.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_invoice.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_invoice.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_invoice.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_invoice.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_invoice.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 REPORT

### Input HTML & CSS

<details>
    <summary>
        View REPORT Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!doctype <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample taken from https://github.com/Kozea/WeasyPrint/tree/gh-pages/samples/report --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>@charset "UTF-8";
        @font-face {
          font-family: Fira Sans;
          font-weight: 400;
          src: url(FiraSans-Regular.otf); }
        
        @font-face {
          font-family: Fira Sans;
          font-style: italic;
          font-weight: 400;
          src: url(FiraSans-Italic.otf); }
        
        @font-face {
          font-family: Fira Sans;
          font-weight: 300;
          src: url(FiraSans-Light.otf); }
        
        @font-face {
          font-family: Fira Sans;
          font-style: italic;
          font-weight: 300;
          src: url(FiraSans-LightItalic.otf); }
        
        @font-face {
          font-family: Fira Sans;
          font-weight: bold;
          src: url(FiraSans-Bold.otf); }
        
        @page {
          @top-left {
            background: #fbc847;
            content: counter(page);
            height: 1cm;
            text-align: center;
            width: 1cm; }
          @top-center {
            background: #fbc847;
            content: '';
            display: block;
            height: .05cm;
            opacity: .5;
            width: 100%; }
          @top-right {
            content: string(heading);
            font-size: 9pt;
            height: 1cm;
            vertical-align: middle;
            width: 100%; } }
        
        @page :blank {
          @top-left {
            background: none;
            content: ''; }
          @top-center {
            content: none; }
          @top-right {
            content: none; } }
        
        @page no-chapter {
          @top-left {
            background: none;
            content: none; }
          @top-center {
            content: none; }
          @top-right {
            content: none; } }
        
        @page :first {
          background: url(report-cover.jpg) no-repeat center;
          background-size: cover;
          margin: 0; }
        
        @page chapter {
          background: #fbc847;
          margin: 0;
          @top-left {
            content: none; }
          @top-center {
            content: none; }
          @top-right {
            content: none; } }
        
        html {
          color: #393939;
          font-family: Fira Sans;
          font-size: 11pt;
          font-weight: 300;
          line-height: 1.5; }
          html body h1 {
            color: #fbc847;
            font-size: 38pt;
            margin: 5cm 2cm 0 2cm;
            page: no-chapter;
            width: 100%; }
          html body h2, html body h3, html body h4 {
            color: black;
            font-weight: 400; }
          html body h2 {
            break-before: always;
            font-size: 28pt;
            string-set: heading content(); }
          html body h3 {
            font-weight: 300;
            font-size: 15pt; }
          html body h4 {
            font-size: 13pt; }
          html body article#cover {
            align-content: space-between;
            display: flex;
            flex-wrap: wrap;
            height: 297mm; }
            html body article#cover address {
              background: #fbc847;
              flex: 1 50%;
              margin: 0 -2cm;
              padding: 1cm 0;
              white-space: pre-wrap; }
              html body article#cover address:first-of-type {
                padding-left: 3cm; }
          html body article#contents {
            break-before: right;
            break-after: left;
            page: no-chapter; }
            html body article#contents h2 {
              font-size: 20pt;
              font-weight: 400;
              margin-bottom: 3cm; }
            html body article#contents h3 {
              font-weight: 500;
              margin: 3em 0 1em; }
              html body article#contents h3::before {
                background: #fbc847;
                content: '';
                display: block;
                height: .08cm;
                margin-bottom: .25cm;
                width: 2cm; }
            html body article#contents ul {
              list-style: none;
              padding-left: 0; }
              html body article#contents ul li {
                border-top: .25pt solid #c1c1c1;
                margin: .25cm 0;
                padding-top: .25cm; }
                html body article#contents ul li::before {
                  color: #fbc847;
                  content: '• ';
                  font-size: 40pt;
                  line-height: 16pt;
                  vertical-align: bottom; }
                html body article#contents ul li a {
                  color: inherit;
                  text-decoration: inherit; }
                  html body article#contents ul li a::before {
                    content: target-text(attr(href)); }
                  html body article#contents ul li a::after {
                    color: #fbc847;
                    content: target-counter(attr(href), page);
                    float: right; }
          html body article#columns section {
            columns: 2;
            column-gap: 1cm;
            padding-top: 1cm; }
            html body article#columns section p {
              text-align: justify; }
              html body article#columns section p:first-of-type {
                font-weight: 700; }
          html body article#competences h3 {
            background: #fbc847;
            margin: 0 -3cm 1cm;
            padding: 1cm 1cm 1cm 3cm;
            width: 21cm; }
          html body article#competences section {
            padding: .5cm 0; }
            html body article#competences section#table-content::before {
              background: url(table-content.svg) no-repeat center #fbc847;
              background-size: 50%;
              content: '';
              display: inline-block;
              float: left;
              height: 2cm;
              margin-right: .5cm;
              vertical-align: middle;
              width: 2cm; }
            html body article#competences section#heading::before {
              background: url(heading.svg) no-repeat center #fbc847;
              background-size: 50%;
              content: '';
              display: inline-block;
              float: left;
              height: 2cm;
              margin-right: .5cm;
              vertical-align: middle;
              width: 2cm; }
            html body article#competences section#multi-columns::before {
              background: url(multi-columns.svg) no-repeat center #fbc847;
              background-size: 50%;
              content: '';
              display: inline-block;
              float: left;
              height: 2cm;
              margin-right: .5cm;
              vertical-align: middle;
              width: 2cm; }
            html body article#competences section#internal-links::before {
              background: url(internal-links.svg) no-repeat center #fbc847;
              background-size: 50%;
              content: '';
              display: inline-block;
              float: left;
              height: 2cm;
              margin-right: .5cm;
              vertical-align: middle;
              width: 2cm; }
            html body article#competences section#style::before {
              background: url(style.svg) no-repeat center #fbc847;
              background-size: 50%;
              content: '';
              display: inline-block;
              float: left;
              height: 2cm;
              margin-right: .5cm;
              vertical-align: middle;
              width: 2cm; }
            html body article#competences section h4 {
              margin: 0; }
            html body article#competences section p {
              margin-top: 0; }
          html body article#offers {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; }
            html body article#offers h2, html body article#offers h3 {
              width: 100%; }
            html body article#offers section {
              width: 30%; }
              html body article#offers section h4 {
                margin-bottom: 0; }
              html body article#offers section ul {
                list-style: none;
                margin: 0;
                padding-left: 0; }
                html body article#offers section ul li:not(:last-of-type) {
                  margin: .5cm 0; }
              html body article#offers section p {
                background: #fbc847;
                display: block;
                font-size: 15pt;
                font-weight: 700;
                margin-bottom: 0;
                padding: .25cm 0;
                text-align: center; }
          html body article#chapter {
            align-items: center;
            display: flex;
            height: 297mm;
            justify-content: center;
            page: chapter; }
          html body article#typography section {
            display: flex;
            flex-wrap: wrap;
            margin: 1cm 0; }
            html body article#typography section h4 {
              border-top: 1pt solid;
              flex: 1 25%;
              margin: 0; }
            html body article#typography section h4 + * {
              flex: 1 75%;
              margin: 0;
              padding-left: .5cm; }
            html body article#typography section p {
              text-align: justify; }
            html body article#typography section ul {
              line-height: 2;
              list-style: none; }
            html body article#typography section#small-caps p {
              font-variant: small-caps; }
            html body article#typography section#ligatures dl {
              display: flex;
              flex-wrap: wrap; }
              html body article#typography section#ligatures dl dt {
                font-weight: 400;
                width: 30%; }
              html body article#typography section#ligatures dl dd {
                flex: 1 70%;
                margin: 0;
                padding: 0; }
            html body article#typography section#ligatures .none {
              font-variant-ligatures: none; }
            html body article#typography section#ligatures .common {
              font-variant-ligatures: common-ligatures; }
            html body article#typography section#ligatures .discretionary {
              font-variant-ligatures: discretionary-ligatures; }
            html body article#typography section#ligatures .contextual {
              font-variant-ligatures: contextual; }
            html body article#typography section#numbers dl {
              display: flex;
              flex-wrap: wrap; }
              html body article#typography section#numbers dl dt {
                font-weight: 400;
                width: 30%; }
              html body article#typography section#numbers dl dd {
                flex: 1 70%;
                margin: 0;
                padding: 0; }
            html body article#typography section#numbers #fractions {
              font-variant-numeric: diagonal-fractions; }
            html body article#typography section#numbers #ordinals {
              font-variant-numeric: ordinal; }
            html body article#typography section#numbers #slashed {
              font-variant-numeric: slashed-zero; }
            html body article#typography section#numbers #super {
              font-variant-position: super; }
            html body article#typography section#numbers #sub {
              font-variant-position: sub; }
            html body article#typography section#figures dl {
              columns: 4; }
              html body article#typography section#figures dl dt {
                font-weight: 400; }
              html body article#typography section#figures dl dd {
                display: flex;
                margin: 0;
                padding: 0; }
                html body article#typography section#figures dl dd ul {
                  padding: 0 1em 0 0; }
            html body article#typography section#figures #oldstyle {
              font-variant-numeric: oldstyle-nums; }
            html body article#typography section#figures #tabular {
              font-variant-numeric: tabular-nums; }
            html body article#typography section#figures #old-tabular {
              font-variant-numeric: oldstyle-nums tabular-nums; }<span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Report<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"description"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"Report example"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>

  <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"cover"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Report example<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">address</span>&gt;</span>
        WeasyPrint Company
        Boulevard Stalingrad
        Villeurbanne City France
      <span class="hljs-tag">&lt;/<span class="hljs-name">address</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">address</span>&gt;</span>
        community@kozea.fr
        +33 4 78 84 19 28
        https://community.kozea.fr
      <span class="hljs-tag">&lt;/<span class="hljs-name">address</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"contents"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Table of contents<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Part one<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#columns-title"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#competences-title"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Part two<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#offers-title"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#chapter-title"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#typography-title"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"columns-title"</span>&gt;</span>Big title on left page, with text on columns<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>This is a little subtitle, here to explain what we are talking about<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam volutpat faucibus vestibulum.
          Mauris varius orci quam. Nam dui mauris, dictum at elementum at, mollis pulvinar est.
          Nunc lobortis pharetra erat, id rutrum lorem malesuada in.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Phasellus id nisl nec arcu tempor ultricies non id tortor. Mauris ex nibh, viverra vitae nisi eget, placerat pharetra est.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id maximus diam. Cras molestie nisl vitae iaculis convallis.
          Vivamus molestie vitae nisl sed interdum. Nunc aliquam massa rhoncus finibus convallis.
          Vivamus sed vulputate risus. Nunc dignissim magna velit, quis lobortis ex volutpat eget.
          Proin dictum mauris condimentum consequat faucibus.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Duis maximus mauris ac purus eleifend, sit amet blandit nulla lacinia.
          Maecenas massa dolor, suscipit at erat eget, maximus dignissim dolor. Praesent consectetur maximus libero, eu facilisis ligula finibus et.
          Cras rhoncus eros sit amet lorem auctor, a efficitur leo tincidunt. Sed viverra interdum odio, eget pulvinar tortor blandit lacinia.
          Praesent consequat congue commodo. Phasellus eu massa feugiat, imperdiet nisi a, sagittis ipsum.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Suspendisse et gravida nunc. Quisque at felis nisl. Nam eget efficitur nunc.
          Vivamus fermentum imperdiet massa, porttitor elementum mauris faucibus scelerisque.
          Pellentesque ut metus tortor. Fusce vulputate ex at turpis consectetur, in vestibulum odio placerat.
          Suspendisse tempor sapien rutrum, cursus sem a, tincidunt odio. Sed in consequat augue.
          Proin finibus felis neque, ac hendrerit lorem consequat nec.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce quam mi, dapibus et augue sit amet, porttitor volutpat orci.
          Vestibulum ac ligula at justo placerat pulvinar vel non velit. Duis vel iaculis nibh, non tristique lectus.
          Phasellus vel ex bibendum, accumsan tellus a, commodo nisi.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Mauris tincidunt dolor ligula, et egestas lectus rutrum consectetur. Donec ac ex mollis, vestibulum libero in, convallis risus.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"competences"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"competences-title"</span>&gt;</span>This is another big title, on a page full of work presentation<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>We present you some of WeasyPrint's features.<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"table-content"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Table of contents<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mi ante, tincidunt quis vehicula
          sed, vehicula sed augue. Cras eget ante turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"heading"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Heading titles and page counters<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mi ante, tincidunt quis vehicula
          sed, vehicula sed augue. Cras eget ante turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"multi-columns"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Multi-column text<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mi ante, tincidunt quis vehicula
          sed, vehicula sed augue. Cras eget ante turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"internal-links"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Internal links<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mi ante, tincidunt quis vehicula
          sed, vehicula sed augue. Cras eget ante turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"style"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Different page types<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mi ante, tincidunt quis vehicula
          sed, vehicula sed augue. Cras eget ante turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"offers"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"offers-title"</span>&gt;</span>Big title on the first right page<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Offer #1<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>€135<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Nullam at diam eget urna consequat.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Sed fringilla quam at augue semper aliquam.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Cras nec lacus eu turpis finibus vulputate.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Offer #2<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>€175<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Nullam at diam eget urna consequat.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Sed fringilla quam at augue semper aliquam.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Mauris viverra nulla vel semper mollis.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Nulla quis massa eu urna suscipit vehicula.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Curabitur a odio id risus pharetra iaculis.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Offer #3<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>€200<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Nullam at diam eget urna consequat.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Sed fringilla quam at augue semper aliquam.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Mauris viverra nulla vel semper mollis.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Cras nec lacus eu turpis finibus vulputate.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Nulla quis massa eu urna suscipit vehicula.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Curabitur a odio id risus pharetra iaculis.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Mauris viverra nulla vel semper mollis.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"chapter"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"chapter-title"</span>&gt;</span>This is a chapter of a new section<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"typography"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"typography-title"</span>&gt;</span>About some typography features<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Italic and Bold Text<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>sit amet, consectetur adipiscing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> Ut
          pulvinar dolor <span class="hljs-tag">&lt;<span class="hljs-name">strong</span>&gt;</span>ac orci finibus elementum. Praesent<span class="hljs-tag">&lt;/<span class="hljs-name">strong</span>&gt;</span>
          sit amet ligula turpis.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"small-caps"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Small caps text<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar
          dolor ac orci finibus elementum.
        <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ligatures"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Ligatures<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dl</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Classical<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"none"</span>&gt;</span>Offer<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"common"</span>&gt;</span>Offer<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Discretionary<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"none"</span>&gt;</span>Often<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"discretionary"</span>&gt;</span>Often<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Contextual<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"none"</span>&gt;</span>#<span class="hljs-symbol">&amp;amp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"contextual"</span>&gt;</span>#<span class="hljs-symbol">&amp;amp;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">dl</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"numbers"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Numbers<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dl</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Fractions<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>421/42 → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"fractions"</span>&gt;</span>421/42<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Ordinals<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>2a 3o → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ordinals"</span>&gt;</span>2a 3o<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Slashed zero<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>1000 → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"slashed"</span>&gt;</span>1000<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Superscript<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>a2 → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"super"</span>&gt;</span>a2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Subscript<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>C8H10N4O2 → <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"sub"</span>&gt;</span>C8H10N4O2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

      <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"figures"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Figures<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dl</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Lining<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>409,280<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>367,112<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Old-Style<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"oldstyle"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>409,280<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>367,112<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Tabular<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"tabular"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>409,280<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>367,112<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Old <span class="hljs-symbol">&amp;amp;</span> Tab.<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"old-tabular"</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>409,280<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>367,112<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">dl</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/Vendor%20Samples/WeasyPrint/report.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_report.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_report.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_report.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_report.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_report.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_report.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_report.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_report.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_report.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_report.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>

## 🔬 TICKET

### Input HTML & CSS

<details>
    <summary>
        View TICKET Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!doctype <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-comment">&lt;!-- Sample taken from https://github.com/Kozea/WeasyPrint/tree/gh-pages/samples/ticket --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
        <span class="hljs-keyword">@import</span> url(<span class="hljs-string">"https://fonts.googleapis.com/css?family=Libre+Barcode+128"</span>);
<span class="hljs-keyword">@import</span> url(<span class="hljs-string">"https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,700"</span>);
<span class="hljs-keyword">@page</span> {
  <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
  <span class="hljs-attribute">size</span>: landscape; }
<span class="hljs-selector-tag">html</span> {
  <span class="hljs-attribute">align-content</span>: center;
  <span class="hljs-attribute">align-items</span>: center;
  <span class="hljs-attribute">background</span>: <span class="hljs-number">#eef1f5</span>;
  <span class="hljs-attribute">display</span>: flex;
  <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Barlow Condensed"</span>, sans-serif;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100%</span>;
  <span class="hljs-attribute">justify-content</span>: center; }
  <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> {
    <span class="hljs-attribute">background</span>: <span class="hljs-number">#fff</span>;
    <span class="hljs-attribute">box-sizing</span>: border-box;
    <span class="hljs-attribute">color</span>: <span class="hljs-number">#2A3239</span>;
    <span class="hljs-attribute">display</span>: flex;
    <span class="hljs-attribute">flex-wrap</span>: wrap;
    <span class="hljs-attribute">height</span>: <span class="hljs-number">8cm</span>;
    <span class="hljs-attribute">justify-content</span>: space-between;
    <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
    <span class="hljs-attribute">width</span>: <span class="hljs-number">25cm</span>; }
    <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> {
      <span class="hljs-attribute">box-sizing</span>: border-box; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> <span class="hljs-selector-tag">dl</span> {
        <span class="hljs-attribute">columns</span>: <span class="hljs-number">4</span>;
        <span class="hljs-attribute">text-align</span>: center; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> <span class="hljs-selector-tag">dt</span> {
        <span class="hljs-attribute">font-size</span>: <span class="hljs-number">9pt</span>;
        <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">700</span>;
        <span class="hljs-attribute">text-transform</span>: uppercase; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> <span class="hljs-selector-tag">dd</span> {
        <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">0</span>; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> <span class="hljs-selector-tag">ul</span> {
        <span class="hljs-attribute">align-items</span>: center;
        <span class="hljs-attribute">display</span>: flex;
        <span class="hljs-attribute">list-style</span>: none;
        <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
        <span class="hljs-attribute">padding-left</span>: <span class="hljs-number">0</span>; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span> <span class="hljs-selector-tag">ul</span> <span class="hljs-selector-tag">li</span> {
          <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">700</span>;
          <span class="hljs-attribute">text-transform</span>: uppercase; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> {
        <span class="hljs-attribute">flex</span>: <span class="hljs-number">1</span>;
        <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span>;
        <span class="hljs-attribute">position</span>: relative; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">h1</span> {
          <span class="hljs-attribute">display</span>: inline-block;
          <span class="hljs-attribute">font-size</span>: <span class="hljs-number">25pt</span>;
          <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">300</span>;
          <span class="hljs-attribute">text-transform</span>: uppercase; }
          <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">h1</span><span class="hljs-selector-id">#name</span> {
            <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">1cm</span>; }
          <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">h1</span><span class="hljs-selector-id">#destination</span> {
            <span class="hljs-attribute">position</span>: absolute;
            <span class="hljs-attribute">right</span>: <span class="hljs-number">1cm</span>; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">dl</span> {
          <span class="hljs-attribute">background</span>: <span class="hljs-number">#2A3239</span>;
          <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>;
          <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
          <span class="hljs-attribute">padding</span>: <span class="hljs-number">1cm</span> <span class="hljs-number">0</span>; }
          <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">dl</span> <span class="hljs-selector-tag">dd</span> {
            <span class="hljs-attribute">border-left</span>: <span class="hljs-number">1pt</span> solid <span class="hljs-number">#fff</span>;
            <span class="hljs-attribute">font-size</span>: <span class="hljs-number">35pt</span>; }
            <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">dl</span> <span class="hljs-selector-tag">dd</span><span class="hljs-selector-pseudo">:first-of-type</span> {
              <span class="hljs-attribute">border-left</span>: <span class="hljs-number">0</span>; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">ul</span> {
          <span class="hljs-attribute">margin-left</span>: <span class="hljs-number">1cm</span>; }
          <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">ul</span> <span class="hljs-selector-tag">li</span> {
            <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">300</span>;
            <span class="hljs-attribute">padding</span>: <span class="hljs-number">0.15cm</span>; }
            <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">ul</span> <span class="hljs-selector-tag">li</span><span class="hljs-selector-pseudo">:first-of-type</span> {
              <span class="hljs-attribute">background</span>: <span class="hljs-number">#2A3239</span>;
              <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">4pt</span>;
              <span class="hljs-attribute">color</span>: <span class="hljs-number">#fff</span>; }
            <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#informations</span> <span class="hljs-selector-tag">ul</span> <span class="hljs-selector-tag">li</span><span class="hljs-selector-pseudo">:last-of-type</span> {
              <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Libre Barcode 128"</span>, cursive;
              <span class="hljs-attribute">font-size</span>: <span class="hljs-number">25pt</span>;
              <span class="hljs-attribute">margin-left</span>: auto;
              <span class="hljs-attribute">padding-right</span>: <span class="hljs-number">1cm</span>;
              <span class="hljs-attribute">padding-top</span>: <span class="hljs-number">0.5cm</span>; }
      <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#ticket</span> {
        <span class="hljs-attribute">border-left</span>: <span class="hljs-number">1pt</span> dashed <span class="hljs-number">#2A3239</span>;
        <span class="hljs-attribute">display</span>: flex;
        <span class="hljs-attribute">flex-direction</span>: column;
        <span class="hljs-attribute">height</span>: <span class="hljs-number">8cm</span>;
        <span class="hljs-attribute">justify-content</span>: space-around;
        <span class="hljs-attribute">padding</span>: <span class="hljs-number">0</span> <span class="hljs-number">1cm</span>; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#ticket</span> <span class="hljs-selector-tag">h2</span> {
          <span class="hljs-attribute">font-weight</span>: <span class="hljs-number">300</span>;
          <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
          <span class="hljs-attribute">text-transform</span>: uppercase; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#ticket</span> <span class="hljs-selector-tag">p</span> {
          <span class="hljs-attribute">font-family</span>: <span class="hljs-string">"Libre Barcode 128"</span>, cursive;
          <span class="hljs-attribute">font-size</span>: <span class="hljs-number">25pt</span>;
          <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>;
          <span class="hljs-attribute">text-align</span>: center; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#ticket</span> <span class="hljs-selector-tag">dl</span> {
          <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span>; }
        <span class="hljs-selector-tag">html</span> <span class="hljs-selector-tag">body</span> <span class="hljs-selector-tag">section</span><span class="hljs-selector-id">#ticket</span> <span class="hljs-selector-tag">ul</span> <span class="hljs-selector-tag">li</span> {
          <span class="hljs-attribute">margin</span>: <span class="hljs-number">0</span> <span class="hljs-number">0.25cm</span>; }

<span class="hljs-comment">/*# sourceMappingURL=ticket.css.map */</span>
    </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Board ticket<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"description"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"Board ticket"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>

  <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"informations"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"name"</span>&gt;</span>Théodore Marcelin<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"destination"</span>&gt;</span>CDG ✈ LFLL<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dl</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Flight<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>DL31<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Gate<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>29<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Seat<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>26E<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Zone<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">dl</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>5:10pm<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Dec 15, 2018<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>Coach<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>1257797706706<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ticket"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>1257797706706<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>Théodore Marcelin<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">dl</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Flight<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>DL31<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Gate<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>29<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Seat<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>26E<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dt</span>&gt;</span>Zone<span class="hljs-tag">&lt;/<span class="hljs-name">dt</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">dd</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">dd</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">dl</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>CDG ✈ LFLL<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>5:10pm<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/Vendor%20Samples/WeasyPrint/ticket.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_ticket.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_Vendor_Samples_WeasyPrint_ticket.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_ticket.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_Vendor_Samples_WeasyPrint_ticket.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_ticket.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_Vendor_Samples_WeasyPrint_ticket.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_ticket.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_Vendor_Samples_WeasyPrint_ticket.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_ticket.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_Vendor_Samples_WeasyPrint_ticket.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
</div>


