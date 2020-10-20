<?php

class MinMax
{
    public static function min2($a, $b)
    {
        return ($a < $b)? $a : $b;
    }
    public static function min3($a, $b, $c)
    {
        $min = $a;
        if ($min > $b) {
            $min = $b;
        }
        if ($min > $c) {
            $min = $c;
        }
        return $min;
    }

    public static function minArray($a)
    {
        $min = $a[0];
        for ($i = 0;$i < count($a);$i++) {
            if ($a[$i] < $min) {
                $min = $a[$i];
            }
        }
        return $min;
    }
    public static function minArrayIndex($a)
    {
        $min = self::minArray($a);
        $count = 0;
        for ($i = 0;$i < count($a);$i++) {
            if ($min == $a[$i]) {
                $count ++;
            }
        }


        for ($i = count($a)-1;$i >= 0;$i--) {
            if ($min == $a[$i]) {
                $c[--$count] = $i;
            }
        }
        return $c;
    }

    public static function Max2($a, $b)
    {
        return ($a > $b)? $a : $b;
    }
    public static function Max3($a, $b, $c)
    {
        $max = $a;
        if ($max < $b) {
            $max = $b;
        }
        if ($max < $c) {
            $max = $c;
        }
        return $max;
    }
    public static function MaxArray($a)
    {
        $max = $a[0];
        for ($i = 0;$i < count($a);$i++) {
            if ($a[$i] > $max) {
                $max = $a[$i];
            }
        }
        return $max;
    }
    public static function MaxArrayIndex($a)
    {
        $max = self::MaxArray($a);
        $count = 0;
        for ($i = 0;$i < count($a);$i++) {
            if ($max == $a[$i]) {
                $count ++;
            }
        }

        for ($i = count($a)-1;$i >= 0;$i--) {
            if ($max == $a[$i]) {
                $c[--$count] = $i;
            }
        }
        return $c;
    }
}

echo 'xの値：';
$x = intval(trim(fgets(STDIN)));
echo 'yの値：';
$y = intval(trim(fgets(STDIN)));
echo 'zの値：';
$z = intval(trim(fgets(STDIN)));

echo '配列aの要素数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i.'] = ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo 'x,yの最小値は'.MinMax::min2($x, $y)."です\n";
echo 'x,yの最大値は'.MinMax::max2($x, $y)."です\n";

echo 'x,y,zの最小値は'.MinMax::min3($x, $y, $z)."です\n";
echo 'x,y,zの最大値は'.MinMax::max3($x, $y, $z)."です\n";

echo '配列aの最大値は'.MinMax::MaxArray($a)."です\n";
$xmax = MinMax::MaxArrayIndex($a);
echo 'そのインデックスは　{ ';
for ($i = 0;$i < count($xmax);$i++) {
    echo $xmax[$i].' ';
}
echo " } です\n";


echo '配列aの最小値は'.MinMax::minArray($a)."です\n";
$xmin = MinMax::minArrayIndex($a);
echo 'そのインデックスは　{ ';
for ($i = 0;$i < count($xmin);$i++) {
    echo $xmin[$i].' ';
}
echo " } です\n";
