<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
echo 'C:';
$c = intval(trim(fgets(STDIN)));


if($a <= $b && $a >= $c || $a >= $b && $a <= $c){
    $ans = $a;
}else if($b <= $a && $b >= $c || $b >= $a && $b <= $c){
    $ans = $b;
}else{
    $ans = $c;
}
echo '中央値は'.$ans.'です。'."\n";


?>