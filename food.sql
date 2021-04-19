CREATE DATABASE food;

USE food;

CREATE TABLE users (
  name1 varchar(50) NOT NULL,
  email varchar(50) NOT NULL UNIQUE PRIMARY KEY,
  password1 varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO users (name1, email, password1) VALUES('ato', 'aaaa@gmail.com', '1234');
