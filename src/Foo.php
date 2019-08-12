<?php

declare(strict_types=1);

namespace BaBeuloula;

class Foo
{
	/** @var string **/
	protected $foo = 'bar';

	public function __construct(string $foo)
	{
		$this->foo = $foo;
	}

	protected function getFoo(): string
	{
		return $this->foo;
	}
}
