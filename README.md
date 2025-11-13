# Prime‑Care Pharmacy Management System

A comprehensive pharmacy management solution developed as a university project (Project 1) for managing a pharmacy’s operations — including inventory, sales, customers, administration, and reporting.

## Project Overview

This project aims to provide a fully functional pharmacy management system (PMS) tailored to the needs of a typical pharmacy. The system supports multiple user‑roles (admin, pharmacist, customer), manages medicines, tracks transactions, maintains inventory, and supports login/authentication.
The goal was to simulate real‑world pharmacy workflows while providing a clean, maintainable codebase.

## Features

Key features include:

* User authentication and role‑based access (Admin, Pharmacist, Customer)
* Medicine inventory management (add/update/delete medicines, track stock)
* Customer management (register customers, view history)
* Sales/transactions processing (record sales, update inventory)
* Reporting (stock levels, transaction history)
* Modular design: separate folders for admin, customer, pharmacist, common components
* Secure login via `.htaccess` and PHP sessions

## Technology Stack

* Front‑end: HTML, CSS, SCSS, JavaScript
* Back‑end: PHP
* Database: MySQL (or compatible)
* Web server: Apache (or another compatible server)
* Version Control: Git (hosted on GitHub)

## Architecture & Folder Structure

Example folder structure:

```
/login              – login module  
/admin              – admin‑role pages and logic  
/pharmacist         – pharmacist role pages  
/customer           – customer role pages  
/common             – shared components (header, footer, database connection)  
/database           – database schema / scripts  
.htaccess           – access control / rewrite rules  
```

Each module handles its specific user‑role functions, sharing common logic for database access and UI components.

## Installation & Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/Dilshan‑Wickramasinghe/Prime‑Care‑Pharmacy‑Management‑System.git  
   ```
2. Configure the database:

   * Create a MySQL database (e.g., `pharmacy_db`).
   * Run the SQL script(s) located in the `/database` folder to set up tables and seed initial data.
   * Update the database credentials in the common configuration file (e.g., `common/db_connect.php`).
3. Configure the web server:

   * Place the project in the Apache document root (or similar).
   * Ensure `.htaccess` is enabled for access control and rewrites.
   * Ensure PHP and required extensions are installed.
4. Access the application:

   * Open your browser and navigate to the project URL (e.g., `http://localhost/Prime‑Care`).
   * Log in using default credentials (if provided in seed data) or create an admin user.

## Usage

* As **Admin**: manage user accounts, view all sales and inventory reports, configure system settings.
* As **Pharmacist**: browse inventory, record sales, update stocks, view transaction history.
* As **Customer**: view available medicines, transaction history, personal details.
* Workflow: The pharmacist logs in → selects customer or registers new one → selects medicine(s) → processes sale → system updates stock and records transaction.
* Reports: View low‑stock alerts, overall sales over a period, per‑pharmacist performance (if implemented).

## Contributing

Contributions are welcome! If you’d like to improve the system, please follow these steps:

1. Fork the repository.
2. Create a new branch (`feature/your‑feature`).
3. Make your changes with clear commit messages.
4. Submit a pull request describing your changes.
5. Ensure you test new features and maintain code readability.

## License

This project is developed as an academic work and is currently **unlicensed** / for educational use only. If you wish to reuse or adapt the code, please contact the author for permission.

## Contact

Author: Dilshan Wickramasinghe
GitHub: [https://github.com/Dilshan‑Wickramasinghe](https://github.com/Dilshan‑Wickramasinghe)
Feel free to open an issue for bug reports or feature requests.

