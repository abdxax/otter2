<?php
session_start();
require "conne.php";
if (isset($_POST['ceck'])) {
 $email=$_SESSION['email'];
 $sql_up="UPDATE cars SET status='Done' WHERE email='$email'";
 if(mysqli_query($mycon,$sql_up)){
  header("location:checkout.php");
 }
  # code...
}
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
    <link href="css/checkout.css" rel="stylesheet">
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
    color: gray !important;
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
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#traintrips">TRAIN TRIPS</a></li>
            
            <li><a href="#contact">CONTACT</a></li>
            <?php 
            if(isset($_SESSION['email'])){
              echo '<li><a href="checkout.php">Check Out</a></li></li>
              <li><a href="logout.php">Logout</a></li></li>

              ';

            }
            else{
              echo'<li><a href="#register">REGISTER</a></li>';
            }


            ?>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    
    <!-- End Navbar -->
    
    <!-- Start Checkout -->
    <div class="container">
      <h2>Checkout</h2>
      <div class="row">
        <div class="col-75">
          <div class="container">
            <form method="POST">
              <div class="row">
                <div class="col-50">
              
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Ahmad">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="ahmad@example.com">
                 
                  
                  </div>
                </div>
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
              </div>
             
              <input type="submit" value="Continue to checkout" name="ceck" class="btn">
            </form>
          </div>
        </div>
        <div class="col-25">
          <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
            <?php
            $email=$_SESSION['email'];
            $sql_co="SELECT * FROM cars LEFT JOIN trip ON  cars.triton = trip.tripon WHERE cars.email='$email' AND cars.status='new'";
            $res=mysqli_query($mycon,$sql_co);
            $total=0;
            while ($rwo=mysqli_fetch_array($res)) {
              # code...
              echo '  <p><a href="#">'.$rwo['triton'].'</a> <span class="price">'.$rwo['price'].'</span></p>';
              $total+=$rwo['price'];


            }

            ?>
            
            <hr>
            <p>Total <span class="price" style="color:black"><b><?php echo $total." ";?>SR</b></span></p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Checkout -->
</body>
</html>
