<?
include('primenumbers.php');


$p = 600851475143; #13195;


function something( $r = array() ){
    global $ar;
    foreach($ar as $k){
        $d = ($r[0] / $k);
        echo "$d \n";
        if( is_int($d) ){
            echo "$d , $k \n";        
            return([$d,$k]);
        }
    }
    return($r);
}
$d = array($p , 2);
$l = array();
$i = 1;
while( $d[0] != 1 ){
    $d = something($d);
    $l[] = $d;
    $i++;
}

print_r($l);




