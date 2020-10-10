<?php

function random($a,$b){

    if($a > $b){
        return $a;
    }
    
    return mt_rand($a,$b)-1;
}

echo "乱数を生成します\n";
echo '下限値：';
$x = intval(trim(fgets(STDIN)));
echo '上限値：';
$y = intval(trim(fgets(STDIN)));
echo '生成した乱数は'.random($x,$y)."です\n";
?>