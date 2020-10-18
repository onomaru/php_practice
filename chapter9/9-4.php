<?php

class Day
{
    private $year = 1;
    private $month = 1;
    private $date = 1;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f), $a);
        }
    }

    public function __construct0()
    {
    }

    // public function __construct1($year)
    // {
    //     $this->year = $year;
    // }
    public function __construct1($d)
    {
        $this->year = $d->year;
        $this->month = $d->month;
        $this->date = $d->date;
    }
   
   
    public function __construct2($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }
   
    public function __construct3($year, $month, $date)
    {
        $this->year = $year;
        $this->month = $month;
        $this->date = $date;
    }

    
    //cloneしたときに実行される内容
    public function __clone()
    {
        echo 'cloneを作成しました'."\n";
    }
    //cloneのやり方
    //$オブジェクト名 = new クラス名;
    //$クローンオブジェクト名 = clone $オブジェクト名;


    public function getYear()
    {
        return $this->year;
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function getDate()
    {
        return $this->date;
    }


    public function setYear($year)
    {
        $this->year = $year;
    }
    public function setMonth($month)
    {
        $this->month = $month;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function set($year, $month, $date)
    {
        $this->year = $year;
        $this->month = $month;
        $this->date = $date;
    }
    public function dayOfWeek()
    {
        $y = $this->year;
        $m = $this->month;
        if ($m == 1 || $m == 2) {
            $y--;
            $m += 12;
        }
        //機能しない
        return ($y + $y / 4 - $y / 100 + $y / 400 + (13 * $m + 8) / 5 + $this->date % 7);
    }
    public function equalTo($d)
    {
        return $this->year == $d->year && $this->month == $d->month && $this->date == $d->date ;
    }
    public function __toString()
    {
        $wd = ['日','月','火','水','木','金','土'];
        return sprintf("%04d年%02d月%02d日(%s)\n", $this->year, $this->month, $this->date, $wd[$this->dayOfWeek()]);
    }
}

// echo 'day1を入力せよ'."\n";
// echo '年：';
// $year = intval(trim(fgets(STDIN)));
// echo '月：';
// $month = intval(trim(fgets(STDIN)));
// echo '日：';
// $date = intval(trim(fgets(STDIN)));
// $day1 = new Day($year, $month, $date);
// echo $day1;

// $day2 = clone $day1;
// echo $day2;

// if ($day1->equalTo($day2)) {
//     echo 'day1とday2は等しいです'."\n";
// } else {
//     echo 'day1とday2は等しくないです'."\n";
// }

// $d1 = new Day();
// echo 'd1 = '.$d1;
// $d2 = new Day(2010);
// echo 'd2 = '.$d2;
// $d3 = new Day(2010, 10);
// echo 'd3 = '.$d3;
// $d4 = new Day(2010, 10, 15);
// echo 'd4 = '.$d4;

// for ($i = 0;$i < 3;$i++) {
//     $a[$i] = new Day();
// }
// for ($i = 0;$i < 3;$i++) {
//     echo 'a['.$i.'] = '.$a[$i];
// }
