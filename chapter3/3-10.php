<?php 

echo '整数：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    if($a % 3 == 0){
        echo 'その値は３で割り切れます。'."\n";
    }else if($a % 3 == 1){
        echo 'その値を３で割ったあまりは１です。'."\n";
    }else if($a % 3 == 2){
        echo 'その値を３で割ったあまりは２です。'."\n";
    }
}else{
    echo '正ではない値が入力されました。'."\n";
}
?>