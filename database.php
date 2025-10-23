<?php

$conn = mysqli_connect('localhost', 'root', '', 'adminfikri');
if(!$conn){
    die("Connection error: " . mysqli_connect_error($conn));
}