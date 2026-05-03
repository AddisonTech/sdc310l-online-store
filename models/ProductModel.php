<?php
// models/ProductModel.php
// All database queries for the products table.

require_once __DIR__ . '/../includes/db_connect.php';

// Returns every row in the products table as an array
function get_all_products() {
    global $conn;
    $result   = mysqli_query($conn, "SELECT * FROM products");
    $products = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;
}

// Returns cart items (quantity_in_cart > 0), total units, and subtotal
function get_cart_data() {
    global $conn;
    $result      = mysqli_query($conn, "SELECT * FROM products WHERE quantity_in_cart > 0");
    $cart_items  = array();
    $total_items = 0;
    $subtotal    = 0.00;

    while ($row = mysqli_fetch_assoc($result)) {
        $line_total   = $row['product_cost'] * $row['quantity_in_cart'];
        $cart_items[] = array(
            'product_id'    => $row['product_id'],
            'product_name'  => $row['product_name'],
            'quantity'      => $row['quantity_in_cart'],
            'product_cost'  => $row['product_cost'],
            'product_total' => $line_total
        );
        $total_items += $row['quantity_in_cart'];
        $subtotal    += $line_total;
    }

    return array(
        'items'       => $cart_items,
        'total_items' => $total_items,
        'subtotal'    => $subtotal
    );
}

// Applies a single cart action (add, remove, increase, decrease) for a product
function update_cart($product_id, $action) {
    global $conn;
    $id = (int)$product_id;

    if ($action === 'add') {
        $r   = mysqli_query($conn, "SELECT quantity_in_cart FROM products WHERE product_id = $id");
        $row = mysqli_fetch_assoc($r);
        if ((int)$row['quantity_in_cart'] === 0) {
            mysqli_query($conn, "UPDATE products SET quantity_in_cart = 1 WHERE product_id = $id");
        }

    } elseif ($action === 'remove') {
        mysqli_query($conn, "UPDATE products SET quantity_in_cart = 0 WHERE product_id = $id");

    } elseif ($action === 'increase') {
        mysqli_query($conn, "UPDATE products SET quantity_in_cart = quantity_in_cart + 1 WHERE product_id = $id");

    } elseif ($action === 'decrease') {
        $r   = mysqli_query($conn, "SELECT quantity_in_cart FROM products WHERE product_id = $id");
        $row = mysqli_fetch_assoc($r);
        if ((int)$row['quantity_in_cart'] > 0) {
            mysqli_query($conn, "UPDATE products SET quantity_in_cart = quantity_in_cart - 1 WHERE product_id = $id");
        }
    }
}

// Clears all cart quantities (checkout)
function clear_cart() {
    global $conn;
    mysqli_query($conn, "UPDATE products SET quantity_in_cart = 0");
}
?>
