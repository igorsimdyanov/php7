SET NAMES utf8;
DROP TABLE IF EXISTS comments;
CREATE TABLE comments (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nickname TINYTEXT NOT NULL,
  content TEXT NOT NULL,
  created_at DATETIME NOT NULL,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id)
);
