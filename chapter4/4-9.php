<?php
//正の整数値を読み込んで桁数を求める
echo '正の整数値の桁数を求めます'."\n";

do{
echo '正の整数値：';
$a = intval(trim(fgets(STDIN)));
}while($a <= 0);

$keta = 0;
while($a > 0){
    $a = intdiv($a,10);
    $keta ++;
}

echo 'その数の桁数は'.$keta."\n";


?>