<?php

//start the session and get the data
session_start();
if (isset($_SESSION['username'])) {

    echo "Welcome ". $_SESSION['username'];
    echo "<br>";
    echo "Your favorite category is ". $_SESSION['category'];
    echo "<br>";
}
else{
    echo "Please Login to Countinue";
}




?>