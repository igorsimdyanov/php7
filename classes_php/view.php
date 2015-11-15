<?php ## Использование метода bindTo()
  class View
  {
    protected $pages = [];
    protected $title = 'Контакты';
    protected $body = 'Содержимое страницы Контакты';

    public function addPage($page, $pageCallback)
    {
      $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
    }

    public function render($page)
    {
      $this->pages[$page]();

      $content = <<<HTML
<!DOCTYPE html>
<html lang='ru'>
<head>
<title>{$this->title()}</title>
<meta charset='utf-8'>
</head>
<body>
  <p>{$this->body()}</p>
</body>
</html>
HTML;
      echo $content;

    }

    public function title()
    {
      return htmlspecialchars($this->title);
    }

    public function body()
    {
      return nl2br(htmlspecialchars($this->title));
    }
  }

  $view = new View();
  $view->addPage('about', function() {
    $this->title = 'О нас';
    $this->body = 'Содержимое страницы О нас';
  });
  $view->render('about'); // О нас
?>