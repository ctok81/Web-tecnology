<meta charset="utf-8">
<?php
	$p = stripslashes($_POST['phone']);
	$p= htmlspecialchars($p);
	$f = stripslashes($_POST['fio']);
	$f= htmlspecialchars($f);
	$date = date('Y-m-d H:i:s',time()+(2*3600));
	$link = mysqli_connect("127.0.0.1","Admin","963258741", "Web-tech");

	if(mysqli_query($link, "INSERT INTO `Calls` VALUES(NULL, $f, '$p', '$date')") === TRUE)
	print "<script language='Javascript'>
			window.location.href = 'http://localhost/Web-tecnology/zakaz.php';
			alert('Ваш запрос отправлен');
			 </script>";
				exit;
?>
