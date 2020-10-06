<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo 'a['.$i.'] = ';
    $array = floatval(trim(fgets(STDIN)));

    $a[$i] = $array;
    $sum += $a[$i];
}
print_r($a);
echo '全要素の合計は'.$sum."\n";
echo '全要素の平均は'.$sum/$n."\n";
?>