# Simple User Authentication System with PHP

This project is a simple user authentication system built with PHP, MySQL, and Bootstrap. It includes functionalities for user registration, login, and logout.

## Features

- User Registration
- User Login
- User Logout
- Password Hashing
- Session Management

## Prerequisites

- PHP 8.2 or higher
- MySQL 8.1 or higher
- Composer
- WAMP or any other local server environment

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/chakerncb/Simple-User-Authentication-System-With-PHP.git
    ```

2. Navigate to the project directory:

    ```bash
    cd Simple-User-Authentication-System-With-PHP
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

4. Create a `.env` file from the example file and configure your database settings:

    ```bash
    cp .env.example .env
    ```

5. Import the database schema:
    - Open your MySQL client and run the SQL script located at `database.sql`.

6. Start your local server and navigate to the project directory in your browser.

## Usage

- **Register**: Navigate to `register.php` to create a new account.
- **Login**: Navigate to `login.php` to log in with your credentials.
- **Dashboard**: After logging in, you will be redirected to `index.php`, which is the user dashboard.
- **Logout**: Click the logout button on the dashboard to end your session.

## File Structure

- `auth/`: Contains authentication scripts for login, logout, and registration.
- `config/`: Contains the database configuration file.
- `assets/`: Contains Bootstrap CSS and JS files.
- `index.php`: The user dashboard.
- `login.php`: The login page.
- `register.php`: The registration page.
- `database.sql`: The SQL script to set up the database schema.
- `.env.example`: Example environment configuration file.
