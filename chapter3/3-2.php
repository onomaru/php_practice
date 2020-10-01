<?php 

echo '整数値：';
$x = intval(trim(fgets(STDIN)));
if($x < 0){
    echo '絶対値は'.($x * -1)."\n";
}else{
    echo '絶対値は'.$x."\n";
}

?>