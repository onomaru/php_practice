<?php

require_once('9-4.php');

class Account
{
    private $name;
    private $no;
    private $balance;
    private $openday;

    public function __construct($n, $num, $z)
    {
        $this->name = $n;
        $this->no = $num;
        $this->balance = $z;
        // $this->openday = new Day($d);
    }

    public function getName()
    {
        return $this->name;
    }
    public function getNo()
    {
        return $this->no;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function getOpenDay()
    {
        return new Day($this->openday);
    }
    public function deposit($k)
    {
        $this->balance += $k;
    }
    public function withdraw($k)
    {
        $this->balance -= $k;
    }

    public function __toString()
    {
        return '{'.$this->name.','.$this->no.','.$this->balance."}\n";
    }
}

$d = new Day(2010, 10, 15);
$suzuki = new Account('鈴木一郎', '125768', 100, $d);
$p = $suzuki->getOpenDay();
echo '口座開設日:'.$p;

$p->set(1999, 12, 31);

$q = $suzuki->getOpenDay();
echo '口座開設日:'.$q;
////////////////////////////////
echo '口座情報を入力せよ'."\n";
echo '名義:';
$name = strval(trim(fgets(STDIN)));
echo '番号:';
$num = intval(trim(fgets(STDIN)));
echo '残高:';
$z = intval(trim(fgets(STDIN)));

echo '開設年:';
$year = intval(trim(fgets(STDIN)));
echo '開設月:';
$month = intval(trim(fgets(STDIN)));
echo '開設日:';
$date = intval(trim(fgets(STDIN)));
$a = new Account($name, $num, $z, new Day($year, $month, $date));

echo '口座基本情報:'.$a;
echo '口座開設日:'.$a->getOpenDay();
