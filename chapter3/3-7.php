<?php 

echo 'a:';
$a = intval(trim(fgets(STDIN)));
echo 'b:';
$b = intval(trim(fgets(STDIN)));
if($a > $b){
    echo 'aのほうが大きいです。'."\n";
}else if($a < $b){
    echo 'bのほうが大きいです。'."\n";
}else{
    echo 'aとbは同じ値です。'."\n";
}

?>