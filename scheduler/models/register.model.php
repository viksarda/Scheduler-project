<?php

if(!defined("APP")) die();

function usersTableCreate(){
	GLOBAL $db;
	$db->query("
		CREATE TABLE IF NOT EXISTS `Users` (
			`ID` int NOT NULL IDENTITY (1,1) AUTO_INCREMENT,
			`F_name` TEXT NOT NULL,
			`L_name` TEXT NOT NULL,
			`email` TEXT NOT NULL,
			`password` TEXT NOT NULL,
			`dob` DATE NOT NULL,
			PRIMARY KEY (`ID`)
		);
	");
}

function userAdd($F_name, $L_name, $email, $password, $dob){
		GLOBAL $db;
		return $db->query("
			INSERT INTO `Users` (
				`F_name`, 
				`L_name`,
				`email`,
				`password`,
				`dob`
			)
			VALUES (" . 
				"\"" . $db->real_escape_string($F_name) . "\", " .
				"\"" . $db->real_escape_string($L_name) . "\", " .
				"\"" . $db->real_escape_string($email) . "\", " .
				"\"" . $db->real_escape_string($password) . "\", " .
				"\"" . $db->real_escape_string($dob) . "\");
") !== false;
    }
    
?>