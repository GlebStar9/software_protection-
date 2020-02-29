<html>
    <head>
        <meta charset="utf-8">
        <title>База данных</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" >			
    </head>
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		
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
		<?php else: ?>
			<center>
				<a type="button" class="btn btn-primary" href="/signup.php">Регистрация</a>
			</center>
		<?php endif; ?>

		<script src = "ajax.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="dist/css/bootstrap.min.js"></script>
	</body>
</html>