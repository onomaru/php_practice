<?php

echo '英語の月名を入力してください'."\n";
echo 'なお、先頭は大文字で２文字目以降は小文字とします。'."\n";

$month = ['January','February','March','April','May','June','July','August','September','October','November','December'];

do{
    do{
        $n = mt_rand(1,12);

    }while($n == $last);

    do{
        echo $n.'月';
        $last = $n;
        $ans = strval(trim(fgets(STDIN)));
        if($month[$n-1] == $ans){
            echo '正解！';
            echo 'もう一度？1...Yes/0...No';
            $again = intval(trim(fgets(STDIN)));
            break;
        }else{
            echo '違います。';
        }
    }while($month[$n-1] != $ans);
}while($again == 1);
?>