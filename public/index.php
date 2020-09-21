<?php
require 'lib/interfaceOperation.php';
require 'lib/classCalc.php';
require 'lib/classSumm.php';
require 'lib/classSubtract.php';
require 'lib/classMulti.php';
require 'lib/classDivision.php';
require 'lib/classExpo.php';



$calc = new Calc();
$calc -> x = 10;
$calc -> y = 20;
$summ = new Summ();
$sub = new Subtract();
$multi = new Multi();
$divis = new Division;
$expo = new Expo;
echo "$calc->x + $calc->y = " .$calc->Calculate ($summ). "<br>";
echo "$calc->x - $calc->y = " .$calc->Calculate ($sub). "<br>";
echo "$calc->x * $calc->y = " .$calc->Calculate ($multi). "<br>";
echo "$calc->x / $calc->y = " .$calc->Calculate ($divis). "<br>";
echo "$calc->x в степени $calc->y = " .$calc->Calculate ($expo). "<br>";
?>

