<html>
	<head>
		<title>Ремонт техники /*Название*/</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
	<aside class="maxPars">
		<?php
		$python =  shell_exec('C:\Users\Navai\AppData\Local\Programs\Python\Python36-32\python.exe C:\OpenServ\OpenServer\domains\localhost\Web-tecnology\parser.py');
		echo mb_convert_encoding($python, 'UTF-8', 'Windows-1251')
		?>	
	</aside>
		<header class="menu">
			<nav align=center>
				<img src = "t.jpg" height=100 width=100 align="center"></img>
				<ul><a class="top" href="index.php">Главная страница</a></ul>
				<ul><a class="top" href="contact.php">Контакты</a></ul>
				<ul><a class="top" href="zakaz.php">Заказать услугу</a></ul>
			</nav>
		</header>
		<section class="news">
		<header class="news">
		<?php
			$pythonR =  shell_exec('C:\Users\Navai\AppData\Local\Programs\Python\Python36-32\python.exe C:\OpenServ\OpenServer\domains\localhost\Web-tecnology\gitparser.py');
		echo mb_convert_encoding($pythonR, 'UTF-8', 'Windows-1251')
		?>
		</header>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<article>
						Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
					</article>
					<footer>
					Конец новостей
					</footer>
		</section>
		<footer>Компания /*Наше навзание*/

		</footer>
	</body>
</html>
