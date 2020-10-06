<?php


echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    if($i == 0){
        $a[$i] = mt_rand(1,10);
    }else{
        do{
            $a[$i] = mt_rand(1,10);
        }while($a[$i] == $a[$i-1]);
    
    }
    echo 'a['.$i.'] = '.$a[$i]."\n";
}


?>
