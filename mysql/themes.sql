CREATE TABLE themes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  author TINYTEXT,
  id_author INT(11) DEFAULT NULL,
  hide ENUM('show','hide') NOT NULL DEFAULT 'show',
  putdate DATETIME DEFAULT NULL,
  forum_id INT(11) default NULL,
  PRIMARY KEY (id)
);