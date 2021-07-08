<?php

echo "Created a table in database using php <br>";
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sagar";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn) {
    die ("Sorry we fail to connect". mysqli_connect_error());
}
else{
    echo "connection was Successful <br>";
}

//Create a table in the database
$sql = "CREATE TABLE `phpTriptut` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` INT(3) NOT NULL , `gender` VARCHAR(10) NOT NULL, PRIMARY KEY (`sno`));";
$result = mysqli_query($conn, $sql);

//check for the Table creation Seccess.
if ($result) {
    echo "The db was created successfully <br>";
}
else {
    echo "The Table was not creates successfully because of this error --->". mysqli_error($conn);
}
echo "the result is ";
echo var_dump($result);
echo "<br>";







?>