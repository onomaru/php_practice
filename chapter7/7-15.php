<?php

function sumOf($a)
{
    $total = 0;
    for ($i = 0;$i < count($a);$i++) {
        $total += $a[$i];
    }
    return $total;
}

echo '要素数：';
$x = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $x;$i++) {
    echo '$x['.$i.'] :';
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '全要素の合計は'.sumOf($a)."です\n";
