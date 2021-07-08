<?php

    echo "Welcome to Scope, Local and Global Variable in pHp <br>";

    //Global Variable
    $a = 98; 
    $b = 100;

    function printValue(){
        global $a, $b; //Give me the access to this global variable
        // $a = 97;  //Local VAriable
        $a = 100;
        $b = 1000;
        echo "The value of Your Variables a is $a and b is $b";
    }

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    printValue();
    echo "<br>";

    echo "The value of Your Variables a is $a and b is $b";
    echo "<br>";

    // echo var_dump($GLOBALS); // Print all the global variables
    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);


    ?>