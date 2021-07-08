<?php
echo "Welcome to create a database with php code <br>";
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if (!$conn) {
    die ("Sorry we fail to connect". mysqli_connect_error());
}
else{
    echo "connection was Successful <br>";
}


//Create a database
$sql = "CREATE DATABASE sagar7";
$result = mysqli_query($conn, $sql);

//check for the database creation Seccess.
if ($result) {
    echo "The db was created successfully <br>";
}
else {
    echo "The db was not creates successfully because of this error --->". mysqli_error($conn);
}
echo "the result is ";
echo var_dump($result);
echo "<br>";


?>