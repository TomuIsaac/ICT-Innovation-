<?php
session_start();
if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?><html>

<head>
  <title>Uganda Registration Bureau</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><img src="images/graphic.jpg" width="120" height="50"></h1>
          <h2>Company Online Registration</h2>
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

    <div style="width:100%">
        <div style="width:50%;">
        <div style="color:#F67400">WRITE TO US</div> 
        <form name="myform" method="post" action="contact.php">
      <table width="200" border="0" align="center">
        <tr>
          <td>Name</td>
          <td><div align="left">:</div></td>
          <td><label>
            <input type="text" name="name" id="name">
            </label>
          </td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <td colspan="3">Message</td>
        </tr>
        <tr>
          <td colspan="3"><textarea name="mes" id="mes" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="3"><table width="200" border="1">
              <tr>
                <td><label></label>
                    <input type="reset" name="Cancel" id="Cancel" value="Cancel">
                </td>
                <td><input type="submit" name="send" id="send" value="Send"></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </form>
        </div>

        <div style="width:25%; background:#ffffff; position:absolute; top:517px; left: 800px; padding:6px">
            <h4>CONTACT US</h4>
            <p class="contact-info"> <img src="./images/pin.svg" alt=""> Address: Uganda Registration Services Bureau, Plot 5 George Street, Georgian House,</p>
            <p class="contact-info">P.O. Box 6848 Kampala Uganda</p>
            <p class="contact-info"><img src="./images/phone.svg" alt="">  Phone: +256 414 233 219</p>
            <p class="contact-info"><img src="./images/phone.svg" alt=""> Call center +256 417 338 100</p>
            <p class="contact-info"><img src="./images/whatsapp.svg" alt=""> Whatsapp: +256 712 448 448</p>
            <p class="contact-info"><img src="./images/phone.svg" alt="">Toll free: 0800 100 006</p>
            <p class="contact-info"><img src="./images/phone.svg" alt=""> Fax: +256 414 250 712</p>
            <p class="contact-info"><img src="./images/email.svg" alt=""> Email: ursb@ursb.go.ug</p>
        </div>
    </div>
    
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
  <script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("name","req","Please enter personal/group name");
  frmvalidator.addValidation("email","req","Please enter email address");
  	 
 
 frmvalidator.addValidation("mes","req","Please information");
   
</body>
</html>
