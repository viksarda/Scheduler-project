<?php


	if(!defined("APP")) die();

//	if(!isset($_SERVER["PATH_INFO"])) die();
//	$route = strtolower(ltrim($_SERVER["PATH_INFO"], '//'));
	if(!isset($_SERVER["QUERY_STRING"])) die();
	$route = strtolower(ltrim($_SERVER["QUERY_STRING"], '//'));
	switch($route) {

		case "":
			require "controllers/main.controller.php";
		break;

		case "register":
			require "controllers/register.controller.php";
		break;

		case "user":
			require "controllers/user.controller.php";
		break;

		case "scheduler":
			require "controllers/scheduler.controller.php";
		break;

		case "reminders":
			require "controllers/reminders.controller.php";
		break;

		case "login":
			require "controllers/login.controller.php";
		break;

		case "logout":
			require "controllers/logout.controller.php";
		break;

		default:
			diex("Error 404");
		break;

	}

?>