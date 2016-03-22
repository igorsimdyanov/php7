<?php ## Количество элементов в коллекции
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  echo $rss->channel->item->count(); // 3
