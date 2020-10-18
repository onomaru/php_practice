<?php

class Coordinate
{
    private $x;
    private $y;

    public function __construct()
    {
        $a = func_num_args();
        if ($a == 2) {
            $this->set(func_get_arg(0), func_get_arg(1));
        } elseif ($a == 1) {
            $this->x = func_get_arg(0)->getX();
            $this->y = func_get_arg(0)->getY();
        } else {
            $this->x = 0.0;
            $this->y = 0.0;
        }
    }

    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function set($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function equalTo($c)
    {
        return $this->x == $c->x && $this->y == $c->y;
    }
    public function __toString()
    {
        return '('.$this->x.','.$this->y.')'."\n";
    }
}

$p = new Coordinate(3.3, 5.5);
$q = new Coordinate($p);
$x = new Coordinate();
// var_dump($p);
// var_dump($q);
// var_dump($x);

echo "\n";

echo '座標pを入力せよ'."\n";
echo 'X座標：';
$x = doubleval(trim(fgets(STDIN)));
echo 'Y座標：';
$y = doubleval(trim(fgets(STDIN)));

$p = new Coordinate($x, $y);
echo 'p = '.$p;
echo 'qをpと同じ座標として作りました。'."\n";
$q = new Coordinate($p);
echo 'q = '.$q;

if ($p->equalTo($q)) {
    echo 'pとqは等しいです'."\n";
} else {
    echo 'pとqは等しいです'."\n";
}

$c1 = new Coordinate();
$c2 = new Coordinate(1.1, 2.2);

echo 'c1 = '.$c1;
echo 'c2 = '.$c2;

$a = [];
for ($i = 0;$i < 3;$i++) {
    $a[$i] = new Coordinate();
}

for ($i = 0;$i < 3;$i++) {
    echo '$a['.$i.'] = '.$a[$i];
}
