<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

<xsl:decimal-format name="european" decimal-separator="," grouping-separator="."/>
<xsl:decimal-format name="american" decimal-separator="." grouping-separator=","/>
<xsl:decimal-format name="international" decimal-separator="." grouping-separator=","/>

<xsl:output method="xml"
     doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" 
     doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
     encoding="us-ascii" />

  <xsl:variable name="unicode">&#x20;&#x21;&#x22;&#x23;&#x24;&#x25;&#x26;&#x27;&#x28;&#x29;&#x2A;&#x2B;&#x2C;&#x2D;&#x2E;&#x2F;&#x30;&#x31;&#x32;&#x33;&#x34;&#x35;&#x36;&#x37;&#x38;&#x39;&#x3A;&#x3B;&#x3C;&#x3D;&#x3E;&#x3F;&#x40;&#x41;&#x42;&#x43;&#x44;&#x45;&#x46;&#x47;&#x48;&#x49;&#x4A;&#x4B;&#x4C;&#x4D;&#x4E;&#x4F;&#x50;&#x51;&#x52;&#x53;&#x54;&#x55;&#x56;&#x57;&#x58;&#x59;&#x5A;&#x5B;&#x5C;&#x5D;&#x5E;&#x5F;&#x60;&#x61;&#x62;&#x63;&#x64;&#x65;&#x66;&#x67;&#x68;&#x69;&#x6A;&#x6B;&#x6C;&#x6D;&#x6E;&#x6F;&#x70;&#x71;&#x72;&#x73;&#x74;&#x75;&#x76;&#x77;&#x78;&#x79;&#x7A;&#x7B;&#x7C;&#x7D;&#x7E;&#x7F;&#x80;&#x81;&#x82;&#x83;&#x84;&#x85;&#x86;&#x87;&#x88;&#x89;&#x8A;&#x8B;&#x8C;&#x8D;&#x8E;&#x8F;&#x90;&#x91;&#x92;&#x93;&#x94;&#x95;&#x96;&#x97;&#x98;&#x99;&#x9A;&#x9B;&#x9C;&#x9D;&#x9E;&#x9F;&#xA0;&#xA1;&#xA2;&#xA3;&#xA4;&#xA5;&#xA6;&#xA7;&#xA8;&#xA9;&#xAA;&#xAB;&#xAC;&#xAD;&#xAE;&#xAF;&#xB0;&#xB1;&#xB2;&#xB3;&#xB4;&#xB5;&#xB6;&#xB7;&#xB8;&#xB9;&#xBA;&#xBB;&#xBC;&#xBD;&#xBE;&#xBF;&#xC0;&#xC1;&#xC2;&#xC3;&#xC4;&#xC5;&#xC6;&#xC7;&#xC8;&#xC9;&#xCA;&#xCB;&#xCC;&#xCD;&#xCE;&#xCF;&#xD0;&#xD1;&#xD2;&#xD3;&#xD4;&#xD5;&#xD6;&#xD7;&#xD8;&#xD9;&#xDA;&#xDB;&#xDC;&#xDD;&#xDE;&#xDF;&#xE0;&#xE1;&#xE2;&#xE3;&#xE4;&#xE5;&#xE6;&#xE7;&#xE8;&#xE9;&#xEA;&#xEB;&#xEC;&#xED;&#xEE;&#xEF;&#xF0;&#xF1;&#xF2;&#xF3;&#xF4;&#xF5;&#xF6;&#xF7;&#xF8;&#xF9;&#xFA;&#xFB;&#xFC;&#xFD;&#xFE;&#xFF;</xsl:variable>

  <!-- Characters that usually don't need to be escaped -->
  <xsl:variable name="safe">!'()*-.0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz~</xsl:variable>

  <xsl:variable name="hex">0123456789ABCDEF</xsl:variable>
 
  <xsl:template match="invoice">

         <xsl:variable name="orderSubTotal">
            <xsl:call-template name="sumPositions">
              <xsl:with-param name="positions" select="positions"/>
              <xsl:with-param name="index" select="'1'"/>
              <xsl:with-param name="runningTotal" select="'0'"/>
            </xsl:call-template>
          </xsl:variable>

