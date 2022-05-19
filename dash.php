<?php
  session_start();
  if(!isset(   $_SESSION['name']   )  )
          header('location:http://localhost/cosmolearn/dash.php');
   ?>

<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Bevan&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link href="css/nav.css" rel="stylesheet" media="screen">

</head>

<body>

  <!-- Navigation -->
  <ul>
  <li><a  class="active" href="dash.php"><?php   echo  " WELCOME    :&nbsp; " .  $_SESSION['name'] ;    ?></a></li>
 <li style="float:right;"><form action="logout.php" method="post"> <button style=" background-color:rgb(0,193,193); color:white; font-size:18px; font-family: 'PT Serif Caption', serif;" name="sub">Sign Out</button></form>
</ul>

  
  <section id="intro">
       
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="img/home/0.jpg" alt=""></div> 
            
            <div class="carousel-container">
                    
                <div class="carousel-content">
                
                
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                <h2 class="animated fadeInDown">Welcome to Cosmo-Learn!</h2>
                <h3 class="animated fadeInUp" style="color:white;">Select Subjects</h3>
                <a href="chemistry.php" class="btn-get-started animated fadeInUp">Chemistry</a>
                <a href="mechanics.php" class="btn-get-started animated fadeInUp">Mechanics</a>
                <a href="biology.php" class="btn-get-started animated fadeInUp">Biology</a>
                <a href="physics.php" class="btn-get-started animated fadeInUp">Physics</a>
                <a href="electrical.php" class="btn-get-started animated fadeInUp">Electrical</a>
               
              </div>
            </div>
          </div>
          
  </section><!-- #intro -->
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
  
</body>
   </html>