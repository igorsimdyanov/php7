<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>AJAX-запрос методом POST</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="comments.css" />
  <script type="text/javascript" src="jquery.js" ></script>
  <script type="text/javascript">
    // Назначить обработчики события click
    // после загрузки документа
    $(document).ready(function(){
      $("#submit-id").on("click", function(){
        // Проверяем корректность заполнения полей
        if($.trim($("#nickname").val()) === "")
        {
          alert('Пожалуйста заполните поле "Автор"');
          return false;
        }
        if($.trim($("#content").val()) === "")
        {
          alert('Пожалуйста заполните поле "Сообщение"');
          return false;
        }
        // Блокируем кнопку отправки
        $("#submit-id").prop("disabled", true);
        // AJAX-запрос
        $.ajax({
          url: "addcom.php",
          method: 'post',
          data: {nickname: $("#nickname").val(),
                 content: $("#content").val()}
        }).done(function(data){
          // Успешное получение ответа
          $("#info").html(data);
          $("#submit-id").prop("disabled", false);
        });
      })
    });
  </script>
</head>
<body>
<div id='info'>
<?php
  require_once("addcom.php");
?>
</div>
<div id='form'>
  <p>
    <span class='ttl'>Автор:</span>
    <span class='fld'>
      <input id='nickname' type='text' />
    </span>
  </p>
  <p>
    <span class='ttl'>Сообщение:</span>
    <span class='fld'>
      <textarea rows='5' id='content' type='text'></textarea>
    </span>
  </p>
  <p>
    <span class='ttl'>&nbsp;</span>
    <span class='fld'>
      <input id='submit-id' type='submit' value='Отправить' />
    </span>
  </p>
</div>
</body>
</html>
