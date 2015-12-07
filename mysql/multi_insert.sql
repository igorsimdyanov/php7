CREATE TABLE catalogs (
  catalog_id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  PRIMARY KEY (catalog_id)
);
INSERT INTO catalogs VALUES (NULL, 'Процессоры'),
(NULL, 'Материнские платы'),
(NULL, 'Видеоадаптеры'),
(NULL, 'Жесткие диски'),
(NULL, 'Оперативная память');