<?php

class I
{
    public function work()
    {
        $key = getenv('key');
        try {
            $car = new Car($key);
        } catch (Exception $ex) {
            // ...
        }

        $car->run();

        // start work
    }
}

class Car
{
    public function __construct($key)
    {
        // start the car with key
        // throw new Exception('failed to start car');
    }

    public function run()
    {
        // start running
    }
}
