<?php
	include "Table_maslo.php";
	// -----------------------------------Обработчик формы регитсрации-----------------------------
	
	function registr(array $records)
	{		
		if(trim ($_POST['sugar'])=='')
		{
			throw new Exception('Введите логин!');
		}
		if($_POST['cheese']=='') 
		{
			throw new Exception('Введите пароль!');
		}
		if($_POST['tomato']=='') 
		{
			throw new Exception('Введите поворный пароль!');
		}
		if($_POST['tomato'] != $_POST['cheese'])
		{
			throw new Exception('Повторный пароль введен не верно');
		}
		if($records)
		{
			throw new Exception('Пользователь с таким логином занят');
		}
			
		return true;
	}
	
	if(isset($_POST['go']))
	{
		$sug = $_POST['sugar'];
		$res = $bd_xleb->query("SELECT login FROM maslo WHERE login = '$sug'");
		$records = $res->fetchall(PDO::FETCH_ASSOC);
		
		try{
			registr($records);
			$ches = password_hash($_POST['cheese'],PASSWORD_DEFAULT);
			$res = $bd_xleb->query("insert into maslo (login, password) values ('$sug ', '$ches')");
			include "index.php";
			exit;	
		}catch(Exception $e){		
			echo '<center><div style = "color: red;">'.$e->getMessage().'</div></center><hr>';
		}
	}
?>