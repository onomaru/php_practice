<?php
echo '文字列s1:';
$s1 = strval(trim(fgets(STDIN)));
echo '文字列s2:';
$s2 = strval(trim(fgets(STDIN)));
$pos = strpos($s1, $s2);

if ($pos === false) {
    echo "s1にs2は含まれません\n";
} else {
    echo $pos."\n";
    echo $s1."\n";
    for ($i = 0;$i < $pos;$i++) {
        echo ' ';
    }
    echo $s2."\n";
}

//これらの関数は、strpos（stripos）関数と同じ使い方ができ、日本語などをはじめとしたマルチバイト文字列に対応したもの
echo '文字列s1:';
$s1 = strval(trim(fgets(STDIN)));
echo '文字列s2:';
$s2 = strval(trim(fgets(STDIN)));
$pos = mb_strpos($s1, $s2, 0, "UTF-8");

if ($pos === false) {
    echo "s1にs2は含まれません\n";
} else {
    echo $pos."\n";
    echo $s1."\n";
    for ($i = 0;$i < $pos;$i++) {
        echo ' ';
    }
    echo $s2."\n";
}
