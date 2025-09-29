<?php 

function Horizontal($n){
    $hash = "#";
    for($i = 1; $i <= $n; $i++){
         echo   $hash . "&nbsp;&nbsp;" ;
    }
   
}

function Vertical($m){
    $hash = "#";
    for($i = 1; $i <= $m; $i++){
        echo   $hash . "&nbsp;&nbsp;" ;
    }
}


function Ladder($j){
     for($i = 0; $i <= $j; $i++){
          for($s = 0; $s < $j - $i; $s++){
            echo "&nbsp;&nbsp;";
        }
       echo Horizontal($i - 1) .  "<br>";

    }
}

function Rev_Ladder($k){
     for($i = $k; $i >= 1; $i--){
           for($s = 0; $s < $k - $i; $s++){
            echo "&nbsp;&nbsp;";
        }
        Vertical($i - 1);
        echo "<br>";

    }
}

echo  Ladder(11)  ;
echo  Rev_Ladder(11);

?>
