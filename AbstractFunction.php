<?php

require_once "Data/Animal.php";

use Data\{Animal, Cat, Mouse};

$cat = new Cat();
$cat->name = "Tom";
$cat->run();

$mouse = new Mouse();
$mouse->name = "Jerry";
$mouse->run();


?>

