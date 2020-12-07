<?php
/** @noinspection StaticInvocationViaThisInspection */

namespace AOC2020\Test;

use AOC2020\Day7;
use PHPUnit\Framework\TestCase;

/**
 * Class Day7Test
 * @package AOC2020
 */
class Day7Test extends TestCase
{
	/**
	 * @var Day7
	 */
	protected Day7 $day;

	/**
	 * Set up
	 */
	protected function setUp(): void
	{
		$this->day = new Day7();
	}

	/**
	 * @param string $input
	 * @dataProvider firstDataProvider
	 */
	public function testSolveFirst(string $input): void
	{
		$this->assertSame(4, $this->day->solveFirst($input));
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
	public function firstDataProvider(): array
	{
		$input = <<<INP
light red bags contain 1 bright white bag, 2 muted yellow bags.
dark orange bags contain 3 bright white bags, 4 muted yellow bags.
bright white bags contain 1 shiny gold bag.
muted yellow bags contain 2 shiny gold bags, 9 faded blue bags.
shiny gold bags contain 1 dark olive bag, 2 vibrant plum bags.
dark olive bags contain 3 faded blue bags, 4 dotted black bags.
vibrant plum bags contain 5 faded blue bags, 6 dotted black bags.
faded blue bags contain no other bags.
dotted black bags contain no other bags.
INP;

		return [
			[$input],
		];
	}

	/**
	 * @return array[]
	 */
	public function secondDataProvider(): array
	{
		$input1 = <<<INP
light red bags contain 1 bright white bag, 2 muted yellow bags.
dark orange bags contain 3 bright white bags, 4 muted yellow bags.
bright white bags contain 1 shiny gold bag.
muted yellow bags contain 2 shiny gold bags, 9 faded blue bags.
shiny gold bags contain 1 dark olive bag, 2 vibrant plum bags.
dark olive bags contain 3 faded blue bags, 4 dotted black bags.
vibrant plum bags contain 5 faded blue bags, 6 dotted black bags.
faded blue bags contain no other bags.
dotted black bags contain no other bags.
INP;
		$input2 = <<<INP
shiny gold bags contain 2 dark red bags.
dark red bags contain 2 dark orange bags.
dark orange bags contain 2 dark yellow bags.
dark yellow bags contain 2 dark green bags.
dark green bags contain 2 dark blue bags.
dark blue bags contain 2 dark violet bags.
dark violet bags contain no other bags.
INP;

		return [
			[$input1, 32],
			[$input2, 126],
		];
	}
}
