<?php
	include "Table_maslo.php";
	// -----------------------------------Обработчик формы регитсрации-----------------------------
	
	function registr(array $records)
	{		
		if(trim ($_POST['sugar'])=='')
		{
			throw new Exception('Введите логин!');
		}
		if($records)
		{
			throw new Exception('Пользователь с таким логином уже cуществует');
		}
		if(strip_data($_POST['sugar'])!=$_POST['sugar'])
		{
			throw new Exception('В логине присутствуют недопустимые символы: "*", "%", "<", ">", "?", "!", "+", "#"');
		}
		if($_POST['cheese']=='') 
		{
			throw new Exception('Введите пароль!');
		}
		if(strip_data($_POST['cheese'])!=$_POST['cheese'])
		{
			throw new Exception('В пароле присутствуют недопустимые символы: "*", "%", "<", ">", "?", "!", "+", "#"');
		}
		if($_POST['tomato']=='') 
		{
			throw new Exception('Введите поворный пароль!');
		}
		if($_POST['tomato'] != $_POST['cheese'])
		{
			throw new Exception('Повторный пароль введен не верно');
		}	
		
		return true;
	}
	
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
	function strip_data($text) // фильтрация строки
		{
		$quotes = array ("\x27", "\x22", "\x60", "\t", "\n", "\r", "*", "%", "<", ">", "?", "!" );
		$goodquotes = array ("+", "#", " " );
		$repquotes = array ("\+", "\#" );
		$text = trim( strip_tags( $text ) );
		$text = str_replace( $quotes, '', $text );
		$text = str_replace( $goodquotes, $repquotes, $text );

		return $text;
		}
?>