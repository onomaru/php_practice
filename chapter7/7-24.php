<?php

function arrayRmvOf($x, $idx)
{
    if ($idx < 0 || $idx <= count($x)) {
        return $x;
    } else {
        for ($i = 0;$i < $idx;$i++) {
            $y[$i] = $x[$i];
        }
        for ($i = $idx;$i < count($x)-1;$i++) {
            $y[$i] = $x[$i+1];
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

$y = arrayRmvOf($x, $idx);
for ($i = 0;$i < count($y);$i++) {
    echo 'y['.$i.'] = '.$y[$i]."\n";
}
