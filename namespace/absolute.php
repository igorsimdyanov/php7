<?php ## Доступ к глобальному пространству имен
  namespace PHP7;

  function strlen($str)
  {
    return count(str_split($str));
  }
  // Или даже так
  // function strlen($str) {
  //   return \strlen($str);
  // }

  // Это PHP7\strlen
  echo strlen("Hello world!")."<br />";
  // Это стандартная функция strlen()
  echo \strlen("Hello world!")."<br />";
?>