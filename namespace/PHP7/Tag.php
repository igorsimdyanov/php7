<?php ## Трейт Tag.
  namespace PHP7;

  trait Tag
  {
    public function tags()
    {
      // $query = "SELECT * FROM authors WHERE id IN(:ids)"
      echo "Tag::tags<br />";
    }
  }
?>