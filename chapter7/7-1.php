<?php

function signOf($n){
    if($n < 0){
        return -1;
    }else if($n == 0){
        return 0;
    }else{
        return 1;
    }
}

echo '整数x:';
$x = intval(trim(fgets(STDIN)));
$result = signOf($x);
echo 'signOf(x)は'.$result."です\n";
?>