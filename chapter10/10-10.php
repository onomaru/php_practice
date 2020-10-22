<?php


require_once('../chapter9/9-4.php');

class Account
{
    private static $count = 0;
    private $name;
    private $no;
    private $balance;
    private $openday;
    private $id;

    public function __construct()
    {
        $this->id += ++self::$count;
        echo "明解銀行での口座開設ありがとうございます。\n";
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f), $a);
        }
    }
    public function __construct2($n, $num)
    {
        $this->name = $n;
        $this->no = $num;
        $this->balance = 0;
        $this->openday = new Day();
    }
    public function __construct4($n, $num, $z, $d)
    {
        $this->name = $n;
        $this->no = $num;
        $this->balance = $z;
        $this->openday = new Day($d);
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
    public function getId()
    {
        return $this->id;
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

// $d = new Day(2010, 10, 15);
// $suzuki = new Account('鈴木一郎', '125768', 100, $d);
// $p = $suzuki->getOpenDay();
// echo '口座開設日:'.$p;

// $p->set(1999, 12, 31);

// $q = $suzuki->getOpenDay();
// echo '口座開設日:'.$q;
////////////////////////////////
echo '口座開設数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '[0]....簡易[1]....詳細：';
    $type = intval(trim(fgets(STDIN)));

    echo '口座情報を入力せよ'."\n";
    echo '名義:';
    $name = strval(trim(fgets(STDIN)));
    echo '番号:';
    $num = intval(trim(fgets(STDIN)));
    if ($type == 0) {
        $a[$i] = new Account($name, $num);
    } else {
        echo '残高:';
        $z = intval(trim(fgets(STDIN)));
        echo '開設年:';
        $year = intval(trim(fgets(STDIN)));
        echo '開設月:';
        $month = intval(trim(fgets(STDIN)));
        echo '開設日:';
        $date = intval(trim(fgets(STDIN)));
        $a[$i] = new Account($name, $num, $z, new Day($year, $month, $date));
    }

    echo '口座基本情報:'.$a[$i];
    echo '識別番号:'.$a[$i]->getId()."\n";
    echo '口座開設日:'.$a[$i]->getOpenDay();
}
