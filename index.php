<?php include "Table_maslo.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>База данных</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" >			
    </head>
	
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<!-----------------------Проверка входа в сессию при авторизации----------------------------->
		<?php if(isset($_SESSION['logged_user'])):?>
			<!-- Навбар-->
			<ul class="nav nav-tabs">
				<li role="navigation" class="active" ><a href="#">Запросы MySQL</a></li>
				<li role="navigation"><a href="users.php">Базы данных</a></li>
			</ul>
			
			
			<!-- Форма вывода запроса-->
			<div id = "form">
				<center>
					<p>
					<p><input type="text" autofocus name="user" placeholder="Введите запрос" size="100"></p>
					<p>
						<button type="button" id ="bta" class="btn btn-primary">Отправить</button>
						<input type="reset" class="btn btn-danger" value="Отмена">
					</p>	
				</center>	
			</div>
			<div id = "vivod"></div>
			
			
			<!-- Выпадающее меню-->
			<div id = "plan">
				<!-- Одна кнопка -->
				<div class="btn-group">
					<button type="button" id = "btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name ="dar" style="margin-left:30px; ">
					Таблицы <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" style="margin-left:30px; ">
					<li class="dropdown-item"> <div id = "block"></div></li>
				  </ul>
				</div>
			</div>
			<br>
			<div id="vol"></div>
			<a type="button"  href="/logout.php">Выйти</a>
			
		<!-----------------------Если мы еще не атаризованы ----------------------------->
		<?php else: ?>
			<center>
				
				<!------------------------------ Обработчик формы авторизации и запуск сессии по аккаунтом -------------------------->
				<?php 
					if(isset($_POST['do_login']))
					{
						
						$_SESSION['logged_user'] = "efef";
					}
				?>
				<!------------------------------ Форма Авторизация -------------------------->
				<form action="index.php" method = "POST"> 
					<p>
						<p><stgong>Логин</stgong></p>
						<input type = "text" name = "login" value = "<?php echo @$_POST['login'];?>">
					</p>
					
					<p>
						<p><stgong>Пароль</stgong></p>
						<input type = "password" name = "password" value = "<?php echo @$_POST['password'];?>">
					</p>
					
					<p>
						<button type = "submit" name = "do_login" class="btn btn-primary">Войти</button>
					</p>
				</form>
			
				<!------------------------------ Переход к Регистрации------------------------->
				<a type="button"  href="/signup.php">Регистрация</a>
			</center>
		<?php endif; ?>

		<script src = "ajax.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="dist/css/bootstrap.min.js"></script>
	</body>
</html>