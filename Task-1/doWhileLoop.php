<?php 

function evenUsingDowhileLoop($start, $end, $step){

    $i=$start;
    do{
        if($i%$step==0){
            echo $i."\n";
            
        }
        $i++; 
    }

    while($i<=$end);

}

evenUsingDowhileLoop(1,20,2);