-- SDC310L Online Store Database
-- Database: sdc310l_store
-- Week 3: PHP database connection and full cart functionality added

-- Create and select the database
CREATE DATABASE IF NOT EXISTS sdc310l_store;
USE sdc310l_store;

-- Create the products table
-- Stores all product information for the catalog.
-- quantity_in_cart tracks how many of each item the user has added to their cart.
CREATE TABLE IF NOT EXISTS products (
    product_id          INT AUTO_INCREMENT PRIMARY KEY,
    product_name        VARCHAR(100)    NOT NULL,
    product_description VARCHAR(255)    NOT NULL,
    product_cost        DECIMAL(10, 2)  NOT NULL,
    quantity_in_cart    INT             NOT NULL DEFAULT 0
);

-- Insert five sample products
INSERT INTO products (product_name, product_description, product_cost, quantity_in_cart) VALUES
    ('Wireless Mouse',   'Compact wireless mouse with USB receiver and long battery life',     19.99, 0),
    ('USB Keyboard',     'Full-size wired USB keyboard with quiet keys',                       29.99, 0),
    ('Monitor Stand',    'Adjustable aluminum monitor stand with storage shelf',               44.99, 0),
    ('Laptop Backpack',  'Water-resistant 15-inch laptop backpack with multiple compartments', 39.99, 0),
    ('HDMI Cable 6ft',   '6-foot HDMI 2.0 cable, supports 4K resolution',                      9.99, 0);

-- Create the application database user and grant access to this database
CREATE USER IF NOT EXISTS 'ecpi_user'@'localhost' IDENTIFIED BY 'Password1';
GRANT ALL PRIVILEGES ON sdc310l_store.* TO 'ecpi_user'@'localhost';
FLUSH PRIVILEGES;
