<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait ObjectAccess
{
    public function __set(string $property, mixed $value): void
    {
        if (property_exists($this, $property)) {
            $this->{$property} = $value;
        }
    }

    public function __isset(string $property): bool
    {
        return isset($this->{$property});
    }

    public function __get(string $property): mixed
    {
        return !empty($this->{$property}) ? $this->{$property} : null;
    }

    public function __unset(string $property): void
    {
        unset($this->{$property});
    }
}
