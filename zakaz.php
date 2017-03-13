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
			echo"<div class='divTable'>";
				echo"<div class='divTableCell'>";
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
					echo"</div>";//table-body
				echo"</div>";//table-cell

		//echo"<div class='divTableFoot'>";
		//$date= date('Y-m-d H:i:s'); // лучше отображать это в footerе
		//echo "$date";
		//echo"</div>";
	}
	else
	{
		echo "Возникла ошибка";
	}
?>
				<div class='divTableCell'>
					<form align="center" action="handler.php" method="post" style="border: 5px; margin: 5px; padding: 3px 5px;">
						<input type="text" name="phone" placeholder="Телефон" style="margin: 3px; width: 100%;">
						<input type="text" name="namecl" placeholder="Ваше Имя" style="margin: 3px; width: 100%;">
						<input type="submit" value="Заказать услугу" style="margin: 3px;width: 100%;">
					</form>
			</div><!table-cell>
		</div><!table>
		<footer>
			Компания /*Наше навзание*/
			<?php $date = date('Y-m-d H:i:s');
			echo "$date";?>
		</footer>
	</body>
</html>
