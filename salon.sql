CREATE DATABASE salon;

USE DATABASE salon;

CREATE TABLE servicios(
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(60) NOT NULL, 
    precio decimal(6,2) NOT NULL, 
    PRIMARY KEY(id) 
);