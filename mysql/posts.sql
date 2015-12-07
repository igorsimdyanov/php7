CREATE TABLE posts (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  url TEXT,
  file TINYTEXT,
  author TINYTEXT,
  author_id INT(11) DEFAULT NULL,
  hide ENUM('show','hide') NOT NULL DEFAULT 'show',
  putdate DATETIME DEFAULT NULL,
  parent_post INT(11) DEFAULT NULL,
  theme_id INT(11) DEFAULT NULL,
  PRIMARY KEY (id)
);