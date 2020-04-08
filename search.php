<?php 
require "conne.php";
$msg="";
$trip='';
 if(isset($_POST['sub'])){
   $from=strip_tags($_POST['from']);
   $to=strip_tags($_POST['to']);
  $sql_city_from ="SELECT * FROM city WHERE city_name='$from'";
  $resFROM=mysqli_query($mycon,$sql_city_from);
  $sql_cityto ="SELECT * FROM city WHERE city_name='$to'";
  $resTo=mysqli_query($mycon,$sql_cityto);
  if(mysqli_num_rows($resFROM)<=0||mysqli_num_rows($resTo)<=0){
    $msg='<div class="alert alert-danger">No travel </div>';
  }
  else{
    $id_from="";
    $id_to='';
    while($row=mysqli_fetch_array($resFROM)){
      $id_from=$row['id'];
    }
  
    while($row=mysqli_fetch_array($resTo)){
      $id_to=$row['id'];
    }
  $sql_trips="SELECT * FROM trip WHERE city_id='$id_from' AND city_to='$id_to'";
  $reso=mysqli_query($mycon,$sql_trips);
  if(mysqli_num_rows($reso)>0){
    $trip=$reso;
  }


  }
  
  
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/book.css" rel="stylesheet">
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
    color: #fff !important;
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
            <li><a href="index.php">HOME</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    
    <!-- End Navbar -->
    <?php 

    echo $msg;
    ?>
    <!-- Start Booking -->
    
    <div class="booking-form">
      <form method="POST">
        <div class="form-group">
          <div class="form-checkbox">
            <label for="roundtrip">
              <input type="radio" id="roundtrip" name="flight-type">
              <span></span>Roundtrip
            </label>
            <label for="one-way">
              <input type="radio" id="one-way" name="flight-type">
              <span></span>One way
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label"> from</span>
              <input class="form-control" type="text" placeholder="City or Station" name="from">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label"> to</span>
              <input class="form-control" type="text" placeholder="City or Station" name="to">
            </div>
          </div>
        </div>
                <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input class="form-control" type="date" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Returning</span>
              <input class="form-control" type="date" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Adults (18+)</span>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Children (0-17)</span>
              <select class="form-control">
                <option>0</option>
                <option>1</option>
                <option>2</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Travel class</span>
              <select class="form-control">
                <option>Economy class</option>
                <option>Business class</option>
                <option>First class</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
        </div>
        <div class="form-btn text-center">
         <input type="submit" name="sub" value="SEARCH" >
        </div>
      </form>
    </div>
    
    <!-- End Booking -->

    <div class="col-12">
    <?php
    if(count($trip)>0){
      echo '
       <table class="table">
        <thead>
         <tr>
          <th>TIME</th>
          <th>TIME</th>
         </tr>
        </thead>
        <tbody>
        ';
        while($rows=mysqli_fetch_array($trip)){
          echo'
           <tr>
           <td>'.$rows['DeparturTime'].'</td>
           <td>'.$rows['ArrivalTime'].'</td>
           </tr>
          ';
        }
    

      echo' </table>
      ';
    }
    ?>
    </div>
    
  </body>
</html>