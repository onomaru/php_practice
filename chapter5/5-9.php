<?php
echo '    x      xの2乗  '."\n";
echo '-----------------------'."\n";


for((float)$x = 0.0;$x <= 1.0;$x+=0.001){
    echo sprintf( '%5.3f', $x ).' '.sprintf( '%10.7f', $x*$x )."\n";
}
////////////////////

echo '    x      xの2乗  '."\n";
echo '-----------------------'."\n";


for((int)$i = 0;$i <= 1000;$i++){
    (float)$x = (float)$i/1000;
    echo sprintf( '%5.3f', $x ).' '.sprintf( '%10.7f', $x*$x )."\n";
}

?>