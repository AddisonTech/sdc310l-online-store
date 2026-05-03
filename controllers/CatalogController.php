<?php
// controllers/CatalogController.php
// Handles cart action requests from the catalog page, then loads
// the product list and passes it to the catalog view.

require_once __DIR__ . '/../models/ProductModel.php';

// Handle cart action POST (add, remove, increase, decrease)
if (isset($_POST['action'], $_POST['product_id'])) {
    update_cart($_POST['product_id'], $_POST['action']);
    header('Location: index.php');
    exit;
}

// Load all products for the view
$products = get_all_products();

require __DIR__ . '/../views/catalog_view.php';
?>
