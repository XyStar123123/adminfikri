<?php

require_once '../database.php';

$product_id = $_GET['product_id'];

$product = mysqli_query($conn, "SELECT * FROM products WHERE id = '$product_id'");
$rows = [];

while($row = mysqli_fetch_assoc($product)){
    $rows[] = $row;
}