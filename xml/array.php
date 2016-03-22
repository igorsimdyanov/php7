<?php ## Коллекция тэгов
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  foreach($rss->channel->item as $item) {
    echo date("Y.m.d H:i", strtotime($item->pubDate))." ";
    echo $item->title."<br />";
  }
