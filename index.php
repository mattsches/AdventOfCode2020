<?php

use AOC2020\DayInterface;

require_once 'vendor/autoload.php';
if ($argc !== 2 || (!in_array((int)$argv[1], range(1, 25), true) && $argv[1] !== 'all')) {
	die('Please pass a day, e.g. `php index.php 12`' . PHP_EOL);
}
if ($argv[1] === 'all') {
	die('Not implemented yet!' . PHP_EOL);
}
$d = (int)$argv[1];
$input = file_get_contents(__DIR__ . '/inputs/Day' . $d . '.txt');
$classname = 'AOC2020\Day' . $d;
/** @var DayInterface $day */
$day = new $classname();
$start = microtime(true);
echo $d . '.1 => ' . $day->solveFirst($input) . PHP_EOL;
echo microtime(true) - $start . PHP_EOL;
$start = microtime(true);
echo $d . '.2 => ' . $day->solveSecond($input) . PHP_EOL;
echo microtime(true) - $start . PHP_EOL;
