<?php ## Список атрибутов
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  foreach($rss->channel->item[0]->enclosure->attributes() as $name => $value) {
    echo "{$name} = {$value}<br />";
  }