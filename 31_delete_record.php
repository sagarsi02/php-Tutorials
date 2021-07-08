<?php
echo "Let's learn how to delete a rocord from the database <br>";

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


$sql = "DELETE FROM `contactus2` WHERE `concern` = 'mc hai' LIMIT 15";
$result = mysqli_query($conn, $sql);
// Show the effected row
$aff = mysqli_affected_rows($conn);
echo "<br> Numberr of affected rows: $aff <br>";

if ($result) {
    echo "Deleted Successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Sorry your record was not deleted try again... ---> $err";
}



?>