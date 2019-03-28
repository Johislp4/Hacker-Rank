<?php

//It should return a new string representing the input time in 24 hour format.
$timeArr = explode(':', $time);

$hours = $timeArr[0];
$mins = $timeArr[1];
$sec = substr($timeArr[2], 0, 2);


$AorP= substr($timeArr[2], 2,2);


if($AorP == "AM")
    echo ($hours == 12)? "00":$hours;
else
    echo ($hours == 12)? "12": ($hours + 12);

echo ":" . $mins . ":" . $sec;

