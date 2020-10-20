<?php


class ExId
{
    private static $counter = 0;
    private static $step = 1;
    private $id;

    public function __construct()
    {
        $this->id = self::$counter += self::$step;
    }

    public function getId()
    {
        return $this->id;
    }
    public static function getStep()
    {
        return self::$step;
    }
    public static function getMaxId()
    {
        return self::$counter;
        //$this（インスタンス変数）はクラスメソッドの中では使えない
        //どのインスタンス変数にアクセスすれば良いかわからないから
    }
    public static function setStep($step)
    {
        self::$step = ($step >= 1) ? $step : 1;
        return self::$step;
    }
}

$a = new ExId();
$b = new ExId();
$c = new ExId();


echo 'aの識別番号：'.$a->getId()."\n";
echo 'bの識別番号：'.$b->getId()."\n";
echo 'cの識別番号：'.$c->getId()."\n";

ExId::setStep(4);

$d = new ExId();
$e = new ExId();
$f = new ExId();

echo 'dの識別番号：'.$d->getId()."\n";
echo 'eの識別番号：'.$e->getId()."\n";
echo 'fの識別番号：'.$f->getId()."\n";

$max = ExId::getMaxId();
echo '最後に与えた識別番号'.$max."\n";
echo '次回に与える識別番号'.($max + ExId::getStep())."\n";
