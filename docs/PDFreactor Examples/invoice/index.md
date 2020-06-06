---
layout: details
title: invoice
permalink: /PDFreactor-Examples/invoice/
description: 
---

## Index
<div class="boxes">
                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/invoice/scripts/">
                                scripts
                            </a>
</div>

## 🔬 INVOICE

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/invoice/invoice.html)

<details>
    <summary>
        View INVOICE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en-US"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Corporate Invoice<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>/&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>@media print {

        @page:first {
        
            @top-right {
                content: none;
            }
            @top-left {
                content: none;
            }
        }
        
        @page {
            margin: 2cm 2.5cm 3cm 2.5cm;
            
            @top-left {
                content: element(headerIdentifier);
                vertical-align: bottom;
            }
            @bottom-left {
                content: element(footerIdentifier);
                vertical-align: top;
                width: 100%;
            }
            @bottom-right {
                content: element(companyIdentifier);
                vertical-align: top;
                margin-top: 4mm;
                width: 100%;
            }
        }
    }
    
    @-ro-preferences {
        page-layout: 1 column;
        initial-zoom: fit-page;
    }
    
    div.spacing {
        margin-top: 1.2em;
    }
    
    div.footer, div.header {
        font: 9pt arial, sans-serif;
        width: 100%;
    }
    
    div.footer {
        position: running(footerIdentifier);
    }
    
    div.header {
        position: running(headerIdentifier);
    }
    
    p.companyinfo {
        position: running(companyIdentifier);
    }
    
    div.header table {
        position: relative;
    }
    
    div.footer table, div.footer p {
        position: relative;
    }
    
    
    table.header-footer {
        padding: 0pt;
        text-align: right;
        border-collapse: collapse;
        background: #F8F8F8;
        width: 100%;
    }
    
    table.header-footer td:first-child {
        text-align: left;
    }
    
    table.header-footer td.subtotaltext {
        padding-right: 1.7em;
    }
    
    table.header-footer td.subtotaltext {
        position: absolute;
        right: 11.5em;
    }
    
    table.header-footer td.currency {
        position: absolute;
        right: 7em;
    }
    
    table.header-footer td.subtotal {
        position: absolute;
        right: 1.5em;
    }
    
    div.header td.subtotal::before {
        content: string(sum, start);
    }
    
    div.header td.invoicetext {
        width: 16cm;
    }
    
    div.header td.invoicetext::before {
        content: string(invoice, start);
    }
    
    div.header td.subtotaltext::before {
        content: string(subtotaltext, start);
    }
    
    div.header td.currency::before {
        content: string(currency, start);
    }
    
    div.footer td.subtotaltext::before {
        content: string(subtotaltext, last);
    }
    
    div.footer td.currency::before {
        content: string(currency, last);
    }
    
    
    div.footer td.subtotal::before {
        content: string(sum, last);
    }
    
    div.footer td.pagecounter::before {
        content: "Page " counter(page) "/" counter(pages);
    }
    
    p.companyinfo {
        background: white;
        border: 0.75pt solid white;
    }
    
    p.companyinfo {
        font: 6pt arial, sans-serif;
        color: #7F7F7F;
        text-align: center;
    }
                
    barcode {
        -ro-replacedelement: barcode;
    }
    
    img.logo {
        height: 42pt;
        margin-bottom: 20pt;
    }
    
    div.companyinformation {
        text-align: right;
        font: 6pt arial, sans-serif;
        color: #7F7F7F;
    }
    
    div.addressline {
        font: 6pt arial, sans-serif;
        color: #7F7F7F;
        margin-bottom: 20pt;
        margin-top: -40pt;
    }
    
    div.recipient {
        font: 10pt arial, sans-serif;
    }
    
    div.descbox {
        float: right;
        width: 160pt;
        font: 8pt arial, sans-serif;
    }
    
    div.descboxheader {
        background-color: #F0F0F0;
        border: 0.75pt solid #777;
        text-align: center;
        font: bold 12pt arial, sans-serif;
    }
    
    div.descboxcontent {
        border-left: 0.75pt solid #777;
        border-bottom: 0.75pt solid #777;
        border-right: 0.75pt solid #777;
    }
    
    div.infotable {
        border: 0.75pt solid #777;
        margin-top: 0.5cm;
        margin-bottom: 0.5cm;
    }
    
    table.infotable {
        font: 8pt arial, sans-serif;
        width: 100%;
    }
    
    hr.floated {
        visibility: hidden;
        float: left;
    }
    
    table.postable {
        font: 9pt arial, sans-serif;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0pt 10pt;
        margin-bottom: 5pt;
    }
    
    table.postable tbody tr:not(.postfooter ):nth-child(even) {
        background-color: #FAFAFA;
    }
    
    table.postable tr {
        break-inside: avoid;
    }
    
    hr.invisible {
        visibility: hidden;
        background: #fff;
        color: #fff;
        clear: both;
        margin: 0;
    }
    
    tr.postheader {
        background-color: #F0F0F0;
        padding: 4pt;
    }
    
    tr.transfer&gt;td:first-child {
        overflow: hidden;
    }
    
    tr.tansfer&gt;td {
        background-color: #F0F0F0;
        padding: 4pt;
    }
    
    tr.postheader td {
        white-space: nowrap;
    }
    
    tr.postfooter {
        background-color: #F0F0F0;
        padding: 4pt;
    }
    
    tr.postfootercontent {
        background-color: white;
    }
    
    td {
        vertical-align: top;
    }
    
    td.subtotal {
        text-align: right;
        padding-right: 5pt;
        font-weight: bold;
    }
    
    td.total {
        background-color: #fff !important;
        border: 0.75pt solid black;
        text-align: right;
        padding-right: 5pt;
        font-weight: bold;
    }
    
    td.right {
        text-align: right;
        width: 5em;
        padding-right: 0.5em;
    }
    
    p {
        font: 8pt arial, sans-serif;
    }
    
    p.terms {
        font-weight: bold;
        text-decoration: underline;
        font-style: italic;
    }
    
    body.main {
        string-set: subtotaltext "", sum "", currency "";
        counter-reset: position;
    }
    
    div.sum-subtotal {
        string-set: sum self;
        visibility: hidden;
        position: absolute;
    }
    
    td.invoice {
        string-set: invoice "Invoice " self;
    }
    
    table.postable tbody tr:first-child {
        string-set: subtotaltext "Subtotal", currency "EUR";
    }
    
    table.postable tbody tr:last-child {
        string-set: subtotaltext "", sum "", currency "";
    }
    
    td.position {
        counter-increment: position;
        text-align: right;
        padding-right: 10pt;
    }
    
    td.position::before {
        content: counter(position);
    }
    
    div.posttext {
        break-inside: avoid;
        padding-top: 10pt;
    }
    <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"scripts/angular/angular.min.js"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"scripts/app.js"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">body</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"main"</span> <span class="hljs-attr">data-ng-app</span>=<span class="hljs-string">"invoiceApp"</span> <span class="hljs-attr">data-ng-controller</span>=<span class="hljs-string">"invoiceController"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"companyinformation"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"logo"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Company Logo"</span> <span class="hljs-attr">data-ng-src</span>=<span class="hljs-string">"{{data.vendor.logo}}"</span> /&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.vendor.companyname}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.vendor.address}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.vendor.zip}} {{data.vendor.city}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.vendor.country}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"spacing"</span>&gt;</span>Tel. {{data.vendor.tel}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>Fax {{data.vendor.fax}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>E-Mail {{data.vendor.email}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"addressline"</span>&gt;</span>{{data.vendor.companyname}} - {{data.vendor.address}} - {{data.vendor.zip}} {{data.vendor.city}} - {{data.vendor.country}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"recipient"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.orderer.companyname}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>Attn: {{data.orderer.personname}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">data-ng-repeat</span>=<span class="hljs-string">"addressLine in data.orderer.address"</span>&gt;</span>
            {{addressLine}}
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.orderer.zip}} {{data.orderer.city}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{data.orderer.country | uppercase}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"descbox"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"descboxheader"</span>&gt;</span>
            Invoice
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"descboxcontent"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Process no.:<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.voucher.processno}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Voucher no.:<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"invoice"</span>&gt;</span>{{data.voucher.no}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Date:<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.voucher.date | formatAsDate:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Client reference no:<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.voucher.clientrefid}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"header"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"header header-footer"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"invoicetext"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right subtotaltext"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right currency"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"subtotal"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footer"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footer header-footer"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pagecounter"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right subtotaltext"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right currency"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"subtotal"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"companyinfo"</span>&gt;</span>
        {{data.vendor.companyname}} - {{data.vendor.register}} - Geschäftsführer: {{data.vendor.director}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span>
        {{data.vendor.bankname}} - BLZ: {{data.vendor.bankcode}} - Kto.-Nr: {{data.vendor.bankaccno}} - Swift Code: {{data.vendor.swiftbic}} - USt.IdNr: {{data.vendor.vatid}} - St-Nr: {{data.vendor.taxno}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span>
        Disclaimer: All data on this page is completely fictional. Any similarity to real data is purely coincidental.<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span>There is no representation that this data is accurate, complete or current.
    <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">hr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"invisible"</span> /&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"infotable"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"infotable"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Valid until<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Reference<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.voucher.clientrefid}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Our VAT-ID no.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.vendor.vatid}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Shipment<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>e-mail<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Your sign<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.orderer.personname}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Our sign<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.vendor.sign}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Terms of shipment<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Standard<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Your voucher<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.voucher.no}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Your VAT-ID no.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{data.orderer.vatid}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"postable"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"postheader"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"padding-right: 1.5mm"</span>&gt;</span>Pos.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"padding-right: 1.5mm"</span>&gt;</span>Art.-No.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width:11cm"</span>&gt;</span>Description<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>Qty. Unit<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>Unit Price<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>Total Price<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align:right"</span>&gt;</span>TC<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">data-ng-repeat</span>=<span class="hljs-string">"position in data.positions"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"position"</span> /&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>{{position.khkid | formatAsArticleNumber}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>{{position.articletitle}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">data-ng-repeat</span>=<span class="hljs-string">"desc in position.articledesc"</span>&gt;</span>
                        {{desc}}
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{position.qty}} {{position.unit}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{position.unitprice | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{position.total | formatAsValue:data.vendor.locale}}
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"sum-subtotal"</span>&gt;</span>{{position.subtotal | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align:right"</span>&gt;</span>{{data.vat.code}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"postfooter"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>Subtotal<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{data.vendor.currency}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"subtotal"</span>&gt;</span>{{data.subtotal | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align:right"</span> /&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"postfooter postfootercontent"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>VAT with TC {{data.vat.code}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{data.vat.value | formatAsPercentage:data.vendor.locale}} of<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{data.subtotal | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{data.subtotalVat | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"postfooter"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>Total<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right"</span>&gt;</span>{{data.vendor.currency}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"subtotal"</span>&gt;</span>{{data.totalWithVat | formatAsValue:data.vendor.locale}}<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footer"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"footer header-footer"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pagecounter"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right subtotaltext"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"right currency"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"subtotal"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"posttext"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The invoice amount must be paid with indication of the "Voucher no." by remittance to our bank account indicated below free of bank charges for us. 
            You may also send us a collection-only check in the currency mentioned above.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Account Holder: {{data.vendor.companyname}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> Account Number: {{data.vendor.bankaccno}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> IBAN: {{data.vendor.iban}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> Bank Name: {{data.vendor.bankname}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> Bank Address: {{data.vendor.bankaddress}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> Bank SWIFT/BIC Code: {{data.vendor.swiftbic}}<span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span> Bank Code: {{data.vendor.bankcode}}<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">barcode</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"float: right; width: 2cm;"</span> <span class="hljs-attr">message</span>=<span class="hljs-string">"{{data.voucher.processno}};{{data.voucher.no}};{{data.voucher.date | formatAsDate:data.vendor.locale}};{{data.voucher.clientrefid}};{{data.totalWithVat | formatAsValue:data.vendor.locale}};{{data.orderer.companyname}};{{data.orderer.personname}}"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">datamatrix</span> /&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">barcode</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"terms"</span>&gt;</span>Terms of payment:<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>10 Days without deduction {{data.totalWithVat | formatAsCurrency:data.vendor.locale:data.vendor.currency}}<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code><button class='button-code-copy'>📋 Copy Code</button></pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor | wkhtmltopdf
|---------|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_invoice_invoice.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_invoice_invoice.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_invoice_invoice.html.png) | ![wkhtmltopdf Preview](wkhtmltopdf__html_PDFreactor_Examples_invoice_invoice.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_invoice_invoice.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_invoice_invoice.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_invoice_invoice.html.pdf) | [📕 wkhtmltopdf Output](wkhtmltopdf__html_PDFreactor_Examples_invoice_invoice.html.pdf) |


