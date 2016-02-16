<?php ## Отправка данных генератору методом send()
  function block()
  {
    while(true) {
      $string = yield;
      echo $string;
    }
  }

  $block = block();
  $block->send("Hello, world!<br />");
  $block->send("Hello, PHP!<br />");
?>