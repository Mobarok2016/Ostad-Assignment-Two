<?php 

$first =0;
$second=1;
$new = 1;

for($i=1; $i<=10; $i++){

    if($first>100){
        break;
    }
    echo $first." ";
    $second=$new;
    $new=$first+$second;
    $first=$second;
}