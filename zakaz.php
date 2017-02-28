<html>
	<head>
		<title>Оформить заказ</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="zakaz.css">
	</head>

	<body>
		<header> 
			<nav align=center>
				<img src = "t.jpg" height=100 width=100></img>
				<ul><a href="index.php">Главная страница</a></ul>
				<ul><a href="contact.php">Контакты</a></ul>
				<ul><a href="zakaz.php">Заказать услугу</a></ul>
			</nav>
		</header>
		
		<div align=center>
			<p></p>
			<table align=center>
				<tr><th>Наименование услуги</th><th>Цена</th></tr>
				<tr><td>Починка компьюктера</td><td>100 $</td></tr>
				<tr><td>Чтобы всё работало</td><td>100 $</td></tr>
				<tr><td>Настройка вифи</td><td>50 $</td></tr>
				<tr><td>Убрать полосы с экрана</td><td>100 $</td></tr>
				<tr><td>Почистить память и ауру</td><td>100 $</td></tr>
				<tr><td>Помыть машину</td><td>1000 $</td></tr>
			</table>
		</div>
		<p>
			<form align = center action="handler.php" method="post">
			<input type="text" name="phone" placeholder="Телефон">
			<input list="lis" name="listbase" placeholder = "Выберите проблему">
			<input type="submit" value="Отправить">
		
			<datalist id="lis">
				<option>Серьезная проблема</option>
				<option>Не очень</option>
			</datalist> 
		</p>
		<footer>Компания /*Наше навзание*/</footer>
	</body>
</html>