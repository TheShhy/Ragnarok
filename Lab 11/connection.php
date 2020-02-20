<?php 

$username = 'root';
$password = '';
$database = 'webeng';
$host = 'localhost';
$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    echo 'Connection Error';
}
else {
    echo "Connection Successfull\n";
}

?>