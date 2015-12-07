CREATE TABLE forums (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  rule TEXT,
  logo TINYTEXT,
  pos INT(11) DEFAULT NULL,
  hide ENUM('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (id)
);