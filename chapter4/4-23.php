<?php

echo 'ピラミッドを表示します。';
echo '段数:';
$n = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $n;$i++){
    for($j = 1;$j <= $n - $i;$j++){
        echo ' ';
    }
    for($j = 1;$j <= 2 * $i-1;$j++){
        echo '*';
    }
    echo "\n";
}












echo 'ピラミッドを表示します。';
echo '段数:';
$n = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $n;$i++){
    for($j = 1;$j <= $n - $i;$j++){
        echo ' ';
    }
    for($j = 1;$j <= 2 * $i - 1;$j++){
        echo '*';
    }
    echo "\n";
}
?>