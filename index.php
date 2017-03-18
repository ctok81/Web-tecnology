<html>
	<head>
		<title>Ремонт техники /*Название*/</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<header>
			<nav align=center>
				<img src = "t.jpg" height=100 width=100 align="center"></img>
				<ul><a href="index.php">Главная страница</a></ul>
				<ul><a href="contact.php">Контакты</a></ul>
				<ul><a href="zakaz.php">Заказать услугу</a></ul>
			</nav>
		</header>

		<?php
		$python =  shell_exec('C:\Python\python.exe C:\OpenServer\domains\localhost\parser.py');
		echo mb_convert_encoding($python, 'UTF-8', 'Windows-1251')
		?>

		<article>
			Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
		</article>
		<footer>Компания /*Наше навзание*/</footer>
	</body>
</html>
