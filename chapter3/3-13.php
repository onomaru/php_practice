<?php 

echo 'a:';
$a = intval(trim(fgets(STDIN)));
echo 'b:';
$b = intval(trim(fgets(STDIN)));

if($a > $b){
    $z = $a - $b;
}else if($a < $b){
    $z = $b - $a;
}else{
    $z = 0;
}
echo 'それらの差は'.$z.'です。'."\n";

echo 'a:';
$a = intval(trim(fgets(STDIN)));
echo 'b:';
$b = intval(trim(fgets(STDIN)));
$z = $a > $b ? $a - $b : $b - $a;
echo 'それらの差は'.$z.'です。'."\n";
?>