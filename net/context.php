<?php ## Использование контекста потока.
  $opts = [
    'http' => [
      'method' => 'GET',
      'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:42.0)',
      'header' => 'Content-type: text/html; charset=UTF-8'
    ]
  ];

  echo file_get_contents(
    'http://php.net',
    false,
    stream_context_create($opts)
  );
?>