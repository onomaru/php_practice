<?php

function lineSearch($a, $key)
{
    for ($i = 0;$i < count($a);$i++) {
        if ($a[$i] == $key) {
            return $i;
        }
    }
    return -1;
}
function lineSearchR($a, $key)
{
    for ($i = count($a)-1;$i >= 0;$i--) {
        if ($a[$i] == $key) {
            return $i;
        }
    }
    return -1;
}



echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for ($i = 0;$i < $n;$i++) {
    echo '$x['.$i.'] :';
    $x[$i] = intval(trim(fgets(STDIN)));
}

echo '探す値：';
$key = intval(trim(fgets(STDIN)));

$idxTop = lineSearch($x, $key);
$idxBtm = lineSearchR($x, $key);
if ($idxTop == -1) {
    echo "その要素の値は存在しません\n";
} elseif ($idxTop == $idxBtm) {
    echo 'その値は$x['.$idxTop."]にあります。\n";
} else {
    echo "その値は複数存在します\n";
    echo '最も先頭のものは$x['.$idxTop."]にあります。\n";
    echo '最も末尾のものは$x['.$idxBtm."]にあります。\n";
}
