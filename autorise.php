<?php 
include "Table_maslo.php"; 
	//<!------------------------------ Обработчик формы авторизации и запуск сессии по аккаунтом -------------------------->
		if(isset($_POST['go']))
		{
			//Проверка существования ЛОГИНА
			$sug = $_POST['sugar'];
			$res = $bd_xleb->query("SELECT login FROM maslo WHERE login = '$sug'");
			$records = $res->fetchall(PDO::FETCH_ASSOC);
			if(!$records) 
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
				echo '<div style = "color: red;">';
				foreach($errors as $a)echo $a.'<br>'; 
				echo '</div><hr>';
			}
			#$_SESSION['logged_user'] = "efef";
		}
?>