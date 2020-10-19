<?php

require_once('9-4.php');

class Period
{
    private $from;
    private $to;

    public function __construct($from, $to)
    {
        $this->from = new Day($from);
        $this->to = new Day($to);
    }

    public function getFrom()
    {
        return new Day($this->from);
    }
    public function getTo()
    {
        return new Day($this->to);
    }

    public function __toString()
    {
        return '{'.$this->from.'~'.$this->to."}\n";
    }
}


$meiji = new Period(new Day(1868, 9, 8), new Day(1912, 7, 30));
echo '明治 = '.$meiji;
$taisho = new Period(new Day(1912, 7, 30), new Day(1926, 12, 25));
echo '大正 = '.$taisho;
$shouwa = new Period(new Day(1926, 12, 25), new Day(1989, 1, 18));
echo '昭和 = '.$shouwa;
