<?php

echo '半径:';
$r = floatval(trim(fgets(STDIN)));
echo '表面積は'.(4*3.14*$r*$r);
echo "\n";
echo '体積は'.(4/3*3.14*$r*$r*$r);
echo "\n";

?>