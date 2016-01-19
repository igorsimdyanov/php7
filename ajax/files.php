<?php
  if(!empty($_FILES))
  {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    exit();
  }
?>
<!DOCTYPE html>
<html lang='ru'>
  <head>
    <title>Форма для загрузки произвольного количества файлов</title>
    <meta charset='utf-8'>
    <script type="text/javascript" src="jquery.js" ></script>
    <script type="text/javascript">
    // Назначить обработчики события click
    // после загрузки документа
    $(function() {
      $(document).on("click", "input[type='button'][value!='+']", remove_field);
      $(document).on("click", "input[type='button'][value!='-']", add_field);
    });
    // Обработчик для кнопки +
    function add_field(){
      // Добавляем новое поле в конец
      $("p:last").clone().insertAfter("p:last");
    }
    // Обработчик для кнопки -
    function remove_field(){
      console.log($(this));
      // Удаляем последнее поле
      $("p:last").remove();
    }
    </script>
  </head>
  <body>
    <form enctype='multipart/form-data' method="post">
    <p><input type="file" name="filename[]" />
       <input type="button" value="+">
       <input type="button" value="-"></p>
    <div><input type="submit" value="Загрузить"></div>
    </form>
  </body>
</html>
