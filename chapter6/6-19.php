<?php

echo '6人の国語数学の点数を入力せよ'."\n";
for($i = 0;$i < 6;$i++){

    echo ($i+1).'番'.'国語:';
    $point[$i][0] = strval(trim(fgets(STDIN)));
    echo '   数学:';
    $point[$i][1] = strval(trim(fgets(STDIN)));

    $ave = ($point[$i][0] + $point[$i][1])/2 ;
    $sumJap += $point[$i][0];
    $sumMath += $point[$i][1];
}

print_r($point);

echo 'No.  国語  数学  平均'."\n";
for($i = 0;$i < 6;$i++){
    echo ($i+1).'    '.$point[$i][0].'    '.$point[$i][1].'    '.$ave."\n";
}

echo '平均 '.round(($sumJap/6),1).'  '.round(($sumMath/6),2)."\n";

?>