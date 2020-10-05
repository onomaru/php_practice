<?php


for($i = 0;$i < 5;$i++){
    $a[] = 5 - $i ; 
}


for($i = 0;$i < count($a);$i++){
    echo 'a['.$i.'] = '.$a[$i]."\n";
}
?>