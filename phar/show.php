<?php
  // Фильтруем данные
  if(isset($_GET['image'])) {
    $_GET['image'] = filter_var(
      $_GET['image'],
      FILTER_CALLBACK,
      [
        'options' => function ($value) {
                      return preg_replace('/[^_\.\w\d]+/', '', $value);
                    }
      ]
    );
    if(file_exists($_GET['image'])) {
      // Выгружаем файл
      header('Content-Type: image/jpeg');
      header("Content-Length: " . filesize($_GET['image']));
      readfile($_GET['image']);
      exit();
    }
  }
  // Файл не обнаружен
  header("HTTP/1.0 404 Not Found");
