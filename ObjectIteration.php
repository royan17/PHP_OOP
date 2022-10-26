<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator()
    {
        // $array = [
        //     "first" => $this->first,
        //     "second" => $this->second,
        //     "third" => $this->third,
        //     "fourth" => $this->fourth,
        // ];

        // cara menggunakan yield: untuk meng generate Iterator secara otomatis
        $array = [
            yield "first" => $this->first,
            yield "second" => $this->second,
            yield "third" => $this->third,
            yield "fourth" => $this->fourth,
        ];

        // cara 1
        return new ArrayIterator($array);

        // cara 2
        // $iterator = new ArrayIterator($array);
        // return $iterator;
    }

}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}


?>