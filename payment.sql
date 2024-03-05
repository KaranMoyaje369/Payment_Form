-- Create database if not exists
CREATE DATABASE IF NOT EXISTS customer-payment-form;

-- Switch to your database
USE customer-payment-form;

-- Create table for storing payment information
CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    dob VARCHAR(10) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
