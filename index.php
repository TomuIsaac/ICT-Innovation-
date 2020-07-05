
<html>

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
          <h2>Online Company Registration System</h2>
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
