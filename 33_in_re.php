<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";


//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn) {
    die ("Sorry we fail to connect". mysqli_connect_error());
}
else{
    echo "Connection was Successful <br>";
}




?>