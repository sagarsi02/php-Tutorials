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


$sql = "SELECT * FROM `contactus2` WHERE `concern` = 'error'";
$result = mysqli_query($conn, $sql);

// Usages of  where Clause to the sata from the database
$num =  mysqli_num_rows($result);
echo $num. " Records are found in the database <br>";

$no = 1;
if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
            echo $no. ". Hello Guyz ". $row['name']. " ka email i'd ". $row['email']. " ye hai and his question  is ". $row['concern'];
            echo "<br>";
            $no = $no +1;
    }

}

// Usages of where clause to update data
$sql = "UPDATE `contactus2` SET `name` = 'Niraj', `concern` = 'Singh' WHERE `contactus2`.`sno` = 13";
// $sql = "UPDATE `contactus2` SET `name` = 'Chhota Sagar' WHERE`concern` = 'nice' ";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br> Numberr of affected rows: $aff <br>";
if ($result) {
    echo "We updated the record Successfully";
}
else {
    echo "We could not updated the record Successfully";
}






?>