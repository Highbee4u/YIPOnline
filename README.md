# YIPOnline User Registration System

This project is a user registration system built with PHP, using OOP principles and the Smarty template engine.

## Prerequisites

Before you begin, ensure you have met the following requirements:
* You have installed PHP 7.4 or later
* You have a MySQL database server
* You have installed Composer
* You have a web server like Apache or Nginx

## Setting up the project

Follow these steps to get your development environment set up:

1. Clone the repository

    https://github.com/Highbee4u/YIPOnline.git
    cd YIPOnline

2. Install dependencies

    composer install

3. Set up the database
    - Create a new MySQL database for the project
    - Import the SQL file located in the `SQL` folder:
    ```
    mysql -u your_username -p your_database_name < SQL/query.sql
    ```
    - Update the database connection details in `src/Database.php`

## Running the project

After setting up, you should be able to access the project by navigating to its URL in your web browser. You should see a registration form where you can create new user accounts.

## Troubleshooting

If you encounter any issues:
1. Check that all dependencies are installed correctly
2. Ensure your database connection details are correct
3. Verify that your web server is configured correctly and has the necessary permissions
4. Check the PHP error logs for any error messages

## License

[MIT](https://choosealicense.com/licenses/mit/)