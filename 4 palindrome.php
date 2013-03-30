<?

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tstart = $mtime; 


$p = 998001; #largest number made of multiplying 2 three digits numbers


function palindrome( $r ){
    /* Found a better solution
    $r = str_split($r);
    if(count($r)<6){
      return(false);
    }
    if( $r[0] == $r[5] && $r[1] == $r[4] && $r[2] == $r[3]){
        return(true);
    }
    */
    if($r == strrev($r) ){
      return(true);
    }
    
}

$r = 1;
$i = 1;
$j = 1;
$h = 0;
$l = array();

for($i = 100; $i <= 999; $i++){
    for($j = 100; $j <= 999; $j++){
        $r = $i * $j;
        if( palindrome($r) ){
            $l[] = $r;
            echo "$r \n";
        }
        $h++;
        
    }
}
$m = max($l);
echo "$m $h H $i $j \n";


$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tend = $mtime; 
$total = ($tend - $tstart); 
echo "$total \n";
