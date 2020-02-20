<?php 
# Store any name in a PHP variable and then loop through it printing the name of a thing 
# (similar to alphabet books) corresponding to each letter of the name.

$name = 'wine';
$words = ['w'=>'Wine', 'i' => 'Is', 'n'=> 'Not', 'e'=> 'Emulator'];
echo 'Name: wine'. "\n";
echo 'Output: ';
for ($i = 0; $i < strlen($name); $i++):
    foreach ($words as $key => $item):
        if($name[$i] == $key):
            echo $item . ' ';
        endif;
    endforeach;
endfor;
?>