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
	background-image: url();
	background-color: #CCCCCC;
}
-->
</style></head>

<body>
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center">THE REPULIC OF UGANDA</div></td>
  </tr>
</table>
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center">APPLICATION FORM RESERVATION OF NAME</div></td>
  </tr>
</table>
<table width="540" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="540" bgcolor="#FFFFFF"><div align="center">(Under Section 18* of the Companies Act, Cap, 110 &amp; Section 4(b)(1b) of NGO)</div></td>
  </tr>
</table>
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center">(Registration Amendment Act, 2006)</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="390" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left">The registrar of Companies</div></td>
  </tr>
   <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left">P.o.BOX 6848</div></td>
  </tr>
   <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left">KAMPALA</div></td>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="myform" method="post" action="client.php">
  <p>&nbsp;</p>
  <table width="420" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
    <tr>
      <td width="77" bgcolor="#FFFFFF">From: Name</td>
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="50" /></td>
    </tr>
    <tr>
      <td  width="77" bgcolor="#FFFFFF">Tel.No</td>
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" size="50" /></td>
    </tr>
    <tr>
      <td width="77" bgcolor="#FFFFFF">E-mail </td>
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="50" /></td>
    </tr>
    <tr>
      <td width="77" bgcolor="#FFFFFF"><div align="center">
        I/We</td>
      <td width="19" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="iwe" type="text" id="iwe" size="50" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="1022" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
    <tr>
      <td width="237"><table width="200" border="0">
          <tr>
            <td colspan="3">Being promoters of: (please choose as appropriate)</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">Company limited by Shares</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="company limited by share" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">Company limited Guarantee</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="company limited by guarantee" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">Non-Governmental Organisation</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="NGO" /></td>
          </tr>
      </table></td>
      <td width="437" ><table width="473" border="0">
          <tr>
            <td  colspan="3">Apply for the reservation of a name (Indicate in order of priority choice)</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td width="43" bgcolor="#FFFFFF">Choice</td>
            <td width="420" bgcolor="#FFFFFF">Proposed name</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">1st</td>
            <td bgcolor="#FFFFFF"><input name="choice1" type="text" id="choice1" size="60" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">2nd</td>
            <td bgcolor="#FFFFFF"><input name="choice2" type="text" id="choice2" size="60" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF">3rd</td>
            <td bgcolor="#FFFFFF"><input name="choice3" type="text" id="choice3" size="60" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td colspan="2" bgcolor="#FFFFFF"><label>
                <div align="right">
                  <input type="submit" name="Submit" value="apply" />
              </div></td>
          </tr>
      </table></td>
      <td width="326"><table width="320" border="0">
          <tr>
            <td colspan="3">Signed by applicant(s)</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td width="97" bgcolor="#FFFFFF">Name</td>
            <td width="5" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td width="204" bgcolor="#FFFFFF"><input name="name2" type="text" id="name2" size="30" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"> Signature(name or tel.no)</td>
            <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="natel" type="text" id="natel" size="30" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Date</td>
            <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><script>DateInput('dat', true, 'DD-MON-YYYY')</script></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td colspan="3" bgcolor="#FFFFFF"><div align="center">
                <label>
                <div align="left">
                  <input type="reset" name="Submit2" value="Cancel" />
                </div>
            </div></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>




<p>&nbsp; </p>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="503" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
  <tr>
    <td width="505" colspan="3" bgcolor="#FFFFFF">+NB: The Reservation is Valid For only 30 Days from Date of Approval</td>
  </tr>
</table>
<p align="center" class="style1"><a href="Index.php">Logout</a></p>
<p align="center">&nbsp;</p>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("name","req","Please enter personal/group name");
  frmvalidator.addValidation("tel","req","Please enter phone number");
  	  frmvalidator.addValidation("tel","num","Only Digits Allowed");
   frmvalidator.addValidation("email","req","Please email Address");
 frmvalidator.addValidation("iwe","req","Please fill the text");
   frmvalidator.addValidation("co","req","Please choose company type");
    frmvalidator.addValidation("choice1","req","At least fill the first text");
	 frmvalidator.addValidation("name2","req","Enter applicant name");
	  frmvalidator.addValidation("natel","req","Sign by name or phone number");
	  
</script>
<p align="center"> @<?php echo date('Y')?>, All rights reserved</p>
</body>
</html>