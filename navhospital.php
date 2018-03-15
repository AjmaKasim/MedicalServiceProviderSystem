
 <html>
    <head>
        <h1>HOSPITALS</h1>
        <form action="home.php"><input type="submit" style="background: transparent" value=" HOME" > </form>
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
    </head>
<body>

            
        
<?php
$i=1;
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   
   
 $db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
 mysqli_select_db($db,"first_db1");
 
   
 $result = mysqli_query($db,"SELECT DISTINCT hospital FROM details");




while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {
    echo "<div id='content'>" ; 
    echo "<ul>";

        echo "<li><a href=\"hospital.php?hospital=" . $row['hospital'] . "\">".$row['hospital']."</a></li>";


   

    echo "</ul>";
    echo "</div>";

    $i++;
   }
   $_SESSION['totalh'] = $i;
mysqli_close($db);  
  ?>
  <!-- <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/> -->
<footer>
    
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
      </html>