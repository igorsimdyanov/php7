CREATE TABLE authors (
   id INT(11) NOT NULL AUTO_INCREMENT,
   name TINYTEXT,
   passw TINYTEXT,
   email TINYTEXT,
   url TEXT,
   iсq TINYTEXT,
   about TEXT,
   photo TINYTEXT,
   putdate DATETIME DEFAULT NULL,
   last_time DATETIME DEFAULT NULL,
   themes INT(10) DEFAULT NULL,
   statususer ENUM('user','moderator','admin') NOT NULL default 'user',
   PRIMARY KEY (id)
);