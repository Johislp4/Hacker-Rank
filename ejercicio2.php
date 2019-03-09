<?php

/*Complete the function compareTriplets in the editor below. It must return an array of two integers, the first being Alice's score and the second being Bob's.

compareTriplets has the following parameter(s):

a: an array of integers representing Alice's challenge rating
b: an array of integers representing Bob's challenge rating*/


function compareTriplets($a, $b) {

    $sumA = $sumB = 0;

    for($i=0; $i<count($a); $i++){

        if($a[$i] > $b[$i]){
            $sumA++;
        }elseif($a[$i] < $b[$i]){
            $sumB++;
        }
    }

    return [$sumA, $sumB];

}
