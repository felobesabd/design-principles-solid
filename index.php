<?php

require_once __DIR__ . '/vendor/autoload.php';

use SOLID\OCP\Bus;
use SOLID\OCP\Driver;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;
use SOLID\OCP\MoveOnTheRoads;
use \SOLID\OCP\Car;

$felobes = new Driver("felobes", 20, "STY1234", "Cairo");

$route1 = new Route("Cairo", "Alex", 500);
$route2 = new Route("Minia", "Alex", 400);

//$bus1 = new Bus(5, 100, 4);
$plane1 = new Car();
$plane1->setMovable(new MoveOnTheRoads());
$trip1 = new Trip($plane1, "ST10", 30.2, 200);

//var_dump($trip1->move());

// LSP

use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;

$area1 = new Square();
$area1->setWidth(4);
$area1->setHeight(6);
//var_dump($area1->calculateArea());

function f(Rectangle $rectangle)
{
    if ($rectangle instanceof Square) {
        if ($rectangle->calculateArea() !== 36) {
            var_dump('there is something wrong');
        }
    } else {
        if ($rectangle->calculateArea() !== 24) {
            var_dump('there is something wrong');
        }
    }
}
f($area1);

use \SOLID\LSP\LSPViolationType;
use \SOLID\LSP\LSPViolation;
use SOLID\LSP\Encrypt;
use SOLID\LSP\EncryptSubType;

$violation = new LSPViolationType();
$violation->setSalary(2000);
$violationExample = new LSPViolation();
//echo $violationExample->calculateSalaryOfEmployee($violation, 11);

$encrypt = new Encrypt();
$encrypt->setString('felo');
var_dump($encrypt->encryptString());




