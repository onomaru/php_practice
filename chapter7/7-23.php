<?php

function arraySrchIdx($a, $key)
{
    $count = 0;
    for ($i = 0;$i < count($a);$i++) {
        if ($a[$i] == $key) {
            $ans[$count] = $i;
            $count ++;
        }
    }
    return $ans;
}

echo '配列aの要素数：';
$an = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $an;$i++) {
    echo '$a['.$i.'] : ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '探索する値：';
$ky = intval(trim(fgets(STDIN)));

$ans = arraySrchIdx($a, $ky);
echo "一致する要素のインデックス\n";
for ($i = 0;$i < count($ans);$i++) {
    echo $ans[$i]."\n";
}