<html>
  <head>
    <title>Corporate Invoice</title>
    <link rel="stylesheet" href="invoice.css" type="text/css" />
    <style type="test/css">
        p.companyinfo::before {
            white-space: pre;
            content: "<xsl:value-of select="vendor/companyname"/> - Amtsgericht Frankfurt/M, HRB 23456 - Gesch\00E4 ftsf\00FC hrer: Dr. Peter Bogenhaus, Prof. Franz R. Weber\A<xsl:value-of select="vendor/bankname"/> - BLZ: <xsl:value-of select="vendor/bankcode"/> - Kto.-Nr: <xsl:value-of select="vendor/bankaccno"/> - Swift Code: <xsl:value-of select="vendor/swiftbic"/> - USt.IdNr: DE847648675 - St-Nr: 030/114/00345\A Disclaimer: All data on this page is completely fictional. Any similarity to real data is purely coincidential.\AThere is no representation that this data is accurate, complete or current.";
        }
    </style>
  </head>
  <body class="main">
    <div class="companyinformation">

<img>
  <xsl:attribute name="class">
    <xsl:value-of select="'logo'" />
  </xsl:attribute>
  <xsl:attribute name="alt">
    <xsl:value-of select="'Company Logo'" />
  </xsl:attribute>  
  <xsl:attribute name="src">
    <xsl:call-template name="url-encode">
      <xsl:with-param name="str" select="concat(vendor/companyname,'.png')"/>
    </xsl:call-template>
  </xsl:attribute>
