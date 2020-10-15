<?php

class Human
{
    private $name;
    private $height;
    private $weight;

    public function __construct($n, $h, $w)
    {
        $this->name = $n;
        $this->height = $h;
        $this->weight = $w;
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

    public function gainWeight($w)
    {
        $this->weight += $w;
    }
    public function reduceWeight($w)
    {
        $this->weight -= $w;
    }
}


$suzuki = new Human('鈴木二郎', 170, 60);
$takada = new Human('高田龍一', 166, 72);

$suzuki->gainWeight(3);
$takada->reduceWeight(5);


echo '名前:'.$suzuki->getName(),"\n";
echo '身長:'.$suzuki->getHeight(),"cm\n";
echo '体重:'.$suzuki->getWeight()."kg\n";
echo "\n";
echo '名前:'.$takada->getName()."\n";
echo '身長:'.$takada->getHeight()."cm\n";
echo '体重:'.$takada->getWeight()."kg\n";
