<?php

/*You are in charge of the cake for your niece's birthday and have decided the cake will have one
candle for each year of her total age. When she blows out the candles, she’ll only be able to blow
out the tallest ones. Your task is to find out how many candles she can successfully blow out.*/

/*Complete the function birthdayCakeCandles in the editor below. It must return an integer representing the number of candles she can blow out.

birthdayCakeCandles has the following parameter(s):

ar: an array of integers representing candle heights*/


function birthdayCakeCandles($ar) {

    $max = max($ar);
    $count = 0;

    foreach($ar as $a){
        if ($a == $max) {
            $count++;
        }
    }


    return $count;
}