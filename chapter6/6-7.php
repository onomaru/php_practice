<?php

echo '人数:';
$p = intval(trim(fgets(STDIN)));

echo '点数を入力せよ'."\n";
for($i = 1;$i <= $p;$i++){
    echo $i.'番の点数';
    $a[$i-1] = intval(trim(fgets(STDIN)));

}
print_r($a);

$sum = 0;
$ave = 0;

for($i = 1;$i <= $p;$i++){

    $sum += $a[$i-1];
    if($max < $a[$i-1]){
        $max = $a[$i-1];
    }
    if($min > $a[$i-1]){
        $min = $a[$i-1];
    }


}
$ave = $sum/$p;

echo '合計点は'.$sum."\n";
echo '平均点は'.$ave."\n";
echo '最高点は'.$max."\n";
echo '最低点は'.$min."\n";

?>