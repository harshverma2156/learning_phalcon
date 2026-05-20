Phalcon CRUD Application with DataTables

This project is a complete CRUD (Create, Read, Update, Delete) application built using the Phalcon PHP Framework and MySQL. The main purpose of this project is to learn how MVC architecture works in a real application and understand how data flows between controllers, models, views, and the database.

The application allows users to:
- Add new users
- View all users
- Edit existing users
- Delete users

The project also includes DataTables integration, which provides:
- Search functionality
- Pagination
- Column sorting
- Export to PDF, Excel, CSV
- Print functionality
- Fixed columns
- State saving

---

Technologies Used

- PHP
- Phalcon Framework
- MySQL
- jQuery
- DataTables
- HTML
- CSS

---

User Fields

The application stores the following user details:

- Name
- Email
- Number
- City
- State
- Country
- Pincode

---

Project Structure

```bash
learning_phalcon/
│
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   └── Views/
│
├── public/
│   ├── index.php
│   └── .htaccess
│
└── .htaccess
```

---

How to Run the Project

Step 1 — Clone or Download the Project

Clone the repository:

```bash
git clone <repository-url>
```

Or download the ZIP file and extract it.

---

Step 2 — Move Project to XAMPP

Move the project folder inside:

```bash
C:\xampp\htdocs\
```

---

Step 3 — Start Apache and MySQL

Open XAMPP Control Panel and start:
- Apache
- MySQL

---

Database Setup

Step 1 — Open phpMyAdmin

Open:

```bash
http://localhost/phpmyadmin
```

---

Step 2 — Create Database

Create a database named:

```bash
learning_phalcon
```

---

Step 3 — Create Users Table

Run the following SQL query:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    number VARCHAR(20),
    city VARCHAR(100),
    state VARCHAR(100),
    country VARCHAR(100),
    pincode VARCHAR(20)
);
```

---

Configure Database

Open:

```bash
app/Config/config.php
```

Update your database credentials:

```php
return [

    'database' => [

        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'learning_phalcon',

    ]

];
```

---

Run the Application

Open browser and visit:

```bash
http://localhost/learning_phalcon/public/users
```

---

Features Implemented

CRUD Operations
- Create User
- Read Users
- Update User
- Delete User

DataTables Features
- Search
- Pagination
- Sorting
- Export Buttons
- Fixed Columns
- State Save

Validation
- Required field validation
- Email validation

---

What I Learned From This Project

While building this project, I learned:
- MVC Architecture
- Routing in Phalcon
- Controllers and Actions
- Models and ORM
- Views and Rendering
- CRUD Operations
- Form Handling
- DataTables Integration
- Validation
- Database Connectivity
- Application Flow

---

Future Improvements

Some features that can be added in future:
- Authentication System
- AJAX CRUD
- Flash Messages
- Bootstrap UI
- Image Upload
- API Integration
- Role-Based Access Control

---

Author: Harsh Verma

---

Note

This project was created for learning and practice purposes while learning the Phalcon PHP Framework.