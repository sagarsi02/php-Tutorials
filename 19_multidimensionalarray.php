<?php

echo "Welcome to MultiDimensional Array in pHp <br>";

$multiDim = array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1)
                );

// Print multiDim Using var_dump

/*echo var_dump($multiDim);
echo "<br>";*/

// Print array in array key in multiDim Using var_dump
// echo $multiDim[0][2];

// Print the content of a 2 Dimensional  array

/*
for ($i=0; $i < count($multiDim); $i++) { 
    echo var_dump($multiDim[$i]);
    echo "<br>";
}
*/


for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";

}







?>