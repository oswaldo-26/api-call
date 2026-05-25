API CALL (with POSTMAN)

This project is built using the Laravel framework, which will be used for managing students. It will process incoming requests such as GET for getting profiles, POST for posting data, PUT/PATCH for updating data, and DELETE for deleting data.

Before running the project, make sure the following are installed:

- PHP
- Composer
- SQLite
- HERD or any local server
- Postman

---
Local Setup Instructions
### **Step 1: Clone the Repository and Navigate Inside**
- git clone https://github.com/oswaldo-26/api-call
- cd api-call

### **Step 2: Install Laravel Dependencies**
- composer install

### **Step 3: Configure the Environment File**
- cp .env.example .env

### **Step 4: Generate Application Key**
- php artisan key:generate

### **Step 5: Setup the SQLite Database#**
- touch database/database.sqlite
- Open your created .env file in a text editor and ensure your database connection is explicitly set to use SQLite
### **Step 6: Run Database Migrations**
- php artisan migrate
### **Step 7: Start the Laravel Server**
- php artisan serve
---
### Available HTTP Methods

| Method | Description |
|---|---|
| GET | Retrieve student data |
| POST | Add new student |
| PUT | Fully update student information |
| PATCH | Partially update student information |
| DELETE | Remove student data |
---
DEMO LINK: https://drive.google.com/file/d/14UOJFBdGOVRMvd-zZOiD7jcCNjQOJ8fO/view?usp=sharing
