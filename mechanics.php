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
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Paytone+One&display=swap" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
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
            <div class="carousel-background"><img src="img/dashback/2.jpg" alt=""height="1000px" width="auto"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Mechanics</h2>
                <p class="animated fadeInUp">Welcome to mechanical engineering concepts.</p>
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
                                    <h3 style="font-family: 'Paytone One', sans-serif;font-size:40px;">Truss</h3>
                                </div>
                                <p style="font-size:25px; letter-spacing: 1px;font-family: 'Josefin Sans', sans-serif;">A truss is an assembly of beams or other elements that creates a rigid structure.
                                    <br><br>
                                    In engineering, a truss is a structure that "consists of two-force members only, where the members are organized so that the assemblage as a whole behaves as a single object".
                                    <br><br>
                                    A "two-force member" is a structural component where force is applied to only two points.<br> Although this rigorous definition allows the members to have any shape connected in any stable configuration, trusses typically comprise five or more triangular units constructed with straight members whose ends are connected at joints referred to as nodes.
                                <br><br>
                                In this typical context, external forces and reactions to those forces are considered to act only at the nodes and result in forces in the members that are either tensile or compressive. For straight members, moments (torques) are explicitly excluded because, and only because, all the joints in a truss are treated as revolutes, as is necessary for the links to be two-force members.
                                <br><br>
                                A planar truss is one where all members and nodes lie within a two-dimensional plane, while a space truss has members and nodes that extend into three dimensions.
                                
                                </p><br><br>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <img src="img/content/2.jpg" alt="" width="490px" style="margin-top:70px; margin-left:50px;">
                                
                                
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