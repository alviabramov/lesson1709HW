<?php


class myClass
{
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    public function __construct()
    {

    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __toString()
    {
        return 'funcToString';
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }
}

$obj = new myClass();
echo "value-> $obj";