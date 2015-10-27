<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Прием и передача JSON-данных</title>
  <meta charset='utf-8'>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>
    $(function(){
      //  Обработчик нажания на кнопку submit
      $('input[type=submit]').on('click', function(e){
        // Предотвращаем обычное поведение элемента
        e.preventDefault();
        // Формируем JSON из полей формы
        var json = {
          name: $('input[name=name]').val(),
          family:  $('input[name=family]').val()
        }
        // Отправляем асинхронный POST-запрос по адресу
        // указанному в атрибуте action формы
        $.ajax({
          url: $('form').prop('action'),
          method: 'POST',
          data: 'json=' + JSON.stringify(json)
        })
        .done(function(msg){
          // Заменяем надпись Здравствуйте в поле p#is-hello
          $('#js-hello').html(msg);
        });
      });
    });
  </script>
</head>
<body>
  <p id='js-hello'>Здравствуйте!</p>
  <form action="/json_answer.php" method="GET">
  <p>Имя: <input type="text" name="name" value="" /></p>
  <p>Фамилия: <input type="text" name="family" value="" /></p>
  <p><input type="submit" value="Представиться"><p>
  </form>
</body>
</html>
