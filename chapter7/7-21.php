<?php

function aryExchng($a, $b)
{
    $min = (count($a) < count($b))? count($a) : count($b);
    for ($i = 0;$i < $min;$i++) {
        $t = $a[$i];
        $a[$i] = $b[$i];
        $b[$i] = $t;
    }
    return [$a,$b];
}

echo '配列aの要素数：';
$an = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $an;$i++) {
    echo '$a['.$i.'] : ';
    $a[$i] = intval(trim(fgets(STDIN)));
}


echo '配列bの要素数：';
$bn = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $bn;$i++) {
    echo '$b['.$i.'] : ';
    $b[$i] = intval(trim(fgets(STDIN)));
}

list($a, $b) = aryExchng($a, $b);
print_r($a);
print_r($b);
echo "配列aとbの全要素を交換しました\n";
for ($i = 0;$i < count($a);$i++) {
    echo '$a['.$i.'] = '.$a[$i]."\n";
}
for ($i = 0;$i < count($b);$i++) {
    echo '$a['.$i.'] = '.$b[$i]."\n";
}
