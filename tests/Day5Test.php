<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020\Test;

use AOC2020\Day5;
use PHPUnit\Framework\TestCase;

/**
 * Class Day5Test
 * @package AOC2020
 */
class Day5Test extends TestCase
{
	/**
	 * @var Day5
	 */
	protected Day5 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day5();
	}

	/**
	 * @param string $input
	 * @param int $expected
	 * @dataProvider firstDataProvider
	 */
	public function testSolveFirst(string $input, int $expected): void
	{
		$this->assertSame($expected, $this->day->solveFirst($input));
	}

	/**
	 * @return array[]
	 */
	public function firstDataProvider(): array
	{
		return [
			['FBFBBFFRLR', 357],
			['BFFFBBFRRR', 567],
			['FFFBBBFRRR', 119],
			['BBFFBBFRLL', 820],
		];
	}
}
