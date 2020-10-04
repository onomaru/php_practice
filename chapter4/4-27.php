<?php

echo '整数を加算します。';
echo '何個加算しますか:';
$count = intval(trim(fgets(STDIN)));
$ans = 0;

for($i = 0;$i < $count;$i++){   
    echo '整数:';
    $n = intval(trim(fgets(STDIN)));
    if($n == 0){
        break;
    }
    if(($ans + $n)> 1000){
        echo '合計が1000を超えました'."\n";
        echo '最後の数値は無視します'."\n";
        break;
    }
    $ans += $n;
}
echo '合計は'.$ans."\n";
if($i != 0){
    echo '平均は'.$ans / $i."\n";
}
?>