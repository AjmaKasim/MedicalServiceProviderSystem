<html>
<body>
	<ul>
		<li><a href=adminreg.php>Create & Edit ADMIN</a></li>
	    
		<li><a href=add.php>Add Details</a></li>
		<li><a href=adminbook.php>Delete or reset booking</a></li>
		<li><a href=logout.php>logout</a></li>
		
	    
	</ul>
</body>
<?php
 session_start(); 
    if($_SESSION['user']){ 
    }
    else{
       header("location:index.php"); 	
   }
   ?>
</html>