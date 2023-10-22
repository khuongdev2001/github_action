<?php

use app\CalculateAge;

require "nguyenhuukhuong/autoload.php";

$calculate = new CalculateAge();

echo $calculate->calculate(1, 2);
