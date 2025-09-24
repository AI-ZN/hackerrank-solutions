<?php

function RaceTraining($i,$j){
 if ($i <= 0 || $j <= $i) {
    echo "Invalid starting positions";
 }else{
    $Track = 6000;
    $Beck_15 = $i * 6;
    $Romeo_7 = $j * 6;
    while($Beck_15 < $Track && $Romeo_7 < $Track){
        $Beck_15 += 2;
        $Romeo_7 += 1;
            if(($Beck_15 == $Romeo_7) && $Beck_15 % 6 == 0 ){
                echo "Draw => Both Met at CheckPoint " . ($Beck_15 / 6) . "<br>";
            }
            if($Beck_15 >=$Track && $Romeo_7 >= $Track){
                echo "It was a Tie";
            }elseif($Beck_15 >= $Track && $Romeo_7 < $Track ){
                echo "Beck Won";
            }elseif($Beck_15 < $Track && $Romeo_7 >= $Track){
                echo "Romeo Won";
            }
        
        }
    }
    
}
RaceTraining(1, 9);

?>