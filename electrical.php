<?php
session_start();
  if( ! isset(   $_SESSION['name']   )  )
   header('location:http://localhost/cosmolearn/dash.php');

?>


<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Paytone+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

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
            <div class="carousel-background"><img src="img/dashback/5.jpg" alt="" height="1000px" width="auto"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Electrical</h2>
                <p class="animated fadeInUp">Welcome to electrical engineering concepts.</p>
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
                            
                                <div class="sub-heading">
                                    <h3 style="font-family: 'Paytone One', sans-serif;font-size:40px;">Generator</h3>
                                </div>
                                <p style="font-size:25px; letter-spacing: 1px;font-family: 'Josefin Sans', sans-serif;">In electricity generation, a generator is a device that converts motive power (mechanical energy) into electrical power for use in an external circuit.
                                    <br><br>
                                    Sources of mechanical energy include steam turbines, gas turbines, water turbines, internal combustion engines, wind turbines and even hand cranks. The first electromagnetic generator, the Faraday disk, was invented in 1831 by British scientist Michael Faraday. Generators provide nearly all of the power for electric power grids.
                                    <br><br>
                                    The reverse conversion of electrical energy into mechanical energy is done by an electric motor, and motors and generators have many similarities. Many motors can be mechanically driven to generate electricity and frequently make acceptable manual generators.
                                </p><br><br>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <img src="img/content/5.jpg" alt="" width="490px" style="margin-top:120px; margin-left:50px;">
                                
                                
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