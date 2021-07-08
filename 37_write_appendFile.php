<?php


//writing to a file in pHp
/*
echo "Welcome to write file in php";
$fptr = fopen("myfile2.txt", "w");
fwrite($fptr, "This is write mode in php.\n");
fwrite($fptr, "Let's talk about mode in php.\n");
fwrite($fptr, "Let's talk r+ and w+ mode in php.\n");
fclose($fptr);
*/

//appending to a file in pHp
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "Let's talk about append mode in php.\n");
fclose($fptr);






?>