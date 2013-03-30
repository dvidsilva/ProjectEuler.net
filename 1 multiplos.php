<?php

for($i =1; $i < 1000; $i++){
    if($i % 3 == 0 || $i % 5 == 0){
        $j = $i + $j;
        echo $i."\n";
    } 
}
echo $j."\n";

