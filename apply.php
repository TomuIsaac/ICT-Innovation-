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
<script type="text/javascript" src="include/print.js"></script>
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
	background-color: #62A6E3;
}
.style1 {font-size: 16px}
-->
</style></head>

<body>
 <div id="printarea">
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center" class="style1">THE REPULIC OF UGANDA</div></td>
  </tr>
</table>
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center" class="style1">APPLICATION FORM RESERVATION OF NAME</div></td>
  </tr>
</table>
<table width="540" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="540" bgcolor="#FFFFFF"><div align="center" class="style1">(Under Section 18* of the Companies Act, Cap, 110 &amp; Section 4(b)(1b) of NGO)</div></td>
  </tr>
</table>
<table width="390" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="center" class="style1">(Registration Amendment Act, 2006)</div></td>
  </tr>
</table>
<table width="166" border="0" style="margin-top:-110px">
  <tr>
    <td width="160"><img src="images/66.jpg" width="258" height="200"></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="390" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="">
  <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left" class="style1">The registrar of Companies</div></td>
  </tr>
   <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left" class="style1">P.o.BOX 6848</div></td>
  </tr>
   <tr>
    <td width="382" bgcolor="#FFFFFF"><div align="left" class="style1">KAMPALA</div></td>
  </tr>
</table>

<table width="200" border="0" align="" style="margin-top:-10%; margin-left:70%">
  <tr>
    <td><img src="images/a.jpg"  height="200"></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="myform" method="post" action="client.php">
  <p>&nbsp;</p>
  <table width="420" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
    <tr>
      <td width="77" bgcolor="#FFFFFF"><div class="style1">From:Name</div></td>
      
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="50" /></td>
      
    </tr>
    <tr>
      <td  width="77" bgcolor="#FFFFFF"><div class="style1">Tel.No</td>
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" size="50" /></td>
    </tr>
    <tr>
      <td width="77" bgcolor="#FFFFFF"><div  class="style1">E-mail </td>
      <td width="19"  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="50" /></td>
    </tr>
    <tr>
      <td width="77" bgcolor="#FFFFFF"><div  class="style1"><div align="center">
        I/We</td>
      <td width="19" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
      <td bgcolor="#FFFFFF"><input name="iwe" type="text" id="iwe" size="50" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="1057" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#62A6E3">
    <tr>
      <td width="202"><table width="200" border="0">
          <tr>
            <td colspan="3"><div  class="style1">Being promoters of: (please choose as appropriate)</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"><div  class="style1">Company limited by Shares</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="company limited by share" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"><div  class="style1">Company limited Guarantee</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="company limited by guarantee" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"><div  class="style1">Non-Governmental Organisation</td>
            <td  bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="co" type="radio" value="NGO" /></td>
          </tr>
      </table></td>
      <td width="473" ><table width="473" border="0">
          <tr>
            <td  colspan="5"><div class="style1">Apply for the reservation of a name (Indicate in order of priority choice)</div></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td width="43" bgcolor="#FFFFFF"><div class="style1">Choice</div></td>
            <td width="420" bgcolor="#FFFFFF"><div class="style1">Proposed name</div></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"><label>
              <select name="select" id="select">
                <option>1st Choice</option>
                <option>2rd Choice</option>
                <option>3 rd Choice</option>
                <option>&lt;&lt;Select&gt;&gt;</option>
              </select>
            </label></td>
            <td bgcolor="#FFFFFF"><input name="choice" type="text" id="choice" size="60" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td colspan="2" bgcolor="#FFFFFF"><label>
                <div align="right"></div></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td colspan="2" bgcolor="#FFFFFF" align="right"><input type="submit" name="Submit" value="apply" /></td>
          </tr>
          
      </table></td>
      <td width="360"><table width="352" border="0">
          <tr>
            <td colspan="3"><div class="style1">Signed by applicant</div></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td width="120" bgcolor="#FFFFFF"><div align="left" class="style1">Name</div></td>
            <td width="8" bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td width="210" bgcolor="#FFFFFF"><input name="name2" type="text" id="name2" size="30" /></td>
          </tr>
          <tr bgcolor="#62A6E3">
            <td bgcolor="#FFFFFF"><div class="style1"> Name or Tel.no)</div></td>
            <td bgcolor="#FFFFFF"><div align="center"><strong>:</strong></div></td>
            <td bgcolor="#FFFFFF"><input name="natel" type="text" id="natel" size="30" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="left" class="style1">Date</div></td>
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
    <td width="505" colspan="3" bgcolor="#FFFFFF"><div align="left" class="style1">+NB: The Reservation is Valid For only 30 Days from Date of Approval</div></td>
  </tr>
</table>
</div>
<p align="center" class="style1"><a href="Index.php">Logout </a>|  <a href="#" onClick="PrintDoc('printarea');">Print application form</a></p>
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