<?php

$name = "Sagar is a Good boy";
echo $name;
echo "<br>";
echo "<br>";
echo "data types example:-";
echo "<br>";
echo "<br>";
echo "<br>";

//string- where you can count your string length
echo " the length of my string is " . strlen($name);
echo "<br>";

// string- where you can reverse your string
echo str_word_count($name);
echo "<br>";

//string- variable replace
echo strrev($name);
echo "<br>";

// String- count thr number of located of sagar
echo strpos($name, "Sagar");
echo "<br>";

//String- Word replace in String
echo str_replace("Sagar", "Mithun", $name);
echo "<br>";

//string- repeat  a string
echo str_repeat($name, 5);
echo "<br>";

// String- trim functin where you can remove a spaces form ltrim or rtrim
echo "<pre>";
echo rtrim("   This is a Bad boy   ");
echo "<br>";
echo ltrim("   This is a Bad boy   ");
echo "<br>";
echo "</pre>";



//Exercise go to pHp.net and practice all the string function
