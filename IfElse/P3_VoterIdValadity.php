<?php

$date1 = new DateTime("2004-11-03");

$date2 = new DateTime("2024-06-09");

$interval = $date1->diff($date2);

echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
// echo "difference " . $interval->days . " days ";
//     $age = 18;
//     if ($age >= 18) {
//         echo "You can vote.";
//     }elseif ($age < 18) {
//         echo "You can't vote.";
//     }
?>