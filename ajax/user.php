<?php ## Извлечение информации о пользователе
  // Устанавливаем соединение с базой данных
  require_once("connect.php");

  try {
    // Запрашиваем данные пользователя
    $query = "SELECT * FROM users
              WHERE id = :id";
    $usr = $pdo->prepare($query);
    $usr->execute(['id' => $_GET['id']]);
    $user = $usr->fetch();
    // Обрабатываем данные перед выводом
    $user['name']       = htmlspecialchars($user['name']);
    $user['email']      = htmlspecialchars($user['email']);
    $user['first_name'] = htmlspecialchars($user['first_name']);
    $user['last_name']  = htmlspecialchars($user['last_name']);
    // Формируем структуру ответа
    echo "<p>".
         "<span class='p'>Никнейм: </span>".
         "<span class='r'>{$user['name']}</span>".
         "</p>";
    echo "<p>".
         "<span class='p'>Email: </span>".
         "<span class='r'>{$user['email']}</span>".
         "</p>";
    echo "<p>".
         "<span class='p'>Имя: </span>".
         "<span class='r'>{$user['first_name']}</span>".
         "</p>";
    echo "<p>".
         "<span class='p'>Фамилия: </span>".
         "<span class='r'>{$user['last_name']}</span>".
         "</p>";
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
