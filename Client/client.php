<html>
  <head>
    <title>Заказы</title>
		  <link rel="stylesheet" type="text/css" href="client.css">
  </head>

  <body>
    <table>
      <caption>Заказы</caption>
      <tr>
       <th>Телефон</th>
       <th>ФИО</th>
       <th>Адрес</th>
      </tr>
      <?php>
      include("/../bd.php");
  		$masClient = mysql_query("SELECT phone, FIO, chto FROM Client",$db);

      while(list($n, $p, $c) = mysql_fetch_array($masClient)) {
        echo"<tr>
              <td>$n</td>
              <td>$p</td>
              <td>$c</td>
            </tr>";
      }
      ?>
    </table>
  </body>
</html>
