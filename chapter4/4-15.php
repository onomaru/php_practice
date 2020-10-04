<?php

echo '1からnまでの和を求めます'."\n";
do{
    echo 'nの値：';
    $a = intval(trim(fgets(STDIN)));
    }while($a <= 0);
    
$ans = 0;
$siki = '';
for($i = 1;$i <= $a;$i++){
    $ans += $i;
    $siki .= $i.' + '; 
}
$siki = substr($siki, 0, -2); 
$siki .= '= ';
echo $siki.$ans."\n";

////////////////////////////////////////////////
echo '1からnまでの和を求めます2'."\n";
do{
    echo 'nの値：';
    $a = intval(trim(fgets(STDIN)));
    }while($a <= 0);
    
$ans = 0;
for($i = 1;$i < $a;$i++){
    $ans += $i;
    echo $i.' + '; 
}
echo $i.' = ';
$ans += $i;

echo $ans."\n";

?>