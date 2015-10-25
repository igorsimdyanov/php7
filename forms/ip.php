<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Вывод IP-адреса и браузера пользователя</title>
</head>
<body>
  Ваш IP-адрес: <?= $_SERVER['REMOTE_ADDR'] ?><br />
  Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?>
</body>
</html>