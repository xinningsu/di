<?php

class Apple implements FruitInterface
{
    protected $type;

    public function __construct($type = null)
    {
        $this->type = $type;
    }

    public function name()
    {
        if ($this->type === 1) {
            return 'Red Apple';
        } elseif ($this->type === 2) {
            return 'Green Apple';
        }

        return 'Apple';
    }
}
