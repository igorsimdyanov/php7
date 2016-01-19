<?php ## Обработка текста.
  $str = <<<MARKER
<h1>Заголовок</h1>
<p>Первый параграф, посвященный "проверке"</p>
MARKER;
  echo "<pre>";
  echo filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  echo "</pre>";
?>