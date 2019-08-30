<?php

class Atm
{
    protected $icbc;

    public function __construct()
    {
        $this->icbc = new Icbc();
    }

    public function deposit()
    {
        return $this->icbc->deposit();
    }

    public function withdraw()
    {
        return $this->icbc->withdraw();
    }

    public function transfer()
    {
        return $this->icbc->transfer();
    }
}

class Icbc
{
    public function deposit()
    {
        return 'Deposit successfully';
    }

    public function withdraw()
    {
        return 'Withdraw successfully';
    }

    public function transfer()
    {
        return 'Transfer successfully';
    }
}
