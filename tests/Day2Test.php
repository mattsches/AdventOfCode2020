<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020\Test;

use AOC2020\Day2;
use PHPUnit\Framework\TestCase;

/**
 * Class Day2Test
 * @package AOC2020\Test
 */
class Day2Test extends TestCase
{
	/**
	 * @var Day2
	 */
	protected Day2 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day2();
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveFirst(string $input): void
	{
		$this->assertSame(2, $this->day->solveFirst($input));
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveSecond(string $input): void
	{
		$this->assertSame(1, $this->day->solveSecond($input));
	}

	/**
	 * @return array[]
	 */
	public function dataProvider(): array
	{
		$input = <<<INP
1-3 a: abcde
1-3 b: cdefg
2-9 c: ccccccccc
INP;

		return [
			[$input, 2],
		];
	}
}
