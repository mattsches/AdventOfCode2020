<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020\Test;

use AOC2020\Day3;
use PHPUnit\Framework\TestCase;

/**
 * Class Day3Test
 * @package AOC2020\Test
 */
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
