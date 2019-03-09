<?php

/*Function Description

Complete the plusMinus function in the editor below. It should print out the ratio of positive, negative and zero items in the array, each on a separate line rounded to six decimals.

plusMinus has the following parameter(s):

arr: an array of integers*/

function plusMinus($arr) {
    $positive=array();
    $negative=array();
    $zero=array();

    for ($i=0; $i<count($arr); $i++){
        if($arr[$i]>0){
            array_push($positive, $arr[$i]);
        }else if($arr[$i]<0){
            array_push($negative, $arr[$i]);
        }else{
            array_push($zero, $arr[$i]);
        }
    }
    echo round((count($positive)/count($arr)), 6, PHP_ROUND_HALF_UP). "\n";
    echo round((count($negative)/count($arr)), 6, PHP_ROUND_HALF_UP). "\n";
    echo round((count($zero)/count($arr)), 6, PHP_ROUND_HALF_UP);
}