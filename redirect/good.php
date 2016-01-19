<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>Использование самопереадресации.</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php
    $FNAME = "book.txt";
    if (@$_REQUEST['doAdd']) {
      $f = fopen($FNAME, "a");
      if (@$_REQUEST['text']) fputs($f, $_REQUEST['text']."\n");
      fclose($f);
      $rnd = time(); # ВНИМАНИЕ!
      header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}?$rnd");
      exit();
    }
    $gb = @file($FNAME); 
    if (!$gb) $gb = [];
  ?>
  <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
    Текст:<br />
    <textarea name="text"></textarea><br />
    <input type="submit" name="doAdd" value="Добавить">
  </form>
  <?php foreach($gb as $text) {?>
      <?=htmlspecialchars($text)?><br /><hr />
  <?}?>
</body>
</html>