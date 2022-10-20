<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = '1.0';

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// cara akses const panggil nama class nya
echo Person::AUTHOR . PHP_EOL;


?>