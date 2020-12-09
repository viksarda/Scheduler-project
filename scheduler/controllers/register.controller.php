<?php

	if(!defined("APP")) die();

	if(isset($_POST["action"])){

		switch ($_POST["action"]) {

			case "register":
				if(
				isset($_POST["F_name"]) && $_POST["F_name"] != "" &&
				isset($_POST["L_name"]) && $_POST["L_name"] != "" &&
				isset($_POST["email"]) && $_POST["email"] != "" &&
				isset($_POST["password"]) && $_POST["password"] != "" &&
				isset($_POST["dob"]) && $_POST["dob"] != ""){

					if(userAdd($_POST["F_name"], $_POST["L_name"], $_POST["email"], $_POST["password"], $_POST["dob"]))
					{
						alert("Successfully registered to the system");
						header( "refresh:2; url=." );
					}else{
						alert("There was an error registering.. try again");
					}
				}				
			break;

		}

	}
	require "views/register.php";
?>