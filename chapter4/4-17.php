<?php

echo '何個*を表示しますか：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    for($i = 1;$i <= $a;$i++){
        if($i % 5 != 0){
            echo '*';
        }else{
            echo '*'."\n";
        }

    }
    echo "\n";
}


/////////////////////////////////////////////
echo '何個*を表示しますか2：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    for($i = 1;$i <= intdiv($a,5);$i++){
        echo '*****'."\n";
    }
    $rest = $a % 5;
    if($rest > 0){
        for($i = 1;$i <= $rest;$i++){
            echo '*';
        }
    }
    echo "\n";
}
?>