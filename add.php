<html>
    <head>
        <title>DEPARTMENTS</title>
    </head>
    <body>
        <h2></h2>
        <a href="admin.php">Click here to go back<br/></a><br/>
        <form action="add.php" method="POST">
           DOCTOR NAME: <input type="text" name="doctor" required="required" /><br/>
           HOSPITAL NAME:<input type="text" name="hospital" required="required" /><br/>
           DEPARTMENT NAME: <input type="text" name="department" required="required" /> <br/>
           Ph.NO :<input type="text" name="number" required="required" /><br/>
           E-Mail:<input type="email" name="email" required ="required" /><br/>           
           <input type="submit" value="Save"/>
        </form>
    </body>
</html>
<?php
 session_start(); 
    if($_SESSION['user']){ 
    }
    else{
       header("location:index.php"); 
   }

if($_SERVER["REQUEST_METHOD"]=="POST"){

      $bool = true;
      
      $db= mysqli_connect("localhost", "root","") or die(mysqli_error()); 
   
   $doctor = mysqli_real_escape_string($db,$_POST['doctor']);
   $hospital = mysqli_real_escape_string($db,$_POST['hospital']);
   $department = mysqli_real_escape_string($db,$_POST['department']);
   $number = mysqli_real_escape_string($db,$_POST['number']);
   $email= mysqli_real_escape_string($db,$_POST['email']);
     
    


  mysqli_select_db($db,"first_db1") or die("Cannot connect to database"); 
  {
    $table_hos = $row['hospital'];
    $table_users = $row['department'];
    $table_doc = $row['doctor'];
    $table_no = $row['number']; 
    if(($doctor == $table_doc)&&($hospital==$table_hos) )
    {
      $bool = false; 
      Print '<script>alert(" already exist!!");</script>'; 
      Print '<script>window.location.assign("add.php");</script>'; 
    }
  }
  if($bool) 
  {
    mysqli_query($db,"INSERT INTO details (doctor,hospital,department,number,email,token) VALUES ('$doctor','$hospital','$department','$number','$email','0')");
    
    Print '<script>alert("Successfully Added!");</script>'; 
    Print '<script>window.location.assign("add.php");</script>'; 
  }
}


$db= mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($db,"first_db1") or die("Cannot connect to database");


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT * FROM details");
echo "<table border='1'>
<tr>
<th>doctor</th>
<th>hospital</th>
<th>department</th>
<th>number</th>
<th>email</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

  
echo"<tr>";
echo "<td>" . $row['doctor'] . "</td>";
echo "<td>" . $row['hospital'] . "</td>";

echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";


echo"<td><a href='detupdate.php?id=".$row['id']."&doctor=".$row['doctor']."&hospital=".$row['hospital']."&department=".$row['department']."&email=".$row['email']."&number=".$row['number']."&password=".$row['password']."'>edit</a></td>";
echo"<td><a href='detdelete.php?id1=".$row['id']."&doctor=".$row['doctor']."'>delete</a></td>";


echo"</tr>";
?>

<?php
}



echo "</table>";

mysqli_close($db);
?>