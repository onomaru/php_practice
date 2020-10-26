<?php
echo "文字列：";
$moji = strval(trim(fgets(STDIN)));
echo $moji;
echo '逆から読むと'.strrev($moji)."\n";

echo "文字列：";
$moji2 = strval(trim(fgets(STDIN)));
for ($i = 1;$i <= mb_strlen($moji2);$i++) {
    $mojimoji.=mb_substr($moji2, -$i, 1, "UTF-8");
}
echo '逆から読むと'.$mojimoji."\n";


/* マルチバイト対応strrevメソッド */
// function mb_strrev($data, $code)
// {
//     $n = mb_strlen($data, $code);
//     for ($i = 0; $i < $n; $i++) {
//         $r_array[$i] = mb_substr($data, $i, 1, $code);
//     }
//     $r_array = array_reverse($r_array);
//     $data = null;
//     for ($i = 0; $i < $n; $i++) {
//         $data .= $r_array[$i];
//     }
//     return $data;
// }
// $str = "漢字";
// $str2 = mb_strrev($str, "UTF-8"); #2つめの引数は環境に合わせた文字コード
// echo $str2."\n";
