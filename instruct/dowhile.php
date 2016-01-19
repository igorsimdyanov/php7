<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Модель сценария для обработки формы</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php
    $WasError = 0; // индикатор ошибки - если не 0, то была ошибка
    // Если нажали кнопку Submit (с именем $doSubmit)... 
    if (isset($_REQUEST['doSubmit'])) do { 
      // Проверка входных данных
      if ($_REQUEST['reloads'] != 1+1+7) { $WasError = 1; break; }
      if ($_REQUEST['loader'] != "source") { $WasError = 1; break; }
      // и т. д. - здесь может быть множество других проверок.
      // ...
      // В этой точке данные точно в порядке. Обрабатываем их.
      echo "Вы внимательный человек, поздравляем!<br />";
      // Можно записать данные в файл.
      exit();
    } while (0);
    // Произошла ли ошибка?
    if ($WasError) {
      echo "Вы ответили неверно, попробуйте еще раз.";
    }
  ?>
  <!-- Выводим форму, через которую пользователь будет запускать этот 
  сценарий, и, возможно, отображаем сообщение об ошибке в случае, 
  если $WasError != 0. -->
  <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
    Число перезагрузок: <input type="text" name="reloads"><br />
    Загрузочная программа: <input type="text" name="loader"><br />  
    <input type="submit" name="doSubmit" value="Ответить на вопросы">
  </form>
</body>
</html>