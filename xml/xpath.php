<?php ## Новый список атрибутов
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  foreach($rss->xpath('//item[1]/enclosure/@*') as $attr) {
    echo "{$attr}<br />";
  }