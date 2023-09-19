<?php

function fibonacci($n){
    $first=0;
    $second = 1;
    $new = 1;
    for($i=1; $i<=$n; $i++ ){

        echo $first ." ";
        $second= $new;
        $new = $first+$second;
        $first= $second;
    }
}

echo fibonacci(15);