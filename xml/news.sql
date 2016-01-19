SET NAMES utf8;
DROP TABLE IF EXISTS news;
CREATE TABLE news (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  content TEXT NOT NULL,
  media TEXT NULL,
  putdate DATETIME NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO news VALUES
(NULL, 'Вышел PHP 7.0.1', 'Команда разработчиков PHP сообщает о выходе версии PHP 7.0.1, в котором устранены ряд ошибок. Всем пользователям PHP 7.0 рекомендуется обновиться до этой версии.', '9765a78af8f6fcb2009c3440730d8311.jpg', '2015-12-17 15:30:00'),
(NULL, 'Вышел PHP 7.0.0', 'Команда разработчиков PHP сообщает о выходе версии PHP 7.0.0. Данный выпуск начинает новую серию PHP 7.', 'a8e8ee34f9a85116cb60417585129cfe.jpg', '2015-12-03 22:30:00'),
(NULL, 'Вышел PHP 5.6.16', 'Команда разработчиков PHP сообщает о выходе версии PHP 5.6.16, в котором устранены ряд ошибок. Всем пользователям PHP 5.6 рекомендуется обновиться до этой версии.', '66f5e2c68f2dd9cf2c2541d298013f3a.JPG', '2015-11-26 18:12:59');