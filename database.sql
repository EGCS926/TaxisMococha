CREATE DATABASE taxismococha;
USE taxismococha;

CREATE TABLE taxistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    zona VARCHAR(50) NOT NULL,
    disponible BOOLEAN DEFAULT TRUE
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO admin (usuario, password)
VALUES ('admin', MD5('1234'));