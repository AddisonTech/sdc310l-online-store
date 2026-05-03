<?php include __DIR__ . '/../includes/header.php'; ?>

<h2>Shopping Cart</h2>

<?php if (empty($cart_items)): ?>
    <p>Your cart is empty. <a href="index.php">Return to Catalog</a></p>

<?php else: ?>

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

<div class="cart-actions">
    <button class="btn-action">
        <a href="index.php" style="color:#fff; text-decoration:none;">Continue Shopping</a>
    </button>

    <?php if (!empty($cart_items)): ?>
    <form method="POST" action="index.php?page=cart" style="display:inline;">
        <input type="hidden" name="action" value="checkout">
        <button type="submit" class="btn-add">Check Out</button>
    </form>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
