<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use ArrayAccess;

class ImmutableArrayAccessFake implements ArrayAccess
{
    use ImmutableArrayAccessTrait;

    private string $mushroom;
    private string $badger;

    public function __construct(string $mushroom, string $badger)
    {
        $this->mushroom = $mushroom;
        $this->badger = $badger;
    }
}
