<?php

class Person
{
    const AUTHOR = "Programmer Zaman Now";
    
    var string $name;
    // nullable
    var ?string $address = null;
    // memberikan default value
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if(is_null($name)) {
            echo "Hi, My name is $this->name" .PHP_EOL;
        }else{
            echo "Hi, My $name is $this->name" .PHP_EOL;
        }
    }

}


?>