<?php

echo '何センチから：';
$cm1 = intval(trim(fgets(STDIN)));
echo '何センチまで：';
$cm2 = intval(trim(fgets(STDIN)));
echo '何センチごと：';
$cm3 = intval(trim(fgets(STDIN)));

echo '身長 標準体重'."\n";
echo '------------'."\n";
for(;$cm1 <= $cm2;$cm1 += $cm3){
    echo $cm1.' ';
    echo ($cm1 - 100) * 0.9."\n";
}
?>