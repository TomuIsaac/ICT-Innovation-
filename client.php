
<html><head>
<title>Patient Records Management System</title>

	<link href="config/style.css" rel="stylesheet" type="text/css">
</head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
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
                                <td><br>
                                  <table width="499" height="71" border="0" align="center">
                                    <tr>
                                      <td height="67" background="config/images/bgb.png"><table width="355" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="C3C3C3">
                                        <tr>
                                          <td width="345" bgcolor="#FFFFFF"><div align="center">
 <?php

include("config/connect.php");
// print_r($_POST);
// exit;
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$iwe = $_POST['iwe'];
$co = $_POST['co'];
$choice= $_POST['choice'];

$name2 = $_POST['name2'];
$natel = $_POST['natel'];
$dat = $_POST['dat'];

$query = "INSERT INTO application
VALUES ('', '$name', '$tel', '$email', '$iwe', '$co', '$choice', '', '', '$name2', '$natel', '$dat')";
$results = mysql_query($query) or die 
("Could not execute query : $query." . mysql_error());

if ($results)
{
echo "Entry added  successfully.";
echo "<meta http-equiv=Refresh content=3;url=apply.php>";
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
		<p align="center">All rights reserved</p>
	</body></html>