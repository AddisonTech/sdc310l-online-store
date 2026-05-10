# SDC310L Online Store

## Project Description

SDC310L Online Store is a PHP web application created for the SDC310L course project. The application simulates a simplified online store where users can browse a product catalog, add items to a shopping cart, adjust item quantities, remove products, and complete checkout. The project was developed in multiple phases across the course, beginning with planning and application structure, then moving into database support, MVC organization, testing, and final review.

The final version of the project uses PHP and MySQL with a simple MVC structure to separate the application into models, views, and controllers. This helped make the code easier to organize, maintain, and understand.

## Project Tasks

### Task 1: Create the project plan
- Define the project scope and required features
- Plan the weekly development phases
- Identify the catalog and shopping cart requirements
- Prepare the project documentation template

### Task 2: Build the database and application framework
- Create the project folder structure
- Create the initial PHP files for the application
- Create the SQL database file
- Add sample product data for the store
- Build the first catalog and cart page framework

### Task 3: Add database support
- Connect the application to the MySQL database
- Load product data from the database into the catalog page
- Add support for cart updates through PHP
- Implement add, remove, increase, and decrease quantity actions
- Display live cart totals and checkout behavior

### Task 4: Apply MVC architecture
- Reorganize the project into models, views, and controllers
- Move database logic into model files
- Move page display code into view files
- Move request handling into controller files
- Update routing through a front controller

### Task 5: Test and finalize the application
- Test catalog page loading
- Test shopping cart page loading
- Test add to cart behavior
- Test increase and decrease quantity behavior
- Test remove from cart behavior
- Test checkout behavior
- Test tax and shipping calculations
- Review the final application for submission

## Project Features

- Product catalog with at least five products
- Product information display including product ID, name, description, and cost
- Quantity tracking for items in the cart
- Add to cart functionality
- Remove from cart functionality
- Increase quantity functionality
- Decrease quantity functionality
- Quantity protection so values do not go below zero
- Shopping cart page with product totals
- Total items ordered display
- Tax calculation at 5 percent
- Shipping and handling calculation at 10 percent of the pretax total
- Checkout function that clears the cart
- MVC based project organization in the final version

## Project Skills Learned

- PHP web development
- MySQL database usage
- Database connection handling
- CRUD style operations in PHP
- MVC architecture for web applications
- Front controller routing
- Debugging and fixing application issues
- Testing web application functionality
- Git and GitHub version control
- Project documentation and technical writing

## Language Used

- **PHP** for application logic and page routing
- **HTML** for page structure
- **CSS** for styling and layout
- **SQL** for database creation and sample data

## Development Process Used

- **Phased development process** with weekly milestones
- **Incremental application building** from framework to database support to MVC refactor
- **Testing and revision** after each major phase
- **Version control with GitHub** for managing updates and submission phases

## Project Structure

```text
sdc310l-online-store/
├── controllers/
│   ├── CatalogController.php
│   └── CartController.php
├── models/
│   └── ProductModel.php
├── views/
│   ├── catalog_view.php
│   └── cart_view.php
├── includes/
│   ├── db_connect.php
│   ├── header.php
│   └── footer.php
├── css/
│   └── style.css
├── db/
│   └── store.sql
├── index.php
└── README.md

Database Information

The application uses a MySQL database named sdc310l_store.

The database includes a products table with fields for:

product_id
product_name
product_description
product_cost
quantity_in_cart

The SQL file for the project is stored in:

db/store.sql

How to Run the Project Locally
Requirements
XAMPP
Apache running
MySQL running
phpMyAdmin
Web browser
Setup Steps
Place the project folder inside the XAMPP htdocs directory.
Start Apache and MySQL in XAMPP.
Open phpMyAdmin.
Import the db/store.sql file to create the database and sample data.
Open the application in your browser using:

http://localhost:8080/sdc310l-online-store/

Testing Summary

The application was tested in the local XAMPP environment. Testing included:

Catalog page loading
Shopping cart page loading
Add to cart behavior
Increase quantity behavior
Decrease quantity behavior
Remove from cart behavior
Checkout behavior
Tax and shipping calculation checks
Navigation and routing after MVC refactor

Testing confirmed that the application met the core project requirements for the course project.

Notes
The project was developed for educational purposes as part of the SDC310L course.
The final version focuses on functionality, database support, MVC organization, and testing.
The design is intentionally simple to match the scope of the course assignment.
Link to Project

SDC310L Online Store Repository

Project Summary

The SDC310L Online Store project is a PHP web application that was developed in phases across the course. The final application allows users to view a product catalog, add products to the shopping cart, adjust quantities, remove products, and complete checkout. Product and cart data are supported through a MySQL database, and the final version of the application was reorganized into a simple MVC structure to improve readability and maintenance.

During development, the project moved through several stages. The first stage focused on planning. The second stage created the database structure and the basic application framework. The third stage added PHP database support so the catalog and cart could use live data. The fourth stage reorganized the project into models, views, and controllers. The final stage focused on testing, bug fixes, final review, and submission preparation.

This project helped strengthen skills in PHP development, MySQL database support, CRUD operations, MVC architecture, GitHub version control, debugging, and application testing. It also showed the importance of building software in clear phases and testing each phase before moving to the next.
