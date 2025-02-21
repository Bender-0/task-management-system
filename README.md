# Task Management System

A simple task management system built with Laravel. This system allows users to manage projects, categories, and tasks through a RESTful API. It also includes filtering and pagination features.

---

## Features

- **Projects**:
  - Create a new project.
  - List all projects with optional filtering by due date.
- **Categories**:
  - Create a new category.
  - List all categories.
- **Tasks**:
  - Create a new task.
  - List all tasks with optional filtering by category and status.
  - Mark tasks as completed.

---

## Technologies Used

- **Backend**: Laravel 11
- **Database**: SQLite
- **API Testing**: Postman

---

## Requirements

- PHP >= 8.2
- Composer
- SQLite
- Laravel CLI

---

## Installation

Follow these steps to set up the project locally:

 ## Clone the repository
   ```bash
   git clone https://github.com/Bender-0/task-managment-system.git
   cd task-managment-system
   ```

 ## Install dependencies
   ```bash
   composer install
   ```
 ## Set Up the Environment
   Copy the .env.example file to .env:
   ```bash
   cp .env.example .env
   ```

 ## Generate an Application Key
   ```bash
   php artisan key:generate
   ```
 ## Run Migrations and Seed the Database
   ```bash
   php artisan migrate --seed
   ```
 ## Start the Development Server
   ```bash
   php artisan serve
   ```
### API Endpoints
   [![Run in Postman](https://run.pstmn.io/button.svg)](https://www.postman.com/benderrr/workspace/task-managemnet-system/collection/30601653-861ac566-210e-4d7f-bb52-f8bb02582ce2?action=share&creator=30601653)
