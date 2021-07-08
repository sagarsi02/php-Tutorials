<?php

echo "Welcome to the stage where we are ready to get connect to a database <br>";

/*
Way to connect to a database
1.MySQLi extension
2.PDO

*/

//connect to a database
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
    echo "connection was Successful";
}




?>