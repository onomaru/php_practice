<?php
echo '文字列：';
$s = strval(trim(fgets(STDIN)));
$nu = null;
$s1 = "ABC";
$s2 = "ABC";
$s3 = "ABC";
$s3 = "XYZ";

echo "s = ".$s.PHP_EOL;
echo "nu = ".$nu.PHP_EOL;
echo "s1 = ".$s1.PHP_EOL;
echo "s2 = ".$s2.PHP_EOL;
echo "s3 = ".$s3.PHP_EOL;
echo ($s1 === $s2)? "$s1 == $s2\n" : "$s1 != $s2\n";
//一致演算子(===)を使用する場合、 オブジェクト変数は、同じクラスの同じインスタンスを参照する場合のみ、 等しいとされます。
