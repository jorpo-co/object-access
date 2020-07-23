<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use Throwable;

trait ArrayAccessTrait
{
    /**
     * @param mixed $value
     */
    public function offsetSet($property, $value): void
    {
        if (property_exists($this, $property)) {
            $this->{$property} = $value;
        }
    }

    public function offsetExists($property): bool
    {
        return isset($this->{$property});
    }

    /**
     * @return mixed
     */
    public function offsetGet($property)
    {
        try {
            return @$this->{$property} ?? null;
        } catch (Throwable $e) {
            return null;
        }
    }

    public function offsetUnset($property): void
    {
        unset($this->{$property});
    }
}
