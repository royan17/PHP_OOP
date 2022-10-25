<?php

require_once "Data/SayGoodbye.php";

use Data\Traits\{Person, SayHello,SayGoodBye};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "Royan";
var_dump($person);

$person->run();


?>