<?php
echo "How to insert data in the table of database";

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
    echo "connection was Successful <br>";
}

//Variable  to be inserted into the table
$name = "praduman";
$email = "sagars@mail";
$msg = "mc hai";

//sql query to be executed
$sql = "INSERT INTO `contactus2` (`name`, `email`, `concern`) VALUES ('$name', '$email', '$msg')";
$result = mysqli_query($conn, $sql);

// Add a new contactus2 to the Name in the database
if ($result){
    echo "The Record was insertted successfully <br>";
}
else {
    echo "The Record was not insertted successfully because of this error --->". mysqli_error($conn);
}






?>