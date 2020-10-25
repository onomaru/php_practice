<?php
require_once('../chapter9/9-4.php');
require_once('12-1.php');

$car1 = new Car('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
$car2 = new ExCar('W221', 1845, 1490, 5205, 90.0, new Day(2010, 12, 24));
$x = $car2;
$y = $car2;
printf("購 入 日:%s", $x->getPurchaseDay());
printf("購 入 日:%s", $y->getPurchaseDay());
printf("yの総走行距離：%.1f\n", $y->getTotalMileage());
