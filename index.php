<?php 
session_start();
require "conne.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTTRS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #4e73df;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #4e73df;
    font-size: 50px;
  }
  .logo {
    color:#4e73df;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color:#4e73df;
  }
  .carousel-indicators li {
    border-color:#4e73df;
  }
  .carousel-indicators li.active {
    background-color: #4e73df;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #4e73df;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #4e73df;;
    background-color: #fff !important;
    color: #4e73df;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #4e73df; !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #4e73df;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color:#4e73df;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color:gray !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #4e73df; !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #4e73df;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
    </style>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
    <!-- Start Navbar -->
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">OTTRS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">ABOUT2</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#train trips">SCHEDUALE TRIPS</a></li>
            <li><a href="search.php">SEARCH </a></li>
            <li><a href="#contact">CONTACT</a></li>
            <?php 
            if(isset($_SESSION['email'])){
              echo '<li><a href="checkout.php">Check Out</a></li></li>
              <li><a href="ticketTab.php">My Ticket</a></li></li>
              <li><a href="logout.php">Logout</a></li></li>

              ';

            }
            else{
              echo'<li><a href="register.php">REGISTER</a></li>';
            }


            ?>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- End Navbar -->
    
    <!-- Start Main Section -->
    
    <div class="jumbotron text-center">
      <h1>ONLINE TRAINE TICKET SYSTEM</h1>
      <p>The Best in Domestic Train Trip</p>
    </div>
    
    <!-- End Main Section -->

    <!-- Start About Section -->
    
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h2>About </h2><br>
          <h4>established in 2016 in Riyadh and Dammam, then expanded to Jeddah, Makkah, Madinah and finally Dhahran City. Our goal is to facilitate the transportation of passengers via rail for domestic flights</h4><br>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>
    
    <!-- End About Section -->

    <!-- Start Services Section -->
    
    <div id="services" class="container-fluid text-center">
      <h2>SERVICES</h2>
      <h4>What we offer</h4>
      <br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-certificate logo-small"></span>
          <h4>Ticket and seat reservation online</h4>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-heart logo-small"></span>
          <h4>Special needs services</h4>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>Luggage shipping</h4>
        </div>
      </div>
      <br><br>
    </div>
    
    <!-- End Services Section -->
    
    <!-- Start Train trips Section -->
    <?php
    if (isset($_GET['msg'])) {
      # code...
      $ms=$_GET['msg'];
      if($ms=='reg'){
     echo '<div class="alert alert-danger">Done</div>';
      }
      else if($ms=='Nreg'){
       echo '<div class="alert alert-danger">The email alreal used</div>';
      }
      else if ($ms=='logerr'){
         echo '<div class="alert alert-danger">The email or password is not correct </div>';

      }
      
    }



    ?>
    <div id="Flight" class="container-fluid text-center bg-grey">
      <h2>Train trips</h2><br>
      <h4>where do you want to go?</h4>
      <div class="row text-center slideanim">

        <?php 
          $sql_city="SELECT * FROM city ";
          $res=mysqli_query($mycon,$sql_city);
          if(mysqli_num_rows($res)>0){
            
            while ($rows=mysqli_fetch_array($res)) {
              echo '
              <div class="col-sm-4">
          <div class="thumbnail">
            <img src="'.$rows['spath'].'" alt="Riyadh" >
            <p><strong>'.$rows['city_name'].'</strong></p>
            <p><a href="schedule.php?id_ci='.$rows['id'].'">TRIPS SCHEDULE</a></p>
          </div>
        </div>

              ';
            }
          }
          else{
     echo " NO OFFER AVALIBLE ";
          }

          ?>
        <!--<div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/m1.jpg" alt="Makkah">
            <p><strong>Makkah</strong></p>
            <p><a href="schedule.html">Train trips to Makkah</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/mm2.jpg" alt="Madeena" >
            <p><strong>Madeena</strong></p>
            <p><a href="schedule.html">Train trips to Madeena</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/d.jpg" alt="Dammam" >
            <p><strong>Dammam</strong></p>
            <p><a href="schedule.html">Train trips to Dammam </a></p>
          </div>
        </div>
      </div>
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/dd.jpg" alt="Dhahran" >
            <p><strong>Dhahran</strong></p>
            <p><a href="schedule.html">Train trips to Dhahran</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/r.jpg" alt="Riyadh" >
            <p><strong>Riyadh </strong></p>
            <p><a href="schedule.html">Train trips to Riyadh</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/j.jpg" alt="Jeddah" >
            <p><strong>Jeddah</strong></p>
            <p><a href="schedule.html">Train trips to Jeddah</a></p>
          </div>

        </div>-->
        
      </div><br>
      <h2>What our customers say</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>"This company is the best. I am so happy with the result!"<br></h4>
          </div>
          <div class="item">
            <h4>"One word... WOW!!"<br></h4>
          </div>
          <div class="item">
            <h4>"Could I... BE any more happy with this company?"<br></h4>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <!-- End Train trips Section -->
    
    <!-- Start Register Section -->
    
    
    
    <!-- End Register Section -->
    
    
    <!-- Start Contact Section -->
    
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Riyadh,KSA</p>
          <p><span class="glyphicon glyphicon-phone"></span> +996 531119081</p>
          <p><span class="glyphicon glyphicon-envelope"></span> ottrs@hotmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Contact Section -->
    
    <!-- Start Footer Section -->
    
    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </footer>
    
    <!-- End Footer Section -->

    <script src="js/main.js"></script>
  </body>
</html>