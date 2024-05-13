CREATE DATABASE IF NOT EXISTS student_info;
use student_info;
CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    cgpa DECIMAL(3,2)
);
INSERT INTO students (id, name, cgpa ) VALUES (2202132, 'nour', 3.2);
INSERT INTO students (id, name, cgpa) VALUES (2202139, 'arwa', 3.2);
INSERT INTO students (id, name, cgpa) VALUES (2202144, 'lojain', 3.2);
INSERT INTO students (id, name, cgpa) VALUES (2203179, 'esraa', 3.2);
INSERT INTO students (id, name, cgpa) VALUES (2203184, 'sara', 3.2);
