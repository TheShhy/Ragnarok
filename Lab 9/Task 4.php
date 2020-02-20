<?php 
# Write a PHP script to print "First", “White” and 2 from the following multi-dimensional array. 

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
                "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
                "holes" => array ( "First", 5 => "Second", "Third"));

foreach ($color as $key => $array) {
    foreach ($array as $key => $item):
        if($item == 'White' || $item == 'Third'|| $item == 2):
            echo $item . "\n";
        endif;
    endforeach;
}
?>