<?php

echo '整数値xyzの平均値を求めます。'."\n";
echo 'x:';
$x = intval(trim(fgets(STDIN)));
echo 'y:';
$y = intval(trim(fgets(STDIN)));
echo 'z:';
$z = intval(trim(fgets(STDIN)));


$sum = $x + $y + $z;
$average = $sum / 3;

echo '整数値xyzの平均値'.$average."\n";
echo gettype($average)."\n";



?>