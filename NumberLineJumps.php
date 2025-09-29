<?php

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    $Sum_Kang_1 = $x1 + $v1;
    $Sum_Kang_2 = $x2 + $v2;
    if($Sum_Kang_1 == $Sum_Kang_2){
        echo "YES";
    }else{
        while($x1 <= 1000 && $x2 <= 1000){
            if($x1 == $x2){
                echo "YES";
                return;
            }
            $x1 += $v1;
            $x2 += $v2;
        }
            echo "NO";
        }
       
    }



kangaroo(0, 2, 5, 3);

?>