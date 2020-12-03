<?php

namespace AOC2020;

/**
 * Class Day1
 * @package AOC2020
 */
class Day1 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		$entries = explode("\n", trim($input));
		$result = [];

		array_walk(
			$entries,
			static function ($item, $key, $entries) use (&$result) {
				foreach ($entries as $entry) {
					if ($item + $entry === 2020) {
						$result = [$item, $entry];
					}
				}
			},
			$entries
		);

		return array_product($result);
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		$entries = explode("\n", trim($input));
		$result = [];
		foreach ($entries as $entry1) {
			foreach ($entries as $entry2) {
				foreach ($entries as $entry3) {
					if ($entry1 + $entry2 + $entry3 === 2020) {
						$result = [$entry1, $entry2, $entry3];
						break 3;
					}
				}
			}
		}

		return array_product($result);
	}
}
