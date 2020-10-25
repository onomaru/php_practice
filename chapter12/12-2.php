<?php

require_once('../chapter9/9-4.php');
require_once('12-1.php');

$car1 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
printf("現在位置：（%.2f, %.2f）\n", $car1->getX(), $car1->getY());
printf("残り燃料：%.2fリットル\n", $car1->getFuel());
printf("購 入 日:%s", $car1->getPurchaseDay());
