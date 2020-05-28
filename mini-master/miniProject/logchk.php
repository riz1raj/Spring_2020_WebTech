  
<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$pwd=  $_REQUEST['pwd'];
		
		if(empty(trim($id)) || empty(trim($pwd))){
			echo "Null submission found!";
		}else{

			$file=fopen('info.txt', 'r');
			$user = fread($file, filesize('info.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $id && trim($data[1]) == $pwd){
				
				setcookie('username', $id, time()+3600, '/');

				header("location: uHome.php");
			}else{
				echo "invalid id/password";
			}
		}

	}else{

		header("location: login.php");
	}
?>
	  
	  
	 