<?php 


  function evenUsingForLoop($start,$end, $step){
    for($i=$start; $i<=$end; $i++){
        if($i%$step==0){
            echo $i."\n";
        }
    }
  }

  evenUsingForLoop(1,20,2);


 
