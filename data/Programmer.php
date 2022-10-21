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
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}


?>