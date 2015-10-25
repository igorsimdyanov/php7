<?php ## Демонстрация работы со списками.
  $namesList[0] = "Yuen Wo Ping";
  $namesList[1] = "Geofrey Darrow";
  $namesList[2] = "Hugo Weaving";
  echo "А вот первый элемент массива: ".$namesList[0]."<hr />";
  // Печатаем в цикле все элементы массива.
  for($i = 0; $i < count($namesList); $i++)
    echo $namesList[$i]."<br />";
?>