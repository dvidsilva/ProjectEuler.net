<?
$i = 1;
$j = 2;
$h = 0;  #fibbonaci
$e1 = 2; #even fibbonaci
$e2 = 8; #even fibbonaci
$e3 = 0; #sum of even fibbonaci numbers

echo $i."\n";
echo $j."\n";

while( $h <= 4000000 ){
    $h = $i + $j;
    $i = $j; 
    $j = $h; 
    if($h %2 == 0){
      $e1 = $e1 + $h;
    }
}



echo "e " .$e1."\n";
