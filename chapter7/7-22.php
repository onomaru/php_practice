<?php

function arrayClone($a)
{
    for ($i = 0;$i < count($a);$i++) {
        $y[$i] = $a[$i];
    }
    return $y;
}
echo '配列aの要素数：';
$an = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $an;$i++) {
    echo '$a['.$i.'] : ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

$y = arrayClone($a);
echo '配列aの複製xを作りました'."\n";
for ($i = 0;$i < count($y);$i++) {
    echo '$y['.$i.'] = '.$y[$i]."\n";
}
