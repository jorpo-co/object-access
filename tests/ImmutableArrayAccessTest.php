<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use PHPUnit\Framework\TestCase;

class ImmutableArrayAccessTest extends TestCase
{
    private ImmutableArrayAccessFake $subject;

    public function setUp(): void
    {
        $this->subject = new ImmutableArrayAccessFake('badger', 'mushroom');
    }

    public function testThatPropertyCannotBeChanged()
    {
        $this->subject['mushroom'] = 'snaaake!';
        $this->assertSame('badger', $this->subject['mushroom']);

        unset($this->subject['mushroom']);
        $this->assertSame('badger', $this->subject['mushroom']);
    }
}
