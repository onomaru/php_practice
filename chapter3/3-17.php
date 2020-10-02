<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
if($a > $b){
    echo '大きい方は'.$a.'です'."\n";
    echo '小さい方は'.$b.'です'."\n";
}else if($a < $b){
    echo '大きい方は'.$b.'です'."\n";
    echo '小さい方は'.$a.'です'."\n";
}else{
    echo '二つの値は同じです'."\n";
}

?>