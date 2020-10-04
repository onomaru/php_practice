<?php
echo '整数値：';
$a = intval(trim(fgets(STDIN)));
for($i = 1;$i <= $a;$i++){
    echo $i.'の二乗は'.$i * $i."\n";
}
?>