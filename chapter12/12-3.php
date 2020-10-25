<?php

require_once('../chapter9/9-4.php');
require_once('12-1.php');

$car2 = new ExCar('W140', 1885, 1490, 5220, 95.0, new Day(2005, 10, 13));
echo $car2->putSpec();
