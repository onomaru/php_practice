<?php

function aryIns($a, $idx, $x)
{
    if ($idx >= 0 && $idx < count($a)) {
        for ($i = count($a)-1;$i > $idx;$i--) {
            $a[$i] = $a[$i-1];
        }
    }
    $a[$idx] = $x;
    return $a;
}


echo '要素数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] :";
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '挿入する要素のインデックス：';
$i = intval(trim(fgets(STDIN)));
echo '挿入する数：';
$num = intval(trim(fgets(STDIN)));

$x = aryIns($a, $i, $num);

for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] =".$x[$i]."\n";
}
