<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
echo 'C:';
$c = intval(trim(fgets(STDIN)));

if($a > $b){
    $t = $a;
    $a = $b;
    $b = $t;
}
if($a > $c){
    $t = $a;
    $a = $c;
    $c = $t;
}
if($b > $c){
    $t = $b;
    $b = $c;
    $c = $t;
}
echo 'A <= B <= Cになるようにソートしました。'."\n";
echo '変数Aは'.$a.'です。'."\n";
echo '変数Bは'.$b.'です。'."\n";
echo '変数Bは'.$c.'です。'."\n";

?>