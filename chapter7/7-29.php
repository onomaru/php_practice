<?php

function aryClone2($a)
{
    for ($i = 0;$i < count($a);$i++) {
        for ($j = 0;$j < count($a[$i]);$j++) {
            $a2[$i][$j] = $a[$i][$j];
        }
    }
    return $a2;
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

echo "行列a\n";
printMatrix($a);
$a2 = aryClone2($a);
echo "行列aの複製\n";
printMatrix($a2);
