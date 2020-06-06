<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet
    version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:html="http://www.w3.org/1999/xhtml"
    xmlns="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="html"
>

    <xsl:output
        method="xml"
        doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"
        doctype-public="-//W3C//DTD XHTML 1.1//EN"
    />

    <xsl:template match="node()|@*">
        <xsl:copy>
            <xsl:apply-templates select="@*"/>
            <xsl:apply-templates/>
        </xsl:copy>
    </xsl:template>

    <!--Cut title page from the document-->
    <xsl:template match="html:h1"></xsl:template>

    <!--Adding IDs for cross references-->
    <xsl:template match="html:h2[position()>1]">
        <xsl:copy>
            <xsl:attribute name="id"><xsl:value-of select="generate-id()"/></xsl:attribute>
            <xsl:apply-templates select="@*"/>
            <xsl:apply-templates/>
        </xsl:copy>
    </xsl:template>

    <!--Generating table of contents-->
    <xsl:template match="html:body">

       <xsl:copy>

            <!--Paste the title page before TOC-->
            <xsl:for-each select="//html:h1">
                <xsl:copy><xsl:apply-templates /><xsl:apply-templates select="@*" /></xsl:copy>
            </xsl:for-each>

            <div class="tableOfContents">
                <h2>Contents</h2>
                <xsl:for-each select=".//html:h2[position()>1]">
                    <div><a href="#{generate-id(.)}"><xsl:apply-templates/></a></div>
                </xsl:for-each>
            </div>


            <xsl:apply-templates/>
            <xsl:apply-templates select="@*"/>

        </xsl:copy>

    </xsl:template>

</xsl:stylesheet>
