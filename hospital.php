<html>
    <head>
        <title>Hospital</title>
        <h1 id="head">DOCTORS</h1>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        
          
    <style>
            body{
                margin: 0; 
                padding: 0;
                 background-image: url(images/h1.jpg);
 
                
            }

           
          h1{
                text-align:center;
                margin-top:20px;
                font-size:60px;
                font-family: 'Rubuk' ,sans-serif;
                color: white;
          }

          
            
            ul{
                width: 350px;
                 background: #d7d3e2;
                border: 1px solid white;
                border-radius: 10px;
                transition: all .2s ease-in-out;    
                float: left;
                height: 150px;
                text-align:center;
            
                
            }
            a{
                color: black;
                margin-right:50px;
                font-size: 25px;
                text-decoration:none;
                text-align: center;
                text-transform: capitalize;
            }

           
             #content{
                margin-top: 60px;
                margin-left:180px;
            }
            ul:hover{
                transform: scale(1.1);
            }
            ul li{
                font-size: 18px;
                display: inline-block;
                list-style: none;
                width: 100%;
                font-family: 'Ubuntu', sans-serif;
                height: 40px;
                margin-top:55px;
            
                
            
            }   

            </style>
            
        </style>  
          
    </head>
<body>

<div id="background">
    <p>.</p>
         
<?php
$i=1;
   session_start(); 
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }

$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
mysqli_select_db($db,"first_db1");


   $hname = $_GET['hospital']; //assigns user value
  
   
 
 $query="SELECT id,doctor FROM details WHERE hospital='$hname'"  ;
 $result = mysqli_query($db,$query);
//$exist=mysqli_num_rows($result);
?>
<?php 

   $exist = mysqli_num_rows($result);

if($result)
{



while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {echo "<ul id='content'>";

  echo "<li> <a href='booking.php?doctor=".$row['doctor']."'>".$row['doctor']."</li>";
  
   

    echo "</ul>";
$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
 }
 else
 {
  echo"no hospital found";
  header("location:home.html");
 }
mysqli_close($db);  
  ?>
  <!-- <a href="../logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/> -->
</div>
</body>
      </html>
