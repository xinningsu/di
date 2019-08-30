<?php

class Atm
{
    const BANK_ICBC = 1;
    const BANK_CCB  = 2;

    protected $bank;

    public function __construct($bankType)
    {
        if ($bankType === self::BANK_ICBC) {
            $this->bank = new Icbc();
        } elseif ($bankType === self::BANK_CCB) {
            $this->bank = new Ccb();
        } else {
            throw new Exception('Unsupported bank');
        }
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

class Ccb
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
