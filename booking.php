<html>
    <head>
        <title>Booking</title>
    </head>


    <style>
    body{
      margin:0px;
      padding:0px;
    }
    h1{
      text-align:center;
      text-transform:uppercase;
      background:pink;
      height: 250px;
      padding-top: 150px;
      margin-top:100px;
    }
    </style>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$i=1;
   session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
   $hour=9;
   $minute=0;
$user=$_SESSION['user'];
$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
mysqli_select_db($db,"first_db1");

// $stime=mktime(9, 00, 00, 8, 12, 2014);
// $timeunit=mktime(9, 00, 00, 8, 12, 2014);

   $dname=$_GET['doctor'];
   //echo $dname,"<br>";
  
 $bquery="SELECT username,doctor FROM booking WHERE username='$user'"  ;//to fetch details from user table    
 $bresult = mysqli_query($db,$bquery);
$i=0;
$u=array();
while($brow = mysqli_fetch_array($bresult))
  {//echo $brow['doctor']."<br>";
    if($brow['doctor']==$dname)
      {$dname1=$dname;}

}

/*if($brow>0)
{
$user1=$brow['username'];//to get the name of user that has alreadydone a booking
}*/

//  $userquery="SELECT id FROM users WHERE username='$user'"  ;//to fetch details from user table    
//  $userresult = mysqli_query($db,$userquery);
// $userrow = mysqli_fetch_array($userresult);
// $id=$userrow['id'];//to get the id of the user


 $detquery="SELECT token,hospital FROM details WHERE doctor='$dname'"  ;//to fetch details from details table
 $detresult = mysqli_query($db,$detquery);
$row = mysqli_fetch_array($detresult);
$token=$row['token'];//to know how many tokens have been issued
$hospital=$row['hospital'];//get the name of the hospital

if($dname1==$dname)//checking whether the booking is already done
  {
    echo"<h1>";
    echo 'you have already done this booking<br>';
    echo 'check your bookings';
    echo"</h1>";
  
  }
  else
  {
if($token<30)
{
    $token=$token+1;
    $sql= "UPDATE details SET token='$token'WHERE doctor='$dname'";//updating the tokens taken in details table
$usql="INSERT INTO booking VALUES('$user','$dname','$hospital','$token')";//adding details to booking table
mysqli_query($db,$sql);
mysqli_query($db,$usql);
$minute=15*$token;
if($minute>=60)
{
  $hour+=$minute/60;
  $minute%=60;
}
echo"<h1>";
echo"succesfully booked <br> your token number is ".$token."<br>";

echo"reach hospital by ".$hour.":".$minute."<br>";echo"</h1>";
}
else

{echo"fully booked";}
}
  ?>
<!-- <a href="logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/>  -->
</body>
      </html>