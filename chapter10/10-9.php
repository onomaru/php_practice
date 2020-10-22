<?php

class Point2D
{
    private $x = 0;
    private $y = 0;
    private static $count = 0;
    private static $day;

    public function __construct()
    {
        self::$day = date("j");
        self::$count +=1 ;
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f), $a);
        }
        if (self::$day == self::$count) {
            echo "あたり\n";
            printf("今日%d個目の座標が生成されました。\n", self::$count);
        }
    }

    public function __construct0()
    {
        $this->x = 0;
        $this->y = 0;
    }
    public function __construct1($x)
    {
        $this->x = $x;
        $this->y = 0;
    }
    public function __construct2($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public static function getCounter()
    {
        return self::$count;
    }

    public function __toString()
    {
        return "{".$this->x.",".$this->y."}\n";
    }
}


for ($i = 0;$i < 40;$i++) {
    $day = new Point2D();
    printf("%2d %s", $i, $day);
}
