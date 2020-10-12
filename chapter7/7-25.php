<?php


function arrayRmvOfN($x, $idx, $n)
{
    if ($idx < 0 || $idx > count($x) || $n < 0) {
        return $x;
    } else {
        if ($idx + $n > count($x)) {
            $n = count($x) - $idx;
        }
        for ($i = 0;$i < $idx;$i++) {
            $y[$i] = $x[$i];
        }
        for ($i = $idx;$i < count($x)-$n;$i++) {
            $y[$i] = $x[$i+$n];
        }
    }

    return $y;
}

echo '要素数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo 'x['.$i.'] :';
    $x[$i] = intval(trim(fgets(STDIN)));
}
echo '削除する値のインデックス：';
$idx = intval(trim(fgets(STDIN)));
echo '削除する要素の個数：';
$n = intval(trim(fgets(STDIN)));

$y = arrayRmvOfN($x, $idx, $n);
for ($i = 0;$i < count($y);$i++) {
    echo 'y['.$i.'] = '.$y[$i]."\n";
}
