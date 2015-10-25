<?php ## Ссылки на объекты.
  // Объявляем новый класс.
  class AgentSmith {}
  // Создаем новый объект класса AgentSmith.
  $first = new AgentSmith();
  // Присваиваем значение атрибуту класса.
  $first->mind = 0.123;
  // Копируем объекты.
  $second = $first;
  // Изменяем "разумность" у копии!
  $second->mind = 100;
  // Выводим оба значения.
  echo "First mind: {$first->mind}, second: {$second->mind}";
?>
