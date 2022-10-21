<?php

require_once "data/Person.php";

$person = new Person("Royan", "Tangerang");
$person->name = "Royan";
$person->address = null;
$person->country = "Indonesia";

var_dump($person);
echo "Name : $person->name" . PHP_EOL;
echo "Addresss : $person->address" . PHP_EOL;
echo "County : $person->country" . PHP_EOL;

$person1 = new Person("Budi", "Tangerang");
$person1->name = "Budi";
$person1->address = "Tangerang";
$person1->country = "Indonesia";
var_dump($person1);

echo "Name : $person1->name" . PHP_EOL;
echo "Addresss : $person1->address" . PHP_EOL;
echo "County : $person1->country" . PHP_EOL;


?>