<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		var score=0;
		function checkAnswer(inputId,answers){
			var userAnswer=document.getElementById(inputId).value;
			userAnswer=userAnswer.toLowerCase();
			for(var i=0; i<answers.length;i++)
			{
				if(userAnswer==answers[i])
				{
					score++;
					break;
				}
			}

		}
		function checkAnswers(){
			checkAnswer("userAnswer1",["сон","сновидение"]);
			checkAnswer("userAnswer2",["морской","укус замеи"]);
			checkAnswer("userAnswer3",["шахматный","мертвый"]);
			alert("Вы угадали" + score +"загадок");
		}

	</script>
</head>
<body>

	<div class="content"> 
		<?php include "menu.php" ?>

		<div class="contentWrap">
			<div class="content">
				<div class="center">
					<h1> Игра в загадки</h1>
					<div class="box">

						<p>Что можно увидеть с закрытыми глазами?</p>	
						<input type="text" id="userAnswer1">

						<p>Какой болезнью не болюют на суше?</p>	
						<input type="text" id="userAnswer2">

						<p>Какой конь не есть овса?</p>	
						<input type="text" id="userAnswer3">

						<br>
						<a href="#" onclick="checkAnswers();">Ответить</a>

					 </div>	
				</div>
			</div>
		</div>
	</div>

<div class="footer">
	Copyright &copy; Alena Fedyaeva 
</div>

</body>
</html>