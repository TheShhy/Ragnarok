<?php 
# Output the following multiplication table using loops 
# (Hint: you’ll need to use nested loops to print the table below). 

for ($i = 1; $i < 8; $i++):
    echo "\n-----------------------------------------------------------------------------------------------------------------\n|\t";
    for ($j = 1; $j < 8; $j++):
        echo $i * $j . "\t|\t";
    endfor;
endfor;
echo "\n-----------------------------------------------------------------------------------------------------------------\n";
    
?>