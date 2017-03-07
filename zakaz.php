<html>
	<head>
		<title>Оформить заказ</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="zakaz.css">
		<link rel="stylesheet" type="text/css" href="divtable.css">

<script type="text/javascript">
function hw(id) {
	document.location.href="?gri=" + id;
	return id;
};

</script>
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
		<br/>
		<?php
		include("bd.php");

		$sqlGroups = mysql_query("SELECT name FROM Group_Services WHERE 1;",$db);
		//выбор группы проблемы
		echo "<div class='DivAllList'>";

		$co=0;
		$gr_i=1;

		While($grouprows = mysql_fetch_row($sqlGroups))
			{
				$co=$co+1;
			echo("<div class='Li2st' onclick='hw($co); ' >$grouprows[0]</div>");
			}
		echo"</div>";

		if(isset($_GET['gri']) && $_GET['gri']<7)
		{
			$gr_i=$_GET['gri'];
			echo"<div class='divTable' style='width: 60%; border: 1px solid #000;'>";

			

			echo"<div class='divTableHeading'>";
			
			echo"<div class='divTableCell'>Наименование</div>";
			echo"<div class='divTableCell'>Цена(руб)</div>";
			echo"</div>";
			
			echo "<div class='divTableBody'>";
		$sqlServices = mysql_query("SELECT name,pricer FROM `Service` WHERE group_id=$gr_i",$db);
		While($problemrows = mysql_fetch_row($sqlServices))
			{
			echo"<div class='divTableRow'>";
			echo"<div class='divTableCell'>$problemrows[0]</div>";
			echo"<div class='divTableCell'>$problemrows[1]</div>";
			echo"</div>";
			}
		 echo"</div>";
		echo"</div>";
		$date= date('Y-m-d H:i:s');
		echo "$date";
	}
	else
	{


	}
?>
		<p>
			<form align = center action="handler.php" method="post">
			<input type="text" name="phone" placeholder="Телефон"/>
			<input type="text" name="namecl" placeholder="Ваше Имя"/>
			<input type="submit" value="Отправить"/>

		</p>
		<footer>Компания /*Наше навзание*/</footer>
	</body>
</html>
