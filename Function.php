<?php
require_once "Data/Person.php";

// cara akses function di object nya
$royan = new Person("Royan", "Tangerang");
$royan->name = "Royan";
$royan->sayHello("Royan Husen Fatih");


$budi = new Person("Budi", "Tangerang");
$budi->name = "Budi";
$budi->sayHello(null);


// self keyword
$royan->info();
$budi->info();


?>