<?php ## Перехват ошибок и предупреждений.
  // Определяем новую функцию-обработчик.
  function myErrorHandler($errno, $msg, $file, $line)
  {
    // Если используется @, ничего не делать.
    if (error_reporting() == 0) return;
    // Иначе - выводим сообщение.
    echo '<div style="border-style:inset; border-width:2">';
    echo "Произошла ошибка с кодом <b>$errno</b>!<br />"; 
    echo "Файл: <tt>$file</tt>, строка $line.<br />";
    echo "Текст ошибки: <i>$msg</i>";    
    echo "</div>";
  }
  // Регистрируем ее для всех типов ошибок.
  set_error_handler("myErrorHandler", E_ALL);
  // Вызываем функцию для несуществующего файла, чтобы 
  // сгенерировать предупреждение, которое будет перехвачено.
  @filemtime("spoon");
?>