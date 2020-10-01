<?php 

echo '整数値：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    echo 'その値は正です。'."\n";
}else if($a < 0){
    echo 'その値は負です。'."\n";
}else{
    echo 'その値は0です。'."\n";
}
?>
