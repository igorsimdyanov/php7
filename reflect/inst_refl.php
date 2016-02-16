<?php ## Создание объекта неизвестного класса (reflection API).
  require_once "lib/Complex2.php";
  // Пусть имя класса хранится в переменной $className.
  $className = "MathComplex2";
  // ...а параметры его конструктора - в $args.
  $args = [1, 2];
  // Создаем объект, хранящий всю информацию о классе.
  // Фактически, ReflectionClass является "классом, хранящим
  // сведения о другом классе".
  $class = new ReflectionClass($className);
  // Создаем объект класса явным способом.
  $obj = $class->newInstance(101, 303);
  echo "Первый объект: $obj<br />";
  // Но мы не смогли использовать $args, а вынуждены были указать 
  // параметры явным образом. Теперь создаем объект класса НЕЯВНО.
  $obj = call_user_func_array([$class, "newInstance"], $args);
  echo "Второй объект: $obj<br />";
?>