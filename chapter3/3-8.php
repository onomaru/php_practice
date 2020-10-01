<?php 

echo '整数：';
$a = intval(trim(fgets(STDIN)));

if($a % 5 == 0 && $a > 0){
    echo 'その値は5で割り切れます。'."\n";
}else if($a % 5 != 0 && $a > 0){
    echo 'その値は5で割り切れません。'."\n";
}else{
    echo '正ではない値が入力されました。'."\n";
}

echo '整数2：';
$a = intval(trim(fgets(STDIN)));

if($a > 0){
    if($a % 5 == 0){
        echo 'その値は5で割り切れます。'."\n";
    }else{
        echo 'その値は5で割り切れません。'."\n";
    }
}else{
    echo '正ではない値が入力されました。'."\n";

}
?>