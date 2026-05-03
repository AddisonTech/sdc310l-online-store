<?php
// index.php - Front controller
// Routes requests to the catalog or cart controller.

$page = isset($_GET['page']) ? $_GET['page'] : 'catalog';

if ($page === 'cart') {
    require 'controllers/CartController.php';
} else {
    require 'controllers/CatalogController.php';
}
?>
