<?php ## Использование функции array_multisort()
  $arr1 = [3, 4, 2, 7, 1, 5];
  $arr2 = ["world", "Hello", "yes", "no", "apple", "wet"];
  array_multisort($arr1, $arr2);
  print_r($arr1);
  print_r($arr2);
?>