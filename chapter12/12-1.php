<?php

require_once('../chapter9/9-4.php');
class Car
{
    private $name;
    private $width;
    private $height;
    private $length;
    private $x = 0;
    private $y = 0;
    private $fuel;
    private $purchaseDay;

    public function __construct($name, $width, $height, $length, $fuel, $purchaseDay)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->fuel = $fuel;
        $this->x = 0;
        $this->y = 0;
        $this->purchaseDay = new Day($purchaseDay);
    }

    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }

    public function getFuel()
    {
        return $this->fuel;
    }
    public function getPurchaseDay()
    {
        return new Day($this->purchaseDay);
    }
    public function putSpec()
    {
        echo '名前'.$this->name."\n";
        echo '車幅'.$this->width."mm\n";
        echo '車高'.$this->height."mm\n";
        echo '車長'.$this->length."mm\n";
    }
    public function move($dx, $dy)
    {
        $dist = sqrt($dx * $dx + $dy * $dy);
        if ($dist > $this->fuel) {
            return false;
        } else {
            $this->fuel -= $dist;
            $this->x += $dx;
            $this->y += $dy;
            return true;
        }
    }
}

class ExCar extends Car
{
    public $totalMileage;
    public function __construct($name, $width, $height, $length, $fuel, $purchaseDay)
    {
        //parent::__constructがないと親クラスの引数のないコンストラクタが呼び出される
        //parent::__construct()が呼び出される
        parent::__construct($name, $width, $height, $length, $fuel, $purchaseDay);
        $this->totalMileage = 0.0;
    }

    public function getTotalMileage()
    {
        return $this->totalMileage;
    }
    public function putSpec()
    {
        parent::putSpec();
        printf("総走行距離：%.2fkm\n", $this->totalMileage);
    }
    public function move($dx, $dy)
    {
        $dist = sqrt($dx * $dx + $dy * $dy);
        if (!(parent::move($dx, $dy))) {
            return false;
        } else {
            $this->totalMileage = $dist;
            return true;
        }
    }
}
//parent::メソッド名で親クラスのメソッドを呼び出せる

//12-2
// $car1 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
// printf("現在位置：（%.2f, %.2f）\n", $car1->getX(), $car1->getY());
// printf("残り燃料：%.2fリットル\n", $car1->getFuel());
// printf("購 入 日:%s", $car1->getPurchaseDay());

//12-3
// $car2 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
// echo $car2->putSpec();

//12-4
// $car1 = new Car('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
// $car2 = new ExCar('W221', 1845, 1490, 5205, 90.0, new Day(2010, 12, 24));
// $x = $car2;
// $y = $car2;
// printf("購 入 日:%s", $x->getPurchaseDay());
// printf("購 入 日:%s", $y->getPurchaseDay());
// printf("yの総走行距離：%.1f\n", $y->getTotalMileage());

//12-5
// $car1 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
// $car1->putSpec();

//12-6
// $car1 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
// $car1->move(10, 10);
// echo "yの総走行距離：".$car1->getTotalMileage()."\n";
