<?php
	/* Change these credentials to suit your purposes.
	 *
	 *
	 */

	$host = 'localhost';
	$db   = 'project';
	$user = 'demo';
	$pass = 'user';

	try {
	     $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $pass);
	} catch (PDOException $e) {
		die("Error: " . $e->getMessage());
	}

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>