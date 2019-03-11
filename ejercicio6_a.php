<?php

/*Complete the miniMaxSum function in the editor below. It should print two space-separated integers on one line: the minimum sum and the maximum sum of  of  elements.

miniMaxSum has the following parameter(s):

arr: an array of 5 integers*/
function miniMaxSum($arr) {

    $arrMin= $arr;
    $arrMax= $arr;
    $max= max($arr);
    $min= min($arr);
    $foundMin= $foundMax =  false;

    for ($i=0; $i<=count($arr); $i++){
        if ($arr[$i] == $max && $foundMax== false){
            unset($arrMin[$i]);
            $foundMax = true;
        }else if ($arr[$i] == $min && $foundMin == false){
            unset($arrMax[$i]);
            $foundMin = true;
        }

    }
    echo array_sum($arrMin). " ". array_sum($arrMax);
}
