<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020;

use PHPUnit\Framework\TestCase;

class Day3Test extends TestCase
{
	/**
	 * @var Day3
	 */
	protected Day3 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day3();
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveFirst(string $input): void
	{
		$this->assertSame(7, $this->day->solveFirst($input));
	}

	/**
	 * @param string $input
	 * @dataProvider dataProvider
	 */
	public function testSolveSecond(string $input): void
	{
		$this->assertSame(336, $this->day->solveSecond($input));
	}

	/**
	 * @return array[]
	 */
	public function dataProvider(): array
	{
		$input = <<<INP
..##.......
#...#...#..
.#....#..#.
..#.#...#.#
.#...##..#.
..#.##.....
.#.#.#....#
.#........#
#.##...#...
#...##....#
.#..#...#.#
INP;

		return [
			[$input, 2],
		];
	}
}
