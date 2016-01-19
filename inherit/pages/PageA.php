<?php ## Абстрактный класс страницы
  abstract class Page
  {
    // Любая страница имеет заголовок
    protected $title;
    // И содержимое
    protected $content;
    // Конструктор класса
    public function __construct($title = '', $content = '')
    {
      $this->title = $title;
      $this->content = $content;
    }
    // Получение заголовка страницы
    public function title()
    {
      return $this->title;
    }
    // Получение содержимого страницы
    public function content()
    {
      return $this->content;
    }
    // Формирование HTML-представления страницы
    public function render()
    {
      echo "<h1>".htmlspecialchars($this->title())."</h1>";
      echo "</p>".nl2br(htmlspecialchars($this->content()))."</p>";
    }
  }
?>