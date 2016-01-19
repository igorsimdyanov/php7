<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>"Плохая" реализация гостевой книги.</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php
    $FNAME = "book.txt";
    if (@$_REQUEST['doAdd']) {
      $f = fopen($FNAME, "a");
      if (@$_REQUEST['text']) fputs($f, $_REQUEST['text']."\n");
      fclose($f);
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
      <?=$text?><br /><hr />
  <? } ?>
</body>
</html>