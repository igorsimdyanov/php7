<?php ## Чтение XML-файла
  $content = file_get_contents('rss.xml');
  $rss = new SimpleXMLElement($content);
  echo $rss->channel->title."<br />"; // PHP
  echo $rss->channel->description."<br />"; // Портал, посвященный PHP
