<?php
session_start();
if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?>
<html><head>

<title>URSB Online Company Registration</title>

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
.style2 {color: #FFFFFF}
.style3 {
	font-size: 16px;
	font-weight: bold;
	color: #FF0000;
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
                                <td><br>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
                            <td height="48">
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;              </p></td>
              </tr>
            <tr>
                            <td bordercolor="#666666" style="border-bottom-style: solid; border-bottom-width: 1px;" bgcolor="#ffffff" height="88">
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
                                <td height="45"><div align="center" class="style3">CASHIER'S PANEL</div></td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="12" bgcolor="#FFFFFF"><div align="center">
                                        <span class="FormCommonRequired style2">CASHIER REPORT                                        </span>
                                        <p>
                                          <?php
	include("config/connect.php");
// select record from mysql 
$sql="SELECT * FROM pay";
$result=mysql_query($sql);

?>
                                        </p>
                                        </div></td>
  </tr>
  <tr>
    <td width="90" bgcolor="#62A6E3"><span class="style1">Pid</span>
      </div></td>
   
  <td width="90" bgcolor="#62A6E3"><span class="style1">Date</span></div></td>
   <td width="90" bgcolor="#62A6E3"><span class="style1">Personal/Group Name</span></div></td>
<td width="90" bgcolor="#62A6E3"><span class="style1">Company Type</span></div></td>
  
    <td width="90" bgcolor="#62A6E3"><span class="style1">Email Address</span></div></td>
   <td width="90" bgcolor="#62A6E3"><span class="style1">Tel. No</span></div></td>
   <td width="90" bgcolor="#62A6E3"><span class="style1">Amount Paid </span></div></td>
    
  </tr>
  <?php
								// Do while loop for out put records. 
								while($rows=mysql_fetch_array($result)){

									?>
  <tr>
   <tr>
     <td bgcolor="#FFFFFF"><?php echo $rows['pid']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $rows['dat']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $rows['co']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
    
     <td bgcolor="#FFFFFF"><?php echo $rows['tel']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $rows['amt']; ?></td>
    
    <td bgcolor="#FFFFFF"><a href="editamt.php?pid=<?php echo $rows['pid']; ?>">Edit</a></td>
  </tr>
  <?php

									// close while loop 
												}

										// close connection; 
									mysql_close();
	
											?>
  <tr>
    <td colspan="10" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
                             </td>
                              </tr>
                              <tr>
                                <td height="78">&nbsp;</td>
                              </tr>
                            </table>
              <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="pay.php"></a></p></td>
              </tr>
			<tr>
			  <td style="border-top-style: solid; border-top-width: 1px;">&nbsp;</td>
			</tr>
	</tbody></table>
    <p align="center"> All rights reserved</p>
	</body></html>