<?php

echo '整数を加算します。';
echo '何個加算しますか:';
$count = intval(trim(fgets(STDIN)));
$ans = 0;
$loop = 0;

for($i = 0;$i < $count;$i++){
    echo '整数値：';
    $n = intval(trim(fgets(STDIN)));
    if($n < 0){
        echo '負の数は加算しません'."\n";
        continue;
    }
    $ans += $n;
    $loop ++;

}

echo '合計は'.$ans."\n";
if($i != 0){
    echo '平均は'.$ans / $loop."\n";
}

?>