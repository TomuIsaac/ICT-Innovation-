
<html><head>

<title>URSB Online Company Registration</title>

	<link href="config/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
a {
	font-size: 16px;
	color: #000000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
-->
</style></head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
                            <td height="48">
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;              </p></td>
              </tr>
            <tr>
                            <td bordercolor="#666666" style="border-bottom-style: solid; border-bottom-width: 1px;" bgcolor="#ffffff" height="88">
                            <table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="45">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="93"><br>
                                  <table width="499" height="68" border="0" align="center" cellpadding="4" cellspacing="1">
                                    <tr>
                                      <td width="238" height="52" background="images/bgb.png"><table width="424" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#C3C3C3">
                                        <tr>
                                          <td width="416" bgcolor="#FFFFFF"><div align="center">
                                              <?php

include("config/connect.php");
$pid = $_POST['pid'];
$dat = $_POST['dat'];
$name = $_POST['name'];
$co = $_POST['co'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$amt = $_POST['amt'];


$query = "INSERT INTO pay
VALUES ('$pid', '$dat','$name', '$co', '$email', '$tel', '$amt')";

$results = mysql_query($query) or die 
("Could not execute query : $query." . mysql_error());

if ($results)
{
echo "Entry added  successfully.";
echo "<meta http-equiv=Refresh content=3;url=editamtv.php>";

}
mysql_close();
?>
                                          </div></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td height="78">&nbsp;</td>
                              </tr>
                            </table>
              <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;</p></td>
              </tr>
			<tr>
			  <td style="border-top-style: solid; border-top-width: 1px;">&nbsp;</td>
			</tr>
	</tbody></table>
		<p align="center"> All rights reserved</p>
	</body></html>