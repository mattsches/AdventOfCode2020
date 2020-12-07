<?php

namespace AOC2020;

/**
 * Class Day7
 * @package AOC2020
 */
class Day7 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		return count($this->searchBagsRecursive($this->parseBagRules($input), 'shiny gold'));
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		return $this->countBagsRecursive($this->parseBagRules($input), 'shiny gold') - 1;
	}

	/**
	 * @param string $input
	 * @return array
	 */
	private function parseBagRules(string $input): array
	{
		$bags = [];
		foreach (explode("\n", trim($input)) as $rule) {
			preg_match('/^([\w\s]+)( bags contain) ([^.]*)/', $rule, $matches);
			[, $color, , $contents] = $matches;
			$otherBags = [];
			foreach (explode(', ', $contents) as $content) {
				if ($content === 'no other bags') {
					break;
				}
				preg_match('/^([\d]+) ([\w\s]+) ([bags]+)/', $content, $bag);
				$otherBags[$bag[2]] = (int)$bag[1];
			}
			$bags[$color] = $otherBags;
		}

		return $bags;
	}

	/**
	 * @param array $bags
	 * @param string $color
	 * @return array
	 */
	private function searchBagsRecursive(array $bags, string $color): array
	{
		$colors = [];
		foreach ($bags as $bagColor => $content) {
			if (array_key_exists($color, $content)) {
				$colors[] = [$bagColor];
				$colors[] = $this->searchBagsRecursive($bags, $bagColor);
			}
		}

		return array_unique(array_merge(...$colors));
	}

	/**
	 * @param array $bags
	 * @param string $color
	 * @return int
	 */
	private function countBagsRecursive(array $bags, string $color): int
	{
		$count = 0;
		foreach ($bags[$color] as $bagColor => $content) {
			$count += $content * $this->countBagsRecursive($bags, $bagColor);
		}

		return $count + 1;
	}
}
