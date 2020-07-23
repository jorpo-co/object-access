<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

class ImmutableObjectAccessFake
{
    use ImmutableObjectAccessTrait;

    private string $mushroom;
    private string $badger;

    public function __construct(string $mushroom, string $badger)
    {
        $this->mushroom = $mushroom;
        $this->badger = $badger;
    }
}
