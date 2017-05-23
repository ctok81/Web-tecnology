<?php
//Код Макса
class Client
{
	public $tel;// = 79080003030;
	public $fio;
	public $chto;

	function setTel($tel){
		if(preg_match('[7]{1}[\d]{10}', $tel)){
			return true;}
	}

	function addClient()
	{
		if(setTel($_POST['phone']) //&& setTel($_POST['phone']))
		{
			mysqli_multi_query($link, "INSERT INTO `Client` VALUES(default, $p, '$f', '$c')");
		}
	}

}

if(is_numeric($_POST['phone'] /*& проверка других*/)){
	include("bd.php");
	$p = $_POST['phone'];
	$f = $_POST['fio'];
	$c = $_POST['chto'];
	$link = mysqli_connect("127.0.0.1","Admin","963258741", "Web-tech");
	mysqli_multi_query($link, "INSERT INTO `Client` VALUES(default, $p, '$f', '$c')");

	print "<script language='Javascript'>function reload()
				{	location = \"zakaz.php\"	};
					setTimeout('reload()', 5000);
			 </script>

				<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
				exit;
}
//Код Макса
?>
