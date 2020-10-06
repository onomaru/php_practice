<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    $a[$i] = mt_rand(1,10);
    echo 'a['.$i.'] = '.$a[$i]."\n";
}
?>