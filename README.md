# test-productify (Laravel Product Management with Stripe Integration + Cashier)
This project is a simple Laravel application that allows users to manage a list of products and view detailed product summaries. It also integrates Stripe using Laravel Cashier for payment processing.

## Getting Started
Follow the instructions below to get the Laravel application up and running on your local machine.

### Prerequisites
- PHP 8.1 or higher
- Composer version 2.x
- MySQL or any other supported database

### Installation

1. Clone the repository to your local machine:
eg : git clone https://github.com/your_username/your_project.git
2. Install the necessary dependencies using Composer: Composer install
3. Set up your .env file with your database details and Stripe API keys:
    eg:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    STRIPE_KEY=your_stripe_key
    STRIPE_SECRET=your_stripe_secret
 4. Generate a new application key: php artisan key:generate
 5. Run the database migrations to set up the required tables: php artisan migrate
 6. Seed the database with sample product data: php artisan db:seed
 7. Start the Laravel development server: php artisan serve
 8. Open your web browser and navigate to http://localhost:8000 to access the application.

### Features
Product list page
Product summary page with Stripe payment integration
Stripe credit card form using Laravel Cashier

### Built With
Laravel - The PHP framework for web artisans
MySQL - An open-source relational database management system
Stripe - A technology company that builds economic infrastructure for the internet

