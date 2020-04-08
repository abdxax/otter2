<?php
session_start();
require "conne.php";
$idon=$_GET['idon'];
$email=$_SESSION['email'];
$sql="INSERT INTO cars (triton,email,status) VALUES ('$idon','$email','new')";
if(mysqli_query($mycon,$sql)){
	header("location:index.php");
}

?>