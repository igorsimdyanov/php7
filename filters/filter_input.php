<?php
  $value = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $result = filter_input(
    INPUT_POST,
    'search',
    FILTER_CALLBACK,
    [
      'options' => function ($value) {
                    // Фильтруем слова меньше 3-х символов
                    $value = preg_replace_callback(
                      "/\b([^\s]+?)\b/u",
                      function($match) {
                        if(mb_strlen($match[1]) > 3)
                          return $match[1];
                        else
                          return '';
                      },
                      $value);
                    // Удаляем тэги
                    return strip_tags($value);
                  }
    ]
  );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Фильтрация пользовательского ввода</title>
  <meta charset='utf-8'>
</head>
<body>
  <form method="POST">
    <input type="text" name="search" value="<?= $value?>"><br />
    <input type="submit" value="Фильтровать">
  </form>
  <?= $result; ?>
</body>
</html>