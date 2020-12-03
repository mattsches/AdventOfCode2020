<?php

namespace AOC2020;

/**
 * Interface DayInterface
 * @package AOC2020
 */
interface DayInterface
{
	/**
	 * @param string $input
	 * @return mixed
	 */
	public function solveFirst(string $input): mixed;

	/**
	 * @param string $input
	 * @return mixed
	 */
	public function solveSecond(string $input): mixed;
}
