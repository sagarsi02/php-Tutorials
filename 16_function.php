<?php
    echo "Welcome to function tutorials<br>";

    function processMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function avgMarks($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

    $yuvraj = [12, 20, 35, 21,32,25];
    // $sumMarks = processMarks($yuvraj);
    $sumMarks = avgMarks($yuvraj);

    $sagar = [85, 56, 93, 65, 75, 69];
    // $sumMarksSagar = processMarks($sagar);
    $sumMarksSagar = avgMarks($sagar);


    echo "Total marks scored by yuvraj out of 600 is $sumMarks <br>";
    echo "Total marks scored by Sagar out of 600 is $sumMarksSagar";





?>