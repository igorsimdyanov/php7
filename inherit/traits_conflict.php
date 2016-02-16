<?php ## Разрешение конфликтов
  trait Tag
  {
    public function tags()
    {
      echo "Tag::tags<br />";
    }
    public function authors()
    {
      echo "Tag::authors<br />";
    }
  }

  trait Author
  {
    public function tags()
    {
      echo "Author::tags<br />";
    }
    public function authors()
    {
      echo "Author::authors<br />";
    }
  }

  class News
  {
    use Author, Tag
    {
      Tag::tags insteadof Author;
      Author::authors insteadof Tag;
      Author::tags as list;
    }
  }

  $news = new News();
  $news->authors(); // Author::authors
  $news->tags();    // Tag::tags
  $news->list();    // Author::tags
?>