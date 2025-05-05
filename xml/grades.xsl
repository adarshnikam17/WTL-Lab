<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Grades</title>
            </head>
            <body>
                <h2>Student Grades</h2>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Grade</th>
                    </tr>
                    <xsl:for-each select="grades/student">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="subject"/></td>
                            <td><xsl:value-of select="grade"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

<!-- file:///D:/All%20Programms/WTL/xml/attendance_output.htm -->