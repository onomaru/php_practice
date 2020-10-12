<?php

function arrayInsOf($a, $idx, $x)
{
    if ($idx < 0 || $idx > count($a)) {
        return $a;
    }
    for ($i = 0;$i < $idx;$i++) {
        $y[$i] = $a[$i];
    }
    for ($i = count($a);$i > $idx;$i--) {
        $y[$i] = $a[$i-1];
    }
    $y[$idx] = $x;
    return $y;
}

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i.'] : ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '挿入するインデックス';
$idx = intval(trim(fgets(STDIN)));
echo '挿入する値';
$x = intval(trim(fgets(STDIN)));

$y = arrayInsOf($a, $idx, $x);

for ($i = 0;$i < count($y);$i++) {
    echo '$y['.$i.'] = '.$y[$i]."\n";
}
