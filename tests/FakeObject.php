<?php
namespace Aura\Sql;

class FakeObject
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return (string) $this->foo;
    }
}
