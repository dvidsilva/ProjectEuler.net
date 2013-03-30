<?

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tstart = $mtime; 



$p = 2520; #smallest number that can be evenly divided by all numbers from 1 to 10

$m = 20; 
$i = 0;
$k = 0;
while( true) {
    $k ++;
    $i = $k * $m;
   
     for($j = 1; $j < 30 ;  $j++ ){
        $d = $i/$j;
        echo "# $i $j \n";
        if( is_int($d) ){
            #echo("$i $j $m \n");
            if($j == $m ) {
                break(2);
            }
        }else{
            #die("$i $j $d \n");
            break; #so it stops considering that numbers
        }
    }

}

echo "# $i $k \n";



$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tend = $mtime; 
$total = ($tend - $tstart); 
echo "$total \n";


