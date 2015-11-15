<?php ## Перехват исключения отражения.
  try {
    $obj = new ReflectionFunction("spoon");
  } catch (ReflectionException $e) {
    echo "Исключение: ", $e->getMessage();
  }
?>