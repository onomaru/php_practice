<?php

function sum($n){
    for($i = 1;$i <= $n;$i++){
        $total += $i;
    }
    return $total;

}

echo '1からxまでの和を求めます'."\n";
do{
    echo 'xの値:';
    $x = intval(trim(fgets(STDIN)));
}while($x <= 0);

$result = sum($x);
echo '1から'.$x.'までの和は'.$result.'です'."\n";

?>