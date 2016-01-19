<?php ## Фильтрация URL-адреса.
  $url = 'params=Привет мир!';
  echo filter_var($url, FILTER_SANITIZE_ENCODED);
  // params%3D%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82%20%D0%BC%D0%B8%D1%80%21
?>