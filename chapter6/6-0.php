<?php

$a = array(3);
$a[0] = '';
$a[1] = '';
$a[2] = '';

/////////////
$a = ['a','i','u'];

////////////////

echo '要素数';
$n = intval(trim(fgets(STDIN)));
for($i = 0;$i < $n;$i++){
    $a[$i] = mt_rand(1,10);
}
print_r($a);

for($i = 10;$i > 0;$i--){
    for($j = 0;$j < $n;$j++){
        if($a[$j] >= $i){
            echo '* ';
        }else{
            echo '  ';
        }
    }
    echo "\n";
}
for($i = 0;$i < $n;$i++){
    echo '--';
}
echo "\n";

for($i = 0;$i < $n;$i++){
    echo ($i%10).' ';
}
echo "\n";
?>