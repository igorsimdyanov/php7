<?php ## Различные флаги preg_match_all().
  header("Content-type: text/plain");
  $flags = [
    "PREG_PATTERN_ORDER",
    "PREG_SET_ORDER",
    "PREG_SET_ORDER|PREG_OFFSET_CAPTURE",
  ];
  $re   = '|<(\w+).*?>(.*?)</\1>|s';
  $text = "<b>текст</b>  и еще <i>другой текст</i>";
  echo "Строка: $text\n";
  echo "Выражение: $re\n\n";
  foreach ($flags as $name) {
    preg_match_all($re, $text, $mathces, eval("return $name;"));
    echo "Флаг $name:\n";
    print_r($mathces);
    echo "\n";
  }
?>