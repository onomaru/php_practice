<?php

echo '何個表示しますか:';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    for($i = 1;$i <= $a;$i++){
        if($i % 2 == 1){
            echo '*';
        }else{
            echo '+';
        }
    }
    echo "\n";
}

echo '何個表示しますか:';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    $i = 0;
    while($i  < intdiv($a,2)){
        echo '*+';
        $i ++;
    }
    if($a % 2 == 1){
        echo '*';
    }
    echo "\n";
}
?>