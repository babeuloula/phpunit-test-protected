<?php

declare(strict_types=1);

namespace BaBeuloula\Test;

use BaBeuloula\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
	public function testGetFoo()
	{
	    $foo = new class ("test") extends Foo
        {
            public function getFoo(): string
            {
                return parent::getFoo();
            }
        };

	    static::assertSame("test", $foo->getFoo());
	}
}
