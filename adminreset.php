<?php
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
$db=mysqli_connect("localhost","root","","first_db1");

//$id=$_GET['id1'];
//$username=$_GET['username'];
//$doctor=$_GET['doctor'];
$sql="TRUNCATE TABLE booking";
$sql1= "UPDATE details SET `token`=0";

$query=mysqli_query($db,$sql);
$query=mysqli_query($db,$sql1);

  header("location:adminbook.php");


?>