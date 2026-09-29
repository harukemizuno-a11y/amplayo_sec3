<div align="center">

# 📝 Task Manager

**A simple task management app with full CRUD and status tracking.**

![Course](https://img.shields.io/badge/BSIT-2nd%20Year-blue?style=for-the-badge)
![Database](https://img.shields.io/badge/Database-SQLite-003B57?style=for-the-badge\&logo=sqlite\&logoColor=white)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)

</div>

---

## 📖 About

**Task Manager** is a project built for **WST21**. It allows users to create, view, edit, delete, and track the progress of their tasks. All task data is stored in a **SQLite** database.

## ✨ Features

| Feature              | Description                                 |
| :------------------- | :------------------------------------------ |
| ➕ **Add Task**       | Create a new task                           |
| 📋 **View Tasks**    | See all your tasks in one place             |
| ✏️ **Edit Task**     | Update the details of an existing task      |
| 🗑️ **Delete Task**  | Remove a task you no longer need            |
| 🔄 **Update Status** | Mark tasks as pending, in progress, or done |

## 🛠️ Tech Stack

* **Language:** PHP
* **Framework:** Laravel
* **Database:** SQLite

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/harukemizuno-a11y/amplayo_sec3.git
```

### 2. Go Into the Project Folder

```bash
cd amplayo_sec3/task-manager
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Set Up the Environment File

```bash
cp .env.example .env
```

### 5. Generate the Application Key

```bash
php artisan key:generate
```

### 6. Run the Database Migrations

```bash
php artisan migrate
```

### 7. Start the Development Server

```bash
php artisan serve
```

Then open the local URL provided by Laravel in your browser.

## 📁 Project Structure

```text
amplayo_sec3/
├── task-manager/       # Main Laravel application
├── screenshots/        # Project screenshots
└── README.md           # Project documentation
```

## 🖼️ Screenshots

### 🏠 Home

![Home](screenshots/01-home.png)

### ➕ Add Task

![Add Task](screenshots/02-add-task.png)

### 📋 Task Added

![Task Added](screenshots/03-task-added.png)

### ✏️ Edit Task

![Edit Task](screenshots/04-edit-task.png)

### 🔄 Task Updated

![Task Updated](screenshots/05-task-updated.png)

### 🗑️ Delete Confirmation

![Delete Confirmation](screenshots/06-delete-confirm.png)

### ✅ Task Deleted

![Task Deleted](screenshots/07-task-deleted.png)

## 👤 Author

|                   |                    |
| :---------------- | :----------------- |
| **Name**          | Jann Brixx Amplayo |
| **Course & Year** | BSIT 2nd Year      |
| **Project Code**  | `WST21-PM-2026-SF` |

---

<div align="center">

Made with ❤️ for WST21

</div>
