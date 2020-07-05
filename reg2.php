<?php
session_start();
if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?>
<html><head>

<title>Online Company Registration</title>

	<link href="config/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
a {
	font-size: 16px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {
	font-size: 16px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style></head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
                            <td height="48">
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="index.php">Logout              </a></p></td>
              </tr>
            <tr>
                            <td bordercolor="#666666" style="border-bottom-style: solid; border-bottom-width: 1px;" bgcolor="#ffffff" height="88">
                            <table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="45"><div align="center"><span class="style3">APPLICANTS REPORT</span></div></td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="945" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="12" bgcolor="#FFFFFF"><div align="center">
                                        <p class="style3">&nbsp;</p>
                                        <p>
                                          <?php
	include("config/connect.php");
// select record from mysql 
$sql="SELECT * FROM application";
$result=mysql_query($sql);

?>
                                            </p>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td width="88" bgcolor="#62A6E3"><span class="style1">Pid</span></td>
                                      <td width="88" bgcolor="#62A6E3"><span class="style1">Date</span></td>
                                      <td width="120" bgcolor="#62A6E3"><span class="style1">Personal/Group Name</span></td>
                                      <td width="89" bgcolor="#62A6E3"><span class="style1">Company Type</span></td>
                                      <td width="89" bgcolor="#62A6E3"><span class="style1">Proposed Name</span></td>
                                      <td width="89" bgcolor="#62A6E3"><span class="style1">Email Address</span></td>
                                      <td width="93" bgcolor="#62A6E3"><span class="style1">Tel. No</span></td>
                                      <td width="200" bgcolor="#62A6E3">&nbsp;</td>
                                    </tr>
                                    <?php
								// Do while loop for out put records. 
								while($rows=mysql_fetch_array($result)){

									?>
                                    <tr>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['pid']; ?></td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['dat']; ?></td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['co']; ?></td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['choice']; ?>
                                        </td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
                                      <td bgcolor="#FFFFFF"><?php echo $rows['tel']; ?></td>
                                      <td bgcolor="#FFFFFF"><table width="200" border="0">
                                        <tr>
                                          <td bgcolor="#FFFFFF"><a href="editreg2.php?pid=<?php echo $rows['pid']; ?>">Edit</a></td>
                                          <td width="80"><div align="center"><a href="del.php?pid=<?php echo $rows['pid']; ?>">Delete</a></div></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <?php

									// close while loop 
												}

										// close connection; 
									mysql_close();
	
											?>
                                    <tr>
                                      <td colspan="12" bgcolor="#FFFFFF"><div align="center"><a href="admin.php"><strong> back</strong></a></div></td>
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