    <?php

    require_once '../database.php';

    header('Content-Type: application/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=products.csv');


    $output = fopen('php://output', 'w');

    fputcsv($output, ['ID', 'Name', 'Category', 'Price', 'Stock', 'Status']);

    $query = "
    SELECT p.id, p.name as product_name, ct.name as category, p.price, p.stock, p.status FROM products p JOIN categories ct ON (p.category_id=ct.id) ORDER 
    BY p.id ASC
    ";

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output, [
            $row['id'],
            $row['product_name'],
            $row['category'],
            $row['price'],
            $row['stock'],
            $row['status']
        ]);
    }

    fclose($output);