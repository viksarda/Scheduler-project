<?php
	if(!defined("APP")) die();
	
	require_once "config/config.php";
	require_once "config/session.php";

	$error = '';

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
	}


	if (empty($error)){
		if($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
			$query->bind_param('s', $email);
			$query->execute();
			$row = $query->fetch();
			if ($row){
				if (password_verify($password, $row['password'])){
					$_SESSION["userid"] = $row['id_user'];
					$_SESSION["user"] = $row;
					header("location: .");
					exit;
				} 
			}
			$query->close();

		}
		mysqli_close($db);
	}

	require "views/login.view.php";
	

?>