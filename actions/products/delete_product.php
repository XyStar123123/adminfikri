<?php

require_once '../database.php';

$product_id = $_GET['product_id'];

mysqli_query($conn, "DELETE FROM products WHERE id = '$product_id'");

header("Location:../product.php");