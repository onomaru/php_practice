<?php
//読み込んだ整数値の符号を判定して表示する3-5のプログラムを好きなだけ何度も繰り返して入力、表示できるようにしたプログラム

// while(true){
//     echo '整数値：';
//     $a = intval(trim(fgets(STDIN)));
//     if($a > 0){
//         echo 'その値は正です。'."\n";
//     }else if($a < 0){
//         echo 'その値は負です。'."\n";
//     }else{
//         echo 'その値は0です。'."\n";
//     }
// }

do{
    echo '整数値：';
    $a = intval(trim(fgets(STDIN)));
    if($a > 0){
        echo 'その値は正です。'."\n";
    }else if($a < 0){
        echo 'その値は負です。'."\n";
    }else{
        echo 'その値は0です。'."\n";
    }
    do{
    echo 'もう一回？yes...1 or no...0 :';
    $ans = trim(fgets(STDIN));
    }while($ans != '1' && $ans != '0');

}while($ans == '1');

?>