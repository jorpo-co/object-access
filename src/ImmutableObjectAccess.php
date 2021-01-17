<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait ImmutableObjectAccess
{
    use ObjectAccess {
        __set as private nset;
        __unset as private nunset;
    }

    public function __set($property, $value)
    {
        return;
    }

    public function __unset($property)
    {
        return;
    }
}
