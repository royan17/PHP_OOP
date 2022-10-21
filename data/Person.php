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
        if (is_null($name)) {
            echo "Hi, My name is $this->name" . PHP_EOL;
        } else {
            echo "Hi, My $name is $this->name" . PHP_EOL;
        }
    }


    // self keyword
    function info()
    {
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }


    // constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // function destruct
    // Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
    // dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup
    // proses menulis file, sehingga tidak terjadi leak memory
    function __destruct()
    {
        echo " Obejct person $this->name is destroyed" . PHP_EOL;
    }


}



?>