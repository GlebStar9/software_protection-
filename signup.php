<?php include "Table_maslo.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css" >	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/Style.css"> 
<?php
	
	// -----------------------------------Обработчик формы регитсрации-----------------------------
	if(isset($_POST['go']))
	{
		if(trim ($_POST['sugar'])=='') // проверка логина
		{
			$errors[]='Введите логин!';
		}
		if($_POST['cheese']=='')  // проверка пароля 
		{
			$errors[]='Введите пароль!';
		}
		if($_POST['tomato'] != $_POST['cheese']) // проверка пароля с повторным паролем
		{
			$errors[]='Повторный пароль введен не верно ';
		}
		//Проверка существования ЛОГИНА
		$sug = $_POST['sugar'];
		$res = $bd_xleb->query("SELECT login FROM maslo WHERE login = '$sug'");
		$records = $res->fetchall(PDO::FETCH_ASSOC);
		if($records) 
		{
			$errors[]='Пользователь с таким логином уже занят';
		}
		//Условие на нахождение ошибок, если нет, то проводим регистрацию 
		if(empty($errors))
		{
			// все хорошо
			$sug  = $_POST['sugar'];
			$ches = password_hash($_POST['cheese'],PASSWORD_DEFAULT);
			$res = $bd_xleb->query("insert into maslo (login, password) values ('$sug ', '$ches')");
			echo '<div style = "color: green;">'."Регистрация прошла успешно!".'</div><hr>';
			include "index.php";
			exit;	
		}
		else
		{
			echo '<div style = "color: red;">';
			foreach($errors as $a)echo $a.'<br>'; 
			echo '</div><hr>';
		}
	}
?>
<center>
          <!-----------------------Форма заполения поля регитсрации----------------------------->
<form action="/signup.php" method = "POST"> 

	<p>
		<p><stgong>Логин</stgong></p>
		<input type = "text" name = "sugar" value = "<?php echo @$_POST['sugar'];?>">
	</p>
	
	<p>
		<p><stgong>Пароль</stgong></p>
		<input type = "password" name = "cheese" value = "<?php echo @$_POST['cheese'];?>">
	</p>
	
	<p>
		<p><stgong>Введите пароль повторно</stgong></p>
		<input type = "password" name = "tomato" value = "<?php echo @$_POST['tomato'];?>">
	</p>
	
	<p>
		<button type = "submit" name = "go" class="btn btn-primary">Зарегистрироваться</button>
	</p>
</form>
</center>
<script src="dist/css/bootstrap.min.js"></script>