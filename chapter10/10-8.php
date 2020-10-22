<?php

class Day
{
    private $year = 1;
    private $month = 1;
    private $date = 1;
    private static $mday = [
        [31,28,31,30,31,30,31,31,30,31,30,31], //平年
        [31,29,31,30,31,30,31,31,30,31,30,31], //閏年
    ];

    public static function isLeap($y) //trueなら閏年
    {
        return $y % 4 == 0 && $y % 100 != 0 || $y % 400 == 0;
    }

    private static function dayOfMonth($y, $m)
    {
        return self::$mday[self::isLeap($y)?1:0][$m-1];
    }
    private static function adjustedMonth($m)
    {
        if ($m < 1) {
            return 1;
        } elseif ($m > 12) {
            return 12;
        }
        return $m;
    }
    private static function adjustedDay($y, $m, $d)
    {
        if ($d < 1) {
            return 1;
        }
        $dmax = self::dayOfMonth($y, $m);
        if ($d > $dmax) {
            return $dmax;
        }
        return $d;
    }

    /////////////////////////////////////////////////////
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
        $this->year = date("Y");
        $this->month = date("n");
        $this->date = date("j");
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
        $this->month = self::adjustedMonth($month);
    }
   
    public function __construct3($year, $month, $date)
    {
        $this->year = $year;
        $this->month = self::adjustedMonth($month);
        $this->date = self::adjustedDay($this->year, $this->month, $date);
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
        $this->date = self::adjustedDay($this->year, $this->month, $this->date);
    }
    public function setMonth($month)
    {
        $this->month = self::adjustedMonth($month);
        $this->date = self::adjustedDay($this->year, $this->month, $this->date);
    }
    public function setDate($date)
    {
        $this->date = self::adjustedDay($this->year, $this->month, $date);
    }
    public function set($year, $month, $date)
    {
        $this->year = $year;
        $this->month = self::adjustedMonth($month);
        $this->date = self::adjustedDay($this->year, $this->month, $date);
    }

    public function isLeap2()
    {
        return self::isLeap($this->year);
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

    /////////////////////////////////////
    public function dayOfYear()
    {
        $days = $this->date;
        for ($i = 1;$i < $this->month;$i++) {
            $days += self::dayOfMonth($this->year, $i);
        }
        return $days;
    }
    public function leftDayOfYear()
    {
        return 365 + ($this->isLeap2()?1:0) - $this->dayOfYear();
    }
    public function compareTo($d)
    {
        return self::compare($this, $d);
    }
    public static function compare($d1, $d2)
    {
        if ($d1->year > $d2->year) {
            return 1;
        }
        if ($d1->year < $d2->year) {
            return -1;
        }
        if ($d1->month > $d2->month) {
            return 1;
        }
        if ($d1->month < $d2->month) {
            return -1;
        }

        if ($d1->date > $d2->date) {
            return 1;
        }
        if ($d1->date < $d2->date) {
            return -1;
        }
        return 0;
    }

    public function succeed()
    {
        if ($this->date < self::dayOfMonth($this->year, $this->month)) {
            $this->date += 1;
        } else {//???
            if (++$this->month > 12) {
                $this->year += 1;
                $this->month = 1;
            }
            $this->date = 1;
        }
    }
    public function succeedingDay()
    {
        $temp = new Day($this);
        $temp->succeed();
        return $temp;
    }

    public function precede()
    {
        if ($this->date > 1) {
            $this->date -= 1;
        } else {
            if (--$this->month < 1) {
                $this->year -= 1;
                $this->month = 12;
            }
            $this->date = self::dayOfMonth($this->year, $this->month);
        }
    }
    public function precedeingDay()
    {
        $temp = new Day($this);
        $temp->precede();
        return $temp;
    }

    public function succeedDays($n)
    {
        if ($n < 0) {
            $this->precedeDays(-$n);
        } elseif ($n > 0) {
            $this->date += $n;
            while ($this->date > self::dayOfMonth($this->year, $this->month)) {
                $this->date -= self::dayOfMonth($this->year, $this->month);
                echo 1;
                if (++$this->month > 12) {
                    $this->year++;
                    $this->month = 1;
                }
            }
        }
    }
    public function after($n)
    {
        $temp = new Day($this);
        $temp->succeedDays($n);
        return $temp;
    }
    public function precedeDays($n)
    {
        if ($n < 0) {
            $this->succeedDays($n);
        } elseif ($n > 0) {
            $this->date -= $n;
            while ($this->date < 1) {
                if (--$this->month < 1) {
                    $this->year -= 1;
                    $this->month = 12;
                }
            }
            $this->date += self::dayOfMonth($this->year, $this->month);
        }
    }
    public function before($n)
    {
        $temp = new Day($this);
        $temp->precedeDays($n);
        return $temp;
    }
}
/////////////////////////////////////////////////
function display($day)
{
    echo $day."に関する情報\n";
    echo '閏年'.($day->isLeap2()? "である。\n":"ではない。\n");
    echo '年内経過日数：'.$day->dayOfYear()."\n";
    echo '年内残り日数：'.$day->leftDayOfYear()."\n";
}

