<?php ## Порядок перегрузки методов
  class Page {
    public function tags() {
      echo "Page::tags<br />";
    }
    public function authors() {
      echo "Page::authors<br />";
    }
  }

  trait Author {
    public function tags() {
      echo "Author::tags<br />";
    }
    public function authors() {
      echo "Author::authors<br />";
    }
  }

  class News extends Page
  {
    use Author;

    public function authors() {
      echo "News::authors<br />";
    }
  }

  $news = new News();
  $news->authors(); // News::authors
  $news->tags();    // Author::tags
?>