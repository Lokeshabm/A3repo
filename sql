CREATE DATABASE kishkinda_university;

USE kishkinda_university;

CREATE TABLE applications (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(15),
  dob DATE,
  course VARCHAR(50),
  address TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);