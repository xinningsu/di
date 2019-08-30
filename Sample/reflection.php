<?php

class User
{
    public function name()
    {
        echo 'Thomas Su', "\n";
    }

    protected function email()
    {
        echo 'thomas.su@juwai.com', "\n";
    }

    private function age()
    {
        echo 18, "\n";
    }
}

$user = new User();
$reflector = new ReflectionClass($user);

$method = $reflector->getMethod('email');
$method->setAccessible(true);
$method->invoke($user);

$method = $reflector->getMethod('age');
$method->getClosure($user)->call($user);
