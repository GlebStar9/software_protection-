<?php
	include "Table_maslo.php";
	include "dictionary.php";
	
	if(isset($_POST['go']))
	{
		$sug = strip_data($_POST['sugar']);
		$sug = htmlspecialchars($sug);
		$res = $bd_xleb->query(" SELECT login FROM maslo WHERE login ='$sug'");
		$records = $res->fetchall(PDO::FETCH_ASSOC);
		
		try{
			registr($records);
			$ches = password_hash(htmlspecialchars(strip_data($_POST['cheese'])),PASSWORD_DEFAULT);
			$res = $bd_xleb->query("insert into maslo (login, password) values ('$sug ', '$ches')");
			include "index.php";
			exit;	
		}catch(Exception $e){	
			header("HTTP/1.0 401");		
			echo '<center><div style = "color: red;">'.$e->getMessage().'</div></center><hr>';
			include "signup.php";
			exit;
		}
	}
	
?>