<?php
session_start();
$_SESSION['id']=session_id();
$_SESSION['username']='$username';
$errorMessage = '';
if (isset($_POST["username"]) && isset($_POST["password"])) {
	// check if the username and password combination is correct
	//and exists in the database
	$username = $_POST["username"];
    $password = $_POST["password"];
	
//	session_register("userId");
	
	$eaconn = @mysql_connect("localhost","root","") 
						or die("Could not connect to the database!");
	$eadb = @mysql_select_db("comp", $eaconn) or die ("Failed to find User name/password,Please contact the administrator!");
	
	//create query to check n c if staff exists
	$finduser = "SELECT * FROM users
					WHERE username = '$username'
						AND password = '$password'";
	$result = @mysql_query($finduser, $eaconn)
				or die ("User Login failed!" .mysql_error());
				
				
			if (@mysql_num_rows($result) == 1) {
						// the username and password match, 
						//open apporiate pages
						$row = mysql_fetch_array($result);
						if ($row["usertype"] == "Administrator"){
							// set the session
							$_SESSION['Administrator_is_logged_in'] = true;
							// after login we move to the main page
							header('Location: admin.php');
							exit;
					}
					
					elseif($row["usertype"] == "Cashier"){
							// set the session
							$_SESSION['Cashier_is_logged_in'] = true;
							// after login we move to the main page 
							header('Location: viewa.php');
							exit;			
					}
					elseif($row["usertype"] == "Registrar"){
							// set the session
							$_SESSION['Registrar_is_logged_in'] = true;
							// after login we move to the main page
							header('Location: reg.php');
							exit;			
					}
					elseif($row["usertype"] == "B.O.D"){
							// set the session
							$_SESSION['B.O.B_is_logged_in'] = true;
							// after login we move to the main page
							header('Location: approve.php');
							exit;			
					}
				
						
	}
		
else
	{
	
	$errorMessage = " Please check your username or password and login again";
	}
}

?>
<html><head>
<title>URSB Online Company Registration</title>
<script language="JavaScript" src="config/gen.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
body {
	background-image: url(images/bg.jpg);
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head><body leftmargin="0" topmargin="0"  marginheight="0" marginwidth="0">
		<fieldset><table width="771" border="0" align="center" cellpadding="0" cellspacing="0">
			<tbody><tr height="200">
			  <td height="133"><img src="images/n1.jpg" width="773" height="160"></td>
			</tr>
            <tr>
                            <td height="88">                            </td>
              </tr>
			<tr>
				<td >
					<div align="center">
						<form  name="myform" method="post" action="">
						  <br><fieldset style=" border: thin"><table style="border-left-width: 0px; border-right-width: 0px;" width="325" bgcolor="#62A6E3" border="0" cellpadding="10" cellspacing="2">
                            <tbody>
                              <tr height="27">
                                <td height="27" bgcolor="#FFFFFF"><div align="center" class="style1">User Login </div></td>
                              </tr>
                              <tr>
                                <td bordercolor="#336699" bgcolor="#FFFFFF" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium;"><table style="border-right-width: 0px;" width="305" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr height="10">
                                        <td width="85" height="10"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Username</font></td>
                                        <td style="border-right-style: solid; border-right-width: 1px;" width="20" height="10"></td>
                                        <td style="border-left-style: solid; border-left-width: 1px; border-right-style: none; border-right-width: medium;" height="10"><select name="username" id="username">
                                          <option>== SELECT ==</option>
                                          <option value="regi">REGISTRAR</option>
                                          <option value="bod">B.O.D</option>
                                          <option value="cash">CASHIER</option>
                                          <option value="admin">ADMINISTRATOR</option>
                                        </select>                                        </td>
                                      </tr>
                                      <tr height="10">
                                        <td width="85" height="10"></td>
                                        <td width="20" height="10"></td>
                                        <td height="10"></td>
                                      </tr>
                                      <tr height="10">
                                        <td width="85" height="10"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Password</font></td>
                                        <td width="20" height="10"></td>
                                        <td height="10"><input name="password" type="password" id="password" size="24" /></td>
                                      </tr>
                                      <tr height="10">
                                        <td width="85" height="10"></td>
                                        <td width="20" height="10"></td>
                                        <td height="10"></td>
                                      </tr>
                                      <tr height="10">
                                        <td width="85" height="10"></td>
                                        <td width="20" height="10"></td>
                                        <td height="10"><input name="image" type="image" src="images/login.jpg"></td>
                                      </tr>
                                    </tbody>
                                </table>
                                  <br>
                                <div align="center">
                                  <?php
if ($errorMessage != '') {
?>
                                  <br />
                                  <strong><font color="#990000"><?php echo $errorMessage; ?></font></strong><br />
                                  <?php
}
?>
                                </div></td>
                              </tr>
                              <tr height="4">
                                <td height="4" bgcolor="#FFFFFF"></td>
                              </tr>
                            </tbody>
					      </table></fieldset>
                      </form>
						<p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;</p>
				  </div></td>
			</tr>
	</tbody></table>
		</fieldset>
	<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("username","req","Please enter  Username");
  frmvalidator.addValidation("password","req","Please enter Password");  
</script>
<a href="apply.php">back
</a>
<p align="center">All rights reserved</p>
</body>
</html>
