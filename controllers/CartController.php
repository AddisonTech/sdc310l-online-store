<?php
// controllers/CartController.php
// Handles checkout requests, calculates order totals,
// and passes cart data to the cart view.

require_once __DIR__ . '/../models/ProductModel.php';

// Handle checkout POST
if (isset($_POST['action']) && $_POST['action'] === 'checkout') {
    clear_cart();
    header('Location: index.php');
    exit;
}

// Load cart data and calculate order totals
$cart_data   = get_cart_data();
$cart_items  = $cart_data['items'];
$total_items = $cart_data['total_items'];
$subtotal    = $cart_data['subtotal'];

$tax      = $subtotal * 0.05;       // 5% tax
$shipping = $subtotal * 0.10;       // 10% shipping based on pretax total
$order_total = $subtotal + $tax + $shipping;

require __DIR__ . '/../views/cart_view.php';
?>
