<?php

function addMatrix($x, $y)
{
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

echo '行列の行数';
$x = intval(trim(fgets(STDIN)));
echo '行列の列数';
$y = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $x;$i++) {
    for ($j = 0;$j < $y;$j++) {
        echo 'a['.$i.']['.$j.'] : ';
        $a[$i][$j] = intval(trim(fgets(STDIN)));
    }
}
for ($i = 0;$i < $x;$i++) {
    for ($j = 0;$j < $y;$j++) {
        echo 'b['.$i.']['.$j.'] : ';
        $b[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

echo '行列a'."\n";
printMatrix($a);
echo '行列b'."\n";
printMatrix($b);

$c = addMatrix($a, $b);
echo '行列c'."\n";
printMatrix($c);
