<?php ## Естественная сортировка.
  $files = [
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
  ];
  //asort($files);
  natsort($files);
  echo "<pre>"; print_r($files);
?>