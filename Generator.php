<?php

function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

// menggunakan yield
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGenap(10) as $value) {
    echo "Genap: " . $value . PHP_EOL;
}

foreach (getGanjil(10) as $value) {
    echo "Ganjil: " . $value . PHP_EOL;
}


?>