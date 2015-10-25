<!-- Навязчивые предупреждения -->
<form action="warn.php">
<input type="submit" name="doGo" value="Click!">
</form>
<?php
  // В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
  if ($_REQUEST['doGo']) echo "Вы нажали кнопку!";
?>
