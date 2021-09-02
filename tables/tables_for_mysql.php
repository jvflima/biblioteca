<?php


$sql_students = 'CREATE TABLE students (id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(100) NOT NULL, 
        email VACHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        address VARCHAR(100) NOT NULL,
        telephone INT(50) NOT NULL,
        postal_code INT(50) NOT NULL)';


$sql_users = 'CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(100) NOT NULL, 
        email VACHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        address VARCHAR(100) NOT NULL,
        telephone INT(50) NOT NULL)';



$sql_books = 'CREATE TABLE books (id INT AUTO_INCREMENT PRIMARY KEY,
        id_student INT NOT NULL,
            FOREIGN KEY (id_student)
                REFERENCES student(id),
        title VARCHAR(100) NOT NULL,
        author VARCHAR(100) NOT NULL,
        synopsis VARCHAR(800) NOT NULL,
        genre VARCHAR(50) NOT NULL,
        status BOOLEAN DEFAULT(0))';



$withdrawal_verifier = 'CREATE TABLE withdrawal (id INT AUTO_INCREMENT PRIMARY KEY,
        id_student NOT NULL,
            FOREIGN KEY (id_student)
                REFERENCES students(id),
        id_book INT NOT NULL,
            FOREIGN KEY (id_book)
                REFERENCES books(id),
        withdrawal_date DATE)';


$wait_line = 'CREATE TABLE wait_line (id INT AUTO_INCREMENT PRIMARY KEY,
        id_book INT NOT NULL,
            FOREIGN KEY (id_book)
                REFERENCES books(id),
        student_waiting INT NULL, 
            FOREIGN KEY (student_waiting)
                REFERENCES students(id))';

         
$table_students = 'INSERT INTO students('name', 'email', 'password', 'address', 'telephone', 'postal_code') 
        VALUES ($name, $email, $password, $address, $telephone, $postal_code)';

        
