<?
header('Content-Type: text/html; charset=utf-8');
?>

<?php

if(is_numeric($_POST['phone']) & preg_match("/7\d{10}/", $_POST['phone']) == 1)
{
	require_once('/closed/bd.php');
	$p = htmlspecialchars($_POST['phone']);
	$f = htmlspecialchars($_POST['fio']);
	$c = htmlspecialchars($_POST['chto']);

	$link = mysqli_connect($host, $user, $password, $database);																								//подключение
	$query = sprintf("INSERT INTO `Client` VALUES(default, %s, '%s', '%s')", $p, $f, $c); 										//форматирование строки
	mysqli_query($link, $query);																																							//выполнение запроса
	mysqli_close($link);																																											//закрытие соединения
}

?>
<script language='Javascript'>
function reload()
			{
				location = "zakaz.php"
			};
				setTimeout('reload()', 5000);
</script>
<div>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</div>
