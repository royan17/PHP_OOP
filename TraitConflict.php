<?php

trait A {
    function doA(): void
    {
        echo "a" . PHP_EOL;
    }

    function doB(): void
    {
        echo "b". PHP_EOL;
    }
}


trait B {
    function doA(): void
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B". PHP_EOL;
    }
}

class Example
{
    use A, B
    {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Example();
$sample->doA();
$sample->doB();


?>