<?php


	if(!defined("APP")) die();

	if(session_id()){
		unset($_SESSION["Email"]);
		session_destroy();
	}

	redirect(".");
?>