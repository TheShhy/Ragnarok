<?php 

include 'connection.php';
global $conn;

$path = __DIR__.'/data.txt';
$sql = "LOAD DATA LOCAL INFILE $path INTO TABLE product";
$result = $conn->query($sql);

if($conn->affected_rows > 0)
    echo "Data inserted";

?>