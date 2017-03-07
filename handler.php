<?php
// Получить данные из суперглобального массива $_POST и обработать их
	if (isset( $_POST['phone'])) { $phone =  $_POST['phone']; if ($phone == '') { unset($phone);} } 

	if (isset($_POST['namecl'])) { $nameClient = $_POST['namecl']; if ($nameClient == '') { unset($nameClientn);} }

	$date= date('Y-m-d H+2:i:s');
	include("bd.php");
	
	$result = mysql_query("INSERT INTO Calls VALUES (NULL,'$nameClient','$phone','$date')", $db);
	if ($result = 'true')
	{
		echo "В ближайшее время с вами свяжется наш специалист. ";
	}
	else
	{
		echo "Не получилось";
	}
?>