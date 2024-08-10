-- Create a new database if it doesn't exist
CREATE DATABASE IF NOT EXISTS languagedb;

-- Use the created database
USE languagedb;

-- Create the 'user' table
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
