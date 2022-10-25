<?php

require_once "Data/Location.php";

use Data\{Location, City, Province};

// abstract tidak bisa di buat obeject, turunan bukan abstract bisa di buat obeject
// $location = new Location(); // ERROR

$city = new City();
$province = new Province();
