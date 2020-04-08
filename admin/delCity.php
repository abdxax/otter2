<?php 
session_start();
require "../conne.php";

$id=$_GET['id'];
$sql="DELETE FROM city WHERE id='$id'";
if(mysqli_query($mycon,$sql)){
    header("location:addCity.php");
}