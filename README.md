# SDC310L Online Store

A simplified online store built with PHP and MySQL for SDC310L.

## Project Description

This project is a basic online store with a product catalog and shopping cart. Customers can browse products, add items to their cart, and proceed to checkout. The project is built using plain PHP, HTML, CSS, and MySQL with no external frameworks.

## Week 3 Status

- PHP database connection added via `includes/db_connect.php`
- Catalog page now loads products directly from the MySQL database
- Cart buttons are fully functional: Add to Cart, Remove from Cart, Increase Quantity, Decrease Quantity
- Cart page reads live cart data from the database and displays all order totals
- Order summary calculates subtotal, 5% tax, 10% shipping and handling, and order total
- Checkout clears the cart and returns the user to the catalog

## File Structure

```
sdc310l-online-store/
├── index.php               Landing page, redirects to catalog
├── catalog.php             Product catalog page with live database data and cart controls
├── cart.php                Shopping cart page with live totals and checkout
├── css/
│   └── style.css           Shared stylesheet
├── db/
│   └── store.sql           Database schema, sample data, and user setup
├── includes/
│   ├── db_connect.php      Database connection (added Week 3)
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
