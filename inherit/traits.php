<?php ## Использование трейтов
  trait Seo
  {
    private $keyword;
    private $description;
    private $ogs;
    public function keywords()
    {
      // $query = "SELECT keywords FROM seo WHERE id = :id LIMIT 1"
      echo "Seo::keywords<br />";
    }
    public function description()
    {
      // $query = "SELECT description FROM seo WHERE id = :id LIMIT 1"
      echo "Seo::description<br />";
    }
    public function ogs()
    {
      // $query = "SELECT ogs FROM seo WHERE id = :id LIMIT 1"
      echo "Seo::ogs<br />";
    }
  }

  trait Tag
  {
    public function tags()
    {
      // $query = "SELECT * FROM authors WHERE id IN(:ids)"
      echo "Tag::tags<br />";
    }
  }

  class News
  {
    // Новости снабжаются SEO-информацией и списком авторов
    use Seo, Tag;
    private $id;
  }

  $news = new News();
  $news->keywords();
  $news->tags();
?>