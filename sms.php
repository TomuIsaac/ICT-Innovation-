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
.style2 {color: #FFFFFF}
-->
</style></head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
                            <td height="48">
              <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="index.php">Logout</a> </p></td>
              </tr>
            <tr>
                            <td bordercolor="#666666" style="border-bottom-style: solid; border-bottom-width: 1px;" bgcolor="#ffffff" height="88">
                            <table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="45">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="11" bgcolor="#FFFFFF"><div align="center">
<body>
<table width="751" border="0" align="center">
  <tr>
    <td><table width="192" border="0" align="center">
      <tr>
        <td width="213"><fieldset style=" border-left-style:dashed; border-left-color:#FF9900; border-collapse: separate;">
          <legend align="center"> Send sms via email</legend>
          <form id="form2" name="form1" method="post" action="vianneyjk@yahoo.com">
            <table width="178" border="0" align="center">
              <tr>
                <td><div align="center"> Name
                  <input type="text" name="name" id="name" />
                </div></td>
              </tr>
              <tr>
                <td><div align="center"> E-mail
                  <input type="text" name="email" id="email" />
                </div></td>
              </tr>
              <tr>
                <td><div align="center">Message</div></td>
              </tr>
              <tr>
                <td><textarea name="msg" rows="6" id="msg"></textarea></td>
              </tr>
              <tr>
                <td><div align="center">
                    <input type="submit" name="Submit2" value="Send" />
                </div></td>
              </tr>
            </table>
          </form>
        </fieldset></td>
      </tr>
    </table></td>
  </tr>
  <tr>
 
  </tr>
</table>
<table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3"><tr><td bgcolor="#FFFFFF"><table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
    <tr>
      <td colspan="3" bgcolor="#62A6E3"><div align="center">
        <?php
	include("config/connect.php");
// select record from mysql 
$sql="SELECT * FROM infor";
$result=mysql_query($sql);

?>
      </div></td>
      </tr>
    <td width="90" bgcolor="#62A6E3"><span class="style1">Name</span> </td>
      <td width="90" bgcolor="#62A6E3"><span class="style1">Email address</span> </td>
    <td width="90" bgcolor="#62A6E3"><span class="style1">Message</span> </td>
    
  </tr>
  <?php
								// Do while loop for out put records. 
								while($rows=mysql_fetch_array($result)){

									?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $rows['mes']; ?></td>
  </tr>
  <?php

									// close while loop 
												}

										// close connection; 
									mysql_close();
	
											?>
  <tr>
    <td colspan="11" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><a href="regcomp.php">back</a> </p>
<p align="center"> @<?php echo date('Y')?>, All rights reserved</p>
                                  </body>
</html>
