CREATE DATABASE blogdb;

USE blogdb;

CREATE TABLE table_inexistante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO Utilisateur (nom, email) VALUES
('Ali', 'ali@gmail.com'),
('Sara', 'sara@gmail.com'),
('Omar', 'omar@gmail.com');