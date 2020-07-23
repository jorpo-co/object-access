<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

use PHPUnit\Framework\TestCase;

class ArrayAccessTest extends TestCase
{
    private ArrayAccessFake $subject;

    public function setUp(): void
    {
        $this->subject = new ArrayAccessFake();
    }

    public function testThatPropertyCanBeSet()
    {
        $this->subject['mushroom'] = 'badger';
        $this->assertSame('badger', $this->subject['mushroom']);
    }

    public function testThatUndefinedPropertyCannotBeSet()
    {
        $this->subject['mushrooms'] = 'badger';
        $this->assertNull($this->subject['mushrooms']);
    }

    public function testThatPropertyIsSet()
    {
        $this->subject['mushroom'] = 'badger';
        $this->assertTrue(isset($this->subject['mushroom']));
    }

    public function testThatNonExistingPropertyPropertyIsNotSet()
    {
        $this->assertFalse(isset($this->subject['mushroom']));
    }

    public function testThatPropertyCanBeAccessed()
    {
        $this->subject['mushroom'] = 'badger';
        $this->assertEquals('badger', $this->subject['mushroom']);
    }

    public function testThatNonExistentPropertyIsNull()
    {
        $this->assertNull($this->subject['mushroom']);
    }

    public function testThatPropertyCanBeRemoved()
    {
        $this->subject['mushroom'] = 'badger';
        unset($this->subject['mushroom']);
        $this->assertNull($this->subject['mushroom']);
    }
}
