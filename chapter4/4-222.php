<?php

echo '左下';
echo '整数:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $i;$j++){
        echo '*';
    }
    echo "\n";
}

echo '左上';
echo '整数:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $a-$i+1;$j++){
        echo '*';
    }
    echo "\n";
}

echo '右下';
echo '整数:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $a-$i;$j++){
        echo ' ';
    }
    for($j = 1;$j <= $i;$j++){
        echo '*';
    }
    echo "\n";
}

echo '右上';
echo '整数:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $i-1;$j++){
        echo ' ';
    }
    for($j = 1;$j <= $a-$i+1;$j++){
        echo '*';
    }
    echo "\n";
}

?>