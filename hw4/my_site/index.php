<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

	<div class="content"> 
		<?php include "menu.php" ?>

		<h1>Личный сайт студента GeekBrains</h1>

		<div class="center">		
		<img src="img/my.png">
			<div class="box_text">
				<p><b>Добрый день.</b> Меня зовут <i>Алена Федяева</i>. Я совсем недавно начала программировать веб, но уже написала свой первый сайт.</p>

				<p>В этом мне помог IT-портал
				<a href="https://GeekBrains.ru"> GeekBrains </a> </p>

				<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала:
					<a href="index.html"> Главная </a>
					<a href="puzzle.html"> Загадки </a>
					<a href="guess.html"> Угадайка </a>
					<a href="guess_multi.html"> Угадайка мультиплеер</a>
					<a href="gen_passwd.html"> Генератор паролей </a>
				</p>
			</div>
		</div>
	</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Alena Fedyaeva 
</div>

</body>
</html>