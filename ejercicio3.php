<?php


/*Function description

Complete the  function in the editor below. It must return an integer representing the absolute diagonal difference.

diagonalDifference takes the following parameter:

arr: an array of integers .*/

function diagonalDifference($arr) {

    $dp=array();
    $ds=array();

    for($i=0; $i<count($arr); $i++){
        for ($j=0; $j<count($arr); $j++){
            if($i==$j){
                array_push($dp, $arr[$i][$j]);
            }
            if(($i+$j)==count($arr)-1){
                array_push($ds, $arr[$i][$j]);
            }
        }

    }
    return abs(array_sum($dp) - array_sum($ds));
}