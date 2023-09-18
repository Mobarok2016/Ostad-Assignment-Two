
<?php 

function evenUsingWhileLoop($start,$end, $step){
    $i=$start;
    while($i<=$end){
        if($i%$step==0){
            echo $i."\n";
            
        }
        $i++;
        
    }
}

evenUsingWhileLoop(1,20,2);