<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n){
    // Write your code here
    for($i = 1; $i <= $n; $i += 1){
         $spaces = str_repeat(" ", $n - $i);
        $hashes = str_repeat("#", $i);
        echo $spaces . $hashes . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
