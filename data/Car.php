<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}
// extends itu hanya satu
// implements lebih ddari satu

class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza". PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return 'Avanza';
    }

    public function isMaintenance(): bool
    {
        return false;
    }

}




?>