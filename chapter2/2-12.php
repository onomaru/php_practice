<?php
define('STDIN', fopen('php://stdin', 'r'));
echo '整数値:';
$x = intval(trim(fgets(STDIN)));
$y = $x+5;
$z = $x-5;
echo '+-5の乱数:';
echo rand($y,$z);
echo "\n";
?>