<?php

class I
{
    public function work(Car $car)
    {
        $car->run();

        // start work
    }
}

class Car
{
    public function __construct()
    {
        // start the car
    }

    public function run()
    {
        // start running
    }
}
