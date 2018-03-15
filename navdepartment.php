
<html>
    <head>
        <title>DEPARTMENT</title>
        <h1 id="head">DEPARTMENT</h1>
         <form action="home.php"><input type="submit" style="background: transparent" value=" HOME" > </form>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        

    <style>
            body{
                margin: 0; 
                padding: 0; 
                background-image: url(images/dep.jpg);
            }

           
          h1{
                text-align:center;
                margin-top:20px;
                font-size:60px;
                color: white;
                font-family: 'Rubuk' ,sans-serif;
          }

          
            
            ul{
                width: 250px;
                /* margin: 0px auto; */
                margin-top: 30px;
                background: #d7d3e2;
                border: 1px solid white;
                border-radius: 10px;
                transition: all .2s ease-in-out;    
                float: left;
                margin-right: 130px;
                margin-left:10px;
                height: 150px;
                
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
                margin-top: 80px;
                margin-left:250px;
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
                padding-left: 5px;
                padding-top: 50px;
                text-align: center;
            
            }   
            
        </style>          
        </head>
<body>
<?php
$i=1;
   session_start(); 
   if($_SESSION['user']){ 
   }
   else{
      header("location: ../index.php"); 
   }
   
   
 $db=mysqli_connect("localhost", "root","") or die(mysqli_error()); 
 mysqli_select_db($db,"first_db1");
 
   
 $result = mysqli_query($db,"SELECT DISTINCT department FROM details");


while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){



echo "<div id='content'>" ; 
echo "<ul>";

    echo "<li> <a href=\"department.php?department=" . $row['department'] . "\">".$row['department']."</a></li>";





echo "</ul>";
echo "</div>";




$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
mysqli_close($db);  
  ?>
 
</body>
      </html>