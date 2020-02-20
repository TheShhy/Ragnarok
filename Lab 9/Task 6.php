<?php 
# Generate unique random numbers within a range of (1-200) 
# and store them in an array. Search for your roll number in the 
# generated array and print “Found you” if the roll number exists in it.
$rollNo = 159;
$rnos = [];

for ($i = 0; $i < 10; $i++) {
    $random = rand(1, 200);
    array_push($rnos, $random);
}
foreach ($rnos as $no) {
    if($no == $rollNo):
        echo 'Found You';
    endif;
}
?>