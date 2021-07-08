<?php

echo "Welcome to for each loops <br>";

$arr = array("Sagar", "Nilesh", "Shubham", "satyam", "Shivam", "Manish");


// Batter way to doing this rom foreach loops

foreach ($arr as $value) {
    echo "$value <br>";
}

// doing from for loops is complecated

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

?>