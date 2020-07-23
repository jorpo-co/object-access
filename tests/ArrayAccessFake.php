<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use ArrayAccess;

class ArrayAccessFake implements ArrayAccess
{
    use ArrayAccessTrait;

    private string $mushroom;
    private string $badger;
}
