CREATE DATABASE student_db;
USE student_db;

CREATE TABLE students_login(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) UNIQUE,
password VARCHAR(255)
);

CREATE TABLE students(
id INT AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(100),
district VARCHAR(50),
course VARCHAR(100),
nin VARCHAR(20),
username VARCHAR(50)
);
