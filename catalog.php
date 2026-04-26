<?php
// catalog.php - Product Catalog Page
// Loads all products from the database and handles cart actions.
// Cart quantities are stored in the quantity_in_cart column of the products table.

include 'includes/db_connect.php';

// ------------------------------------------------------------
// CART ACTION HANDLER
// Each set of cart buttons submits a POST form with two fields:
//   product_id  - the ID of the product being acted on
//   action      - one of: add, remove, increase, decrease
// After processing, redirect back to this page to prevent
// the browser from resubmitting the form on refresh.
// ------------------------------------------------------------
if (isset($_POST['action']) && isset($_POST['product_id'])) {

    $productId = (int)$_POST['product_id'];   // cast to int to prevent injection
    $action    = $_POST['action'];

    if ($action === 'add') {
        // Add to Cart: set quantity to 1 only if the item is not already in the cart.
        // If it is already in the cart, this button does nothing (use Increase instead).
        $checkResult = mysqli_query($conn,
            "SELECT quantity_in_cart FROM products WHERE product_id = $productId");
        $row = mysqli_fetch_assoc($checkResult);
        if ((int)$row['quantity_in_cart'] === 0) {
            mysqli_query($conn,
                "UPDATE products SET quantity_in_cart = 1 WHERE product_id = $productId");
        }

    } elseif ($action === 'remove') {
        // Remove from Cart: set quantity back to 0 regardless of current value
        mysqli_query($conn,
            "UPDATE products SET quantity_in_cart = 0 WHERE product_id = $productId");

    } elseif ($action === 'increase') {
        // Increase Quantity: add 1 to the current cart quantity
        mysqli_query($conn,
            "UPDATE products SET quantity_in_cart = quantity_in_cart + 1 WHERE product_id = $productId");

    } elseif ($action === 'decrease') {
        // Decrease Quantity: subtract 1 but do not allow quantity to go below 0
        $checkResult = mysqli_query($conn,
            "SELECT quantity_in_cart FROM products WHERE product_id = $productId");
        $row = mysqli_fetch_assoc($checkResult);
        if ((int)$row['quantity_in_cart'] > 0) {
            mysqli_query($conn,
                "UPDATE products SET quantity_in_cart = quantity_in_cart - 1 WHERE product_id = $productId");
        }
    }

    // Redirect after POST to avoid duplicate submissions on page refresh
    header('Location: catalog.php');
    exit;
}

// ------------------------------------------------------------
// LOAD PRODUCTS FROM DATABASE
// Retrieve all rows from the products table. The quantity_in_cart
// column shows how many of each item the user has in their cart.
// ------------------------------------------------------------
$query   = "SELECT * FROM products";
$result  = mysqli_query($conn, $query);

$products = array();
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
?>

<?php include 'includes/header.php'; ?>

<h2>Product Catalog</h2>

<div class="product-list">

<?php foreach ($products as $product): ?>
    <div class="product-card">
        <h3><?php echo $product['product_name']; ?></h3>
        <p><strong>Product ID:</strong> <?php echo $product['product_id']; ?></p>
        <p><?php echo $product['product_description']; ?></p>
        <p class="product-cost">$<?php echo number_format($product['product_cost'], 2); ?></p>
        <p><strong>Quantity in Cart:</strong> <?php echo $product['quantity_in_cart']; ?></p>

        <!-- Cart control buttons
             Each button is inside a shared form for this product.
             The hidden product_id field and the button's name/value
             tell the server which product to update and what to do. -->
        <div class="btn-row">
            <form method="POST">
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

<p style="margin-top: 24px;"><a href="cart.php">View Shopping Cart &rarr;</a></p>

<?php include 'includes/footer.php'; ?>
