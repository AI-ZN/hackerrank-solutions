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
            if(($Beck_15 == $Romeo_7) ){
                echo "Draw => Both Met at Checkpoint " . ($Beck_15 / 6) . "<br>";
            }
            
        
        }
    }
    if($Beck_15 >=$Track && $Romeo_7 >= $Track){
                echo "It was a Tie<br>";
            }elseif($Beck_15 >= $Track && $Romeo_7 < $Track ){
                echo "Beck Won The race<br>";
            }elseif($Beck_15 < $Track && $Romeo_7 >= $Track){
                echo "Romeo Won The race<br>";
     }
    
}

function RomeoWin($i){
    if ($i <= 0 || $i >=1001) {
    echo "Invalid starting position";
    }else{
        $Track = 6000;
        $Beck_15 = $i * 6;
        
        for ($j = $i + 1; $j <= 1001; $j+=1){
            $Romeo_7 = $j * 6;
            $beck = $Beck_15;
            $romeo = $Romeo_7;
            $draw = false;
                while($romeo < $Track && $beck < $Track){
                    $romeo +=1;
                    $beck +=2;

                    if($romeo == $beck){
                        $draw = true;
                        break;
                    }
                    
                }
            
            if(!$draw && $romeo >= $Track &&  $beck < $Track){
                
                    echo "The minimum checkpoint for Romeo when Beck is " . $i . " is " . $j;
                    break;
            }
        }
    }
}

RaceTraining(1,6);
RomeoWin(5);

?>