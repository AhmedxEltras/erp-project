-- Active: 1734951271669@@127.0.0.1@3306
DROP DATABASE erp_system;
CREATE DATABASE erp_system;
USE erp_system;

-- جدول العمليات المالية (transactions)
CREATE TABLE `transactions` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` ENUM('income', 'expense') NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `amount` DECIMAL(10, 2) NOT NULL,
  `date` DATE NOT NULL,
  `status` ENUM('paid', 'unpaid', 'partially_paid') NOT NULL
);

-- جدول الفواتير (invoices)
CREATE TABLE `invoices` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `invoice_number` VARCHAR(50) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `amount` DECIMAL(10, 2) NOT NULL,
  `status` ENUM('paid', 'unpaid', 'partially_paid') NOT NULL,
  `due_date` DATE NOT NULL
);
