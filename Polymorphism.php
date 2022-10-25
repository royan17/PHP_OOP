<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Royan");
var_dump($company);

$company->programmer = new BackendProgrammer("Budi");
var_dump($company);

$company->programmer = new FontendProgrammer("Joko");
var_dump($company);


sayHelloProgramer(new Programmer("Royan"));
sayHelloProgramer(new BackendProgrammer("Budi"));
sayHelloProgramer(new FontendProgrammer("Joko"));

?>