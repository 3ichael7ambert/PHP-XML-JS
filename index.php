<!-- base.xml -->
<?xml version="1.0" encoding="UTF-8"?>
<html xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<head>
    <title>My Website</title>
    <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
        <xsl:template match="/">
            <xsl:apply-templates select="page" />
        </xsl:template>
        <xsl:template match="page">
            <html>
            <head>
                <title><xsl:value-of select="title" /></title>
            </head>
            <body>
                <xsl:apply-templates select="content" />
            </body>
            </html>
        </xsl:template>
        <xsl:template match="content">
            <xsl:copy-of select="node()" />
        </xsl:template>
    </xsl:stylesheet>
</head>
<body>
    <xsl:apply-templates select="page" />
</body>
</html>

<!-- page.xml -->
<page>
    <title>My Page</title>
    <content>
        <h1>Welcome to my website!</h1>
        <p>This is the content of the page.</p>
    </content>
</page>
