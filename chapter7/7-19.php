<?php

function aryRmvN($a, $idx, $n)
{
    if ($n > 0 && $idx >= 0 && $idx + $n < count($a)) {
        $idx2 = $idx + $n - 1;
        if ($idx2 > count($a) - $n - 1) {
            $idx2 = count($a) - $n -1;
        }
        for ($i = $idx;$i <= $idx2;$i++) {
            $a[$i] = $a[$i+$n];
        }
        return $a;
    }
}
echo '要素数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] :";
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '削除する要素のインデックス：';
$i = intval(trim(fgets(STDIN)));
echo '削除する要素の個数：';
$num = intval(trim(fgets(STDIN)));

$x = aryRmvN($a, $i, $num);

for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] =".$x[$i]."\n";
}
