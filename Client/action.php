<?
  include("/../bd.php");
  $q = $_REQUEST["q"];
  if(ctype_digit($q))
  {
    if(iconv_strlen($q) == 11 & iconv_strlen($q) > 0)
      $query = "SELECT phone, FIO, chto FROM Client where phone like('$q');";
    else
      if(iconv_strlen($q) > 0 & iconv_strlen($q) <= 10)
        $query = "SELECT phone, FIO, chto FROM Client where phone like('$q%');";
    $masClient = mysql_query($query,$db);
    if(mysql_num_rows($masClient) > 0)
    {
      echo "<caption>Заказы</caption>
            <tr>
              <th>Телефон</th>
              <th>ФИО</th>
              <th>Адрес</th>
            </tr>";
      while(list($n, $p, $c) = mysql_fetch_array($masClient))
      {
        echo"<tr>
              <td>$n</td>
              <td>$p</td>
              <td>$c</td>
            </tr>";
      }
    }
    else
      echo "С таким телефоном не найдены.";

  }
  else
    echo "Пожалуйста, вводите цифры";
?>
