<?php
    // $x = 50;
    // $y = 100;

    // if ($x > $y){
    //     echo "$x is greater than $y";
    // }
    // else{
    //     echo "$x is less than $y";
    // }

    $age = 25;

    if ($age > 65){
        echo "you can not drive because your age is too high i'm not allow";
    }
    
    elseif($age == 25){
        echo "you can drive but slowly slowly because you just have complete $age";
    }
    
    elseif($age == 65){
        echo "you can not drive because you are old person";
    }
    
    elseif($age > 25){
        echo "Yu can Drive";
    }
        
    else{
        echo "you can not drive because you are not albe to drive";
    }
    
    echo "<br>";
    echo "Done";

?>