<?php

require_once '../../database.php';

$name = $_POST['name'];
$category_id = $_POST['category_id'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$status = $_POST['status'];


mysqli_query($conn, "INSERT INTO products(category_id, name, price, stock, status) VALUES ('$category_id', '$name', '$price', '$stock','$status')");

header("Location:../pages/product.php");