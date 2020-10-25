<?php

require_once('../chapter9/9-5.php');
// class Account
// {
//     private $name;
//     private $no;
//     private $balance;
//     private $openday;

//     public function __construct($n, $num, $z, $d)
//     {
//         $this->name = $n;
//         $this->no = $num;
//         $this->balance = $z;
//         $this->openday = new Day($d);
//     }

//     public function getName()
//     {
//         return $this->name;
//     }
//     public function getNo()
//     {
//         return $this->no;
//     }
//     public function getBalance()
//     {
//         return $this->balance;
//     }
//     public function getOpenDay()
//     {
//         return new Day($this->openday);
//     }
//     public function deposit($k)
//     {
//         $this->balance += $k;
//     }
//     public function withdraw($k)
//     {
//         $this->balance -= $k;
//     }

//     public function __toString()
//     {
//         return '{'.$this->name.','.$this->no.','.$this->balance."}\n";
//     }
// }

class TimeAccount extends Account
{
    private $timeBalance;

    public function __construct($n, $num, $z, $tb)
    {
        parent::__construct($n, $num, $z);
        $this->timeBalance = $tb;
    }
    public function getTimeBalance()
    {
        return $this->timeBalance;
    }
    public function cancel()
    {
        parent::deposit($this->timeBalance);
    }
    public static function compBalance($a, $b)
    {
        $totala = ($a instanceof TimeAccount)? ($a->getBalance() + $a->getTimeBalance()):$a->getBalance();
        $totalb = ($b instanceof TimeAccount)? ($b->getBalance() + $b->getTimeBalance()):$b->getBalance();
        if ($totala > $totalb) {
            return 1;
        } elseif ($totala < $totalb) {
            return -1;
        } else {
            return 0;
        }
    }
}

$ada = new Account("adachi", "123456", 500);
$oki = new TimeAccount("okita", "654321", 300, 400);
echo "adaとokiの預金残高の比較結果です\n";
switch (TimeAccount::compBalance($ada, $oki)) {
    case 1:
        echo "ada WIN\n";
        break;
    case -1:
        echo "oki WIN\n";
        break;
        
    case 0:
        echo "draw\n";
        break;

}
