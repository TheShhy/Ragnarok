<?php 
require 'connection.php';

global $conn;

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

echo "prod_id " . "\t" . "prod_name" . "\t" . "price" . "\n";

while($data = $result->fetch_assoc()){
    echo $data['prod_id'] . "\t\t" . $data['prod_name'] . "\t" . $data['price'] . "\n";
}

?>