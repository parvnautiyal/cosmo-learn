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
            <div class="carousel-background"><img src="img/dashback/1.jpg" alt="" height="1000px" width="auto"></div>
            <div class="carousel-container">
              <div class="carousel-content">
             
                <h2 class="animated fadeInDown">Chemistry</h2>
                <p class="animated fadeInUp">Welcome to chemistry.</p>
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
                                    <h3 style="font-family: 'Paytone One', sans-serif;font-size:40px;">Atom</h3>
                                </div>
                                <p style="font-size:25px; letter-spacing: 1px;font-family: 'Josefin Sans', sans-serif;">An atom is the smallest unit of matter that has the properties of an element. It is composed of a dense core called the nucleus and a series of outer shells occupied by orbiting electrons.

                                        <br><br>
                                        The nucleus, composed of protons and neutrons, is at the center of an atom. Protons have a positive electric charge while neutrons are neutral.
                                        <br><br>
                                         The atomic number of an atom is dictated by the number of protons, which in turn, determines the chemical element of the atom. The isotope of the element is determined by the number of neutrons.
                                         <br><br>
                                        
                                        The electron has an electric charge equal but opposite the proton (that is, they cancel). A stable atom has the same number of electrons orbiting as it does protons in the nucleus; this makes the atom electrically neutral. 
                                        <br><br>
                                        Atoms that are missing an electron (that is, have one more proton than electrons) will tend to attract additional electrons, while atoms that have an excess electron (one more electron than protons) will tend to eject the outer-most electron. The shell containing the outer-most electron is called the valence shell, and is the chemically active shell.<br><br>
                                        
                                        In size the entire atom has been thought to be approximately four-billionths of an inch, meaning that approximately 250,000,000 atoms of this size must be put into line to span 1 inch. Atoms are not usually alone, but instead come in groups called molecules.
                                        
                                        Molecules</p><br><br>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <img src="img/content/1.jpg" alt="" width="490px" style="margin-top:240px; margin-left:40px;">
                                
                                
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