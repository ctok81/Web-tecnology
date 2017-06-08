<h1>Совершить заказ</h1>
<?php

  foreach ($data as $key)
  {
    echo "<div class='DivAllList'>";
    echo"<div class='Li2st'>$key</div>";
    echo"</div>";
  }
?>
      <div class='divTableCell'>
        <form align="center" action="zakaz" target="area" method="post" style="border: 5px; margin: 5px; padding: 3px 5px;">
          <input type='tel' required name="phone" placeholder="Ваш Телефон. Пример: 71234567890" pattern='7[\d]{10}' maxlength="11" title="Пример: 71112345678">
          <input type="text" name="fio" placeholder="Ваш ФИО">
          <input type="text" name="chto" placeholder="Что-нибудь">
          <input type="submit" value="Заказать услугу">
        </form>
      </div>
    </div>
