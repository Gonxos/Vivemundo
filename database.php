<?php

	$server = '127.0.0.1:3306';
	$username = 'u721438120_gonzalo';
	$password = 'Gonzalo1234';
	$database = 'u721438120_login';

	try {
		$conexion = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
	} catch (PDOException $e) {
		die('Conexión fallida: '.$e->getMessage());
	}

?>