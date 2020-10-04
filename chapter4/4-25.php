<?php

echo '素数かどうか判定します'."\n";

do{
    echo '２以上の整数値:';
    $n = intval(trim(fgets(STDIN)));
}while($n < 2);

for($i = 2;$i < $n;$i++){
    if($n % $i == 0){
        $res = $i;
        break;
    }
}

if($res){
    echo $n.'は素数ではありません'."\n";
}else{
    echo $n.'は素数です'."\n";
}

?>
       