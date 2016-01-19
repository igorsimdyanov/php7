SET NAMES utf8;
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT NOT NULL,
  pass TINYTEXT NOT NULL,
  email TINYTEXT NOT NULL,
  first_name TINYTEXT NOT NULL,
  last_name TINYTEXT NOT NULL,
  created_at DATETIME NOT NULL,
  is_block TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
);

INSERT INTO users VALUES
(NULL, 'd.koterov', 'pass', 'dmitry.koterov@gmail.com',
 'Дмитрий', 'Котеров', 
 '2016-01-04 19:22:41', 0),
(NULL, 'i.simdyanov', 'pass', 'igorsimdyanov@gmail.com', 
 'Игорь', 'Симдянов',
 '2016-01-04 19:40:01', 0);