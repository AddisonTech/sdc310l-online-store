<?php include __DIR__ . '/../includes/header.php'; ?>

<h2>Product Catalog</h2>

<div class="product-list">

<?php foreach ($products as $product): ?>
    <div class="product-card">
        <h3><?php echo $product['product_name']; ?></h3>
        <p><strong>Product ID:</strong> <?php echo $product['product_id']; ?></p>
        <p><?php echo $product['product_description']; ?></p>
        <p class="product-cost">$<?php echo number_format($product['product_cost'], 2); ?></p>
        <p><strong>Quantity in Cart:</strong> <?php echo $product['quantity_in_cart']; ?></p>

        <div class="btn-row">
            <form method="POST" action="index.php">
                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                <button type="submit" name="action" value="add"      class="btn-add">Add to Cart</button>
                <button type="submit" name="action" value="remove"   class="btn-remove">Remove from Cart</button>
                <button type="submit" name="action" value="increase" class="btn-inc">Increase Quantity</button>
                <button type="submit" name="action" value="decrease" class="btn-dec">Decrease Quantity</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>

</div>

<p style="margin-top: 24px;"><a href="index.php?page=cart">View Shopping Cart &rarr;</a></p>

<?php include __DIR__ . '/../includes/footer.php'; ?>
