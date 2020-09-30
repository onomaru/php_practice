<?php

echo '整数を入力:';
$stdin = intval(trim(fgets(STDIN)));
echo '10足すと'.($stdin + 10);
echo "\n";
echo '10引くと'.($stdin - 10);
echo "\n";

?>