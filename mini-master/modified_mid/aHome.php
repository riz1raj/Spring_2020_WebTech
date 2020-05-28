<?php   
    session_start();
    if(!isset($_SESSION['id']) ){  
        header("location: login.php");
    }
?>

<!DOCTYPE html>
 	
 	<head>
	           <title>Admins Home Page</title>
	</head>

	<center>


		
		 

		 	

		 		<fieldset>
		 			 <h1>Welcome to home ! <?= $_SESSION['name']?></h1>
		 			
		 			<a href="profile.php" >Profile</a><br>
								<a href="cPassword.php" >Change Password</a><br>
								<a href="vUser.php" >View Users</a><br>
								<a href="logout.php"><b>Log Out</b></a>

		 		</fieldset>
		 		
		 		
		 	
			 				

	    
	</center>