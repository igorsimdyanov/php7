<!DOCTYPE html>
<html lang='ru'>
  <head>
    <title>Использование метода load()</title>
    <meta charset='utf-8'>
    <script type="text/javascript" src="jquery.js" ></script>
    <script type="text/javascript">
      // Назначить обработчики события click
      // после загрузки документа
      $(function(){
        $("#id").on("click", function(){
          $('#info').load("time.php");
        })
      });
    </script>
  </head>
  <body>
    <div><a href='#' id='id'>Получить время</a></div>
    <div id='info'></div>
  </body>
</html>
