<?php 
# Write PHP code to implement various arrays according to the 
# requirements given below: (use array functions where necessary)
$arr = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
            "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
            "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
            "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
            "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
            "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
            "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
            "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", 
            "Poland"=>"Warsaw") ;

foreach ($arr as $country => $capital) {
    echo 'The Capital Of '. $country . ' is ' . $capital . "\n";
}
?>