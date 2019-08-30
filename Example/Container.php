<?php

class Container
{
    public $mapping = [];

    public function bind($abstract, $detail = null)
    {
        if (is_null($detail)) {
            $detail = $abstract;
        }

        $this->mapping[$abstract] = $detail;
    }

    public function make($abstract, array $parameters = [])
    {
        if (!isset($this->mapping[$abstract])) {
            $this->bind($abstract);
        }

        $detail = $this->mapping[$abstract];
        while ($detail != $abstract && is_string($detail)
            && isset($this->mapping[$detail])
        ) {
            $detail = $this->mapping[$detail];
        }

        return $this->resolve($detail, $parameters);
    }

    public function run($class, $method, array $parameters = [])
    {
        $instance = $this->make($class);

        $reflectMethod = new ReflectionMethod($instance, $method);
        $dependencies = $this->resolveDependencies($reflectMethod, $parameters);

        return $instance->$method(...$dependencies);
    }

    protected function resolve($detail, array $parameters)
    {
        if ($detail instanceof Closure) {
            return $detail($this);
        }

        $reflector = new ReflectionClass($detail);
        $constructor = $reflector->getConstructor();

        $dependencies = $constructor
            ? $this->resolveDependencies($constructor, $parameters)
            : [];

        return $reflector->newInstanceArgs($dependencies);
    }

    protected function resolveDependencies(ReflectionMethod $method, array $parameters)
    {
        $dependencies = [];

        foreach ($method->getParameters() as $parameter) {
            if ($class = $parameter->getClass()) {
                $dependencies[] = $this->make($class->name);
            } elseif (!empty($parameters)) {
                $dependencies[] = array_shift($parameters);
            } elseif ($parameter->isDefaultValueAvailable()) {
                $dependencies[] = $parameter->getDefaultValue();
            } else {
                throw new Exception("Unresolvable dependency parameter {$parameter->name}");
            }
        }

        return $dependencies;
    }
}