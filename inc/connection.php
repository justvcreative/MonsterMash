<?php
	try {
		$user = 'root';
		$pass = 'root';
		$dsn = 'mysql:host=localhost;dbname=Comments';
		$db = new PDO($dsn, $user, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage()."<br>";
		die();
	}