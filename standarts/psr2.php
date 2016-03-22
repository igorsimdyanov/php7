<?php ## Управляющие структуры
  if (isset($_GET['number'])) {
    for ($i = 0; $i < $_GET['number']; $i++) {
      echo "PSR<br />";
    }
  } else {
    echo "Не передан GET-параметр number<br />";
  }
