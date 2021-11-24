<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait SetOnceObjectProperties
{
    use ObjectAccess {
        __set as private nset;
    }

    public function __set(string $property, mixed $value): void
    {
        if (property_exists($this, $property) && empty($this->{$property})) {
            $this->{$property} = $value;
        }
    }
}
