<?php
// catalog.php - Product Catalog Page
// Displays all available products and provides cart control buttons

// --- Sample product data ---
// In a later week this will be replaced with a database query.
// Each product matches the columns in the products table in db/store.sql.
$products = array(
    array(
        'product_id'          => 1,
        'product_name'        => 'Wireless Mouse',
        'product_description' => 'Compact wireless mouse with USB receiver and long battery life',
        'product_cost'        => 19.99,
        'quantity_in_cart'    => 0
    ),
    array(
        'product_id'          => 2,
        'product_name'        => 'USB Keyboard',
        'product_description' => 'Full-size wired USB keyboard with quiet keys',
        'product_cost'        => 29.99,
        'quantity_in_cart'    => 0
    ),
    array(
        'product_id'          => 3,
        'product_name'        => 'Monitor Stand',
        'product_description' => 'Adjustable aluminum monitor stand with storage shelf',
        'product_cost'        => 44.99,
        'quantity_in_cart'    => 0
    ),
    array(
        'product_id'          => 4,
        'product_name'        => 'Laptop Backpack',
        'product_description' => 'Water-resistant 15-inch laptop backpack with multiple compartments',
        'product_cost'        => 39.99,
        'quantity_in_cart'    => 0
    ),
    array(
        'product_id'          => 5,
        'product_name'        => 'HDMI Cable 6ft',
        'product_description' => '6-foot HDMI 2.0 cable, supports 4K resolution',
        'product_cost'        =>  9.99,
        'quantity_in_cart'    => 0
    )
);
?>

<?php include 'includes/header.php'; ?>

<h2>Product Catalog</h2>

<div class="product-list">

<?php
// --- Display each product ---
// Loop through the products array and output a card for each one
foreach ($products as $product) {
?>
    <div class="product-card">
        <h3><?php echo $product['product_name']; ?></h3>
        <p><strong>Product ID:</strong> <?php echo $product['product_id']; ?></p>
        <p><?php echo $product['product_description']; ?></p>
        <p class="product-cost">$<?php echo number_format($product['product_cost'], 2); ?></p>
        <p><strong>Quantity in Cart:</strong> <?php echo $product['quantity_in_cart']; ?></p>

        <!-- Cart control buttons - functionality will be added in a later week -->
        <div class="btn-row">
            <button class="btn-add">Add to Cart</button>
            <button class="btn-remove">Remove from Cart</button>
            <button class="btn-inc">Increase Quantity</button>
            <button class="btn-dec">Decrease Quantity</button>
        </div>
    </div>
<?php } ?>

</div>

<p style="margin-top: 24px;"><a href="cart.php">View Shopping Cart &rarr;</a></p>

<?php include 'includes/footer.php'; ?>
