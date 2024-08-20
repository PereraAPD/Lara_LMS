# Laravel Vite Project

## About

This project is a Laravel application designed for managing loan schemes under the Enterprise Sri Lanka Programme. It utilizes Vite for asset bundling and modern web technologies to create a seamless development experience.

## Features

-   **Fast Development**: Vite provides a fast development server with hot module replacement.
-   **Tailwind CSS**: Utilizes Tailwind CSS for utility-first styling.
-   **Alpine.js**: Lightweight JavaScript framework for adding interactivity.
-   **Autoprefixer**: Automatically adds vendor prefixes to CSS rules.
-   **Axios**: Promise-based HTTP client for making requests.

## Installation

1. **Clone the repository:**

    ```bash
    git clone <repository-url>
    cd <project-directory>
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Set up the environment file:**

    ```bash
    cp .env.example .env
    ```

5. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations (if applicable):**

    ```bash
    php artisan migrate
    ```

7. **Run the development server:**

    ```bash
    npm run dev
    ```

8. **Build for production:**

    ```bash
    npm run build
    ```

## Learning Resources

-   [Laravel Documentation](https://laravel.com/docs)
-   [Vite Documentation](https://vitejs.dev/guide/)
-   [Tailwind CSS Documentation](https://tailwindcss.com/docs)

## Codebase Overview

The codebase is a Laravel application designed for managing loan schemes under the Enterprise Sri Lanka Programme. It utilizes modern web technologies, including Vite for asset bundling, Tailwind CSS for styling, and Alpine.js for interactivity.

### Key Features

-   **Laravel Framework**: Provides a robust backend for handling requests, routing, and database interactions.
-   **Vite**: A build tool that offers a fast development server and optimized production builds.
-   **Tailwind CSS**: A utility-first CSS framework that allows for rapid UI development.
-   **Alpine.js**: A lightweight JavaScript framework for adding interactivity to the frontend.
-   **Database Management**: Supports various loan schemes with functionalities for user registration, loan applications, and reporting.

### Structure

-   **Controllers**: Handle the logic for different routes and user interactions.
-   **Models**: Represent the data structure for loans and users.
-   **Views**: Blade templates that render the HTML for the application.
-   **Routes**: Define the endpoints for the application, linking URLs to specific controllers.

Overall, the application aims to streamline the loan management process, making it easier for users to apply for loans and for administrators to manage them.

## Contributing

Contributions are welcome! Please read the [contribution guidelines](https://laravel.com/docs/contributions) for more information.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
