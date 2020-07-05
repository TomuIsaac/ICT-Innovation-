<?php
require("config/connect.php");
$id =$_REQUEST['uid'];



	
if(isset($_POST['save']))
{	
	$username_save = $_POST['username'];
	$password_save = $_POST['password'];
	$email_save = $_POST['email'];
	$usertype_save = $_POST['usertype'];
	

	mysql_query("UPDATE users SET username ='$username_save', password ='$password_save',
		 email ='$email_save',usertype ='$usertype_save' WHERE ID = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	@header("Location: reg2.php");			
}

$result = mysql_query("SELECT * FROM users WHERE ID  = '$id'");
$recs = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
	$username=$recs['username'];
	$password=$recs['password'];
	$email=$recs['email'];
    $usertype=$recs['usertype'];
    
mysql_close();
?>
	
<html><head>
<script type="text/javascript" src="config/prms.js">
</script>
<script language="JavaScript" src="config/gen.js" type="text/javascript"></script>
<title>Online Company Registration</title>

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
	background-image: url(images/bg.jpg);
}
-->
</style></head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
		<table width="101%" border="0" cellpadding="0" cellspacing="0">
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
                                <td><div align="center"><a href="index.php">Logout</a><br>
                                  </div>
                                  <form name="myform" method="post" >
                                  <p>&nbsp;</p>
                                  <table width="319" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
                                    
                                    <tr>
                                      <td width="129" bgcolor="#FFFFFF">Username</td>
                                      <td width="22" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td width="146" bgcolor="#FFFFFF"><input name="username" type="text" readonly value="<?php echo $username; ?>" size="40"/></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">Email</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="email" type="text" value="<?php echo $email; ?>" size="40"  /></td>
                                    </tr>

                                    <tr>
                                      <td bgcolor="#FFFFFF"> Usertype </td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF">
                                        <select name="usertype" required>
                                            <option value="Registrar" <?php echo ($usertype == "Registrar") ? "selected":""?>>REGISTRAR</option>
                                            <option value="BOD" <?php echo ($usertype == "BOD") ? "selected":""?>>B.O.D</option>
                                            <option value="Cashier" <?php echo ($usertype == "Cashier") ? "selected":""?>>CASHIER</option>
                                            <option value="Administrator" <?php echo ($usertype == "Administrator") ? "selected":""?>>ADMINISTRATOR</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>

                                    <tr>
                                      <td bgcolor="#FFFFFF">Password</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="password" type="text" value="<?php echo $password; ?>" size="40" /></td>
                                    </tr>
                                    
                                      <td bgcolor="#FFFFFF">&nbsp;</td>
                                      <td bgcolor="#FFFFFF">&nbsp;</td>
                                      <td bgcolor="#FFFFFF"><input name="save" type="submit"  value="save" /></td>
                                    </tr>
                                  </table>
                                                              
                              </form>
                            
                             
                                  <p align="center"><a href="#" onclick="history.go(-1);">back</a></p>
                                </table>
              <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;</p></td>
              </tr>
			<tr>
			  <td style="border-top-style: solid; border-top-width: 1px;">&nbsp;</td>
			</tr>
</tbody></table>
		
<p align="center"> All rights reserved</p>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("amt","req","Please enter  amount");
   frmvalidator.addValidation("amt","num","only digits required");

</script>
	</body></html>