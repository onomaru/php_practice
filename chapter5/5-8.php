<?php

echo '    float      int  '."\n";
echo '-----------------------'."\n";

(float)$x = 0.00;
for((int)$i = 0;$i <= 1000;$i++,$x += 0.001){
    echo sprintf( '%9.7f', $x ).' '.sprintf( '%9.7f', (float)$i/1000 )."\n";
}
?>