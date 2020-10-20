<?php

class Human
{
    private static $counter = 0;
    private $name;
    private $height;
    private $weight;
    private $id;

    public function __construct($n, $h, $w)
    {
        $this->name = $n;
        $this->height = $h;
        $this->weight = $w;
        $this->id = ++self::$counter;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function getId()
    {
        return $this->id;
    }

    public function gainWeight($w)
    {
        $this->weight += $w;
    }
    public function reduceWeight($w)
    {
        $this->weight -= $w;
    }

    public function putData()
    {
        echo '名前:'.$this->getName(),"\n";
        echo '身長:'.$this->getHeight(),"cm\n";
        echo '体重:'.$this->getWeight()."kg\n";
        echo '番号:'.$this->getId()."\n";
    }
}


$suzuki = new Human('鈴木二郎', 170, 60);
$takada = new Human('高田龍一', 166, 72);

$suzuki->gainWeight(3);
$takada->reduceWeight(5);

$suzuki->putData();
$takada->putData();
