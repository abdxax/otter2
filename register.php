 <?php
session_start();
require "conne.php";
if(isset($_POST['sub'])){
    $name=strip_tags($_POST['first_name'])." ".strip_tags($_POST['last_name']);
    $email=strip_tags($_POST['email']);
    $phone=strip_tags($_POST['phone']);
    $age=strip_tags($_POST['age']);
    $national=strip_tags($_POST['national']);
    $id=strip_tags($_POST['id']);
    $gender=strip_tags($_POST['gender']);
    $password_confirmation=strip_tags($_POST['password_confirmation']);
    $password=strip_tags($_POST['password']);
    if($password===$password_confirmation){
      $pas=sha1($password);
        $sql="INSERT INTO user (email,password,role)VALUES ('$email','$pas','2')";
        if(mysqli_query($mycon,$sql)){
            //echo "dd";
          $sql_info="INSERT INTO info(email,name,phone,age,natl,id,Gender) VALUES('$email','$name','$phone','$age','$national','$id','$gender')";
          if(mysqli_query($mycon,$sql_info)){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header("location:index.php?msg=reg");
          }
          else{
            header("location:index.php?msg=Nreg");
          }
        }
        else{
            echo "S";
        }
    }

}


if(isset($_POST['login'])){
  $email=strip_tags($_POST['email']);
  $psw=strip_tags($_POST['psw']);
  $pas=sha1($psw);
  $sql_login="SELECT * FROM user WHERE email='$email' AND password='$pas'";
  $res=mysqli_query($mycon,$sql_login);
  if(mysqli_num_rows($res)==1){
    while ($rows=mysqli_fetch_array($res)) {
      if($rows['role']==1){
        $_SESSION['email']=$email;
    $_SESSION['password']=$psw;
     header("location:admin/dashboard.php");

      }else if($rows['role']==2){
        $_SESSION['email']=$email;
    $_SESSION['password']=$psw;
     header("location:index.php");

      }
    }
    

  }
  else{
     header("location:index.php?msg=logerr");
  }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
  <body>

 <?php 
    if(!isset($_SESSION['email'])){
      echo '
         <div id="pricing" class="container-fluid">
      <div class="text-center">
        <h2>Register</h2>
        <h4>If you register before <a id="login" style="width:auto;">Login</a></h4>
        <div id="id01" class="modal">
          <span id="exit" title="Close Modal">&times;</span>
          <form class="modal-content" method="POST">
            <div class="container">
              <h1>Login</h1>
              <p>Please fill in this form to login.</p>    
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
              <br>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
              <div class="clearfix">
                <button type="submit" class="signupbtn" name="login">login </button>
                <button type="button" id="test" class="cancelbtn">Cancel</button>
              </div>
            </div>
          </form>
          
        </div>
        <div class="panel-body">
          <form role="form" method="POST">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="number" name="phone" id="phonen" class="form-control input-sm" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <input type="num" name="age" id="number" class="form-control input-sm" placeholder="Age">
            </div>
            <div class="form-group">
              <input type="text" name="national" id="na" class="form-control input-sm" placeholder="Nationality">
            </div>
            <div class="form-group">
              <input type="num" name="id" id="id" class="form-control input-sm" placeholder="ID">
            </div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
            <input type="submit" value="Register" name="sub" class="btn btn-info btn-block">
          </form>
        </div>
      </div>
    </div>
      ';
    }


    ?>

<script src="js/main.js"></script>
  </boby>
  </html>