</img>
     <br/>
     <xsl:value-of select="vendor/companyname"/><br />
     <xsl:value-of select="vendor/address"/><br />
     <xsl:value-of select="concat(vendor/zip,' ',vendor/city)"/><br />
     <xsl:value-of select="vendor/country"/><br />
     <br />
     Tel. <xsl:value-of select="vendor/tel"/><br />
     Fax  <xsl:value-of select="vendor/fax"/><br />
     E-Mail <xsl:value-of select="vendor/email"/><br />
    </div>

    <div class="addressline"> 
     <xsl:value-of select="vendor/companyname"/> - <xsl:value-of select="vendor/address"/> - <xsl:value-of select="concat(vendor/zip,' ',vendor/city)"/> - <xsl:value-of select="vendor/country"/>
    </div>

    <div class="recipient">
     <xsl:value-of select="orderer/companyname"/><br />
     Attn: <xsl:value-of select="orderer/personname"/><br />
         <xsl:for-each select="orderer/address">
           <xsl:value-of select="." /><br />
         </xsl:for-each>
     <xsl:value-of select="concat(orderer/zip,' ',orderer/city)"/><br />
     <xsl:value-of select="orderer/country"/><br />
    </div>

   <div class="descbox">
     <div class="descboxheader">
      Invoice
     </div>
     <div class="descboxcontent">
     <table>
      <tr>
       <td>Process no.:</td> 
       <td><xsl:value-of select="voucher/@processno"/></td>
      </tr>
      <tr>
       <td>Voucher no.:</td> 
       <td class="invoice"><xsl:value-of select="voucher/@no"/></td>
      </tr>
      <tr>
        <td>Date:</td>
        <td><xsl:value-of select="voucher/@date"/></td>
     </tr>
      <tr>
       <td>Client reference no:</td>
       <td><xsl:value-of select="voucher/@clientrefid"/></td>
      </tr>
     </table>
     </div>
    </div>

    <div class="header">
        <table class="header header-footer">
            <tr>
                <td class="invoicetext"></td><td class="right subtotaltext"></td><td class="right currency"></td><td class="subtotal"></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <table class="footer header-footer">
            <tr>
                <td class="pagecounter"></td><td class="right subtotaltext"></td><td class="right currency"></td><td class="subtotal"></td>
            </tr>
        </table>
        <p class="companyinfo"></p>
    </div>
    <hr class="invisible" />
     <div class="infotable">
    <table class="infotable">
     <tr>
      <td>Valid until</td>
      <td></td>
      <td>Reference</td>
      <td><xsl:value-of select="voucher/@clientrefid"/></td>
      <td>Our VAT-ID no.</td>
      <td><xsl:value-of select="vendor/vatid"/></td>
     </tr>
     <tr>
      <td>Shipment</td>
      <td><xsl:value-of select="orderer/shipment"/></td>
      <td>Your sign</td>
      <td><xsl:value-of select="orderer/personname"/></td>
      <td>Our sign</td>
      <td><xsl:value-of select="vendor/sign"/></td>
     </tr>
     <tr>
      <td>Terms of shipment</td>
      <td>Standard</td>
      <td>Your voucher</td>
      <td><xsl:value-of select="voucher/@no"/></td>
      <td>Your VAT-ID no.</td>
      <td><xsl:value-of select="orderer/vatid"/></td>
     </tr>
    </table>
    </div>

     <table class="postable">
     <thead>
          <tr class="postheader">
           <td style="padding-right: 1.5mm">Pos.</td>
           <td style="padding-right: 1.5mm">Art.-No.</td>
           <td style="width:11cm">Description</td>
           <td class="right">Qty. Unit</td>
           <td class="right">Unit Price</td>
           <td class="right">Total Price</td>
           <td style="text-align:right">TC</td>
          </tr>
      </thead>
      <tbody>
      <xsl:variable name="subtotalhelper" select="0" />
      
      <xsl:call-template name="positions">
          <xsl:with-param name="positions" select="positions"/>
          <xsl:with-param name="index" select="1"/>
          <xsl:with-param name="runningTotal" select="0"/>
      </xsl:call-template>

      <tr class="postfooter">
       <td></td>
       <td></td>
       <td></td>
       <td class="right">Subtotal</td>
       <td class="right">EUR</td>
       <td class="subtotal">
          <xsl:value-of select="format-number($orderSubTotal, '#,###.00', 'international')"/>
       </td>
       <td style="text-align:right"></td>
      </tr>
      <tr class="postfooter postfootercontent">
       <td></td>
       <td></td>
       <td>VAT with TC 14</td>
       <td class="right">19.00% of</td>
       <td class="right">
          <xsl:value-of select="format-number($orderSubTotal, '#,###.00', 'international')"/>
       </td>
       <td class="right"><xsl:value-of select="format-number(($orderSubTotal * 0.19), '#,###.00', 'international')"/></td>
       <td></td>
      </tr>
      <tr class="postfooter">
       <td></td>
       <td></td>
       <td></td>
       <td class="right">Total</td>
       <td class="right">EUR</td>
       <td class="subtotal">
          <xsl:value-of select="format-number(($orderSubTotal * 1.19), '#,###.00', 'international')"/>
      </td>
      <td></td>
      </tr>
      </tbody>
     </table>

     <div class="posttext">
       <p>The invoice amount must be paid with indication of the "Voucher no." by remittance to our bank account indicated below free of bank charges for us. You may also send us a collection-only check in the currency mentioned above.</p>
       <p>Account Holder: <xsl:value-of select="vendor/companyname"/><br />
       Account Number: <xsl:value-of select="vendor/bankaccno"/><br />
       IBAN: <xsl:value-of select="vendor/iban"/><br />
       Bank Name: <xsl:value-of select="vendor/bankname"/><br />
       Bank Address: <xsl:value-of select="vendor/bankaddress"/><br />
       Bank SWIFT/BIC Code: <xsl:value-of select="vendor/swiftbic"/><br />
       Bank Code: <xsl:value-of select="vendor/bankcode"/></p>

       <barcode style="float: right; width: 2cm;">
          <xsl:attribute name="message">
            <xsl:value-of select="voucher/@processno"/>;<xsl:value-of select="voucher/@no"/>;<xsl:value-of select="voucher/@date"/>;<xsl:value-of select="voucher/@clientrefid"/>;<xsl:value-of select="format-number(($orderSubTotal * 1.19), '#.00', 'international')"/>;<xsl:value-of select="orderer/companyname"/>;<xsl:value-of select="orderer/personname"/>
          </xsl:attribute>
            <datamatrix/>
       </barcode>
       <p class="terms">Terms of payment:</p>

       <p>10 Days without deduction
          <xsl:value-of select="format-number(($orderSubTotal * 1.19), '#,###.00', 'international')"/>  EUR
       </p>
     </div>
   </body>
 </html>  
