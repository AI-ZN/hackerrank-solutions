<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $max = 0;
    $min = 0;
    $zero = 0;
    
    $n = count($arr);
    
    foreach ($arr as $num){
        if($num > 0){
            $max++ ;
        }elseif($num < 0){
            $min++ ;
        }else {
            $zero++ ;
        }
    }
    $max_ratio = $max / $n;
    $min_ratio = $min / $n;
    $zero_ratio = $zero / $n;
    
    echo number_format($max_ratio, $n, '.', '') . "\n";
    echo number_format($min_ratio, $n, '.', '') . "\n";
    echo number_format($zero_ratio, $n, '.', '') . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
