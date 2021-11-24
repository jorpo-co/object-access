<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait SetOnceCallableObjectProperties
{
    public function __call(string $property, mixed $value = null): mixed
    {
        if (!property_exists($this, $property) || null === $value) {
            return;
        }

        if (property_exists($this, $property) && empty($this->{$property})) {
            $this->{$property} = $value;
        }

        return $this->{$property};
    }
}
