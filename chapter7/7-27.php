<?php

function addMatrix($x, $y)
{
    if (count($x) != count($y)) {
        return false;
    }
    for ($i = 0;$i < count($x);$i++) {
        if (count($x[$i]) != count($x[$i])) {
            return false;
        }
    }
    for ($i = 0;$i < count($x);$i++) {
        for ($j = 0;$j < count($x[$i]);$j++) {
            $z[$i][$j] = $x[$i][$j] + $y[$i][$j];
        }
    }
    return $z;
}

function printMatrix($m)
{
    for ($i = 0;$i < count($m);$i++) {
        for ($j = 0;$j < count($m[$i]);$j++) {
            echo $m[$i][$j].' ';
        }
        echo "\n";
    }
}

$a = [[1,2,3],[4,5,6]];
$b = [[6,3,4],[5,1,2]];

$z = addMatrix($a, $b);

if (addMatrix($a, $b)) {
    echo '行列a'."\n";
    printMatrix($a);
    echo '行列b'."\n";
    printMatrix($b);
    echo '行列c'."\n";
    printMatrix($z);
}
