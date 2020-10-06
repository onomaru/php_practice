<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo '$a['.$i.'] = ';
    $array = intval(trim(fgets(STDIN)));
    $a[$i] = $array;
}
print_r($a);

for($i = 0;$i < $n;$i++){ 
    if($i == 0){
        echo '{'.$a[$i].',';
    }else if(($i+1) == $n){
        echo $a[$i].'}'."\n";
    }else{
        echo $a[$i].',';
    }
}

?>