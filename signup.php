<?php
	$host_xleb = "localhost";
	$db_name_xleb = "Xleb";
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
	
	if(isset($_POST['do_signup']))
	{
		//$errors[] = array();
		if(trim ($_POST['login'])=='')
		{
			$errors[]='Введите логин!';
		}
		if($_POST['password']=='')
		{
			$errors[]='Введите пароли!';
		}
		if(empty($errors))
		{
			// все хорошо
			$login = $_POST['login'];
			$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
			$res = $bd_xleb->query("insert into maslo (login, password) values ('$login', '$password')");
			echo '<div style = "color: green;">'."Регистрация прошла успешно!".'</div><hr>';
		}
		else
		{
			echo '<div style = "color: red;">';
			foreach($errors as $a)echo $a.'<br>'; 
			echo '</div><hr>';
		}
	}
?>

<form action="/signup.php" method = "POST">

	<p>
		<p><stgong>Логин</stgong></p>
		<input type = "text" name = "login" value = "<?php echo @$_POST['login'];?>">
	</p>
	
	<p>
		<p><stgong>Пароль</stgong></p>
		<input type = "text" name = "password" value = "<?php echo @$_POST['password'];?>">
	</p>
	
	<p>
		<button type = "submit" name = "do_signup" class="btn btn-primary">Зарегистрироваться</button>
	</p>
</form>