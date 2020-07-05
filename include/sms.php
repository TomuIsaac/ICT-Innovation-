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
    <td width="192"><form name="form3" method="post" action="0705285493">
      <table width="192" border="0" align="center">
        <tr>
          <td width="213"><fieldset style=" border-left-style:dashed; border-left-color:#FF9900; border-collapse: separate;">
            <legend align="center"> Send sms via phone</legend>
            <table width="178" border="0" align="center">
              <tr>
                <td width="191"><div align="center">Phone</div></td>
              </tr>
              <tr>
                <td><div align="center">
                  <input type="text" name="phone" id="phone" />
                </div></td>
              </tr>
              <tr>
                <td><div align="center">Message</div></td>
              </tr>
              <tr>
                <td><textarea name="msg2" rows="6" id="msg2"></textarea></td>
              </tr>
              <tr>
                <td><div align="center">
                    <input type="submit" name="Submit" value="Send" />
                </div></td>
              </tr>
            </table>
          </fieldset></td>
        </tr>
      </table>
        </form>
    </td>
    <td width="543"><table width="192" border="0" align="center">
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
</table>
<p align="center"><a href="regcomp.php">back</a></p>
<p align="center"> All rights reserved</p>
                                      </body>
</html>
