<aside class="maxPars">
  <?php
  $Max_path = 'C:\Python\python.exe python\parser.py';
  $Max_path2 = 'C:\Python\python.exe python\gitparser.py';
  $Roma_path = 'C:\Users\Navai\AppData\Local\Programs\Python\Python36-32\python.exe C:\OpenServ\OpenServer\domains\MVC.repair\python\parser.py';
  $Roma_path2 = 'C:\Users\Navai\AppData\Local\Programs\Python\Python36-32\python.exe C:\OpenServ\OpenServer\domains\MVC.repair\python\gitparser.py';
  $python =  shell_exec($Max_path);
  echo mb_convert_encoding($python, 'UTF-8', 'Windows-1251')
  ?>
</aside>

<h1>Добро пожаловать!</h1>
<section class="news">
<header class="news">
<?php
  $pythonR =  shell_exec($Max_path2);
echo mb_convert_encoding($pythonR, 'UTF-8', 'Windows-1251')
?>
</header>

      <article>
        Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
      </article>
      <article>
        Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
      </article>
      <article>
        Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
      </article>
      <article>
        Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
      </article>
      <article>
        Мы занимаемся ремонтом вашей техники. Наши специалисты имеют сертификаты....
      </article>
      <footer>
      Конец новостей
      </footer>
</section>
