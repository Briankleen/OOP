<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->PrintDataCar();

$uberPool = new UberPool("CVB123", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->PrintDataCar();
?>