<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));

$ans = $a > $b ? $a - $b : $b - $a;
if($ans <= 10){
    echo 'それらの差は10以下です。'."\n";
}else{
    echo 'それらの差は11以上です。'."\n";
}


?>