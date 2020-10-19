<?php
require_once('9-4.php');
class Human
{
    private $name;
    private $height;
    private $weight;
    private $birthday;

    public function __construct($n, $h, $w, $day)
    {
        $this->name = $n;
        $this->height = $h;
        $this->weight = $w;
        $this->birthday = new Day($day);
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
    public function getBirthday()
    {
        return new Day($this->birthday);
    }

    public function gainWeight($w)
    {
        $this->weight += $w;
    }
    public function reduceWeight($w)
    {
        $this->weight -= $w;
    }
    public function __toString()
    {
        return '{'.$this->name.': '.$this->height.'cm '.$this->weight.'kg '.$this->birthday.'生まれ}'."\n";
    }
}


$suzuki = new Human('鈴木二郎', 170, 60, new Day(1975, 3, 12));
$takada = new Human('高田龍一', 166, 72, new Day(1987, 10, 7));

echo '$suzuki = '.$suzuki;
echo '$takada = '.$takada;
