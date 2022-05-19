<?php
session_start();
if( isset(  $_SESSION['name']  ) )
header("Location: dash.php");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/signup.css" media="screen">
  <link rel="stylesheet" href="css/login.css" media="screen">
  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/test.css" media="screen">
  <link rel="stylesheet" href="css/test2.css" media="screen">
  <link rel="stylesheet" href="css/slide.css" media="screen">



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        
        <a href=#intro><img src="img/logo/logo.png" style="height:65px; width=65px; margin-top:-8px; float:left; "></a>
        <a class="navbar-brand" href="home.php">Cosmo-Learn</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#download">Downloads</a></li>
          <li><a href="#instructions">Instructions</a></li>
          <li><a href="#try">Trial</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="signuppage.html">Register</a></li>
          <li><a href="loginpage.html">Login</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="item active">
            <div class="carousel-background"><img src="img/home/1.jpg" alt="" ></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Cosmo-Learn</h2>
                <p class="animated fadeInUp">Learn to Understand.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Begin</a>
              </div>
            </div>
          </div>
          
   
          

        </div>

      </div>
    </div>
  </section><!-- #intro -->
  <div id="login" class="modal">
  
      <form  action="abeslog.php" method="post">
          <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
        <div class="container">
          <label style="float:left;" for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>
    
          <label style="float:left;" for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
            
          <button type="submit">Login</button>

        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" style="width: auto;
          padding: 10px 18px; background-color: lightgrey;float:left">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    
    
    <!-- About -->
    
    
    <section id="about" class="home-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>About</h2>
              <div class="heading-line"></div>
              <p>This project aims for a better model of education.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-md-6 about-img">
            <img src="img/about.jpg" alt="">
          </div>
   
          <div class="col-md-6 content">
            <h2>Concept
            </h2>
            <h3>The students shall use an application to scan images related to their concerned topic and the images shall come alive and teach about themselves.
  </h3>
  <h2>Better way of learning</h2>
  <h3>The students would have a better approach to learning as this initiative makes learning a much more intersting process, and they would not feel that education is a burden rather they would enjoy it. 
  </h3>
          </div>
        </div>
      </div>
    </section><!-- #about-->
    <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
          </div>
        </div>
      </div>
    </div>
  </section>     
    <section id="download" class="home-section bg-white">
    <div class="container">
      <h4>Scan The QR Codes To Download The Applications in Your Android Smartphones.</h4>
    <br>
    <br>
    <img src="img/A.png">
    <figcaption><a href="https://drive.google.com/file/d/1qUVt15puMCWkZYZRWY1RM3xr89JW0J7y/view?usp=sharing" style="color:gray; font-size:30px;">DOWNLOAD COSMO-LEARN APP</a></figcaption>
    <img src="img/B.png">
    <figcaption><a href="https://drive.google.com/file/d/1-LChvefnd0giAiohgWddKA31V05z5C5a/view?usp=sharing" style="color:gray; font-size:30px;">DOWNLOAD AR BOOK APP</a></figcaption>
    </section>

    <section id="instructions">
    <h1>How to use the application</h1>

    <hr>

  <p style="font-size:20px; font-style:oblique;">1. Open the application on your android smart phones.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">2. Now switch to our website or the AR-Book and select the topic you wanna study.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">3. Now point the camera towards the images to scan them.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">4. Now you can see those pictures come alive in your android smartphones.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">5. You can rotate the images and toggle audio by the in-app buttons.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">6. Happy Learning.</p>
  <br>
  <br>
<hr>
<br>
</section>
    <section id="try">
<h1>Scan these images to try the application</h1>
<br>
<hr>
<br>
    <img src="img/1.jpg">
    <img src="img/2.jpg" style="height:389px; width:516px;" hspace="70">
    <img src="img/4.jpg" style="height:389px; width:516px;" hspace="80">
    <img src="img/3.jpg" style="height:389px; width:516px;" vspace="80" hspace="70">
    
</section>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
<section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
          </div>
        </div>
      </div>
    </div>
  </section>     

<section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>These are our team members</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Parv Nautiyal</h4>
            <p>Web Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2.jpg" alt="" class="img-circle img-responsive" />
            <h4>Prakhar Shakya</h4>
            <p>App Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3.png" alt="" class="img-circle img-responsive" />
            <h4>Kush Singh</h4>
            <p>Web Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Nikhil Kumar</h4>
            <p>App Development</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="">Cosmo-Learn</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



            
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/validatepass.js"></script>
   <script src="js/slide.js"></script>

  </body>
  </html>