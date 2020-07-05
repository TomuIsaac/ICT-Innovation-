<?php 
include("config/connect.php");

$pid=$_GET['pid']; 

$sql="select * from application where pid='$pid'";

$result=mysql_query($sql) or die(mysql_error());

while($recs=mysql_fetch_array($result))

	{
	$pid=$recs['pid'];
	$name=$recs['name'];
	$co=$recs['co'];
	$email=$recs['email'];
	$tel=$recs['tel'];
	
	}
	
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
                                  <form name="myform" method="post" action="register.php">
                                  <p>&nbsp;</p>
                                  <table width="472" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td bgcolor="#FFFFFF">Pid</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="pid" type="text" value="<?php echo $pid; ?>" size="40" readonly="true" /></td>
                                      
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">Date</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                              
                                      <td bgcolor="#FFFFFF"><script>DateInput('dat', true, 'DD-MON-YYYY')</script></td>
                                      
                                    </tr>
                                    <tr>
                                      <td width="129" bgcolor="#FFFFFF">Name</td>
                                      <td width="22" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td width="146" bgcolor="#FFFFFF"><input name="name" type="text" id="name" value="<?php echo $name; ?>" size="40" readonly="true" /></td>
                                     
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">Company Type</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="co" type="text" id="co" value="<?php echo $co; ?>" size="40" readonly="true" /></td>
                                      
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">E-mail</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" value="<?php echo $email; ?>" size="40" readonly="true" /></td>
                                     
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">Tel .No</td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" value="<?php echo $tel; ?>" size="40" readonly="true" /></td>
                                     
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF">Amount Paid </td>
                                      <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
                                      <td bgcolor="#FFFFFF"><input name="amt" type="text" id="amt" size="40" /></td>
                                     
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF"><input name="Submit2" type="reset" value="Reset" /></td>
                                      <td bgcolor="#FFFFFF">&nbsp;</td>
                                      <td bgcolor="#FFFFFF"><input name="Submit" type="submit" value="Submit" /></td>
                                    </tr>
                                  </table>
                        
                                  </form>  
                                                               </td>
                                                               
                              </tr>
                              <tr>
                                <td><div align="center">
                                  <div align="center">
                                    <table width="200" border="0">
                                      <tr>
                                        <td><a href="viewa.php">back</a></td>
                                        <td><a href="editamtv.php">View Data</a></td>
                                      </tr>
                                    </table>
                                    <a href="viewa.php"></a><br>
                                  </div>
                                </div></td>
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
		<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("amt","req","Please enter  amount");
   frmvalidator.addValidation("amt","num","only digits required");

</script>
<p align="center"> @<?php echo date('Y')?>, All rights reserved</p>
	</body></html>