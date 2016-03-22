<?php ## Запоминание состояния флажков
  // Инициируем сессию
  session_start();

  function checkbox($key)
  {
    if(empty($_SESSION[$key])) return "";
    else return "checked='checked'";
  }
?>
<!DOCTYPE html>
<html lang='ru'>
  <head>
    <title>jQuery</title>
    <meta charset='utf-8'>
    <script type="text/javascript" src="jquery.js" ></script>
    <script type="text/javascript">
    $(function(){
      $("input[type=checkbox]").on("click", function(){
        $.post(
          "check.php",
          {id: $(this).prop("id"),
           status: $(this).prop("checked")}
        );
      });
    });
    </script>
  </head>
  <body>
    <p>
      <input id="id1" type="checkbox" <?php echo checkbox("id1"); ?> />
      <label for="id1">Присылать уведомление об ответе</label>
    </p>
    <p>
      <input id="id2" type="checkbox" <?php echo checkbox("id2"); ?> />
      <label for="id2">Информационные панели свернуты</label>
    </p>
    <p>
      <input id="id3" type="checkbox" <?php echo checkbox("id3"); ?> />
      <label for="id3">Выделять новые сообщения</label>
    </p>
    <p>
      <input id="id4" type="checkbox" <?php echo checkbox("id4"); ?> />
      <label for="id4">Автоматически запускать видео-ролики</label>
    </p>
  </body>
</html>
