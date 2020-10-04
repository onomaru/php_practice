<?php

echo '左下直角の二等辺三角形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    echo str_repeat('*',$i)."\n";
}

echo '左下直角の二等辺三角形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 0;$j < $i;$j++){
        echo '*';
    }
    echo "\n";
}
//////////////////////////////////////////////
echo '左上直角の二等辺三角形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $a - $i + 1; $j++){
        echo '*';
    }
    echo "\n";
}

//////////////////////////////////////////////
echo '右下直角の二等辺三角形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j <= $a -$i;$j++){
        echo ' ';
    }

    for($j = 1;$j <= $i; $j++){
        echo '*';
    }
    echo "\n";
}

//////////////////////////////////////////////
echo '右上直角の二等辺三角形を表示します。';
echo '段数は:';
$a = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $a;$i++){
    for($j = 1;$j < $i;$j++){
        echo ' ';
    }

    for($j = 1;$j <= $a -$i + 1;$j++){
        echo '*';
    }
    echo "\n";
}


?>