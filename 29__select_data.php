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
    echo "connection was Successful <br>";
}

$sql = "SELECT * FROM `contactus2`";
$result = mysqli_query($conn,$sql);

//find the the number of record returned
$num =  mysqli_num_rows($result);
echo $num. " Records are found in the database";
echo "<br>";

//Display the roows returned by the sql query
if ($num>0) {
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // Batter way to to fetch data using while loop

    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    //Fetch data without using var_dump
    while ($row = mysqli_fetch_assoc($result)) {
            echo $row['sno']. ". Hello Guyz ". $row['name']. " ka email i'd ". $row['email']. " ye hai and his question  is ". $row['concern'];
            echo "<br>";
    }

}



?>