<?php

function printSeason($m){

    switch($m){
        case 3:
        case 4:
        case 5:
            echo "春";
            break;
        case 6:
        case 7:
        case 8:
            echo "夏";
            break;
        case 9:
        case 10:
        case 11:
            echo "秋";
            break;
        case 12:
        case 1:
        case 2:
            echo "冬";
            break;
        default:
            break;

            
    }
    
}

do{
    echo '何月ですか（1~12）:';
    $x = intval(trim(fgets(STDIN)));
}while($x > 12 || $x < 1);

echo 'その月の季節は';
printSeason($x);
echo "です\n";
?>