<?php

class Id
{
    public static $counter = 0;
    private $id;

    public function __construct()
    {
        $this->id = ++self::$counter;
    }

    public function getId()
    {
        return $this->id;
    }
}

$a = new Id();
$b = new Id();

echo 'aの識別番号：'.$a->getId()."\n";
echo 'aの識別番号：'.$b->getId()."\n";

echo 'Id->counter = '.Id::$counter."\n";
echo 'a->counter = '.$a::$counter."\n";//原則使わない
echo 'b->counter = '.$b::$counter."\n";