function change($day)
{
    echo "[1]年月日を変更 [2]年を変更\n";
    echo "[3]月を変更 [4]日を変更\n";
    echo "[5]1日進める [6] 1日戻す\n";
    echo "[7]n日進める [8]n日戻す\n";
    $change = intval(trim(fgets(STDIN)));
    $year = 0;
    $month = 0;
    $date = 0;
    $n = 0;
    if ($change == 1 || $change == 2) {
        echo '年：';
        $year = intval(trim(fgets(STDIN)));
    }
    if ($change == 1 || $change == 3) {
        echo '月：';
        $month = intval(trim(fgets(STDIN)));
    }
    if ($change == 1 || $change == 4) {
        echo '日：';
        $date = intval(trim(fgets(STDIN)));
    }
    if ($change == 7 || $change == 8) {
        echo '何日：';
        $n = intval(trim(fgets(STDIN)));
    }
    switch ($change) {
        case 1:
            $day->set($year, $month, $date);
            break;
        case 2:
            $day->setYear($year);
            break;
        case 3:
            $day->setMonth($month);
            break;
        case 4:
            $day->setDate($date);
            break;
        case 5:
            $day->succeed();
            break;
        case 6:
            $day->precede();
            break;
        case 7:
            $day->succeedDays($n);
            break;
        case 8:
            $day->precedeDays();
            break;

    }
    echo $day."に更新されました\n";
}

function compare($day)
{
    echo "比較対象の日付を入力せよ\n";
    echo '年：';
    $year = intval(trim(fgets(STDIN)));
    echo '月：';
    $month = intval(trim(fgets(STDIN)));
    echo '日：';
    $date = intval(trim(fgets(STDIN)));
    $day2 = new Day($year, $month, $date);
    $comp = $day->compareTo($day2);
    echo $day;
    switch ($comp) {
        case -1:
            echo "の方が前。\n";
            break;
        case 1:
            echo "の方が後。\n";
            break;
        case 0:
            echo "と同じ。\n";
    }
}

function beforeAfter($day)
{
    echo "[1]翌日 [2]前日 [3]n日後 [4]n日前：\n";
    $type = intval(trim(fgets(STDIN)));
    $n = 0;
    if ($type == 3 || $type == 4) {
        echo '何日：';
        $n = intval(trim(fgets(STDIN)));
    }
    switch ($type) {
        case 1:
            echo $day->succeedingDay();
            break;
        case 2:
            echo $day->precedeingDay();
            break;
        case 3:
            echo $day->after($n);
            break;
        case 4:
            echo $day->before($n);
            break;
    }
    echo "です。\n";
}

echo "日付を入力せよ\n";
echo '年：';
$year = intval(trim(fgets(STDIN)));
echo '月：';
$month = intval(trim(fgets(STDIN)));
echo '日：';
$date = intval(trim(fgets(STDIN)));
$day = new Day($year, $month, $date);

while (true) {
    echo "[1]日付に関する情報を表示 [2]日付を変更 [3]他の日付との比較\n"."[4]前後の日付を求める [5]終了：\n";
    $menu = intval(trim(fgets(STDIN)));
    if ($menu == 5) {
        break;
    }
    switch ($menu) {
        case 1:
            display($day);
            break;
        case 2:
            change($day);
            break;
        case 3:
            compare($day);
            break;
        case 4:
            beforeAfter($day);
            break;

    }
}
