CREATE DATABASE site;

USE site;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    password CHAR(40) NOT NULL
);

INSERT INTO usuarios (login, password) VALUES ('igris', SHA1('pacman'));
INSERT INTO usuarios (login, password) VALUES ('beru', SHA1('256:'));
