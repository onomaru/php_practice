<?php

echo '整数値：';
$a = intval(trim(fgets(STDIN)));
$count = 0;
for($i = 1;$i <= $a;$i++){
    if($a % $i == 0){
        echo $i.' ';
        $count ++;
    }
}
echo "\n";
echo '約数は'.$count.'個です'."\n";

?>