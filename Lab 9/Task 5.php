<?php 
# Sort the following associative array:
$array = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");

echo "Ascending order sort by value:\n";
asort($array);
print_r($array);
echo "\n";

echo "Ascending order sort by key:\n";
ksort($array);
print_r($array);
echo "\n";

echo "Descending order sort by value:\n";
arsort($array);
print_r($array);
echo "\n";


echo "Descending order sort by key:\n";
krsort($array);
print_r($array);
?>