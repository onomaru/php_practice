<?php 

echo '点数：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    if($a <= 59){
        echo '不可'."\n";

    }else if($a <= 69){
        echo '可'."\n";

    }else if($a <=79){
        echo '良'."\n";

    }else if($a <= 100){
        echo '優'."\n";
    }else{
        echo '不正な点数です。'."\n";
    }
}else{
    echo '不正な点数です。'."\n";
}
?>