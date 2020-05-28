<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

          function DeleteUser(){
		$con = getConnection();
		$getid=$_REQUEST["id"];
		$deletesql = "delete from users where id=$getid";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: view_users.php?deleted");
			}
		
	}

?>