<?php

function putChars($c,$n){
    while($n > 0){
        echo $c;
        $n--;
    }

}
function putStars($n){
    putChars('*',$n);
}

echo "左下直角に三角形を表示します\n";
echo '段数は？';
$height = intval(trim(fgets(STDIN)));

for($i = 1;$i <= $height;$i++){
    putStars($i);
    echo "\n";
}

?>