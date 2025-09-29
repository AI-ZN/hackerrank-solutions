<?php

function Summation($arr){
    $Sum = 0;
    foreach($arr as $num){
        $Sum+=$num;
    }
    echo $Sum;
}


Summation([3, 3, 3, 3, 3, 3]);









?>