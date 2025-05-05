<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="html" encoding="UTF-8"/>
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Information</title>
                <link rel="stylesheet" type="text/css" href="students.css"/>
            </head>
            <body>
                <h1>Student Information</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Grade</th>
                    </tr>
                    <!-- Iterate over all student elements -->
                    <xsl:for-each select="students/student">
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="age"/></td>
                            <td><xsl:value-of select="gender"/></td>
                            <td><xsl:value-of select="course"/></td>
                            <td><xsl:value-of select="grade"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>



<!-- view-source:file:///D:/All%20Programms/HTML%20Tutorial/WTL/xml/DefaultXsltOutput.htm -->