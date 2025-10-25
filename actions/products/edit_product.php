<?php

require_once '../../database.php';

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$category_id = $_POST['category_id'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$status = $_POST['status'];


mysqli_query($conn, "UPDATE products SET category_id = '$category_id', name = '$name', price = '$price', stock = '$stock', status = '$status' WHERE id = '$product_id'");

header("Location:../../pages/product.php");