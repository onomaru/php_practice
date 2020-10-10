<?php

echo 'クラス数:';
$class = intval(trim(fgets(STDIN)));

for($i = 0;$i < $class;$i++){
    echo ($i+1).'組の人数:';
    $num = intval(trim(fgets(STDIN)));
    $people[$i] = $num;
    $ninzu += $num;
    for($j = 0;$j < $people[$i];$j++){
        echo ($i+1).'組'.($j+1).'番の点数:';
        $point[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

print_r($point);


echo '  組 |   合計   平均'."\n";
echo '-----+--------------'."\n";
for($i = 0;$i < $class;$i++){
    for($j = 0;$j < $people[$i];$j++){
        $sum[$i] += $point[$i][$j];
    }
    $total += $sum[$i];
    printf("%2d組 |%7d%7.1f\n",($i+1),$sum[$i],$sum[$i]/($people[$i]));
}
echo '-----+--------------'."\n";
printf("  計 |%7d%7.1f\n",$total,($total/$ninzu));


?>