<?php
session_start();
require "conne.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Out</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/ticket.css" rel="stylesheet">
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
    color: #f4511e;
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
    color: gray!important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #4e73df; !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: gray !important;
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
            <li><a href="index.html">HOME</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    
    <!-- End Navbar -->
    
    <!-- Start Ticket -->
    
    <section class="container">
      <h1>Ticket</h1>
      <div class="row">
      <?php
      $id_trip=$_GET['idon'];
      $sql="SELECT * FROM trip WHERE tripon='$id_trip'";
      $res=mysqli_query($mycon,$sql);
      while($rows=mysqli_fetch_array($res)){
        echo '
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <p>'.$rows['date_trav'].'</p>
            </time>
          </section>
          <section class="card-cont">
            
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>'.$rows['OperationsDays'].' '.$rows['date_trav'].'</span>
               <span>'.$rows['DeparturTime'].' to '.$rows['ArrivalTime'].'</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                <p></p>saudi 
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>
        ';
      }


?>
       <!-- <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>live in sydney</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>-->
      <!--  <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>corner obsest program</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>
      </div>
      <div class="row">
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>music kaboom festivel</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
           <a href="#">cancel</a>
          </section>
        </article>
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>hello dubai festivel</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">canceled</a>
          </section>
        </article>-->
      </div>
    </section>
    
  <!-- End Ticket -->
</body>
</html>