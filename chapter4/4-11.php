<?php

echo '何個*を表示しますか：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    for($i = 0;$i < $a;$i++){
        echo '*';
    }
    echo "\n";
}


echo '何個*を表示しますか：';
$a = intval(trim(fgets(STDIN)));

$i = 0;
do{
    echo '*';
    $i ++;
}while($a > $i);

echo "\n";
?>