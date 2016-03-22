<?php ## Извлечение тэгов <enclosure>
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  foreach($rss->xpath('//enclosure') as $enclosure) {
    echo $enclosure['url'].'<br />';
  }
