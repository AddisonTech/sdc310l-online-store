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
