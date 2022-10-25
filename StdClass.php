<?php


require_once "Data/Person.php";

$array = [
    "firstName" => "Royan",
    "middleName" => "Husen",
    "lastName"  => "Fatih",
];

// conversi array le Obejct(stdClass)
 $object = (object) $array;
 var_dump($object);

 echo "First Name $object->firstName" . PHP_EOL;
 echo "Middle Name $object->middleName" . PHP_EOL;
 echo "Last Name $object->lastName" . PHP_EOL;

// conversi object ke array lagi
$arrayLagi = (array) $object;
var_dump($arrayLagi);

// Person
$person = new Person("Royan", "Tangerang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);

?>