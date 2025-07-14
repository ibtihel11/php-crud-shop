# Simple PHP CRUD Application

A PHP web application developed using **Laragon** for local development.  
This project demonstrates basic PHP backend logic with a phpMyAdmin database connection.

## Project Structure

- `connect.php` — establishes database connection
- `index.php` — displays list of records
- `add.php` / `addpage.php` — pages to add new records
- `details.php` — view record details
- `edit.php` — form to update records
- `modify.php` — processes updates to the database
- `delete.php` — deletes records

## Technologies Used

- PHP
- MySQL
- Laragon (local dev server)
- HTML5, CSS3

## How to Run

1. Install [Laragon](https://laragon.org/)
2. Clone this repository into your `C:\laragon\www\` directory
3. Create a MySQL database (phpMyAdmin)
4. Import the `crud.sql` file 
5. Update database credentials in `connect.php`
6. Start Apache and MySQL in Laragon
7. Access the project at `http://localhost/crud/`

## Notes

This project was created for personal practice / coursework and reflects my early learning in PHP backend development.
