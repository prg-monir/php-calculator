<?php 

require __DIR__."/vendor/autoload.php";


$calculator = new src\classes\Calculator();
$calculator->setOparation( new src\classes\Adder); //
$calculator->calculate(20,30,50); // 100


$calculator->setOparation(new src\classes\Subtraction);
$calculator->calculate(10);// 90



$calculator->setOparation(new src\classes\Division);
$calculator->calculate(10);// 90




echo $calculator->showResult();
