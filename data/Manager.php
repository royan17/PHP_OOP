<?php

// jika di tambahkan : void dibelakang function: tidak mengembalikan values
// example :  function sayHello(string $name): void {}
class Manager
{
    var string $name;
    var string $title;
    public function __construct(string $name = " ", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name " . PHP_EOL;
    }
}

class VicePresidents extends Manager
{ 
    // jika di parent ada contruct disarankan buat di child nya
    public function __construct(string $name = " ")
    {
        // tidak wajib tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    var string $name;
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name " . PHP_EOL;
    }

}

?>