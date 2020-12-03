<?php

namespace AOC2020;

/**
 * Class Day3
 * @package AOC2020
 */
class Day3 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		return $this->followSlope($input, 3, 1);
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		foreach ([[1, 1], [3, 1], [5, 1], [7, 1], [1, 2],] as $slope) {
			$trees[] = $this->followSlope($input, $slope[0], $slope[1]);
		}

		return array_product($trees);
	}

	/**
	 * @param string $input
	 * @param int $right
	 * @param int $down
	 * @return int
	 */
	private function followSlope(string $input, int $right, int $down): int
	{
		$x = 1;
		$trees = 0;
		foreach (explode("\n", trim($input)) as $i => $line) {
			if ($i % $down > 0) {
				continue;
			}
			if (strlen($line) < $x) {
				$line = str_pad($line, $x, $line);
			}
			$trees += $line[$x - 1] === '#' ? 1 : 0;
			$x += $right;
		}

		return $trees;
	}
}
