<?php 
require 'connection.php';

global $conn;

$sql = "create table product(
            prod_id int AUTO_INCREMENT PRIMARY KEY,
            prod_name varchar(50) not null,
            price int not null
        )";
        
if($conn->query($sql) === TRUE):
    echo "Table created successfully\n";
else:
    echo 'Table Can not be created due to some problem';
endif;

?>