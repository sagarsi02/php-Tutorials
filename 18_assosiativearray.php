<?php
echo "Welcome to the assosiative array <br>";
echo "<br>";


// IndexedArray in Php
/*
$student = array ("Sagar", "Nilesh", "Shubham", "Manish");

echo $student[0];
echo "<br>";
echo $student[1];
echo "<br>";
echo $student[2];
echo "<br>";
echo $student[3];
echo "<br>";
*/


// Assosiative Arrays

$marks = array("Sagar"=>"White", "Shubham"=>"yellow", "Nilesh"=>"Red",
                         "Manish"=>"Pink", 10=>"Danger", "20"=>50, "Satyam"=>100);

// batter way to print in single  line of code
foreach ($marks as $key => $value) {
    echo " Favorite Colour of $key is $value <br>";
}



// 2nd Methods to print in multiLines of code

/*
echo $marks['Sagar'];
echo "<br>";
echo $marks['Shubham'];
echo "<br>";
echo $marks['Nilesh'];
echo "<br>";
echo $marks['Manish'];
echo "<br>";
echo $marks[10];
echo "<br>";
echo $marks[20];
echo "<br>";
echo $marks['Satyam];
*/




?>