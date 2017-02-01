<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="catalog">

  

    
        <html lang="en">
           
		   
		   
           
            
                

                <table border="1">
                    <thead>
                        <tr bgcolor="green">
                            <th>Make</th>
                            <th>Name</th>
                            <th>Top Speed</th>
                            <th>Price</th>
							<th>Rating</th>
							<th>description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="car">
                            <tr bgcolor="black">
                                <td>
                                    <xsl:value-of select="make" />
                                </td>
                                <td>
                                    <xsl:value-of select="name" />
                                </td>
                                <td>
                                    <xsl:value-of select="top_speed" />
                                </td>
                                <td>
                                    <xsl:value-of select="price" />
                                </td>
								<td>
                                    <xsl:value-of select="rating" />
                                </td>
								<td>
                                    <xsl:value-of select="description" />
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
				
            
        </html>
    </xsl:template>
</xsl:stylesheet>