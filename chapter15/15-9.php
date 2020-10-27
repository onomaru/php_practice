<?php

function printDouble($x, $n, $f)
{
    $format = '%'.$n.'d'.$f.'f';
    printf($format, $x);
    echo "\n";
}

echo '実数値：';
$x = doubleval(trim(fgets(STDIN)));
echo '表示全桁数：';
$n = intval(trim(fgets(STDIN)));
echo '小数部桁数：';
$f = intval(trim(fgets(STDIN)));

printDouble($x, $n, $f);
