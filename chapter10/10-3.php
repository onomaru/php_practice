<?php


class Id
{
    private static $counter = 0;
    private $id;

    public function __construct()
    {
        $this->id = ++self::$counter;
    }

    public function getId()
    {
        return $this->id;
    }
    public static function getMaxId()
    {
        return self::$counter;
        //$this（インスタンス変数）はクラスメソッドの中では使えない
        //どのインスタンス変数にアクセスすれば良いかわからないから
    }
}

$a = new Id();
$b = new Id();

echo 'aの識別番号：'.$a->getId()."\n";
echo 'bの識別番号：'.$b->getId()."\n";

echo '最後に与えた識別番号'.Id::getMaxId()."\n";
echo '最後に与えた識別番号'.$a::getMaxId()."\n"; //原則使わない
echo '最後に与えた識別番号'.$b::getMaxId()."\n";
