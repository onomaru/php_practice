<?php

for($i = 0;$i < 5;$i++){
    $a[$i] = ($i+1)*1.1;
}

print_r($a);

for($i = 0;$i < count($a);$i++){
    echo $a[$i]."\n";
}

?>