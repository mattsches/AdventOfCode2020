<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020;

use PHPUnit\Framework\TestCase;

class Day1Test extends TestCase
{
	/**
	 * @var Day1
	 */
	protected Day1 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day1();
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
		$input = <<<INP
1721
979
366
299
675
1456
INP;

		return [
			[$input, 514579],
		];
	}

	/**
	 * @param string $input
	 * @param int $expected
	 * @dataProvider secondDataProvider
	 */
	public function testSolveSecond(string $input, int $expected): void
	{
		$this->assertSame($expected, $this->day->solveSecond($input));
	}
	/**
	 * @return array[]
	 */
	public function secondDataProvider(): array
	{
		$input = <<<INP
1721
979
366
299
675
1456
INP;

		return [
			[$input, 241861950],
		];
	}
}
