<?php ## Создание фильтра ExtensionFilter.
  class ExtensionFilter extends FilterIterator
  {
    // Фильтруемое расширение
    private $ext;
    // Итератор DirectoryIterator
    private $it;

    // Конструктор
    public function __construct(DirectoryIterator $it, $ext)
    {
       parent::__construct($it);
       $this->it = $it;
       $this->ext = $ext;
    }

    // Метод, определяющий, удовлетворяет текущий элемент
    // фильтру или нет
    public function accept()
    {
      if (!$this->it->isDir()) {
         $ext = pathinfo($this->current(), PATHINFO_EXTENSION);
         return $ext != $this->ext;
      }
      return true;
    }
  }
?>