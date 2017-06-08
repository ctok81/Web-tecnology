<?
header('Content-Type: text/html; charset=utf-8');
?>

<script type="text/javascript">
function startAjax(url)
{
  var request;
  if(window.XMLHttpRequest)
      request = new XMLHttpRequest();
  else
    if(window.ActiveXObject)
        request = new ActiveXObject("Microsoft.XMLHTTP");
      else
        return;

  request.onreadystatechange = function()
  {
    if(request.readyState == 4)
      if(request.status==200)
        document.getElementById("printResult").innerHTML = request.responseText;
  }
  request.open("GET", url + "?q=" + document.getElementsByTagName('input')[0].value, true);
  request.send();
}
</script>

<html>
  <head>
    <title>Заказы</title>
		  <link rel="stylesheet" type="text/css" href="client.css">
  </head>
  <body>
    <form>
      <input type='tel' required name="phone" placeholder="Пример: 79" pattern='7[0-9]{1,10}'
      maxlength="11" title="Пример: 79" onkeyup="startAjax('action.php');">
    </form>
    <form method="post" action="/../">
      <input type = "submit" value="Вернуться в главное меню">
    </form>
    <table id="printResult">
    </table>
  </body>
</html>
