<?php

function staircase($n)
{

    $cell = $n;

    for ($i = 1; $i <= $n; $i++) {

        for ($j = 1; $j <= $n; $j++) {

            if ($j < $cell) {
                echo " ";
            } elseif ($j >= $cell) {
                echo "#";
            }
        }

        $cell -= 1;
        echo PHP_EOL;
    }

}



