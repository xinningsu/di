<?php

class FruitController
{
    public function show(FruitInterface $fruit)
    {
        echo $fruit->name(), "\n";
    }
}