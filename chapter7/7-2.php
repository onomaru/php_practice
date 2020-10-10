<?php

function min3($a, $b, $c)
{
    $min = $a;
    if ($min > $b) {
        $min = $b;
    } elseif ($min > $c) {
        $min = $c;
    }
    return $min;
}

echo '整数a:';
$a = intval(trim(fgets(STDIN)));
echo '整数b:';
$b = intval(trim(fgets(STDIN)));
echo '整数c:';
$c = intval(trim(fgets(STDIN)));

$result = min($a, $b, $c);
echo '最小値は'.$result."です\n";
