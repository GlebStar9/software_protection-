<?php 
include "Table_maslo.php"; 
	//<!------------------------------ Обработчик формы авторизации и запуск сессии по аккаунтом -------------------------->
	function avtoris(array $pass)
	{		
		if(trim ($_POST['sugar'])=='')
		{
			throw new Exception('Введите логин!');
		}
		if($_POST['cheese']=='') 
		{
			throw new Exception('Введите пароль!');
		}
		if(!$pass)
		{
			throw new Exception('Проверьте написание пароля и логина');
		}
		foreach($pass as $i => $items)
			foreach($items as $a)
				$ches=$a;
		if(!password_verify($_POST['cheese'],$ches))// сравнение введенного пароля с существующим
		{
			throw new Exception('Проверьте написание пароля и логина');
		}		
		
		setcookie("user", 10, time()+3600, "/");	
		return true;
	}
	if(isset($_POST['go']))
	{
		$sug = $_POST['sugar'];
		$res = $bd_xleb->query("SELECT login FROM maslo WHERE login = '$sug'");
		$records = $res->fetchall(PDO::FETCH_ASSOC);
		$ches = $bd_xleb->query("SELECT password FROM maslo WHERE login = '$sug'");
		$pass = $ches->fetchall(PDO::FETCH_ASSOC);
		
		try{
			avtoris($pass);
			header('Location: /');
		}catch(Exception $e){
			header("HTTP/1.0 401");			
			echo '<center><div style = "color: red;">'.$e->getMessage().'</div></center><hr>';
			include "index.php";
			exit;
		}
		
		
		//Проверка существования ЛОГИНА
		//$sug = $_POST['sugar'];
		//$res = $bd_xleb->query("SELECT login FROM maslo WHERE login = '$sug'");
		//$records = $res->fetchall(PDO::FETCH_ASSOC);
		/*if(!$records) 
		{
			if(trim ($_POST['sugar'])=='') // проверка логина
			{
				$errors[]='Введите логин!';
			}
			else
			{
				$errors[]='Пользователя с таким логином не существует';
			}
			if($_POST['cheese']=='')  // проверка пароля 
			{
				$errors[]='Введите пароль!';
			}
		}
		else
		{
			//проверка пароля
			$ches = $bd_xleb->query("SELECT password FROM maslo WHERE login = '$sug'");
			$pass = $ches->fetch(PDO::FETCH_ASSOC);
			foreach($pass as $i)
				$ches=$i;
			if(password_verify($_POST['cheese'],$ches))// сравнение введенного пароля с существующим
			{
				setcookie("user", 10, time()+3600, "/");	
				header('Location: /');					
			}
			else
			{ 
				if($_POST['cheese']=='')  // проверка пароля 
				{
					$errors[]='Введите пароль!';
				}
				else $errors[]='Неверно введен пароль';
			}
		}
		//Вывод ошибок или подтверждения авторизации
		if(empty($errors))
		{
			// все хорошо
			include "index.php";
			exit;
		}
		else
		{					
			header("HTTP/1.0 401");
			include "Errors_prog/401.php";
			//include "index.php";
			exit;	
			//echo '<div style = "color: red;">';
			//foreach($errors as $a) echo $a;
			//echo '</div><hr>';			
		}*/
	}
?>