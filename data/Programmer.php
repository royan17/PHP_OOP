<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}
class FontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgramer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FontendProgrammer) {
        echo "Hello frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}


?>