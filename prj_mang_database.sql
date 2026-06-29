-- Student Project Management System - Database Setup
-- Run this in phpMyAdmin or MySQL CLI

CREATE DATABASE IF NOT EXISTS prj_mang;
USE prj_mang;

-- Table: registration (student accounts)
CREATE TABLE IF NOT EXISTS registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    usn VARCHAR(50) NOT NULL UNIQUE,
    batch VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Table: fileupload (student project file submissions)
CREATE TABLE IF NOT EXISTS fileupload (
    id INT AUTO_INCREMENT PRIMARY KEY,
    concept VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description TEXT,
    gd VARCHAR(500),
    file VARCHAR(500),
    usn VARCHAR(50) NOT NULL
);
