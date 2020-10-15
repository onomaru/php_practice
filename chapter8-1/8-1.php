<?php

class Human
{
    public $name;
    public $height;
    public $weight;
}

$suzuki = new Human();
$suzuki->name = '鈴木二郎';
$suzuki->height = '170';
$suzuki->weight = '60';

$takada = new Human();
$takada->name = '高田龍一';
$takada->height = '166';
$takada->weight = '72';

echo '名前 :'.$takada->name."\n";
echo '身長 :'.$takada->height."cm\n";
echo '体重 :'.$takada->weight."kg\n";
echo "\n";
echo '名前 :'.$suzuki->name."\n";
echo '身長 :'.$suzuki->height."cm\n";
echo '体重 :'.$suzuki->weight."kg\n";
