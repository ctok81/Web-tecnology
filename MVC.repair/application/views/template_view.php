<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>РЕМОНТ ТЕХНИКИ</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/css/divtable.css" />
		<link rel="stylesheet" type="text/css" href="/css/zakaz.css" />
	</head>

	<body>
			<header class="menu">
				<nav align=center>
					<img src = "/images/t.jpg" height=100 width=100 align="center"></img>
					<ul><a class="top" href="/">Главная страница</a></ul>
					<ul><a class="top" href="/contacts">Контакты</a></ul>
					<ul><a class="top" href="/zakaz">Заказать услугу</a></ul>
				</nav>
			</header>

			<section class="news">
						<?php include 'application/views/'.$content_view; ?>
			</section>
	</body>
</html>
