<?php

do{
    echo '正の整数値：';
    $a = intval(trim(fgets(STDIN)));
    }while($a <= 0);

for($i = 0;$i <= $a;$i++){
    echo $i."\n";
}
?>