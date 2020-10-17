<?php

require "vendor/autoload.php";

use Tes\Square;
use Tes\Triangle;
use Tes\Circle;


echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
