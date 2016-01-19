<?php ## Проблемы алгоритма со счетчиком ссылок.
  // Класс, обозначающий отца семьи.
  class Father
  {
    // Список детей, сразу после создания объекта - пустой.
    public $children = [];
    // Выводит сообщения в момент уничтожения объекта.
    function __destruct() { echo "Father умер.<br />"; }
  }
  // Ребенок некоторого отца.
  class Child
  {
    // Кто отец этого ребенка?
    public $father;
    // Создает нового ребенка (с указанием его отца).
    function __construct(Father $father) { $this->father = $father; }
    function __destruct() { echo "Child умер.<br />"; }  
  }
  // Жил да был Авраам.
  $father = new Father;
  // Авраам родил Исаака.
  $child = new Child($father);
  // ...и прописал его на своей жилплощади.
  $father->children[] = $child;
  echo "Пока что все живы... Убиваем всех.<br />";
  // Прошло время, и все умерли.
  $father = $child = null;
  echo "Все умерли, конец программы.<br />";
  // Но программа говорит, что остались зомби!
?>