</xsl:template>
  
 <xsl:template name="sumPositions">
    <xsl:param name="positions"/>
    <xsl:param name="index" select="'1'"/>
    <xsl:param name="runningTotal" select="'0'"/>
    <xsl:variable name="currentPosition">
      <xsl:value-of select="$positions/position[$index]/qty * $positions/position[$index]/unit_price"/>
    </xsl:variable>
    <xsl:variable name="remainingpositions">
      <xsl:choose>
        <xsl:when test="$index=count($positions/position)">
          <xsl:text>0</xsl:text>
        </xsl:when>
        <xsl:otherwise>
          <xsl:call-template name="sumPositions">
            <xsl:with-param name="positions" select="$positions"/>
            <xsl:with-param name="index" select="$index+1"/>
            <xsl:with-param name="runningTotal" select="$runningTotal+$currentPosition"/>
          </xsl:call-template>
        </xsl:otherwise>
      </xsl:choose>
    </xsl:variable>
    <xsl:value-of select="$currentPosition+$remainingpositions"/>
  </xsl:template>
  
  <xsl:template name="url-encode">
    <xsl:param name="str"/>   
    <xsl:if test="$str">
      <xsl:variable name="first-char" select="substring($str,1,1)"/>
      <xsl:choose>
        <xsl:when test="contains($safe,$first-char)">
          <xsl:value-of select="$first-char"/>
        </xsl:when>
        <xsl:otherwise>
          <xsl:variable name="codepoint">
            <xsl:choose>
              <xsl:when test="contains($unicode,$first-char)">
                <xsl:value-of select="string-length(substring-before($unicode,$first-char)) + 32"/>
              </xsl:when>
              <xsl:otherwise>
                <xsl:message terminate="no">Warning: string contains a character that is out of range! Substituting "?".</xsl:message>
                <xsl:text>63</xsl:text>
              </xsl:otherwise>
            </xsl:choose>
          </xsl:variable>
        <xsl:variable name="hex-digit1" select="substring($hex,floor($codepoint div 16) + 1,1)"/>
        <xsl:variable name="hex-digit2" select="substring($hex,$codepoint mod 16 + 1,1)"/>
        <xsl:value-of select="concat('%',$hex-digit1,$hex-digit2)"/>
        </xsl:otherwise>
      </xsl:choose>
      <xsl:if test="string-length($str) &gt; 1">
        <xsl:call-template name="url-encode">
          <xsl:with-param name="str" select="substring($str,2)"/>
        </xsl:call-template>
      </xsl:if>
    </xsl:if>
  </xsl:template>
  
  <xsl:template name="positions">
    <xsl:param name="positions" />
    <xsl:param name="index" select="'1'"/>
    <xsl:param name="runningTotal" select="'0'"/>
    
    <xsl:variable name="position" select="positions/position[$index]" />
    <xsl:variable name="khkid" select="positions/position[$index]/khkid" />
    <xsl:variable name="articletitle" select="positions/position[$index]/articletitle" />
    <xsl:variable name="qty" select="positions/position[$index]/qty" />
    <xsl:variable name="unit_price" select="positions/position[$index]/unit_price" />
    <xsl:variable name="subtotal" select="($qty * $unit_price)" />
    <xsl:variable name="runningTotalSum" select="$runningTotal+$subtotal" />
    
    
    <xsl:call-template name="position">
        <xsl:with-param name="position" select="$position"/>
        <xsl:with-param name="index" select="$index"/>
        <xsl:with-param name="khkid" select="$khkid"/>
        <xsl:with-param name="articletitle" select="$articletitle"/>
        <xsl:with-param name="qty" select="$qty"/>
        <xsl:with-param name="unit_price" select="$unit_price"/>
        <xsl:with-param name="runningTotal" select="$runningTotalSum"/>
    </xsl:call-template>
    
    <xsl:if test="$index &lt; count($positions/position)">
        <xsl:call-template name="positions">
            <xsl:with-param name="positions" select="$positions" />
            <xsl:with-param name="index" select="$index+1" />
            <xsl:with-param name="runningTotal" select="$runningTotalSum" />
        </xsl:call-template>
    </xsl:if>
  </xsl:template>
  
  <xsl:template name="position">
    <xsl:param name="position"/>
    <xsl:param name="index"/>
    <xsl:param name="khkid" select="'0'"/>
    <xsl:param name="articletitle"/>
    <xsl:param name="qty" select="'0'"/>
    <xsl:param name="unit_price" select="'0'"/>
    <xsl:param name="runningTotal" select="'0'"/>
    
    <xsl:variable name="unit" select="$position/unit"/>
    
    <tr>
       <td class="position">
       </td>
       <td><xsl:value-of select="$khkid" /></td>
       <td>
         <xsl:value-of select="$articletitle" />
         <xsl:for-each select="$position/articledesc">
            <br /><xsl:value-of select="." />
        </xsl:for-each>
       </td>
       
       <td class="right"><xsl:value-of select="concat($qty,' ',$unit)" /></td>
       <td class="right"><xsl:value-of select="format-number($unit_price, '#,###.00', 'international')" /></td>
       <td class="right"><xsl:value-of select="format-number(($qty * $unit_price), '#,###.00', 'international')" />
        <div class="sum-subtotal"><xsl:value-of select="format-number($runningTotal, '#,###.00', 'international')" /> </div></td>
       <td style="text-align:right">14</td>
      </tr>
    </xsl:template>
  
 </xsl:stylesheet>
