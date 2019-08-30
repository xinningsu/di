<?php

class Atm
{
    protected $bank;

    public function __construct(Bank $bank)
    {
        $this->bank = $bank;
    }

    public function deposit()
    {
        return $this->bank->deposit();
    }

    public function withdraw()
    {
        return $this->bank->withdraw();
    }

    public function transfer()
    {
        return $this->bank->transfer();
    }
}

interface Bank
{
    public function deposit();
    public function withdraw();
    public function transfer();
}

class Icbc implements Bank
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

class Ccb implements Bank
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

class Boc implements Bank
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
