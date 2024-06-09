<?php  
    $number = 100;
    if ($number > 100){
        echo "number is greater than 100";  
    }elseif ($number >= 90) {
        echo "A+";
    }elseif ($number >= 80) {
        echo "A";
    }elseif ($number >= 70) {
        echo "B+";
     }elseif ($number >= 60) {
        echo "B";
    }elseif ($number >= 50) {
        echo "C+";
    }elseif ($number >= 40) {
        echo "D+";
    }elseif ($number >= 30) {
        echo "D";
    }elseif ($number <= 30) {
        echo "fail";
    }
?>