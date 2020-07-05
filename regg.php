<?php
@ob_start();
@session_start();
require('./config/connect.php');
$_SESSION['id']=session_id();
$_SESSION['username']='$username';
$errorMessage = '';
if (isset($_POST["username"]) && isset($_POST["password"])) {
	// check if the username and password combination is correct
	//and exists in the database
  $username = $_POST["username"];
  // echo $username;
    $password = $_POST["password"];
	
//	session_register("userId");
	
	// $eaconn = @mysql_connect("localhost","root","") 
						// or die("Could not connect to the database!");
	// $eadb = @mysql_select_db("umu2", $eaconn) or die ("Failed to find User name/password,Please contact the administrator!");
  $eadb = $db;
  $eaconn = $connection;
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
              echo ("<script> location.href = 'admin.php' </script>");
              // header('Location: admin.php');
              
							exit;
					}
					
					elseif($row["usertype"] == "Cashier"){
							// set the session
							$_SESSION['Cashier_is_logged_in'] = true;
              // after login we move to the main page 
              echo ("<script> location.href = 'viewa.php' </script>");
							// header('Location: viewa.php');
							exit;			
					}
					elseif($row["usertype"] == "Registrar"){
							// set the session
							$_SESSION['Registrar_is_logged_in'] = true;
              // after login we move to the main page
              echo ("<script> location.href = 'reg.php' </script>");
							// header('Location: reg.php');
							exit;			
					}
					elseif($row["usertype"] == "BOD"){
							// set the session
							$_SESSION['B.O.B_is_logged_in'] = true;
              // after login we move to the main page
              echo ("<script> location.href = 'approve.php' </script>");
							// header('Location: approve.php');
							exit;			
					}
				
						
	}
		
else
	{
	
	$errorMessage = " Please check your username or password and login again";
	}
}
ob_end_flush();
?>
<html>

<head>
  <title>Uganda Registration Bureau</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <style type="text/css">
<!--
.style1 {color: #0033FF}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	color: #FF0000;
}
.style3 {
	color: #FF0000;
	font-weight: bold;
}
-->
  </style>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><img src="images/graphic.jpg" width="120" height="50"></h1>
          <h2> Online Company Registration System</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="regg.php">Register Company</a></li>
          <li><a href="serv.php">Services</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="cont.php">Contact us</a>
           </li>
              <li><a href="history.php">History</a></li>
              <li><a href="strategy.php">Our Strategies</a></li>
           
           
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div class="gallery">
        <ul class="images">
               <li class="show"><img width="950" height="300" src="images/7.jpg" alt="photo_one" /></li>
          <li><img width="950" height="300" src="images/8.jpg" alt="seascape" /></li>
          <li><img width="950" height="300" src="images/9.jpg" alt="seascape" /></li>
          <li><img width="950" height="300" src="images/6.jpg" alt="seascape" /></li>
        </ul>
      </div>
      
        
      
    </div>
    <table width="848" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center" class="style3">UGANDA REGISTRATION SERVICES BUREAU  INTELLECTUAL PROPERTY DIRECTORATE</div></td>
      </tr>
      <tr>
        <td width="414"><div align="left">•The Uganda Registration Services Bureau is an autonomous statutory body established by Chapter 210 Laws of Uganda in 1998.<br>
          • The Bureau was created to take over the functions of the Registrar General’s Office under the Ministry of Justice and Constitutional Affairs.<br>
          •The Act came into force on the 16th of August, 2004 and the self‐accounting status was granted in July, 2010.</div>
          <p><a href="apply.php" class="style1">Click here to apply</a></p>
          <form name="form1" method="post" action="">
            <table style="border-left-width: 0px; border-right-width: 0px;" width="325" bgcolor="#62A6E3" border="0" cellpadding="10" cellspacing="2">
              <tbody>
                <tr height="27">
                  <td height="27" bgcolor="#FFFFFF"><div align="center" class="style2">Ofiicial use</div></td>
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
                            </select>
                          </td>
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
            </table>
                    </form>
          <p>&nbsp;</p></td>
        <td width="424"><p>•The bureau is governed by the Boardof Directors and the Chief ExecutiveOfficer is the Registrar General.<br>
          •For the purpose of achieving itsobjectives, the functions of the bureauare stipulated under Section 4(2) of theURSB Act.<br>
          •Carrying out of all registrationsrequired under the relevant laws is oneof its core functions.</p>
          <p><span class="style3">REGISTRATIONS:</span><br>
            •Business registration<br>
            •Civil registration<br>
            •Intellectual property<br>
            registration (Trademarks, copyright and<br>
            patents)<br>
        15/06/2020 URSB 4
        </p>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <?php include('footer.php');?>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
