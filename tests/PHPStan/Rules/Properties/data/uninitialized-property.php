<?php // lint >= 7.4

namespace UninitializedProperty;

class Foo
{

	private int $foo;

	private int $bar;

	private int $baz;

	public function __construct()
	{
		$this->foo = 1;
	}

	public function setBaz()
	{
		$this->baz = 1;
	}

}

class Bar
{

	private int $foo;

	public function __construct()
	{
		$this->foo += 1;
		$this->foo = 2;
	}

}

class Baz
{

	private int $foo;

	public function __construct()
	{
		$this->foo = 2;
		$this->foo += 1;
	}

}

class Lorem
{

	private int $foo;

	private int $bar;

	private int $baz;

	private int $lorem;

	private function assign()
	{
		$this->bar = 2;
		$this->assignAgain();
	}

	public function __construct()
	{
		$this->foo = 1;
		$this->assign();
	}

	private function assignAgain()
	{
		$this->lorem = 4;
	}

	public function notCalled()
	{
		$this->baz = 3;
	}

}