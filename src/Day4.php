<?php

namespace AOC2020;

/**
 * Class Day4
 * @package AOC2020
 */
class Day4 implements DayInterface
{
	/**
	 * @param string $input
	 * @return int
	 */
	public function solveFirst(string $input): int
	{
		$valid = 0;
		foreach ($this->getPassports($input) as $passport) {
			if (count($passport) === 8 ||
				(count($passport) === 7 && !array_key_exists('cid', $passport))
			) {
				$valid++;
			}
		}

		return $valid;
	}

	/**
	 * @param string $input
	 * @return int
	 */
	public function solveSecond(string $input): int
	{
		$valid = 0;
		foreach ($this->getPassports($input) as $passport) {
			if (count($passport) === 8 ||
				(count($passport) === 7 && !array_key_exists('cid', $passport))
			) {
				$v = 0;
				foreach ($passport as $field => $value) {
					// having fun with match expressions ;-)
					$v += (int)match ($field) {
						'byr' => $value >= 1920 && $value <= 2002,
						'iyr' => $value >= 2010 && $value <= 2020,
						'eyr' => $value >= 2020 && $value <= 2030,
						'hcl' => str_starts_with($value, '#') && ctype_xdigit(substr($value, 1)),
						'ecl' => in_array($value, ['amb', 'blu', 'brn', 'gry', 'grn', 'hzl', 'oth'], true),
						'pid' => is_numeric($value) && strlen($value) === 9,
						'hgt' => (str_contains($value, 'cm') && in_array(
									(int)substr($value, 0, -2),
									range(150, 193),
									true
								)) || (str_contains($value, 'in') && in_array(
									(int)substr($value, 0, -2),
									range(59, 76),
									true
								)),
						default => false
					};
				}
				if ($v === 7) {
					$valid++;
				}
			}
		}

		return $valid;
	}

	/**
	 * @param string $input
	 * @return array
	 */
	private function getPassports(string $input): array
	{
		$passports = [];
		foreach (explode("\n\n", $input) as $chunk) {
			$fieldsValues = preg_split('/[\s\n]/', $chunk);
			$p = [];
			foreach ($fieldsValues as $fieldsValue) {
				if (empty($fieldsValue)) {
					continue;
				}
				$r = explode(':', $fieldsValue);
				$p[$r[0]] = $r[1];
			}
			$passports[] = $p;
		}

		return $passports;
	}
}
