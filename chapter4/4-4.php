<?php

//2つの整数値を読み込んで小さい方の数以上で大きい方の数以下の全整数を小さい方から順に表示するプログラム

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
if($a >= $b){
    $max = $a;
    $min = $b;
}else{
    $max = $b;
    $min = $a;
}
for($i = $min ;$i != $max+1 ;$i++){
    echo $i.' ';
}
echo "\n";



echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
if($a >= $b){
    $t = $a;
    $a = $b;
    $b = $t;
}
do{
    echo $a.' ';
    ++$a; 
}while($a <= $b);

echo "\n";
?>