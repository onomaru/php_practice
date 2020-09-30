<?php

echo 'x:';
$x = (float)trim(fgets(STDIN));
echo 'y:';
$y = floatval(trim(fgets(STDIN)));

echo 'x+y= '.($x+$y);
echo "\n";
echo '(x+y)/2= '.($x+$y)/2;
echo "\n";
?>