<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Attendance</title>
            </head>
            <body>
                <h2>Student Attendance</h2>
                <ul>
                    <xsl:for-each select="attendance/student">
                        <li>
                            <xsl:value-of select="name"/> - <xsl:value-of select="days_present"/> days present
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

<!-- file:///D:/All%20Programms/WTL/xml/std_output.htm -->