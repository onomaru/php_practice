<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo '$a['.$i.'] = ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

for($i = 0;$i < $n * 5;$i++){
    $idx1 = mt_rand(0,$n-1);
    $idx2 = mt_rand(0,$n-1);
    $t = $a[$idx1];
    $a[$idx1] = $a[$idx2];
    $a[$idx2] = $t;
}   


echo '要素をかき混ぜました。'."\n";
for($i = 0;$i < $n;$i++){
    echo '$a['.$i.'] = '.$a[$i]."\n";
}

?>