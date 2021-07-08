<?php

$name = "Sagar";
$income = 25000;


/*
pHp data types

1. string
2. Integer
3. float
4. Boolean
5. Object
6. array
7. Null
*/

//string - sequence of character
$name = "sagar";
$friend = 'Nilesh';
echo "$name ka best friend $friend hai.";
echo "<br>";



//Integer - Non decimal datatypes
$income = 200;
$tax = -50;
echo $income;
echo "<br>";
echo $tax;
echo "<br>";

// Float - Decimal point number
$income = 2000.5;
$tax = -200.999;
echo $income;
echo "<br>";
echo $tax;
echo "<br>";

//Boolean - Can be either true or false
$x = true;
$is_friend = false;
// echo $x;
// echo "<br>";
// echo $is_friend;

    // chech variable name
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";

//Object - Instances of classes
// Employee is a class ---> sagar can be one object


//Array - Used to store multiple values in a single variable
$friends = array("sagar", "shubham", "Nilesh", "satyam");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of arrey is 4


//Null
$name = null;
echo var_dump($name);






?>