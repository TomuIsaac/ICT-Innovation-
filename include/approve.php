<?php
session_start();
if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?>
<html><head>
<script type="text/javascript" src="config/prms.js">
</script>
<script language="JavaScript" src="config/gen.js" type="text/javascript"></script>
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
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
body {
	background-image: url();
	background-color: #CCCCCC;
}
-->
</style></head>
<body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
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
                                <td height="45"><div align="center"><span class="style3">B.O.D'S PANEL</span></div></td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="11" bgcolor="#FFFFFF"><div align="center">
                                          <?php
	include("config/connect.php");
// select record from mysql 
$sql="SELECT * FROM register";
$result=mysql_query($sql);

?>
      </div></td>
  </tr>
  <tr>
   <td width="90" bgcolor="#62A6E3"><span class="style1">Pid</span></td>
   <td width="90" bgcolor="#62A6E3"><span class="style1">Date</span></div></td>
     <td width="90" bgcolor="#62A6E3"><span class="style1">Personal/Group Name</span></div></td>
     <td width="90" bgcolor="#62A6E3"><span class="style1">Company Type</span></div></td>
     <td width="90" bgcolor="#62A6E3"><span class="style1">Registered Company Name</span></div></td>
     <td width="90" bgcolor="#62A6E3"><span class="style1">Email Address</span></div></td>
     <td width="90" bgcolor="#62A6E3"><span class="style1">Tel. No</span></div></td>
    <td width="90" bgcolor="#62A6E3"><span class="style1">Amount Paid </span></div></td>
    <td width="126"  bgcolor="#FFFFFF" >&nbsp;</td>
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
    <td bgcolor="#FFFFFF"><?php echo $rows['com']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $rows['tel']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $rows['amt']; ?></td>
   <td bgcolor="#FFFFFF"><a href="payapp.php?pid=<?php echo $rows['pid']; ?>">approve</a></td>
  </tr>
  <?php

									// close while loop 
												}

										// close connection; 
									mysql_close();
	
											?>
                                    <tr>
                                      <td colspan="11" bgcolor="#FFFFFF"><div align="center"><a href="index.php"><strong> main page</strong></a></div></td>
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
		<div align="center">@2014, All rights reserved
		  </p>
	    </div>
</body></html>