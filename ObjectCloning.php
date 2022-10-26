<?php

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Royan";
$student1->value = 100;
$student1->setSample("XXXX");

var_dump($student1);

// fitur clone bisa colonning tipe data private
$student2 = clone $student1;

var_dump($student2);


?>