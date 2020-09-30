<?php

echo '整数値:';
$stdin = (int)trim(fgets(STDIN));
echo '最下位桁を除いた数:'.floor(($stdin / 10));
echo "\n";
echo '最下位桁:'.($stdin % 10);
echo "\n";

?>