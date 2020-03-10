<?php 
	setcookie("user", 10, time()-3600, "/");
	header('Location: /');
?>