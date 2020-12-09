<?php

if(!defined("APP")) die();

    if(isLoggedIn() === false) redirect(".");
      

	if(isset($_POST["action"])){

		switch ($_POST["action"]) {

		
		}

	}
	require "views/reminders.php";

?>