<?php

namespace AOC2020;

/**
 * Class Day6
 * @package AOC2020
 */
class Day6 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		$count = 0;
		foreach (explode("\n\n", trim($input)) as $group) {
			$answers = str_replace("\n", '', $group);
			$count += strlen(count_chars($answers, 3));
		}

		return $count;
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		$everyoneAnsweredYes = [];
		foreach (explode("\n\n", trim($input)) as $group) {
			$answers = [];
			foreach (explode("\n", $group) as $person) {
				$answers[] = str_split($person);
			}
			$everyoneAnsweredYes[] = count(array_intersect(...$answers));
		}

		return array_sum($everyoneAnsweredYes);
	}
}
