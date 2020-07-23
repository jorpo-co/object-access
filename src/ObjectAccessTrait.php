<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use Throwable;

trait ObjectAccessTrait
{
    /**
     * @param mixed $value
     */
    public function __set(string $property, $value): void
    {
        if (property_exists($this, $property)) {
            $this->{$property} = $value;
        }
    }

    public function __isset(string $property): bool
    {
        return isset($this->{$property});
    }

    /**
     * @return mixed
     */
    public function __get(string $property)
    {
        try {
            return @$this->{$property} ?? null;
        } catch (Throwable $e) {
            return null;
        }
    }

    public function __unset(string $property): void
    {
        unset($this->{$property});
    }
}
