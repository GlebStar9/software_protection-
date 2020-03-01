<?php
	$host_xleb = "localhost";
	$db_name_xleb = "xleb";
	$username_xleb = "root";
	$password_xleb = "";
	// Подключение к базе данных
	try {
		$bd_xleb = new PDO("mysql:host={$host_xleb};dbname={$db_name_xleb};", $username_xleb, $password_xleb);
		$bd_xleb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}  
	// Ошибка 
	catch(PDOException $exception){
		echo "Проблема с подключением: " . $exception->getMessage();
	}
	session_start();
?>