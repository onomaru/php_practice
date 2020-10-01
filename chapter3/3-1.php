<?php

    echo '整数値：';
    $x = intval(trim(fgets(STDIN)));
    if($x < 0){
        echo 'その値は負です。'."\n";
    }

?>