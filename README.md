# Student_Project_Management_System

A web-based application developed to manage and organize student academic projects in a centralized repository. The system enables students to upload, browse, and search previous projects while helping faculty maintain project records efficiently.

---

##  Project Overview

The **Student Project Management System (SPMS)** is designed to simplify the storage, management, and retrieval of student academic projects. Instead of maintaining project reports manually, the system provides an online platform where students can upload their projects and browse projects submitted by previous batches.

The application promotes knowledge sharing, reduces duplication of project ideas, and helps students gain inspiration from existing projects.

---

## ✨ Features

*  Student Registration and Login
*  Secure User Authentication
*  Upload Student Projects
*  View Project Details
*  Search and Browse Projects
*  Centralized Project Repository
*  Admin Panel for Project Management
*  Organized Project Categories
*  Store Project Description and Documentation
*  User-Friendly Interface

---

## 🛠 Technologies Used

### Frontend

* HTML
* CSS
* PHP

### Backend

* PHP

### Database

* MySQL

### Development Environment

* XAMPP
* phpMyAdmin


##  Project Structure

```text
Student-Project-Management-System/
│── admin/
│── productimages/
│── login.php
│── register.php
│── upload.php
│── project.php
│── student.php
│── home.php
│── db.php
│── db_config.php
│── prj_mang_database.sql
│── logout.php
└── README.md
```

##  Installation

### 1. Clone the Repository


git clone https://github.com/your-username/student-project-management-system.git

### 2. Move Project

Copy the project folder into:

xampp/htdocs/

### 3. Start XAMPP

Start:
* Apache
* MySQL

### 4. Import Database

* Open phpMyAdmin
* Create a database (for example: `prj_mang_database`)
* Import

prj_mang_database.sql

### 5. Configure Database

Update database credentials in:

db.php
or
db_config.php

Example:

$host = "localhost";
$user = "root";
$password = "";
$database = "prj_mang_database";

### 6. Run the Project

Open your browser:

http://localhost/prj_mang_fixed/


##  Built by

**Rachana HB**

Bachelor of Computer Applications

Government Science College, Hassan

Academic Year: **2023–2024**


## 📄 License

This project is developed for educational purposes as part of the Bachelor of Computer Applications (BCA) curriculum.
