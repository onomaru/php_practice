<?php


echo '整数を加算します。'."\n";
$ans = 0;
$loop = 0;

for($i = 0 ;$i < 10;$i++){
    echo '■第'.($i+1).'グループ'."\n";
    for($j = 0;$j < 5;$j++){
        echo '整数：';
        $n = intval(trim(fgets(STDIN)));
        if($n == 88888){
            break;
        }
        if($n == 99999){
            break 2;
        }
        $ans += $n;
        
    }
}

echo '合計は'.$ans."\n";

?>