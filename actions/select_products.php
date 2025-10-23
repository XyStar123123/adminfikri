<?php

require_once '../database.php';

$products = mysqli_query($conn, "SELECT p.*, ct.name as category FROM products p JOIN categories ct ON (p.category_id=ct.id)");
$rows = [];

while($row = mysqli_fetch_assoc($products)){
    $rows[] = $row;
}

$no = 0;