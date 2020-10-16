<?php

class Coordinate
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
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
}

// echo '座標pを入力せよ'."\n";
// echo 'X座標';
// $x = doubleval(trim(fgets(STDIN)));
// echo 'Y座標';
// $y = doubleval(trim(fgets(STDIN)));
// $p = new Coordinate($x, $y);

// echo 'p = {'.$p->getX().','.$p->getY()."}\n";


// $q = $p;
// $q->set(9.9, 9.9);
// echo 'p = {'.$p->getX().','.$p->getY()."}\n";
// echo 'q = {'.$q->getX().','.$q->getY()."}\n";
// $p->set(9.4, 9.4);
// echo 'p = {'.$p->getX().','.$p->getY()."}\n";
// echo 'q = {'.$q->getX().','.$q->getY()."}\n";
