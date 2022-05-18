CREATE DATABASE university;

USE university;

CREATE TABLE student (
    student_id INT AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(255) NOT NULL, 
    surname VARCHAR(255) NOT NULL,
    age INTEGER NOT NULL,
    group_id INT NOT NULL,
    FOREIGN KEY (group_id) REFERENCES `group`(group_id)
);

CREATE TABLE `group` (
    group_id INT AUTO_INCREMENT PRIMARY KEY, 
    group_name VARCHAR(255) NOT NULL,
    faculty_id INT NOT NULL,
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id)
);

CREATE TABLE faculty (
    faculty_id INT AUTO_INCREMENT PRIMARY KEY, 
    faculty_name VARCHAR(255) NOT NULL
);


                                                               

