<?php
// cart.php - Shopping Cart Page
// Reads cart data from the database, calculates order totals,
// and handles the checkout action.

include 'includes/db_connect.php';

// ------------------------------------------------------------
// CHECKOUT HANDLER
// When the user clicks Check Out, clear all cart quantities
// in the database and send them back to the catalog page.
// ------------------------------------------------------------
if (isset($_POST['action']) && $_POST['action'] === 'checkout') {
    // Reset every product's cart quantity to 0
    mysqli_query($conn, "UPDATE products SET quantity_in_cart = 0");

    // Return to the catalog after checkout
    header('Location: catalog.php');
    exit;
}

// ------------------------------------------------------------
// LOAD CART ITEMS FROM DATABASE
// Select only the products that have at least 1 item in the cart.
// Calculate each product's line total as we read the results.
// ------------------------------------------------------------
$query  = "SELECT * FROM products WHERE quantity_in_cart > 0";
$result = mysqli_query($conn, $query);

$cart_items  = array();   // holds one entry per product in the cart
$total_items = 0;         // running count of all units ordered
$subtotal    = 0.00;      // pre-tax dollar total

while ($row = mysqli_fetch_assoc($result)) {
    // Calculate the line total for this product
    $product_total = $row['product_cost'] * $row['quantity_in_cart'];

    // Build an array entry that matches the table columns
    $cart_items[] = array(
        'product_id'    => $row['product_id'],
        'product_name'  => $row['product_name'],
        'quantity'      => $row['quantity_in_cart'],
        'product_cost'  => $row['product_cost'],
        'product_total' => $product_total
    );

    $total_items += $row['quantity_in_cart'];
    $subtotal    += $product_total;
}

// ------------------------------------------------------------
// ORDER TOTAL CALCULATIONS
// Tax is 5% of the subtotal.
// Shipping and Handling is 10% of the pre-tax subtotal.
// Order Total is the sum of all three.
// ------------------------------------------------------------
$tax_rate    = 0.05;
$tax         = $subtotal * $tax_rate;
$shipping    = $subtotal * 0.10;
$order_total = $subtotal + $tax + $shipping;
?>

<?php include 'includes/header.php'; ?>

<h2>Shopping Cart</h2>

<?php if (empty($cart_items)): ?>
    <!-- Show a message when nothing has been added to the cart -->
    <p>Your cart is empty. <a href="catalog.php">Return to Catalog</a></p>

<?php else: ?>

    <!-- Cart items table -->
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity Ordered</th>
                <th>Product Cost</th>
                <th>Product Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart_items as $item): ?>
            <tr>
                <td><?php echo $item['product_id']; ?></td>
                <td><?php echo $item['product_name']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($item['product_cost'], 2); ?></td>
                <td>$<?php echo number_format($item['product_total'], 2); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Order summary section -->
    <div class="order-summary">
        <h3 style="margin-bottom: 12px;">Order Summary</h3>
        <table>
            <tr>
                <td>Total Items Ordered:</td>
                <td><?php echo $total_items; ?></td>
            </tr>
            <tr>
                <td>Subtotal:</td>
                <td>$<?php echo number_format($subtotal, 2); ?></td>
            </tr>
            <tr>
                <td>Tax (5%):</td>
                <td>$<?php echo number_format($tax, 2); ?></td>
            </tr>
            <tr>
                <td>Shipping &amp; Handling:</td>
                <td>$<?php echo number_format($shipping, 2); ?></td>
            </tr>
            <tr class="total-row">
                <td>Order Total:</td>
                <td>$<?php echo number_format($order_total, 2); ?></td>
            </tr>
        </table>
    </div>

<?php endif; ?>

<!-- Cart action buttons -->
<div class="cart-actions">
    <!-- Continue Shopping always shows -->
    <button class="btn-action">
        <a href="catalog.php" style="color:#fff; text-decoration:none;">Continue Shopping</a>
    </button>

    <?php if (!empty($cart_items)): ?>
    <!-- Check Out button submits a POST to clear the cart -->
    <form method="POST" style="display:inline;">
        <input type="hidden" name="action" value="checkout">
        <button type="submit" class="btn-add">Check Out</button>
    </form>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
