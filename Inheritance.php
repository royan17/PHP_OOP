<?php

require "Data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresidents();
$vp->name = "Royan";
$vp->sayHello("Joko");


?>