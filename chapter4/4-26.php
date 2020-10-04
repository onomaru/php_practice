<?php

// echo '整数を加算します。';
// echo '何個加算しますか:';
// $count1 = intval(trim(fgets(STDIN)));
// $count2 = (int)0;
// $ans = 0;
// do{ 
//     echo '整数（0で終了）:';
//     $n = intval(trim(fgets(STDIN)));
//     $ans += $n;
//     $count2 ++;
//     echo $count1.$count2."\n";
//     echo $n."\n"; 
// }while($count1 != $count2);

// echo '合計は'.$ans;
// echo '平均は'.$ans / $count1;


/////////////////////////////////

echo '整数を加算します。';
echo '何個加算しますか:';
$count = intval(trim(fgets(STDIN)));

for($i = 0;$i < $count;$i++){
    echo '整数（0で終了）:';
    $n = intval(trim(fgets(STDIN)));
    $ans += $n;
    if($n == 0){
        break;
    }
}
echo '合計は'.$ans."\n";
echo '平均は'.$ans / $i."\n";
?>