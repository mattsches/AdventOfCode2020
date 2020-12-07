<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020\Test;

use AOC2020\Day6;
use PHPUnit\Framework\TestCase;

/**
 * Class Day6Test
 * @package AOC2020
 */
class Day6Test extends TestCase
{
	/**
	 * @var Day6
	 */
	protected Day6 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day6();
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveFirst(string $input): void
	{
		$this->assertSame(11, $this->day->solveFirst($input));
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveSecond(string $input): void
	{
		$this->assertSame(6, $this->day->solveSecond($input));
	}

	/**
	 * @return array[]
	 */
	public function dataProvider(): array
	{
		$input = <<<INP
abc

a
b
c

ab
ac

a
a
a
a

b
INP;

		return [
			[$input],
		];
	}
}
