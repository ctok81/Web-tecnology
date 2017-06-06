<html>
	<head>
		<title>Оформить заказ</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="divtable.css">
		<meta charset="utf-8">
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
				<img src = "t.jpg" height=100 width=100 align="center"></img>
				<ul><a class="top" href="index.php">Главная страница</a></ul>
				<ul><a class="top" href="contact.php">Контакты</a></ul>
				<ul><a class="top" href="zakaz.php">Заказать услугу</a></ul>
			</nav>
		</header>

		<br/>
		<article class="big">
		<?php
		$flag = false;
		echo "<div class='DivAllList'>";
		$con = mysqli_connect("127.0.0.1","Admin","963258741","Web-tech");
		$co=0;
		if(mysqli_multi_query($con,"SELECT name FROM Group_Services WHERE 1;"))
		{
			do
			{
				if($result = mysqli_store_result($con))
				{

				$gr_i=1;
				While($grouprows = mysqli_fetch_row($result))
					{
					$co=$co+1;
					echo("<div class='Li2st' onclick='hw($co); ' >$grouprows[0]</div>");
					}
					mysqli_free_result($result);
				}
			} while (mysqli_more_results($con));
		}

		echo"</div>";

		if(isset($_GET['gri']) && $_GET['gri']<7)
		{
			include("bd.php");
			$gr_i=htmlspecialchars(stripslashes($_GET['gri']));
			settype($gr_i, 'integer');
			$flag = true;
			echo"<div class='divTable'>";
				echo"<div class='divTableCell'>";
					echo"<div class='divTableHeading'>";
						echo"<div class='divTableCell'>Наименование</div>";
						echo"<div class='divTableCell1'>Цена(руб)</div>";
					echo"</div>";

					echo "<div class='divTableBody'>";
						$sqlServices = mysqli_query($con,"SELECT name,pricer FROM `Service` WHERE group_id=$gr_i");
						While($problemrows = mysqli_fetch_row($sqlServices))
						{
						echo"<div class='divTableRow'>";
							echo"<div class='divTableCell'>$problemrows[0]</div>";
							echo"<div class='divTableCell1'>$problemrows[1]</div>";
						echo"</div>";
						}
					echo"</div>";//table-body
				echo"</div>";//table-cell

	}
	else
	{
		$flag = false;
	}

			if($flag)
				echo "<div class='divTableCell'>";
			if(!$flag)
				echo "<div class='divTableCellnone'>";
?>
					<form align="center" action="handler2.php" target="area" method="post" style="border: 5px; margin: 5px; padding: 3px 5px;">
						<input type='tel' required name="phone" placeholder="Ваш Телефон. Пример: 71234567890" pattern='7[\d]{10}' maxlength="11" title="Пример: 71112345678">
						<input type="text" name="fio" placeholder="Ваш ФИО">
						<input type="text" name="chto" placeholder="Что-нибудь">
						<input type="submit" value="Заказать услугу">
					</form>


				</div>
			</div>

		</article>
		<footer>
			<div>Компания /*Наше навзание*/
				<form action="client/search.php">
					<input type ="submit" value="Перейти к поиску по Телефону">
				</form>
			 	<span style="float:right"><?php $date = date('Y-m-d H:i:s',time()+(2*3600));
					echo "$date";?>
				</span>
			</div>
		</footer>
	</body>
</html>
