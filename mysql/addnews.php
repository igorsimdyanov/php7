<?php ## Добавление новостного сообщения в базу данных
  require_once("connect.php");

  try {
    // Проверяем, заполнены ли поля HTML-формы
    if (empty($_POST['name'])) exit('Не заполнено поле "Название"');
    if (empty($_POST['content'])) exit('Не заполнено поле "Содержимое"');

    // Добавляем новостное сообщение в таблицу news
    $query = "INSERT INTO news VALUES (NULL, :name, NOW())";
    $news = $pdo->prepare($query);
    $news->execute(['name' => $_POST['name']]);

    // Получаем только что сгенерированный идентификатор news_id
    $news_id = $pdo->lastInsertId();

    // Вставляем содержимое новостного сообщения в таблицу news_contents.
    // Формируем запросы
    $query = "INSERT INTO news_contents
              VALUES (NULL, :content, :news_id)";
    $news = $pdo->prepare($query);
    $news->execute(['content' => $_POST['content'], 'news_id' => $news_id]);

    // Осуществляем переадресацию на главную страницу
    header("Location: news.html");
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>
