<?php

echo '正の整数値：';
$a = intval(trim(fgets(STDIN)));
$ans = 1;
for($i = 1;$a >= $i;$i++){
    $ans *= $i;
}
echo '1から'.$a.'までの積は'.$ans."\n";
?>