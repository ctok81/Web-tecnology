<?
header('Content-Type: text/html; charset=utf-8');
?>

<html>
  <head>
    <title> Поиск в БД </title>
  </head>
  <body>
    <form method = "post" action = "action.php">
      <include type="text" name="fio">
      <input type='tel' required name="phone" placeholder="79%" pattern='7[0-9]{1,10}%{0,1}' maxlength="11" title="Пример: 7900%">
      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
