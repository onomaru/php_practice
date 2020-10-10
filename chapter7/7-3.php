<?php

function med($a, $b, $c)
{
    if ($a >= $b) {
        if ($b >= $c) {
            return $b;
        } elseif ($a <= $c) {
            return $a;
        } else {
            return $c;
        }
    } elseif ($a >= $c) {
        return $a;
    } elseif ($b >= $c) {
        return $c;
    } else {
        return $b;
    }
}

echo '整数a:';
$a = intval(trim(fgets(STDIN)));
echo '整数b:';
$b = intval(trim(fgets(STDIN)));
echo '整数c:';
$c = intval(trim(fgets(STDIN)));

$result = med($a, $b, $c);
echo '中央値は'.$result."です\n";
