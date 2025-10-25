<?php

require_once '../database.php';

$categories = mysqli_query($conn, "SELECT * FROM categories");
$rows = [];

while($row = mysqli_fetch_assoc($categories)){
    $rows[] = $row;
}