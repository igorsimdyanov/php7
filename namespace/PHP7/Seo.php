<?php ## Трейт Seo.
  namespace PHP7;

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
?>