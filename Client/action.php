<?
header('Content-Type: text/html; charset=utf-8');
?>

<html>
  <head>
    <title>Заказы</title>
		  <link rel="stylesheet" type="text/css" href="client.css">
  </head>

  <body>

      <?php>
      include("/../bd.php");
      $phone = $_POST['phone'];
      $query ="SELECT phone, FIO, chto FROM Client where phone like('$phone')";
  		$masClient = mysql_query($query,$db);

    if(mysql_num_rows($masClient) > 0)
    {
      echo "
        <table>
        <caption>Заказы</caption>
        <tr>
        <th>Телефон</th>
        <th>ФИО</th>
        <th>Адрес</th>
        </tr>";
        while(list($n, $p, $c) = mysql_fetch_array($masClient)) {
          echo"<tr>
              <td>$n</td>
              <td>$p</td>
              <td>$c</td>
              </tr>";
        }
        echo "</table>";
    }
    else
    {
      echo "<p>Не найдены</p>";
    }
    ?>


    <form method = "post" action = "search.php">
      <input type="submit" value="Вернуться к поиску">
    </form>

<form method="post" action="/../">
  <input type = "submit" value="Вернуться в главное меню">
</form>

  </body>
</html>
