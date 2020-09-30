<?php 

//自信なし
function randomFloat($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

echo randomFloat(0,0.999999999999999);
echo "\n";
echo randomFloat(0,9.999999999999999);
echo "\n";
echo randomFloat(-1,0.999999999999999);
echo "\n";
echo mt_rand();
echo "\n";
echo mt_getrandmax();
echo "\n";

?>