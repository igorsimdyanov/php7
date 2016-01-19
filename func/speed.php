<?php ## Сравнение скорости разных видов передачи параметров.
  // Передача "по значению" без изменения параметра.
  function takeVal($a) { $x = $a[1234]; }
  // Передача "по ссылке" без изменения параметра.
  function takeRef(&$a) { $x = $a[1234]; }
  // Передача "по значению" С ИЗМЕНЕНИЕМ параметра.
  function takeValAndModif($a) { $a[1234]++; }
  // Передача "по ссылке" с изменением параметра.
  function takeRefAndModif(&$a) { $a[1234]++; }

  // Тестируем разные функции на скорость.
  test("takeVal");
  test("takeRef");
  test("takeValAndModif");
  test("takeRefAndModif");

  function test($func)
  {
     // Создаем большой массив.
     $a =[];
     for ($i = 1; $i <= 100000; $i++) $a[$i] = $i;
     // Ждем "переключения" секунды (для точности).
     for ($t = time(); $t == time(); );
     // Выполняем функцию в течение ровно 1 секунды.
     for ($N = 0, $t = time(); time() == $t; $N++) $func($a);
     printf("<tt>$func</tt> took %d itr/sec<br />", $N);
  }
?>