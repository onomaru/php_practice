<?php

function absolute($x)
{
    return $x >= 0?$x:-$x;
//     if(gettype($x) == "integer"){

//     }else if(gettype($x) == "double"){

//     }
// }
}

echo '整数aの値:';
$a = intval(trim(fgets(STDIN)));
echo '整数bの値:';
$b = intval(trim(fgets(STDIN)));
echo '整数cの値:';
$c = floatval(trim(fgets(STDIN)));
echo '整数dの値:';
$d = doubleval(trim(fgets(STDIN)));

echo 'aの絶対値は'.absolute($a)."です\n";
echo 'bの絶対値は'.absolute($b)."です\n";
echo 'cの絶対値は'.absolute($c)."です\n";
echo 'dの絶対値は'.absolute($d)."です\n";
