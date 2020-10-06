<?php

echo '要素数：';
$a = intval(trim(fgets(STDIN)));

for($i = 0;$i < $a;$i++){
    $rand[$i] = mt_rand(1,10);
}
print_r($rand);


for($i = 10;$i >= 0;$i--){
    for($j = 0;$j < $a;$j++){
        if($rand[$j] >= $i){
            echo '* ';
        }else{
            echo '  ';
        }
    }
    echo "\n";

}


for($i = 0;$i < $a;$i++){
    echo '--';
}
echo "\n";

for($i = 0;$i < $a;$i++){
    echo ($i%10).' ';
}
echo "\n";
?>