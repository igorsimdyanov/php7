<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Гарантированный прием значений от флажков</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php
  if (isset($_REQUEST['doGo'])) {
    foreach ($_REQUEST['known'] as $k => $v) {
      if($v) echo "Вы знаете язык $k!<br>"; 
      else echo "Вы не знаете языка $k. <br>";
    }
  }
  ?>
  <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Какие языки программирования вы знаете?<br />
    <input type="hidden" name="known[PHP]" value="0">
    <input type="checkbox" name="known[PHP]" value="1">PHP<br />
  
    <input type="hidden" name="known[Perl]" value="0">
    <input type="checkbox" name="known[Perl]" value="1">Perl<br />
  
    <input type="submit" name="doGo" value="Go!">
  </form>
</body>
</html>