CREATE TABLE news (
  news_id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  putdate DATETIME NOT NULL,
  PRIMARY KEY (news_id)
);
CREATE TABLE news_contents (
  content_id INT(11) NOT NULL AUTO_INCREMENT,
  content TEXT NOT NULL,
  news_id INT(11) NOT NULL,
  PRIMARY KEY (content_id)
);
