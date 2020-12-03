<?php

namespace AOC2020;

/**
 * Class Day2
 * @package AOC2020
 */
class Day2 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		$validPasswords = 0;
		foreach (explode("\n", trim($input)) as $line) {
			[$r, $c, $p] = explode(' ', $line);
			$character = mb_substr($c, 0, 1);
			$minMax = explode('-', $r);
			$range = range($minMax[0], $minMax[1]);
			$freq = substr_count($p, $character);
			if (in_array($freq, $range, true)) {
				$validPasswords++;
			}
		}

		return $validPasswords;
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		$validPasswords = 0;
		foreach (explode("\n", trim($input)) as $line) {
			[$r, $c, $p] = explode(' ', $line);
			$character = mb_substr($c, 0, 1);
			$positions = array_map('intval', explode('-', $r));
			$lastPos = 0;
			$result = [];
			while (($lastPos = strpos($p, $character, $lastPos)) !== false) {
				$result[] = $lastPos + 1;
				$lastPos++;
			}
			if (count($result) > 0 && count(array_intersect($positions, $result)) === 1) {
				$validPasswords++;
			}
		}

		return $validPasswords;
	}
}
