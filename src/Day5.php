<?php

namespace AOC2020;

/**
 * Class Day5
 * @package AOC2020
 */
class Day5 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		return max($this->getSeatIds($input));
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		$seatIds = $this->getSeatIds($input);
		sort($seatIds);
		$mySeatId = array_diff(range($seatIds[0], max($seatIds)), $seatIds);

		return array_shift($mySeatId);
	}

	/**
	 * @param string $input
	 * @return array
	 */
	private function getSeatIds(string $input): array
	{
		$seatIds = [];
		foreach (explode("\n", trim($input)) as $seat) {
			$rows = range(0, 127);
			$columns = range(0, 7);
			$seatChars = str_split($seat);
			for ($i = 0; $i < 7; $i++) {
				$partitions = array_chunk($rows, count($rows) / 2);
				$rows = match ($seatChars[$i]) {
					'F' => $partitions[0],
					'B' => $partitions[1],
				};
			}
			for ($i = 7; $i <= 9; $i++) {
				$partitions = array_chunk($columns, count($columns) / 2);
				$columns = match ($seatChars[$i]) {
					'L' => $partitions[0],
					'R' => $partitions[1],
				};
			}
			$seatIds[] = array_shift($rows) * 8 + array_shift($columns);
		}

		return $seatIds;
	}
}
