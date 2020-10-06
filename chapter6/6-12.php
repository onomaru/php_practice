<?php

do{
echo '要素数：';
$n = intval(trim(fgets(STDIN)));
}while($n > 10);

for($i = 0;$i < $n;$i++){

    do{
        $a[$i] = mt_rand(1,10);
        for($j = 0;$j < $i;$j++){
            if($a[$i] == $a[$j]){
                break;
            }
        }
    }while($j < $i);

    
}

for($i = 0;$i < $n;$i++){
    echo 'a['.$i.'] = '.$a[$i]."\n";
}
?>