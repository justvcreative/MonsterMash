<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=Comments', 'root', 'root');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage()."<br>";
		die();
	}