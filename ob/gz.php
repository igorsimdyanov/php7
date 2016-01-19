<?php ## Отображение параметров GZip-сжатия.
  // Функция только устанавливает значение Cookie page_size_after.
  function obSaveCookieAfter($s)
  { 
    setcookie("page_size_after", strlen($s));
    return $s; 
  }
  // Аналогично, но для Cookie page_size_before.
  function obSaveCookieBefore($s)
  { 
    setcookie("page_size_before", strlen($s));
    return $s; 
  }
  // Устанавливаем конвейер обработчиков.
  ob_start("obSaveCookieAfter");
  ob_start("ob_gzhandler", 9);
  ob_start("obSaveCookieBefore");
  // Дальше можно выводить любой текст - он будет сжат.
?>
<!-- Выводим информацию о сжатии (в отдельном шаблоне). -->
<b><?php include "gz.htm"?></b><hr />
<!-- Выводим текст страницы. -->
<pre>
<?=file_get_contents("../preg/largetextfile.txt")?>
</pre>