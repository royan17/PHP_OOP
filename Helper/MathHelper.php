<?php

namespace Helper;

class MathHelper
{
    static public string $name = "MathHelper";

    static public function sum(int...$numbers)
    {
        $total = 0;
        foreach ($numbers as $numer) {
            $total += $numer;
        }
        return $total;
    }
}

?>