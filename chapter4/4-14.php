<?php

echo '1からnまでの和を求めます'."\n";
do{
    echo 'nの値：';
    $a = intval(trim(fgets(STDIN)));
    }while($a <= 0);
    
$ans = 0;
for($i = 1;$i <= $a;$i++){
    $ans += $i;
}
echo '1から'.$a.'までの和は'.$ans."\n";
?>