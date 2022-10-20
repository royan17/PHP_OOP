<?php
require_once "data/Person.php";

// cara akses function di object nya
$royan = new Person();
$royan->name = "Royan";
$royan->sayHello("Royan Husen Fatih");


$budi = new Person();
$budi->name = "Budi";
$budi->sayHello(null);




?>