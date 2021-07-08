<?php
$fptr = fopen("mytextfile.txt", "r");

// fgets()//////////////////////////////////////////////////////////////////
//Reading file line by line


// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";

//Bool false because no other line for print
// echo var_dump(fgets($fptr));

//print all file content from loop

/*
while ($a = fgets($fptr)) {
    echo $a;
    echo "<br>";
}
*/

// fgetc()//////////////////////////////////////////////////////////////////
// echo fgetc($fptr);
//Reading a file character by character
/*
while ($a = fgetc($fptr)) {
    echo $a;
    // break;
}

echo "End of the file has been reached";
*/


//Write a program which reads the content of a file untill . has been encounered
while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == ".") {
        break;
    }
}

fclose($fptr);

?>