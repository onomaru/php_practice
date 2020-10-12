<?php

function minOf($a)
{
    $min = $a[0];
    for ($i = 0;$i < count($a);$i++) {
        if ($min > $a[$i]) {
            $min = $a[$i];
        }
    }
    return $min;
}

echo '人数は：';
$ninzu = intval(trim(fgets(STDIN)));
echo $ninzu."人の身長と体重を入力せよ\n";

for ($i = 0;$i < $ninzu;$i++) {
    echo($i+1).'番目の身長は';
    $height[$i] = intval(trim(fgets(STDIN)));
    echo($i+1).'番目の体重は';
    $weight[$i] = intval(trim(fgets(STDIN)));
}
print_r($height);
print_r($weight);
echo '最も背が低い人の身長：'.minOf($height)."cm\n";
echo '最も痩せている人の体重：'.minOf($weight)."kg\n";
