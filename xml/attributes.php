<?php ## Доступ к атрибутам тэгов
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  foreach($rss->channel->item as $item) {
    echo $item->enclosure['url']."<br />";
  }
