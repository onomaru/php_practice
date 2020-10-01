<?php 

echo '整数：';
$a = intval(trim(fgets(STDIN)));

if($a > 0){
    if($a % 10 == 0){
        echo 'その値は10で割り切れます。'."\n";
    }else{
        echo 'その値は10で割り切れません。'."\n";
    }
}else{
    echo '正ではない値が入力されました。'."\n";

}
?>