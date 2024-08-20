# Laravel Vite Project

## About

This project is a Laravel application that utilizes Vite for asset bundling and development. It combines the power of Laravel with modern frontend tooling to create a seamless development experience.

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

## Contributing

Contributions are welcome! Please read the [contribution guidelines](https://laravel.com/docs/contributions) for more information.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
