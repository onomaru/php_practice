<?php

echo '整数：';
$n = intval(trim(fgets(STDIN)));

echo '8進数で'.decoct($n).'です'."\n";
echo '16進数で'.dechex($n).'です'."\n";

?>