<?php

class Car
{
    private $name;
    private $number;
    private $width;
    private $height;
    private $length;
    private $x = 0;
    private $y = 0;
    private $tankage;
    private $fuel;
    private $sfc;

    public function __construct($name, $number, $width, $height, $length, $tankage, $fuel, $sfc)
    {
        $this->name = $name;
        $this->number = $number;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->tankage = $tankage;
        $this->fuel = ($fuel <= $tankage)? $fuel : $tankage;
        $this->sfc = $sfc;
        $this->x = 0;
        $this->y = 0;
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

    public function putSpec()
    {
        echo '名前'.$this->name."\n";
        echo 'ナンバー'.$this->number."\n";
        echo '車幅'.$this->width."mm\n";
        echo '車高'.$this->height."mm\n";
        echo '車長'.$this->length."mm\n";
        echo 'タンク'.$this->tankage."リットル\n";
        echo '燃費'.$this->sfc."km/リットル\n";
    }
    public function move($dx, $dy)
    {
        $dist = sqrt($dx * $dx + $dy * $dy);
        $f = $dist / $this->sfc;
        if ($f > $this->fuel) {
            return false;
        } else {
            $this->fuel -= $f;
            $this->x += $dx;
            $this->y += $dy;
            return true;
        }
    }

    public function refuel($df)
    {
        if ($df > 0) {
            $this->fuel += $df;
            if ($this->fuel > $this->tankage) {
                $this->fuel = $this->tankage;
            }
        }
    }
}
