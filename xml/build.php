<?php ## Формирование XML-файла
  $content = '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"></rss>';
  $xml = new SimpleXMLElement($content);
  $rss = $xml->addChild('channel');

  $rss->addChild('title', 'PHP');
  $rss->addChild('link', 'http://exmaple.com/');
  $rss->addChild('description', 'Портал, посвященный PHP');
  $rss->addChild('language', 'ru');
  $rss->addChild('pubDate', date('r'));

  // Установка соединения с базой данных
  require_once("connect.php");

  try {
    $query = "SELECT * 
              FROM news
              ORDER BY putdate DESC
              LIMIT 20";
    $itm = $pdo->query($query);

    while($news = $itm->fetch()) {
      $item = $rss->addChild('item');
      $item->addChild('title', $news['name']);
      $item->addChild('description', $news['content']);
      $item->addChild('link', "http://example.com/news/{$news['id']}");
      $item->addChild('guid', "news/{$news['id']}");
      $item->addChild('pubDate', date('r', strtotime($news['putdate'])));
      if(!empty($news['media'])) {
        $enclosure = $item->addChild('enclosure');
        $url = "http://example.com/images/{$news['id']}/{$news['media']}";
        $enclosure->addAttribute('url', $url);
        $enclosure->addAttribute('type', 'image/jpeg');
      }
    }
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }

  $xml->asXML('build.xml');
