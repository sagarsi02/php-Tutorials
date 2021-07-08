<?php

// include '33_in_re1.php';

require '33_in_re.php';

echo "Hey this file is Find";

//Include
// If you are using include then your including file name is maybe wrong then after include file is execute successfully.
//Require
// If you are using require then your require file name is maybe wrong then then after require file all codes are not executed.

$sql = "SELECT * FROM `contactus2`";
$result = mysqli_query($conn, $sql);


//find the the number of record returned
$num =  mysqli_num_rows($result);
echo $num. " Records are found in the database";
echo "<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno']. " ". $row['name']. " ka email". $row['email']. " hai ". $row['concern'];
    echo "<br>";
}






?>