<?php
session_start();
  if( ! isset(   $_SESSION['name']   )  )
   header("Location: home.php");

?>



<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Paytone+One&display=swap" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/login.css">
  <link href="css/nav.css" rel="stylesheet" media="screen">

</head>

<body>
<ul>
  <li><a  class="active" href="dash.php"><?php   echo  " WELCOME    :&nbsp; " .  $_SESSION['name'] ;    ?></a></li>
  <li style="float:right;"><form action="logout.php" method="post"> <button style=" background-color:rgb(0,193,193); color:white; font-size:18px; font-family: 'PT Serif Caption', serif;" name="sub">Sign Out</button></form>
</ul>

  
  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="item active">
            <div class="carousel-background"><img src="img/dashback/3.jpg" alt=""height="1000px" width="auto"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Biology</h2>
                <p class="animated fadeInUp">Welcome to biology.</p>
                <a href="#start" class="btn-get-started animated fadeInUp">Begin</a>
              </div>
            </div>
          </div>
          </div>
        </section>

        <section  id="start">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 wow fadeInLeft">
                            <div class="content">
                            <form action="logout.php" method="post"> 
                              
                           
                                    <h3 style="font-family: 'Paytone One', sans-serif;font-size:40px;">Heart</h3>
                                </div>
                                <p style="font-size:25px; letter-spacing: 1px;font-family: 'Josefin Sans', sans-serif;">The human heart is an organ that pumps blood throughout the body via the circulatory system, supplying oxygen and nutrients to the tissues and removing carbon dioxide and other wastes.
                                    <br><br>
                                    In humans, the heart is roughly the size of a large fist and weighs between about 10 to 12 ounces (280 to 340 grams) in men and 8 to 10 ounces (230 to 280 grams) in women.
                                    <br><br>
                                    The human heart has four chambers: two upper chambers (the atria) and two lower ones (the ventricles).
                                    <br><br>
                                    The right atrium and right ventricle together make up the "right heart," and the left atrium and left ventricle make up the "left heart." A wall of muscle called the septum separates the two sides of the heart.
                                    <br><br>
                                    The heart circulates blood through two pathways: the pulmonary circuit and the systemic circuit.
                                </p><br><br>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <img src="img/content/3.jpg" alt="" width="490px" style="margin-top:120px; margin-left:50px;">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #about close -->

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
