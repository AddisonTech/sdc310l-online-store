# SDC310L Online Store

A PHP and MySQL online store built for SDC310L.

## Project Description

This project is a basic online store with a product catalog and shopping cart. Customers can browse products, add items to their cart, and proceed to checkout. Built using plain PHP, HTML, CSS, and MySQL with no external frameworks.

## Week 4 Changes

- Refactored to MVC architecture
- Models handle all database queries (`models/ProductModel.php`)
- Controllers handle routing and request processing
- Views handle page rendering and HTML output
- `index.php` acts as a simple front controller that routes to catalog or cart

## File Structure

```
sdc310l-online-store/
├── index.php                           Front controller, routes to catalog or cart
├── controllers/
│   ├── CatalogController.php           Handles cart action requests and loads product list
│   └── CartController.php             Handles checkout and calculates order totals
├── models/
│   └── ProductModel.php               Database queries for products and cart
├── views/
│   ├── catalog_view.php               Product catalog HTML
│   └── cart_view.php                  Shopping cart HTML
├── includes/
│   ├── db_connect.php                 Database connection
│   ├── header.php                     Shared page header and navigation
│   └── footer.php                     Shared page footer
├── css/
│   └── style.css                      Shared stylesheet
├── db/
│   └── store.sql                      Database schema and sample data
├── .gitignore
└── README.md
```

## Setup

1. Import `db/store.sql` into MySQL using phpMyAdmin or the MySQL command line.
2. Place the project folder inside `C:\xampp\htdocs\`.
3. Start Apache and MySQL in XAMPP.
4. Open `http://localhost/sdc310l-online-store/` in a browser.

## Features

- Browse products in the catalog
- Add items to cart, remove, increase, or decrease quantity
- Quantity cannot go below zero
- Cart totals: 5% tax and 10% shipping and handling on the pretax subtotal
- Checkout clears the cart and returns to the catalog

## Course

SDC310L - Web Development with PHP
