<?php 
	//print_r($_SESSION);
	//session_unset();
	session_destroy();
    header('Location: /');
    exit;
?>