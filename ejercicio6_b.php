<?php
/*Complete the miniMaxSum function in the editor below. It should print two space-separated integers on one line: the minimum sum and the maximum sum of  of  elements.

miniMaxSum has the following parameter(s):

arr: an array of 5 integers*/


function miniMaxSum($arr) {

    echo (array_sum($arr)-max($arr)). " " .(array_sum($arr)-min($arr));

}