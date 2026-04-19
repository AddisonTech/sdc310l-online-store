# SDC310L Online Store

A simplified online store built with PHP and MySQL for SDC310L.

## Project Description

This project is a basic online store with a product catalog and shopping cart. Customers can browse products, add items to their cart, and proceed to checkout. The project is built using plain PHP, HTML, CSS, and MySQL with no external frameworks.

## Week 2 Status

- Database schema and sample products are in place
- Catalog page displays all products with placeholder cart controls
- Cart page framework is in place with layout and order summary fields
- Full cart and checkout functionality will be added in later weeks

## File Structure

```
sdc310l-online-store/
├── index.php               Landing page, redirects to catalog
├── catalog.php             Product catalog page
├── cart.php                Shopping cart page
├── css/
│   └── style.css           Shared stylesheet
├── db/
│   └── store.sql           Database schema and sample data
├── includes/
│   ├── header.php          Shared page header and navigation
│   └── footer.php          Shared page footer
├── .gitignore
└── README.md
```

## Setup

1. Import `db/store.sql` into MySQL using phpMyAdmin or the MySQL command line
2. Place the project folder inside `C:\xampp\htdocs\`
3. Start Apache and MySQL in XAMPP
4. Open `http://localhost/sdc310l-online-store/` in a browser

## Course

SDC310L - Web Development with PHP
