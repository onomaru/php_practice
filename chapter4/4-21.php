<?php

echo '正方形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 0;$i < $a;$i++){
    for($j = 0;$j < $a;$j++){
        echo '*';
    }
    echo "\n";
}
?>