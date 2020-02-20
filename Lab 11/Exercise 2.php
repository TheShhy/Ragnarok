<?php 
require 'connection.php';

global $conn;

$sql = "INSERT INTO product(prod_name, price) VALUES('Samsung Mobile', 50000);";
$sql .= "INSERT INTO product(prod_name, price) VALUES('IPhone 8', 90000);";
$sql .= "INSERT INTO product(prod_name, price) VALUES('Nokia x66', 40000);";
$sql .= "INSERT INTO product(prod_name, price) VALUES('Motorola g7', 80000);";

if($conn->multi_query($sql) === TRUE):
    echo "Data Inserted successfully\n";
else:
    echo "Data cann't be inserted due to some problem";
endif;

?>