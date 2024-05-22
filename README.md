# User Management Application

This project is a full-stack web application built with Laravel 8 and React.js. It allows users to register with their full name, email, and role, and provides a user list view.

## Features

- User registration with full name, email, and role.
- Role options: Author, Editor, Subscriber, Administrator.
- Display a list of registered users.

## Technologies Used

- Backend: Laravel 8
- Frontend: React 17
- Styling: Tailwind CSS

## Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and npm
- MySQL
- Docker (optional, for using Laravel Sail)

## Setup Instructions

### Backend Setup (Laravel)

1. **Clone the repository:**

    ```bash
    git clone https://github.com/mdshoaib126/eastvantage-test.git
    cd eastvantage-test
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Copy the example environment file and configure it:**

    ```bash
    cp .env.example .env
    ```

    - Update the `.env` file with your database credentials.

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Start the Laravel development server:**

    If using Laravel Sail (Docker):

    ```bash
    ./vendor/bin/sail up
    ```

    Without Docker:

    ```bash
    php artisan serve
    ```

### Frontend Setup (React)

1. **Navigate to the `frontend` directory:**

    ```bash
    cd frontend
    ```

2. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

3. **Start the React development server:**

    ```bash
    npm start
    ```

## Usage

- **User Registration:** Access the form at `http://localhost:3000` to register a user.
- **User List:** After registering, you will be redirected to the user list page at `http://localhost:3000/users` where you can view all registered users.

