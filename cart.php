<?php
// cart.php - Shopping Cart Page
// Displays the cart layout and order summary framework
// Placeholder values are used in Week 2; database integration will follow in later weeks

// --- Placeholder cart data ---
// This represents what a cart query would return from the database
$cart_items = array(
    array(
        'product_id'    => 1,
        'product_name'  => 'Wireless Mouse',
        'quantity'      => 1,
        'product_cost'  => 19.99,
        'product_total' => 19.99
    ),
    array(
        'product_id'    => 2,
        'product_name'  => 'USB Keyboard',
        'quantity'      => 1,
        'product_cost'  => 29.99,
        'product_total' => 29.99
    )
);

// --- Order summary placeholder values ---
$total_items   = 2;
$subtotal      = 49.98;
$tax_rate      = 0.07;                           // 7% tax rate
$tax           = $subtotal * $tax_rate;          // calculated tax amount
$shipping      = 5.99;                           // flat rate shipping
$order_total   = $subtotal + $tax + $shipping;   // final order total
?>

<?php include 'includes/header.php'; ?>

<h2>Shopping Cart</h2>

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
    <?php
    // --- Display each cart item ---
    foreach ($cart_items as $item) {
    ?>
        <tr>
            <td><?php echo $item['product_id']; ?></td>
            <td><?php echo $item['product_name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>$<?php echo number_format($item['product_cost'], 2); ?></td>
            <td>$<?php echo number_format($item['product_total'], 2); ?></td>
        </tr>
    <?php } ?>
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
            <td>Tax (7%):</td>
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

<!-- Cart action buttons - functionality will be added in a later week -->
<div class="cart-actions">
    <button class="btn-action"><a href="catalog.php" style="color:#fff; text-decoration:none;">Continue Shopping</a></button>
    <button class="btn-add">Check Out</button>
    <button class="btn-remove">Clear Cart</button>
</div>

<?php include 'includes/footer.php'; ?>
