<?php

$fptr = fopen("mytextfile.txt", "r");
// echo var_dump($fptr);

if (!$fptr) {
    die("Unable to open this file. Please enter a valid filename.");
}
$content = fread($fptr, filesize('mytextfile.txt'));
fclose($fptr);
echo $content;
?>