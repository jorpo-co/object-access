<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait ImmutableArrayAccessTrait
{
    use ArrayAccessTrait {
        offsetSet as private noffsetSet;
        offsetUnset as private noffsetUnset;
    }

    public function offsetSet($property, $value)
    {
        return;
    }

    public function offsetUnset($property)
    {
        return;
    }
}
