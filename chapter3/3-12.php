<?php 

echo 'a:';
$a = floatval(trim(fgets(STDIN)));
echo 'b:';
$b = floatval(trim(fgets(STDIN)));
if($a > $b){
    echo '大きい方の値は'.$a.'です。'."\n";
}else{
    echo '大きい方の値は'.$b.'です。'."\n";
}

echo 'a:';
$a = floatval(trim(fgets(STDIN)));
echo 'b:';
$b = floatval(trim(fgets(STDIN)));

$max = $a > $b? $a : $b;
echo '大きい方の値は'.$max.'です。'."\n";


?>