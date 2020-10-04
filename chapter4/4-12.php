<?php

do{
echo '正の整数値：';
$a = intval(trim(fgets(STDIN)));
}while($a <= 0);

for($i = 0;$i <= $a;$a--){
    echo $a."\n";
}

// do{
//     echo '正の整数値：';
//     $a = intval(trim(fgets(STDIN)));
// }while($a <= 0);

// do{
//     echo $a--."\n";

// }while($a >= 0);
// echo 'aの値は'.$a."\n";
?>